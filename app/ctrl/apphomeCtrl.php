<?php

namespace app\ctrl;

use app\model\user\UserModel;

use app\model\tram\OrderModel;
use app\ormModel\Itemlog;
use app\ormModel\Itemlogp;
use app\ormModel\User;
use think\facade\Db;

class apphomeCtrl extends commonCtrl
{
	public static $webconfig;
	public static $myuserinfo;
	
	public function __construct()
	{
	    $this->INDEX_OR_ADMIN = "app/views/app_cn_v1";
		
		$this->assign('WsCtrlClass',self::$WsCtrlClass);
		
		self::$webconfig=self::webconfig();
		$this->assign('webconfig',self::$webconfig);
		//print_r(self::$webconfig);exit;
		
		$ActionUnloginArr = array("auto_task","");	//免登录Action数组
		
		if(in_array(strtolower(self::$WsAction), $ActionUnloginArr)){
			//免登录
		}else{
			//未登录跳登录页
			if(!UserModel::haslogin()){
				HeaderLocationCA("appuser","login");
			}
		}
		if(UserModel::haslogin()){
			$myuserinfo = self::DB()->query("SELECT id,username,name,money,money2,money3,proportion,coinaddress,authentication FROM `user` WHERE id='".$_SESSION['userinfo']['id']."' ")->fetchAll();
			self::$myuserinfo=$myuserinfo[0];
			$this->assign('myuserinfo',$myuserinfo[0]);
		}
	}
	
	public function auto_task()
	{
		$list = Itemlog::where([['status', '=', 0], ['stime', '<', time()]])->select();
		$mpcontent = '投资返利';
		foreach($list as $k => $v){
			//记录变更
			Itemlog::update(['status' => 1], ['id' => $v['id']]);
            //返还本息
			User::update(['money' => Db::raw('money+'.$v['smoney'])], ['id' => $v['uid']]);
			//余额记录
			OrderModel::insertMoneypath_proportion($v['uid'], $v['smoney'],"152", $mpcontent, $v['id'], $v['arate']);
		}

        $list2 = Itemlogp::where([['status', '=', 0], ['stime', '<', time()]])->select();
		$mpcontent2 = '推广返利';
		foreach($list2 as $k=>$v){
			//记录变更
            Itemlogp::update(['status' => 1], ['id' => $v['id']]);
			//用户加钱
            User::update(['money' => Db::raw('money+'.$v['smoney'])], ['id' => $v['uid']]);
			//余额记录
			OrderModel::insertMoneypath_proportion($v['uid'], $v['smoney'],"153", $v['lown'].'级'.$mpcontent, $v['item_no'], $v['jlbl']);
		}
	}
	
	/*
	 *首页
	 */
	public function index()
	{
        $list = self::DB()->query("SELECT * from `itemlist` where isty=0")->fetchAll();
        $this->assign('tradeorders', $list);

        $slides = self::DB()->query("SELECT * FROM `slide` where status=1 and type=1 order by id desc")->fetchAll();
        $this->assign('slides', $slides);

        $ty = self::DB()->query("SELECT * from `itemlist` where isty = 1 order by id limit 1")->fetchAll();
        $this->assign('ty', $ty[0]);

        $tynum = self::DB()->query("SELECT count(*) num from `itemlog` where uid='".$_SESSION['userinfo']['id']."' and isty=1")->fetchAll();
        $this->assign('tyswitch', ($tynum[0]['num']==0 && $ty) ? 1 : 0);

		$this->display();
	}

    /**
     * 项目详情
     */
    public function itemdetail()
    {
        $id = $_GET['id'];
        $item = self::DB()->query("SELECT * from `itemlist` where id ='".$id."'")->fetchAll();
        $time1 = date('m-d', strtotime("+3 days"));
        $time2 = date('Y-m-d', strtotime("+".$item[0]['day_num']." days"));
        $this->assign('time1',$time1);
        $this->assign('time2',$time2);
        $this->assign('item',$item[0]);
        $this->assign('id',$id);
        $this->display();
    }

    /**
     * 立即存入
     */
    public function itemstart()
    {
        $id = $_GET['id'];
        $item = self::DB()->query("SELECT * from `itemlist` where id ='".$id."'")->fetchAll();
		$uinfo = self::DB()->select("user",['money'],['id'=>$_SESSION['userinfo']['id']]);
		$day = date('Y.m.d',(time() + ($item[0]['day_num'] * 86400)));
        $this->assign('item',$item[0]);
		$this->assign('day',$day);
		$this->assign('uinfo',$uinfo[0]);
        $this->display();
    }
	
	public function itemstartdo()
    {
		$money = $_POST['money'];
		$id = $_POST['id'];
		if (!is_numeric($money) || $money < 100 || $money > 1000000) {
            error(-1001 , "存入金额有误");
        }
		$uinfo = self::DB()->select("user",['money','id','superioruid'],['id'=>$_SESSION['userinfo']['id']]);
		$uinfo = $uinfo[0];
		if($money > $uinfo['money']){
			error(-1002 , "余额不足");
		}
		$item = self::DB()->select("itemlist","*",['id[=]'=>$id]);
		$item = $item[0];
		$insert_id = self::DB()->insert("itemlog", [
			"uid" => $uinfo['id'],
			"money" => $money,
			"smoney" => $money * (1 + $item['arate']/100/365 * $item['day_num']),
			"item_id" => $item['id'],
			"arate" => $item['arate'],
			"day_num" => $item['day_num'],
			"time" => time(),
			"stime" => time() + ($item['day_num'] * 86400),
			"status" => 0
		]);
		if($insert_id){
			if($uinfo['superioruid'] != 0){
				$yjjl = self::$webconfig['yjjl']['val']/100;
				self::DB()->insert("itemlogp", [
					"item_no" => $insert_id,
					"uid" => $uinfo['superioruid'],
					"fuid" => $uinfo['id'],
					"money" => $money,
					"smoney" => $money * (1 + $item['arate']/100/365) * $yjjl,
					"item_id" => $item['id'],
					"lown" => 1,
					"jlbl" => $yjjl,
					"time" => time(),
					"stime" => time() + ($item['day_num'] * 86400),
					"status" => 0
				]);
                $uinfo2 = self::DB()->select("user",['money','id','superioruid'],['id'=>$uinfo['superioruid']]);
                $uinfo2 = $uinfo2[0];
                if($uinfo2['superioruid'] != 0){
                    $ejjl = self::$webconfig['ejjl']['val']/100;
                    self::DB()->insert("itemlogp", [
                        "item_no" => $insert_id,
                        "uid" => $uinfo2['superioruid'],
                        "fuid" => $uinfo2['id'],
                        "money" => $money,
                        "smoney" => $money * (1 + $item['arate']/100/365) * $ejjl,
                        "item_id" => $item['id'],
                        "lown" => 2,
                        "jlbl" => $ejjl,
                        "time" => time(),
                        "stime" => time() + ($item['day_num'] * 86400),
                        "status" => 0
                    ]);
                }
			}
			self::DB()->update("user",[
				"money" => $uinfo['money']-$money
			], [
				"id[=]" => $uinfo['id']
			]);
			$mpcontent = '项目投资';
			OrderModel::insertMoneypath($uinfo['id'],$money,"151",$mpcontent,$id);
			$_SESSION['itemlog_id'] = $insert_id;
			success(1000 , "存入成功");
		} else {
			error(-1008 , "存入失败");
		}
    }

    public function itemsuccess()
    {
        $order = self::DB()->query("SELECT * from `itemlog` where id = '".$_SESSION['itemlog_id']."'")->fetchAll();
        $this->assign('order', $order[0]);
        $this->display();
    }
		
	/*
	 *接单中订单
	 */
	public function tradeorderon()
	{
		
		//$tradeorders = self::DB()->query("SELECT * from `tradeorder` where state = 1 and uid = '".$_SESSION['userinfo']['id']."'")->fetchAll();
		
	   //新增
		$tradeorders = self::DB()->query("SELECT * from `itemlog` where uid = '".$_SESSION['userinfo']['id']."' order by id desc")->fetchAll();	

		$m152 = 0;
		foreach($tradeorders as $k=>$v){
			
			$tradeorders[$k]['timesv'] = round( (time()-$v['time']) / ($v['stime']-$v['time']) * 100 ,2);
			if($tradeorders[$k]['timesv']>100){
				$tradeorders[$k]['timesv'] = 100;
			}
			
			
			
			$tradeorders[$k]['time1'] = date('Y-m-d',$tradeorders[$k]['time']);
			$tradeorders[$k]['time2'] = date('Y-m-d',$tradeorders[$k]['time']+3600*24);
			
			$tradeorders[$k]['timev1'] = date('Y-m-d H:i:s',$tradeorders[$k]['time']);
			$tradeorders[$k]['timev2'] = date('Y-m-d H:i:s',$tradeorders[$k]['time']+3600*24);
			
			$tradeorders[$k]['stime1'] = date('Y-m-d',$tradeorders[$k]['stime']);
			
			
			
			
			$tradeorders[$k]['time'] = date('Y-m-d',$v['time']);
			$tradeorders[$k]['stime'] = date('Y-m-d',$v['stime']);
			$info =  self::DB()->query("SELECT item_name from `itemlist` where id = '".$v['item_id']."'")->fetchAll();	
			$tradeorders[$k]['item_name'] = $info[0]['item_name'];
			if($v['status'] == 0){
				$tradeorders[$k]['status'] = '未返利';
				
				$tradeorders[$k]['statusd4'] = 25;
				if(date('Y-m-d',time()) == $tradeorders[$k]['time1']){
					$tradeorders[$k]['statusd4'] = 25;
				}
				if(date('Y-m-d',time()) == $tradeorders[$k]['time2']){
					$tradeorders[$k]['statusd4'] = 50;
				}
				if(date('Y-m-d',time()) > $tradeorders[$k]['time2']){
					$tradeorders[$k]['statusd4'] = 75;
				}
			} else {
				$tradeorders[$k]['status'] = '已返利';
				
				$tradeorders[$k]['statusd4'] = 100;
			}
			
			$tradeorders[$k]['timesv'] = $tradeorders[$k]['statusd4'];
			
            $item = self::DB()->select("itemlist","*",['id[=]'=>$v['item_id']]);
            $item = $item[0];
            $day_num =  ceil((time() - $v['time'])/3600/24)-1;

			if ($v['isty']){
                $moneyp = $v['smoney'] * $item['arate']/100/$item['day_num'] * $day_num;
                $tradeorders[$k]['sy'] = number_format($moneyp,2,'.','');
            }else{
                $moneyp = $v['money'] * $item['arate']/100/$item['day_num'] * $day_num;
                $tradeorders[$k]['sy'] = number_format($moneyp,2,'.','');
            }
			$m152 += $moneyp;
		}
		
		array_multisort(array_column($tradeorders, 'timesv'), SORT_ASC, $tradeorders);
		
		$this->assign('tradeorders',$tradeorders);
		
		
		$jtimev = date("Y-m-d 00:00:00");
		$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
		$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
		
		
		$moneya151 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 151 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$moneya151 = $moneya151[0]['summoney']?: 0;
		
		$this->assign('moneya151',abs($moneya151));
		
		
		$zmoneya151 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 151 and time > '".$ztimev."' and time < '".$jtimev."' and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$zmoneya151 = $zmoneya151[0]['summoney']?: 0;
		
		$this->assign('zmoneya151',abs($zmoneya151));
		
		
		$moneya152 = self::DB()->query("SELECT SUM(money) summoney FROM moneypath where mtype = 152 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
		$moneya152 = $moneya152[0]['summoney']?: 0;
		
		//$this->assign('moneya152',$moneya152);
		$this->assign('moneya152',number_format($m152 + $moneya152,2,'.',''));

		
		$this->display();
	}

	public function tradeorderon_detail()
    {
        $id = intval($_GET['id']);
        //$tradeorder = self::DB()->query("SELECT * from `tradeorder` where state = 1 and id = '".$id."'")->fetchAll();
		$tradeorder = self::DB()->query("SELECT * from `itemlog` where id = '".$id."' and uid = '".$_SESSION['userinfo']['id']."' ")->fetchAll();
		//print_r($tradeorder);exit;
		$tradeorder[0]['time1'] = date('Y-m-d',$tradeorder[0]['time']);
		$tradeorder[0]['time2'] = date('Y-m-d',$tradeorder[0]['time']+3600*24);
		
		$tradeorder[0]['timev1'] = date('Y-m-d H:i:s',$tradeorder[0]['time']);
		$tradeorder[0]['timev2'] = date('Y-m-d H:i:s',$tradeorder[0]['time']+3600*24);
		
		
		$tradeorder[0]['stime1'] = date('Y-m-d',$tradeorder[0]['stime']);
		$item_namei =  self::DB()->query("SELECT item_name from `itemlist` where id = '".$tradeorder[0]['item_id']."'")->fetchAll();	
		$tradeorder[0]['item_name'] = $item_namei[0]['item_name'];
		if($tradeorder[0]['status'] == 0){
			$tradeorder[0]['status'] = '确认中';
			if(date('Y-m-d',time()) == $tradeorder[0]['time1']){
				$tradeorder[0]['status'] = '确认中';
			}
			if(date('Y-m-d',time()) == $tradeorder[0]['time2']){
				$tradeorder[0]['status'] = '购买成功';
			}
			if(date('Y-m-d',time()) > $tradeorder[0]['time2']){
				$tradeorder[0]['status'] = '产生收益中';
			}
		} else {
			$tradeorder[0]['status'] = '已完成';
		}
        $item = self::DB()->select("itemlist","*",['id[=]'=>$tradeorder[0]['item_id']]);
        $item = $item[0];
        $day_num =  ceil((time() - $tradeorder[0]['time'])/3600/24)-1;

        if ($tradeorder[0]['isty']){
            $moneyp = $tradeorder[0]['smoney'] * $item['arate']/100/$item['day_num'] * $day_num;
            $tradeorder[0]['sy'] = number_format($moneyp,2,'.','');
        }else{
            $moneyp = $tradeorder[0]['money'] * $item['arate']/100/$item['day_num'] * $day_num;
            $tradeorder[0]['sy'] = number_format($moneyp,2,'.','');
        }
		
        $this->assign('tradeorder',$tradeorder[0]);
        $this->display();
    }
	
	//项目列表
	public function itemlist()
	{
		$list = self::DB()->query("SELECT * from `itemlist`")->fetchAll();	
		
		$this->assign('tradeorders',$list);
		
		$this->display();
	}
	
	//项目列表
	public function itemlogp()
	{
		$list = self::DB()->query("SELECT * from `itemlogp` WHERE uid in(SELECT id from user WHERE superioruid = '".$_SESSION['userinfo']['id']."') order by id desc")->fetchAll();	
		
		foreach($list as $k=>$v){
			
			$list[$k]['time'] = date('Y-m-d',$v['time']);
			$list[$k]['stime'] = date('Y-m-d',$v['stime']);
			if($v['status'] == 0){
				$list[$k]['status'] = '未返利';
			} else {
				$list[$k]['status'] = '已返利';
			}
			/* $info =  self::DB()->query("SELECT item_name from `itemlist` where id = '".$v['item_id']."'")->fetchAll();	
			$tradeorders[$k]['item_name'] = $info[0]['item_name']; */
		}
		
		$this->assign('tradeorders',$list);
		
		$this->display();
	}
	
	
	public function gettraorderonallData()
	{		
		$tradeorders = self::DB()->query("SELECT * from `tradeorder` where state = 1 and uid = '".$_SESSION['userinfo']['id']."'")->fetchAll();	
		
		
		foreach($tradeorders as $k=>$v){
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$v['id']."' and mtype=152 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$tradeorders[$k]['profit'] = $profitc;
		}
		
		success(1,"SUCCESS",$tradeorders);
	}
	
	
	
	
	
	
	/**
	 * 已完成订单
	 */
	public function tradeordered()
	{
		$this->display();
	}
	
	
	//已完成订单接口
	public function seltradeordereddo()
	{		
		if(empty(get('page')) || !is_numeric(get('page')) || get('page') <1){
			$page=1;
		}else{
			$page=ceil(get('page'));
		}
		
		
		$pagenum=SelPageApiDataNumber;
		$sqlwhereadd=" WHERE state = 2 and uid like '".$_SESSION['userinfo']['id']."'";
		$sql="SELECT * FROM tradeorder"." ".$sqlwhereadd." order by  id desc limit ".(($page-1)*$pagenum).",".$pagenum;
		
		$data = self::DB()->query($sql)->fetchAll();
		
   		foreach($data as $k=>$v){
			$profitc = self::DB()->query("SELECT SUM(money) summoney FROM `moneypath` WHERE additionalid='".$v['id']."' and mtype=152 and uid='".self::$myuserinfo['id']."' ")->fetchAll();
			$profitc = $profitc[0]['summoney']?: 0;
						
			$profitc = number_format($profitc, 4, '.', '');
			
			$data[$k]['profit'] = $profitc;
		}
		
		$res = array();
		$res["data"] = $data;
		if(count($data)<1){
			success(1005,"SUCCESS",$data);
		}else{
			success(1001,"SUCCESS",$data);
		}
	}

    public function tystartdo()
    {
        $id = intval($_GET['id']);
        $uinfo = self::DB()->select("user",['money','id'],['id'=>$_SESSION['userinfo']['id']])[0];
        $item = self::DB()->select("itemlist","*",['id[=]'=>$id])[0];
        $res = self::DB()->query("SELECT count(*) num from `itemlog` where uid='".$uinfo['id']."' and isty=1")->fetchAll()[0]['num'];
        if (!$item['isty']){
            echo json_encode(['code' => 0, 'msg'=> "该项目不是新手体验金项目"]);exit;
        }
        if ($res>0){
            echo json_encode(['code' => 0, 'msg'=> "每个账号只能领取一次新手体验金"]);exit;
        }

        $insert_id = self::DB()->insert("itemlog", [
            "uid" => $uinfo['id'],
            'isty' => $item['isty'],
            "money" => $item['tymoney'],
            "smoney" => ($item['day_num'] * $item['arate']/100 / 365) * $item['tymoney'],
            "item_id" => $item['id'],
            "arate" => $item['arate'],
            "day_num" => $item['day_num'],
            "time" => time(),
            "stime" => time() + ($item['day_num'] * 86400),
            "status" => 0
        ]);
        if($insert_id){
            OrderModel::insertMoneypath($uinfo['id'], $item['tymoney'], "151", '新手体验金', $id, date('Y-m-d H:i:s', time()), 1);
            echo json_encode(['code' => 1, 'msg'=> "恭喜您, 领取成功"]);exit;
        } else {
            echo json_encode(['code' => 0, 'msg'=> "领取失败"]);exit;
        }
    }
}
?>