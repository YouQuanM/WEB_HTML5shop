<?php
require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="css/aui.css" />
    <title>详细</title>
    <script src="script/api.js"></script>
    <script src="script/aui-slide.js"></script>
    <link rel="stylesheet" href="css/aui-slide.css">
    <script src="script/goback.js"></script>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="javascript:void (0);" onclick="GoBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title"><?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select pname from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 echo $row[pname];
	?>
	</div>
</header>
<!--轮播图片-->
<link rel="stylesheet" type="text/css" href="css/aui-slide.css" />
<div id="aui-slide">
    <div class="aui-slide-wrap" >
        <div class="aui-slide-node bg-dark">
		<?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select pimgpath from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 $path=$row[pimgpath];
	   echo " <img src=\"{$path}\"/>";
	?>
        </div>
        <div class="aui-slide-node bg-dark">
		<?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select pimgpath1 from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 $path=$row[pimgpath1];
	   echo " <img src=\"{$path}\"/>";
	?>
        </div>
        <div class="aui-slide-node bg-dark">
           <?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select pimgpath2 from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 $path=$row[pimgpath2];
	   echo " <img src=\"{$path}\"/>";
	?>
        </div>
    </div>
    <div class="aui-slide-page-wrap"><!--分页容器--></div>
</div>
<script type="text/javascript" src="script/aui-slide.js"></script>
<script type="text/javascript">
    var slide = new auiSlide({
        container:document.getElementById("aui-slide"),
        // "width":300,
        "height":300,
        "speed":300,
        "autoPlay": 3000, //自动播放
        "pageShow":true,
        "pageStyle":'dot',
        "loop":true,
        'dotPosition':'center',
        currentPage:currentFun
    })

    function currentFun(index) {
        console.log(index);
    }
</script>
<!--详情-->
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list aui-list-in">
        <li class="aui-list-header"><h2><?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select pdes from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 echo $row[pdes];
	?></h2></li>
        <li class="aui-list-item">
            <div class="aui-list-item-label-icon">
                <i class="aui-iconfont aui-icon-star"></i>
            </div>
            <div class="aui-list-item-inner">
                <b><?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select price from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 echo $row[price];
	?></b>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-label-icon">
                <i class="aui-iconfont aui-icon-cart"></i>
            </div>
            <div class="aui-list-item-inner">
               <?php
	require_once'include.php';
	$pid = $_GET['pid'];
	$sql = "select num from onlinshop_pro where pid = '{$pid}'";
	 $row=fetchOne($sql);
	 echo $row[num];
	?>
            </div>
        </li>
    </ul>
</div>

<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode style="background-color: inherit">
       <div class="aui-content-padded" style="margin: 0;padding: 0;border: 0">
	   <?php
        if($_SESSION['UserId']){	   
		echo"<a href=\"addshopcar.php?id={$pid}\">";}
		else
		{
			echo"<a href=\"login.php\">";
		}?>
            <div class="aui-btn aui-btn-block aui-btn-info">加入购物车</div>
			</a>
        </div>
    </div>
    <div class="aui-bar-tab-item" tapmode style="background-color: #ffb300">
       <?php if($_SESSION['UserId']){echo"<a href=\"dingdan.php?id={$pid}\">";}
	   else{echo "<a href=\"login.php\"";}?>
            <i class="aui-iconfont aui-icon-paper"></i>
            <div class="aui-bar-tab-label">立即购买</div>
        </a>
    </div>
</footer>
</body>
</html>