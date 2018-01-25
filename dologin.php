<?php
session_start();  
require_once'include.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

	$sql="select * from onlinshop_user where username='{$username}' and password='{$password}'";
	$result=mysql_query($sql);
	$res=mysql_fetch_array($result,MYSQL_ASSOC);
	if($res){
		$_SESSION['UserName']=$res['username'];
		$_SESSION['UserId']=$res['id'];
		alertMes("登陆成功","index1.php");
	}else{
		alertMes("登陆失败，重新登陆","login.php");
	}

?>