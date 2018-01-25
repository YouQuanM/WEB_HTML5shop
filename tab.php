<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
<title>tab</title>
<link rel="stylesheet" href="css/tab.css">
<link rel="stylesheet" href="css/aui.css">
<body>
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="javascript:void (0);" onclick="GoBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">物流</div>
</header>
<div class="wrap" id="wrap">
    <ul class="tabClick">
        <li class="active">待收货</li>
        <li>待付款</li>
        <li>待发货</li>
        <li>待评价</li>
    </ul>
    <div class="lineBorder">
        <div class="lineDiv"><!--移动的div--></div>
    </div>
    <div class="tabCon">
        <div class="tabBox">
            <div class="tabList">
			
                <ul class="aui-list aui-media-list">
				<?php
                 require_once'include.php';
				 $uid = $_SESSION['UserId'];
				 //echo $uid;
				$sql = "select d_proid,d_pname,d_price,d_pimgpath from onlinshop_dingdan where d_uid = {$uid} and d_fahuo = 1";
				$rows=fetchAll($sql);

				
				?>
				<?php
				if($rows){
				foreach($rows as $row)
			{echo "<a href=\"showpro.php?pid={$row['d_proid']}\">";
				    echo "<li class=\"aui-list-item\">";
                          echo  "<div class=\"aui-media-list-item-inner\">";
                           echo     "<div class=\"aui-list-item-media\">";
								 $path=$row['d_pimgpath'];
								echo "<img src=\"{$path}\"/>";
									echo  "</div>";
                               echo " <div class=\"aui-list-item-inner\">";
                               echo      "<div class=\"aui-list-item-text\">";
                                   echo    " <div class=\"aui-list-item-title\">";
										echo $row['d_pname'];
										
										echo"</div>";
                                    echo"</div>";
                                   echo "<div class=\"aui-list-item-text\">";
                                      
									   echo "价格：{$row['d_price']}";
								
                                   echo"</div>";
                              echo"</div>";
                            echo"</div>";
                        echo "</li>";
                    echo"</a>";
			}
				}
					?>                
                </ul>
            </div>
            <div class="tabList">
                <ul class="aui-list aui-media-list">
                    <?php
                 require_once'include.php';
				 $uid = $_SESSION['UserId'];
				$sql = "select d_proid,d_pname,d_price,d_pimgpath from onlinshop_shopcar where d_uid = {$uid} ";
				$rows=fetchAll($sql);
				if($rows)
				{
				foreach($rows as $row)			
			{echo "<a href=\"showpro.php?pid={$row['d_proid']}\">";
				
				   
                        echo "<li class=\"aui-list-item\">";
                          echo  "<div class=\"aui-media-list-item-inner\">";
                           echo     "<div class=\"aui-list-item-media\">";
								
								   $path=$row['d_pimgpath'];
								
                                    echo "<img src=\"{$path}\"/>";
									
                              echo  "</div>";
                               echo " <div class=\"aui-list-item-inner\">";
                               echo      "<div class=\"aui-list-item-text\">";
                                   echo    " <div class=\"aui-list-item-title\">";
										echo $row['d_pname'];
										
										echo"</div>";
                                    echo"</div>";
                                   echo "<div class=\"aui-list-item-text\">";
                                      
									   echo "价格：{$row['d_price']}";
								
                                   echo"</div>";
                              echo"</div>";
                            echo"</div>";
                        echo "</li>";
                    echo"</a>";
			}
				}
					?> 
                </ul>
            </div>
            <div class="tabList">
                <ul class="aui-list aui-media-list">
                   				<?php
                 require_once'include.php';
				 $uid = $_SESSION['UserId'];
				$sql = "select d_proid,d_pname,d_price,d_pimgpath from onlinshop_dingdan where d_uid = {$uid} and d_fahuo = 0";
				$rows=fetchAll($sql);
				if($rows)
				{
				foreach($rows as $row)			
			{echo "<a href=\"showpro.php?pid={$row['d_proid']}\">";
				
				   
                        echo "<li class=\"aui-list-item\">";
                          echo  "<div class=\"aui-media-list-item-inner\">";
                           echo     "<div class=\"aui-list-item-media\">";
								
								   $path=$row['d_pimgpath'];
								
                                    echo "<img src=\"{$path}\"/>";
									
                              echo  "</div>";
                               echo " <div class=\"aui-list-item-inner\">";
                               echo      "<div class=\"aui-list-item-text\">";
                                   echo    " <div class=\"aui-list-item-title\">";
										echo $row['d_pname'];
										
										echo"</div>";
                                    echo"</div>";
                                   echo "<div class=\"aui-list-item-text\">";
                                      
									   echo "价格：{$row['d_price']}";
								
                                   echo"</div>";
                              echo"</div>";
                            echo"</div>";
                        echo "</li>";
                    echo"</a>";
			}
				}
					?> 
                </ul>
            </div>
            <div class="tabList">
                <ul class="aui-list aui-media-list">
                                       				<?php
                 require_once'include.php';
				 $uid = $_SESSION['UserId'];
				$sql = "select d_proid,d_pname,d_price,d_pimgpath from onlinshop_dingdan where d_uid = {$uid} and d_fahuo = 3";
				$rows=fetchAll($sql);
				if($rows)
				{
				foreach($rows as $row)
			{echo "<a href=\"showpro.php?pid={$row['d_proid']}\">";
				
				   
                        echo "<li class=\"aui-list-item\">";
                          echo  "<div class=\"aui-media-list-item-inner\">";
                           echo     "<div class=\"aui-list-item-media\">";
								
								   $path=$row['d_pimgpath'];
								
                                    echo "<img src=\"{$path}\"/>";
									
                              echo  "</div>";
                               echo " <div class=\"aui-list-item-inner\">";
                               echo      "<div class=\"aui-list-item-text\">";
                                   echo    " <div class=\"aui-list-item-title\">";
										echo $row['d_pname'];
										
										echo"</div>";
                                    echo"</div>";
                                   echo "<div class=\"aui-list-item-text\">";
                                      
									   echo "价格：{$row['d_price']}";
								
                                   echo"</div>";
                              echo"</div>";
                            echo"</div>";
                        echo "</li>";
                    echo"</a>";
			}
				}
					?> 
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="script/tab.js"></script>
<!--底部工具栏-->
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode>
        <a href="index1.php">
            <i class="aui-iconfont aui-icon-home"></i>
            <div class="aui-bar-tab-label">首页</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="classify1.html">
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">分类</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="shoppingcar.php">
            <i class="aui-iconfont aui-icon-cart"></i>
            <div class="aui-bar-tab-label">购物车</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="mine.php">
            <i class="aui-iconfont aui-icon-my"></i>
            <div class="aui-bar-tab-label">我的</div>
        </a>
    </div>
</footer>
</body>
</html>