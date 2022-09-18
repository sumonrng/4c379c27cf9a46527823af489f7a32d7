<?php
	session_start();
	$timing_start = explode(' ', microtime());
	error_reporting(-1);
	set_time_limit(0);
	ini_set('memory_limit','4096M');
	$_SESSION['token']='12345gh';	
	//require 'db/db.php';
	include 'php_files/config.php';
	include 'php_files/functions.php';
	//require 'functions.php';
	$timezone = "Asia/Dacca"; // 
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);	
	
	$startDate=date("Y-m-01", strtotime("-1 month"));
	$endDate=date("Y-m-t", strtotime("-1 month"));
	echo $startDate ." >> ". $endDate ."<br/>";
	
	$dateY=date("D");
	for($i=0; $i<=7; $i++){
		$dateY=date("D", strtotime("-$i days"));
		if($dateY=='Thu'){
			$endDate=date("Y-m-d", strtotime("-$i days"));
			break;
		}
	}
	
	
	$StarDate=date("Y-m-d", strtotime($endDate ."-6 days"));
	echo $StarDate ." >> ".$endDate;
	echo "<br/><br/><br/>";
	//$func = new functions();
	$user='mohon';
	$total_income = $func->TtalIncomeDaily($user,$StarDate,$endDate);
	var_dump($total_income);
	
	function GenerationCommission(){
		global $mysqli;
		$urt=array(50,30,20);
		$dateRf=date("Y-m-d", strtotime("-7 days"));
		$strayTr=date("Y-m-01", strtotime($dateRf));
		$EndyTr=date("Y-m-t", strtotime($dateRf));
		
		$SelctRank=$mysqli->query("SELECT DISTINCT `user` FROM `bcpp`");
		while($allUsd=mysqli_fetch_assoc($SelctRank)){
			$memberid=$allUsd['user'];
			
			$TotaLgen=mysqli_fetch_assoc($mysqli->query("SELECT SUM(amount) as getT FROM `generation_income_daily` WHERE `user`='".$allUsd['user']."' AND DATE(`date`) BETWEEN '".$strayTr."' AND '".$EndyTr."'"));
			$genIncome=$TotaLgen['getT'];
			$dataLev=array();
			$trqwtyq=$mysqli->query("SELECT `level_data` FROM `generation_income_daily` WHERE `user`='".$allUsd['user']."' AND DATE(`date`) BETWEEN '".$strayTr."' AND '".$EndyTr."'");
			while($AlllevelData=mysqli_fetch_assoc($trqwtyq)){
				$levEx=json_decode($AlllevelData['level_data'], true);
				$trasd=0;
				for($i=0;$i<=2;$i++){
					$dataLev[$i]=$dataLev[$i]+$levEx[$i];
				}
			}
			echo $memberid." >> $genIncome <br/><br/>";
			var_dump($dataLev);
			echo "<br/><br/>";
		}
	}
	//GenerationCommission();
	
?>