<?php

date_default_timezone_set('Asia/Shanghai');
$time = time();//时间戳

/*
$year = date('Y');
$month = date('n');
$day = date('j');
$h = date('H');
$i = date('i');
$s = date('s');
$w = date('N');
$nums = ['〇','一','二','三','四','五','六','七','八','九','十'];
$i=0;
$ystr = ''; 
while(($chr = substr($year,$i,1))!=''){
	$ystr .= $nums[$chr];
	$i++;
}
$months = [1=>'一','二','三','四','五','六','七','八','九','十','十一','十二'];
$weeks = [1=>'一','二','三','四','五','六','日'];

echo $ystr.'年'.$months[$month].'月'.$day.'日'.$h.'时'.$i.'分'.$s.'秒'.' 星期'.$weeks[$w];


$year = date('Y');
$month = date('n');
$day = date('j');
$h = date('H');
$i = date('i');
$s = date('s');
$w = date('N');
$t = [$year,$month,$day,$h,$i,$s,$w];

*/

function u_time($a){
	$num = (int)$a;
	$b = ['〇','一','二','三','四','五','六','七','八','九'];
	if($num<10){
		$a=$b[$num];
	}
	else if(60<$num){
		$len = strlen($a);
		$replace = '';
		for($i=0;$i<$len;$i++){	
			$c = substr($a,$i,1);
			$replace .= $b[(int)$c];		
			}
		$a = $replace;
		}
	else{
			if($num==10){
			$a ='十';
			}
			else if($num%10==0){
			$k = substr($a,0,1);
			$a = $b[(int)$k].'十';
			}
			else{
			$k = substr($a,0,1);
			$v = substr($a,1,1);
			$a = $b[(int)$k].'十'.$b[(int)$v];
			}
		}	
	return $a;
}
echo u_time(date('Y')).'年 '.u_time(date('n')).'月'.u_time(date('j')).'日 '.u_time(date('H')).'时'.u_time(date('i')).'分'.u_time(date('s')).'秒 '.' 星期'.u_time(date('n'));