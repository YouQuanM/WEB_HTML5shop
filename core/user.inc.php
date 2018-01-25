<?php 
function addUser(){
    $arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$arr['regTime']=time();
	if(insert("onlinshop_user", $arr)){
		$mes="添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
	}else{
		$mes="添加失败!<br/><a href='addUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
	}
	return $mes;
}
function getAllUserByPage($page,$pageSize=2){
$sql="select * from onlinshop_user";
global $totalPage;
global $totalRows;
$totalRows=getResultNum($sql);
//得到总页码数
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page)){
	$page=1;
}
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,username,email from onlinshop_user limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
return $rows;
}

function addUserByReg()
{
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$arr['regTime']=time();
	if(insert("onlinshop_user", $arr)){
		$mes="注册成功！<br/><a href='login.php'>返回登陆界面</a>";
	}else{
		$mes="注册失败!<br/><a href='reg.php'>重新注册</a>";
	}
	return $mes;
}
function checkUser($sql)
{
	return fetchOne($sql);
}



?>