<?php
/**
检查是否有管理员
*/
function checkAdmin($sql)
{
	return fetchOne($sql);
}

/**
检查是否由管理员登陆
*/
function checkLogined()
{
	if($_SESSION['adminId']==""&&$_COOKIE['adminId']=="")
	{
		alertMes("请先登陆","login.php");
	}
}

/**
退出登陆
*/
function logout(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(),"",time()-1);
	}
	if(isset($_COOKIE['adminName']))
	{
		setcookie("adminName","",time()-1);
	}
	
	if(isset($_COOKIE['adminId']))
	{
		setcookie("adminId","",time()-1);
	}
	session_destroy();
	header("location:login.php");
	
	
}
/**
添加管理员
*/
function addAdmin()
{
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	if(insert("onlinshop_admin",$arr))
	{
		$mes="添加成功!<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员</a>";
	}else
	{
		$mes="添加失败!<br/><a href='addAdmin.php'>重新添加</a>";
	}
	return $mes;
	
}
/**
得到所有管理员
*/
function getAllAdmin($where=null)
{
	
	$sql="select id,username,email from onlinshop_admin";
	$rows=fetchAll($sql);
	return $rows;
}
/**
修改管理员
*/
function editAdmin($id)
{
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	if(update("onlinshop_admin",$arr,"id={$id}")){
		$mes="编辑成功!<br/><a href='listAdmin.php'>查看管理员</a>";
	}else{
		$mes="编辑失败!<br/><a href='listAdmin.php'>重新修改</a>";
	}
	
	return $mes;
}

/**删除管理员
*/
function delAdmin($id)
{
	if(delete("onlinshop_admin","id={$id}"))
		{
			$mes="删除成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
		}else{
			$mes="删除失败!<br/><a href='listAdmin.php'>重新删除</a>";
		}
		
		return $mes;
}
function getAllAdminByPage($page,$pageSize=2){
$sql="select * from onlinshop_admin";
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
$sql="select id,username,email from onlinshop_admin limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
return $rows;
}

