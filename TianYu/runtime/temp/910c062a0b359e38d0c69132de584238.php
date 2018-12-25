<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\shop\shop_list.html";i:1544521641;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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


<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i>
    首页 <span class="c-gray en">&gt;</span>
    商铺管理 <span class="c-gray en">&gt;</span>
    商铺列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
           href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="Hui-article">
    <article class="cl pd-20">

        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <?php switch (\think\Session::get('user_info.role')): case "2": ?>
                <span class="l">
					<a href="javascript:;" onclick="unDelete()" class="btn btn-danger radius">
						<i class="Hui-iconfont">&#xe6e2;</i>
						批量恢复
					</a>
					<a href="javascript:;" onclick="member_add('添加商铺','<?php echo url("shop/ShopAdd"); ?>','','510')"
                       class="btn btn-primary radius">
						<i class="Hui-iconfont">&#xe600;</i>
						添加商铺
                    </a>
				</span>
                <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
                <?php break;
                case "1": ?>
                    <a href="javascript:;" onclick="member_add('添加商铺','<?php echo url("shop/ShopAdd"); ?>','','510')"
                       class="btn btn-primary radius">
                        <i class="Hui-iconfont">&#xe600;</i>
                        添加商铺
                    </a>
                    <?php break;
                case "0":
                    break; endswitch; ?>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <!--<th width="50">ID</th>-->
                    <!--<th width="50">storeID</th>-->
                    <th width="30">系统编号</th>
                    <th width="30">店仓名</th>
                    <th width="90">店仓类别</th>
                    <th width="50">是否允许零售</th>
                    <th width="100">城市</th>
                    <th width="100">店铺状态</th>
                    <th width="50">所属经销商</th>
                    <th width="100">二维码</th>
                    <th width="100">细节补充</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if (is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0;
                    $__LIST__ = $shop;
                    if (count($__LIST__) == 0) : echo "";
                    else: foreach ($__LIST__ as $key => $vo): $mod = ($i % 2);
                        ++$i; ?>
                        <tr class="text-c">

                            <!--<td><?php echo $vo['ID']; ?></td>-->
                            <!--<td><?php echo $vo['storeID']; ?></td>-->
                            <td><?php echo $vo['CODE']; ?></td>
                            <td><?php echo $vo['NAME']; ?></td>
                            <td><?php echo $vo['TYPE']; ?></td>
                            <td><?php echo $vo['ISRETAIL']; ?></td>
                            <td><?php echo $vo['CITY']; ?></td>
                            <td class="td-status">
                                <!--根据当前SHOP表中status值来确定显示内容-->
                                <?php if ($vo['STATUS'] == '1'): ?>
                                    <span class="label label-success radius">待售</span>
                                <?php else: ?>
                                    <span class="label radius">已售</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $vo['CUSTOMER']; ?></td>
                            <td><?php echo $vo['QRCODE']; ?></td>
                            <td><?php echo $vo['SUPPLEMENT']; ?></td>

                            <td class="td-manage">
                                <?php if ($vo['STATUS'] == '1'): ?>
                                    <a style="text-decoration:none"
                                       onClick="member_stop(this,'<?php echo $vo['ID']; ?>')" href="javascript:;"
                                       title="已售">
                                        <i class="Hui-iconfont">&#xe631;</i>
                                    </a>
                                <?php else: ?>
                                    <a style="text-decoration:none"
                                       onClick="member_start(this,'<?php echo $vo['ID']; ?>')" href="javascript:;"
                                       title="待售">
                                        <i class="Hui-iconfont">&#xe615;</i>
                                    </a>
                                <?php endif; ?>
                                <a title="编辑" href="javascript:;"
                                   onclick="member_edit('商铺编辑','<?php echo url("shop/shopEdit", ["id" => $vo["ID"]]); ?>','','510')"
                                   class="ml-5" style="text-decoration:none">
                                    <i class="Hui-iconfont">&#xe6df;</i>
                                </a>
                                <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo $vo['ID']; ?>')"
                                   class="ml-5" style="text-decoration:none">
                                    <i class="Hui-iconfont">&#xe6e2;</i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; endif; else: echo "";endif; ?>
                </tbody>
            </table>
        </div>
    </article>
</div>


<script type="text/javascript" src="/h_ui_tp5/public/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/h-ui.admin/js/H-ui.admin.js"></script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

    /*用户-添加*/
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }

    /*用户-查看*/
    function member_show(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    /*用户-停用*/
    function member_stop(obj, id) {
        layer.confirm('确认将未售卖状态变成已售吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('shop/setStatus'); ?>", {id: id});

            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="未售"><i class="Hui-iconfont">&#xe6e1;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已售</span>');
            $(obj).remove();
            layer.msg('已停用!', {icon: 5, time: 1000});
        });
    }

    /*用户-启用*/
    function member_start(obj, id) {
        layer.confirm('确认要启用吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('shop/setStatus'); ?>", {id: id});

            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">未售</span>');
            $(obj).remove();
            layer.msg('已启用!', {icon: 6, time: 1000});
        });
    }

    /*用户-编辑*/
    function member_edit(title, url, w, h) {
        $.get(url); //执行控制器中的编辑操作
        layer_show(title, url, w, h);
    }

    /*用户-删除*/
    function member_del(obj, id) {

        $.get("<?php echo url('shop/deleteShop'); ?>", {id: id});
        layer.confirm('确认要删除吗？', function (index) {
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }

    //批量恢复
    function unDelete() {
        layer.confirm('确认要恢复吗？', function () {
            $.get("<?php echo url('shop/unDelete'); ?>");

            layer.msg('已恢复!', {icon: 1, time: 1000}); //消息弹层1秒后消失
            window.location.reload(); //重新加载页面,显示所有数据
        });

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->

