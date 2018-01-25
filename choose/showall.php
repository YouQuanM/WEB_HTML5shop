<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="../css/aui.css" />
    <script src="../script/goback.js"></script>
    <title>选购</title>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="javascript:void (0);" onclick="GoBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title"><?php 
	require_once'../include.php';
	$pcate=$_GET['pcate'];
	echo $pcate;
	$sql="select pname,pimgpath,pid,price from onlinshop_pro where pcate = '{$pcate}'";
    $rows=fetchAll($sql);				
	?></div>
</header>
<!--具体物品-->
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list aui-media-list">
    
	<?php
						 
	foreach($rows as $row):
	?>
	<?php
        echo "<a href=\"../showpro.php?pid={$row['pid']}\">";
	   ?>
            <li class="aui-list-item">
                <div class="aui-media-list-item-inner">
                    <div class="aui-list-item-media">
                        <?php echo "<img src=\"../{$row['pimgpath']}\"/>";?>
                    </div>
                    <div class="aui-list-item-inner">
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title"><?php echo $row['pname'];?></div>
                            <div class="aui-list-item-right"></div>
                        </div>
                        <div class="aui-list-item-text">
                            <?php echo $row['price'];?>
                        </div>
                    </div>
                </div>
            </li>
        </a>
        <?php
						   endforeach;
						 ?>
    </ul>

</div>
</body>
</html>