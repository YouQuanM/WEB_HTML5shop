<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
    <style type="text/css"></style>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="index1.php">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">购物车</div>
				  
</header>
<!--货物-->
<div class="aui-content aui-margin-b-15">
    <li class="aui-list-item">
        <div class="aui-list-item-inner">
            <div class="aui-list-item-input">
                <ul class="aui-list aui-media-list">
                    
             <?php
                 require_once'include.php';
				 $uid = $_SESSION['UserId'];
				$sql = "select d_proid,d_pname,d_price,d_pimgpath from onlinshop_shopcar where d_uid = {$uid} ";
				$rows=fetchAll($sql);
				if($rows)
				{
				foreach($rows as $row)	
				
			{
				echo "<input type=\"checkbox\" >";
				echo "<a href=\"showpro.php?pid={$row['d_proid']}\">";
				
				   
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
                                      
									   echo "价格：￥{$row['d_price']}";
								
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
    </li>
</div>
<footer class="aui-bar aui-bar-tab" id="footer">
    <div class="aui-bar-tab-item aui-active" tapmode>
        <a href="#">
            <i class="aui-iconfont aui-icon-home"></i>
            <div class="aui-bar-tab-label">删除</div>
        </a>
    </div>
    <div class="aui-bar-tab-item" tapmode>
        <a href="money.php">
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">结算</div>
        </a>
    </div>
</footer>


</body>
</html>