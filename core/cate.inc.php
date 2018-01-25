<?php
/**
添加分类
*/
function addCate(){
  $arr=$_POST;
  if(insert("onlinshop_cate",$arr)){
      $mes="分类添加成功!<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
  }else{
	  $mes="分类添加失败!<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
  }
  return $mes;
}
/**
根据ID得到分类信息
*/
function getCateById($id){
   $sql="select id,cName from onlinshop_cate where id ={$id}";
   return fetchOne($sql);
}
/**
修改分类
*/
function editCate($where){
    $arr=$_POST;
	if(update("onlinshop_cate",$arr,$where))
	{
		$mes="分类修改成功!<br/><a href='listCate.php'>查看分类</a>";
	}else{
		$mes="分类修改失败<br/><a href='listCate.php'>重新修改</a>";
	}
	return $mes;
}

/**
删除分类
*/
function delCate($where){
   if(delete("onlinshop_cate",$where)){
	   $mes="分类删除成功!<br/><a href='listCate.php'>查看分类</a>|<a href='addCate.php'>添加分类</a>";
   }else{
	   $mes="删除失败!<br/><a href='listCate.php'>重新操作</a>";
   }
   return $mes;
}

function getAllCate(){
	$sql="select id,cName from onlinshop_cate";
	$rows=fetchAll($sql);
	return $rows;
}