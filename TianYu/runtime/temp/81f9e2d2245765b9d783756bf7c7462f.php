<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\admin\admin_edit.html";i:1544510464;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?php if ($user_info['name'] == 'admin'): ?> <!--如果用户名是admin,不允许修改-->
                    <input type="text" class="input-text disabled" value="<?php echo $user_info['name']; ?>"
                           placeholder="" id="name" name="name">
                <?php else: if (\think\Session::get('user_info.name') == $user_info['name']): ?>
                    <input type="text" class="input-text disabled" value="<?php echo $user_info['name']; ?>"
                           placeholder="" id="name" name="name">
                <?php else: ?>
                    <input type="text" class="input-text" value="<?php echo $user_info['name']; ?>" placeholder=""
                           id="name" name="name">
                <?php endif; endif; ?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="password" class="input-text" autocomplete="off"
                       value="<?php echo $user_info['password']; ?>" placeholder="密码为6位" id="password" name="password">
            </div>
        </div>

        <?php if (\think\Session::get('user_info.name') == 'admin'): ?>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">启用状态：</label>
                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
				<select class="select" name="status" size="1">
					<option value="1">启用</option>
					<option value="0" selected>不启用</option>
				</select>
				</span>
                </div>
            </div>
        <?php endif; ?>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="@" name="email" id="email"
                       value="<?php echo $user_info['email']; ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机号：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="" id="phone"
                       value="<?php echo $user_info['HANDSET']; ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属店仓：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="" id="stome"
                       value="<?php echo $user_info['STORE']; ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>在职状态：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="" id="INCUMBENCY_STS"
                       value="<?php echo $user_info['INCUMBENCY_STS']; ?>">
            </div>
        </div>
        <?php if (\think\Session::get('user_info.name') == 'admin'): ?>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">角色：</label>
                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
				<select class="select" name="role" size="1">
					<option value="1">管理员</option>
					<option value="0" selected>店员</option>
				</select>
				</span>
                </div>
            </div>
        <?php endif; ?>
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

        $("#submit").on("click", function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('user/editUser'); ?>",
                data: $("#form-admin-add").serialize(),
                dataType: "json", //数据返回的方式
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

