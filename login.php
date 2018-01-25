<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="./css/aui.css" />
	
    <style type="text/css"></style>
</head>
<body>
<!--标签栏-->
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn" href="javascript:void (0);" onclick="GoBack()">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">用户登录</div>
</header>
<!--登录窗口-->
<div class="aui-content aui-margin-b-15">
<form action="dologin.php" method="post">
    <ul class="aui-list aui-form-list">
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
                    用户名
                </div>
                <div class="aui-list-item-input">
                   <input type="text"  name="username" placeholder="请输入用户名">
                </div>
            </div>
        </li>
        <li class="aui-list-item">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-label">
                    密码
                </div>
                <div class="aui-list-item-input">
                    <input type="password"  name="password" >
                </div>
            </div>
        </li>
		<li>
		<li class="aui-list-item">
		<div class="aui-list-item-inner">
		<div class="aui-content-padded">
            <input type="submit" value="登陆" >
             <a href="index.html"><div class="aui-btn aui-btn-danger">取 消</div></a>
           </div>
		 </div>
		 </li>
    </ul>
		</form>
</div>
<h3>还没有注册？点击<a href="reg.php">这里</a></h3>
</body>
</html>