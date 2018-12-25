<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\member\member-edit.html";i:1544581060;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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
    <form action="" method="post" class="form form-horizontal" id="form-shop-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>微信会员编号 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['CODE']; ?>"
                       placeholder="" id="CODE" name="CODE">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>姓名 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['VIPNAME']; ?>"
                       placeholder="" id="VIPNAME" name="VIPNAME">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>电话 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['MOBIL']; ?>"
                       placeholder="" id="MOBIL" name="MOBIL">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>积分 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['INTEGRAL']; ?>"
                       placeholder="" id="INTEGRAL" name="INTEGRAL">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>累计积分 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['LJJNTEGRAL']; ?>"
                       placeholder="" id="LJJNTEGRAL" name="LJJNTEGRAL">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>卡密码 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['PASS_WORD']; ?>"
                       placeholder="" id="PASS_WORD" name="PASS_WORD">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>有效 ：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text disabled" value="<?php echo $member_info['VIPSTATE']; ?>"
                       placeholder="" id="VIPSTATE" name="VIPSTATE">
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
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery.validation/1.14.0/messages_zh.js">
</script>
<script>
    //当用户修改了输入框内容时才触发
    $(function () {
        $("form").children().change(function () {
            $("#submit").removeClass('disabled');
        });

//ajax方式提交当前表单数据
        $("#submit").on("click", function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('member/doEdit'); ?>",
                data: $("#form-shop-add").serialize(),
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

