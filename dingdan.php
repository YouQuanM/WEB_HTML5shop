<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="script/goback.js"></script>
</head>
<body>
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="javascript:void (0);" onclick="GoBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">确认订单</div>
</header>
<div class="aui-content aui-margin-b-15">
    <div class="aui-content aui-margin-b-15">
        <ul class="aui-list aui-list-in">
            <li class="aui-list-header">
			
                收货地址
            </li>
            <li class="aui-list-item">
                <div class="aui-list-item-inner">
                    <div class="aui-list-item-title"><?php
					require_once'include.php';
                    $u_id= $_SESSION['UserId'];
                    $sql="select address from onlinshop_user where id={$u_id}";
					$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$address  = $res[address];
					echo $address;
					
					
					?>
					</div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="aui-list aui-media-list">
        <a href="#">
            <li class="aui-list-item">
                <div class="aui-media-list-item-inner">
                    <div class="aui-list-item-media">
                       <?php
					   require_once'include.php';
							$id=$_GET['id'];
							$sql = "select pimgpath from onlinshop_pro where pid = {$id}";
							$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$path = $res[pimgpath];
					 echo " <img src=\"{$path}\"/>";
					
					   ?>
                    </div>
                    <div class="aui-list-item-inner">
                        <div class="aui-list-item-text">
                            <div class="aui-list-item-title">
							<?php
							require_once'include.php';
							$id=$_GET['id'];
							$sql = "select pname from onlinshop_pro where pid = {$id}";
							$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$name = $res[pname];
					echo $name;
							?>
							</div>
                        </div>
                        <div class="aui-list-item-text">
                            <?php
							echo "价格：";
							require_once'include.php';
							$id=$_GET['id'];
							$sql = "select price from onlinshop_pro where pid = {$id}";
							$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$price  =  $res[price];
					echo $price;
							?>
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>
</div>
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode>
        <div class="aui-bar-tab-label">应付：</div>
        <div class="aui-bar-tab-label">
		<?php
		require_once'include.php';
		$id=$_GET['id'];
		$sql = "select price from onlinshop_pro where pid = {$id}";
							$result=mysql_query($sql);
					$res=mysql_fetch_array($result,MYSQL_ASSOC);
					$price  =  $res[price];
					echo $price;
		?></div>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <?php echo"<a href=\"money.php?id={$id}\">"?>
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">结算</div>
        </a>
    </div>
</footer>

</body>
</html>