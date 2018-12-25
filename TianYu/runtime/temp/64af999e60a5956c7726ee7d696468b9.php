<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\shop\Shop_del.html";i:1542359648;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1541058653;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402616;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402871;}*/ ?>
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
                                <?php if ($vo['is_delete'] == '1'): ?>
                                    <span class="label label-danger radius">已删除</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $vo['CUSTOMER']; ?></td>
                            <td><?php echo $vo['QRCODE']; ?></td>
                            <td><?php echo $vo['SUPPLEMENT']; ?></td>
                            <td class="td-manage">
                                <a style="text-decoration:none" href="javascript:;" onClick="member_huanyuan(this,'1')"
                                   title="还原">
                                    <i class="Hui-iconfont">&#xe66b;</i></a>

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

    $(function () {
        $('.table-sort').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 8, 9]}// 制定列不参与排序
            ]
        });
    });

    /*用户-还原*/
    function member_huanyuan(obj, id) {
        $.get("<?php echo url('shop/unDel'); ?>", {id: id});
        layer.confirm('确认要还原吗？', function (index) {
            $(obj).remove();
            layer.msg('已还原!', {icon: 6, time: 1000});
        });
    }


</script>
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>