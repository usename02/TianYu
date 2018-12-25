<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\TianYu\public/../application/index\view\index\login.html";i:1545724086;}*/ ?>
﻿﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <![endif]-->
    <link href="/TianYu/public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="/TianYu/public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css"/>
    <link href="/TianYu/public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/TianYu/public/static/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/TianYu/public/static/lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value=""/>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="HANDSET" name="HANDSET" type="text" placeholder="电话号码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input name="PASS" id="PASS" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="login" id="login" type="button" class="btn btn-success radius size-L"
                           value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer"></div>
<script type="text/javascript" src="/TianYu/public/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/TianYu/public/static/h-ui/js/H-ui.min.js"></script>

<!--利用-->
<!--<script src="https://www.the3space.cn/ty/admin_login.php" type="text/javascript"></script>-->
<script type="text/javascript">
    $(function () {
        //给登录按钮添加点击事件
        $('#login').on('click', function (event) {
            $.ajax({
                type: 'post',
                url: "<?php echo url('user/loginTest'); ?>",
                data: $('form').serialize(),
                dataType: 'json',//数据格式设置为json
                success: function (data) {  //success 接受到数据才会执行
                    alert(data);
                    window.location.href = "<?php echo url('index/index'); ?>";
                    error: function a(e) {
                        alert("error");
                    }
                }
            });
        })
    })
</script>
</body>
</html>