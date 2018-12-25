<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\admin\admin_search.html";i:1543981410;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_search.html";i:1543976040;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="9">管理员列表</th>

        </tr>
        <tr class="text-c">
            <th width="25"><input type="checkbox" name="" value=""></th>
            <th width="40">ID</th>
            <th width="100">用户名</th>
            <th width="150">邮箱</th>
            <th width="100">角色</th>
            <th width="50">登陆次数</th>
            <th width="130">上次登陆时间</th>
            <th width="100">是否已启用</th>
            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if (is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0;
            $__LIST__ = $list;
            if (count($__LIST__) == 0) : echo "";
            else: foreach ($__LIST__ as $key => $vo): $mod = ($i % 2);
                ++$i; ?>
                <tr class="text-c">
                    <td><input type="checkbox" value="1" name=""></td>
                    <!--<td><?php echo $vo['id']; ?></td>-->
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo $vo['email']; ?></td>
                    <td><?php echo $vo['role']; ?></td>
                    <td><?php echo $vo['login_count']; ?></td>
                    <td><?php echo $vo['login_time']; ?></td>
                    <td class="td-status">
                        <?php if ($vo['status'] == '已启用'): ?>
                            <span class="label label-success radius">已启用</span>
                            <!--1-->
                        <?php else: ?>
                            <span class="label radius">已停用</span>
                            <!--0-->
                        <?php endif; ?>
                    </td>
                    <td class="td-manage">
                        <!--切换启用与禁用图标-->
                        <!--只允许admin有权启用或停用-->
                        <?php if (\think\Session::get('user_info.role') == '2'): if ($vo['status'] == '已启用'): ?>
                            <a style="text-decoration:none" onClick="admin_stop(this,'<?php echo $vo['id']; ?>')"
                               href="javascript:;" title="停用">
                                <i class="Hui-iconfont">&#xe631;</i>
                            </a>
                        <?php else: ?>
                            <a style="text-decoration:none" onClick="admin_stop(this,'<?php echo $vo['id']; ?>')"
                               href="javascript:;" title="启用">
                                <i class="Hui-iconfont">&#xe631;</i>
                            </a>
                        <?php endif; endif; ?>
                        <a title="编辑" href="javascript:;"
                           onclick="admin_edit('管理员编辑','<?php echo url("user/adminEdit", ["id" => $vo["id"]]); ?>','1','800','500')"
                           class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <!--<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>-->

                        <!--只允许admin有删除权限-->
                        <?php if (\think\Session::get('user_info.role') == '2'): ?>
                            <a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo $vo['id']; ?>)"
                               class="ml-5" style="text-decoration:none">
                                <i class="Hui-iconfont">&#xe6e2;</i>
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "";endif; ?>
        </tbody>
    </table>

</article>


<!--搜索框-->

<form class="form-search" method="get" action="<?php echo url('Search/index'); ?>" id="search">
    <input id="searchKeyword" name="searchKeyword" value="" class="input-text searchTxt" maxlength="80">
    <input id="searchBtn" name="searchBtn" type="submit" value="搜索" class="btn btn-default searchBtn" onclick="">
</form>


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

</script>

