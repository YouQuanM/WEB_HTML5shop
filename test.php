<?php 
require_once 'include.php';
$sql="insert onlinshop_dingdan values(1,'sd',2,'试点范围','范围范围',4,'wewefsd',8)";
$res=mysql_query($sql);
if($res){
	echo "ok";
}else{
	echo "default";
}


				
        
?>