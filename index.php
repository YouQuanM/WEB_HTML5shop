<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--顶部导航栏-->
    <header class="aui-bar aui-bar-nav">
        <div class="aui-title">首页</div>
    </header>
<!--推荐（轮播）-->

<!--分类表-->
<!--分类表-->
<section class="aui-grid">
    <div class="aui-row">
        <div class="aui-col-xs-3">
            <a href="choose/showall.php?pcate=男女服装">
                <i class="aui-iconfont aui-icon-home"></i>
                <div class="aui-grid-label">男女服装</div>
            </a>
        </div>
        <div class="aui-col-xs-3">
            <a href="choose/showall.php?pcate=家用电器">
                <i class="aui-iconfont aui-icon-gear"></i>
                <div class="aui-grid-label">家用电器</div>
            </a>
        </div>
        <div class="aui-col-xs-3">
            <a href="choose/showall.php?pcate=箱包手袋">
                <i class="aui-iconfont aui-icon-map"></i>
                <div class="aui-grid-label">箱包手袋</div>
            </a>
        </div>
        <div class="aui-col-xs-3">
            <a href="choose/showall.php?pcate=珠宝配饰">
                <i class="aui-iconfont aui-icon-calendar"></i>
                <div class="aui-grid-label">珠宝配饰</div>
            </a>
        </div>
        <div class="aui-col-xs-3">
		<a href="choose/showall.php?pcate=手机数码">
            <i class="aui-iconfont aui-icon-date"></i>
            <div class="aui-grid-label">手机数码</div>
			</a>
        </div>
        <div class="aui-col-xs-3">
		<a href="choose/showall.php?pcate=食品生鲜">
            <i class="aui-iconfont aui-icon-cart"></i>
            <div class="aui-grid-label">食品生鲜</div>
			</a>
        </div>
        <div class="aui-col-xs-3">
		<a href="choose/showall.php?pcate=家居家装">
            <i class="aui-iconfont aui-icon-paper"></i>
            <div class="aui-grid-label">家居家装</div>
			</a>
        </div>
        <div class="aui-col-xs-3">
		<a href="choose/showall.php?pcate=图书文具">
            <i class="aui-iconfont aui-icon-video"></i>
            <div class="aui-grid-label">图书文具</div>
			</a>
        </div>
    </div>
</section>
<!--商品列表-->
<div class="aui-content aui-margin-b-15">
    <ul class="aui-list aui-media-list">
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">1F男女服装</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=1">
						
					
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 1";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
				  
				

							?>
						
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=2">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 2";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
		

							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
					<a href="showpro.php?pid=3">
                        <?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 3";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
		

							?>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">2F家用电器</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=4">
                        <?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 4";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
		

							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=5">
						
					
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 5";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
				  
				

							?>
						
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=6">
						
					
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 6";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
				  
				

							?>
						
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">3F箱包手袋</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=7">
						
					
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 7";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
				  
				

							?>
						
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=8">
						
					
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 8";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
					
                   echo " <img src=\"{$path}\"/>";
				  
				

							?>
						
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                          <a href="showpro.php?pid=9">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 9";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">4F珠宝配饰</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                            <a href="showpro.php?pid=10">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 10";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                              <a href="showpro.php?pid=11">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 11";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=12">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 12";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">5F手机数码</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                          <a href="showpro.php?pid=13">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 13";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=14">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 14";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                    <div class="aui-col-xs-4">
<a href="showpro.php?pid=15">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 15";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">6F食品生鲜</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=16">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 16";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=17">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 17";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=18">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 18";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>

                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">7F家居家装</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                             <a href="showpro.php?pid=19">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 19";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=20">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 20";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                    <div class="aui-col-xs-4">
                         <a href="showpro.php?pid=21">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 21";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                </div>
            </div>
        </li>
        <li class="aui-list-item" id="index-last-li">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title">8F图书文具</div>
                <p></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=22">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 22";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                         </a>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="showpro.php?pid=23">
						<?php
						require_once'include.php';
						$sql = "select pimgpath ,pname,pid from onlinshop_pro where pid = 23";
                          $row=fetchOne($sql);
		                  $path=$row[pimgpath];
		//echo $path;
                   echo " <img src=\"{$path}\"/>";
							?>
                    </div>
                    <div class="aui-col-xs-4">
                        <a href="shop/book3.html">
                            <img src="image/../image/book/book3/1.png"/>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!--底部工具栏-->
    <footer class="aui-bar aui-bar-tab" id="footer">
        <div class="aui-bar-tab-item aui-active" tapmode>
            <a href="#">
            <i class="aui-iconfont aui-icon-home"></i>
            <div class="aui-bar-tab-label">首页</div>
            </a>
        </div>
        <div class="aui-bar-tab-item" tapmode>
            <a href="classify.html">
            <i class="aui-iconfont aui-icon-star"></i>
            <div class="aui-bar-tab-label">分类</div>
            </a>
        </div>
        <div class="aui-bar-tab-item" tapmode>
            <a href="login.php">
            <i class="aui-iconfont aui-icon-cart"></i>
            <div class="aui-bar-tab-label">购物车</div>
            </a>
        </div>
        <div class="aui-bar-tab-item" tapmode>
            <div class="aui-dot"></div>
		   <a href = "login.php">
	
            <i class="aui-iconfont aui-icon-my"></i>
            <div class="aui-bar-tab-label">我的</div>
       </a>
        </div>
    </footer>

</body>

</html>
