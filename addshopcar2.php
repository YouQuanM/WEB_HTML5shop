	<?php
	require_once'include.php';
	$id = $_GET['id'];
	$u_id= $_SESSION['UserId'];
	$sql = "select pid,pname,price,pimgpath from onlinshop_pro where pid = {$id}";
	$result=mysql_query($sql);
	$res=mysql_fetch_array($result,MYSQL_ASSOC);
	$pid = $res[pid];
	$pname=$res[pname];
	$price=$res[price];
	$pimgpath=$res[pimgpath];
	$sql = "select username,address from onlinshop_user where id  = {$u_id}";
	$result=mysql_query($sql);
	$res=mysql_fetch_array($result,MYSQL_ASSOC);
	$uname = $res[username];
	$address = $res[address];
	$sql="insert onlinshop_shopcar (d_user,d_proid,d_pname,d_uaddress,d_price,d_pimgpath,d_uid)values ('{$uname}',{$pid},'{$pname}','{$address}',{$price},'{$pimgpath}',{$u_id})";
	$res=mysql_query($sql);
	if($res){
		echo "加入购物车成功，点击<a href=\"tab.php\">查看</a>";
	}
	
		?>