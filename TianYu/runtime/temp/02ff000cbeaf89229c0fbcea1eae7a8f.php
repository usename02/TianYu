<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\shop\Shop_add.html";i:1542600059;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1541058653;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402616;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402871;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/h_ui_tp5/public/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/h_ui_tp5/public/static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/h_ui_tp5/public/static/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/h_ui_tp5/public/static/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/h_ui_tp5/public/static/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->


    <title><?php echo(isset($title) && ($title !== '') ? $title : "标题"); ?></title>
    <meta name="keywords" content="<?php echo(isset($keywords) && ($keywords !== '') ? $keywords : '关键字'); ?>">
    <meta name="description" content="<?php echo(isset($desc) && ($desc !== '') ? $desc : '描述'); ?>">

</head>
<body>


<article class="cl pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-admin-add">

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>店仓名：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="NAME" name="NAME">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否允许零售：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="TYPE" name="TYPE">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>城市：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" autocomplete="off" value="" placeholder="" id="CITY" name="CITY">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>店铺状态：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="STATUS" name="STATUS">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属经销商：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="CUSTOMER" name="CUSTOMER">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>二维码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="email" class="input-text" placeholder="" name="QRCODE" id="QRCODE" value="">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>细节补充：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="SUPPLEMENT" name="SUPPLEMENT">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius disabled" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;"
                       id="submit">
            </div>
        </div>
    </form>


</article>


<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/h-ui.admin/js/H-ui.admin.js"></script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script>
    $(function () {
        //防止用户无更新提交,只有表中数据有变化时才允许提交
        $("form").children().change(function () {
            $("#submit").removeClass('disabled');
        });
        //失去焦点时,检查店铺名是否重复
        $("#name").blur(function () {
            $.ajax({
                type: 'GET',
                url: "checkShopName",
                data: {name: $(this).val()},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        alert(data.message);
                    } else {
                        alert(data.message);
                    }
                }
            });
        });

        $("#submit").on("click", function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('shop/addShop'); ?>",
                data: $("#form-admin-add").serialize(),
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        alert(data.message);

                    } else {
                        alert(data.message);

                    }
                }
            });

        })
    })
</script>

</body>
</html>