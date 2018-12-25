<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\member\member-list.html";i:1544582078;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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


    <title><?php echo(isset($title) && ($title !== '') ? $title : '页面标题'); ?></title>
    <meta name="keywords" content="<?php echo(isset($keywords) && ($keywords !== '') ? $keywords : '页面关键字'); ?>">
    <meta name="description" content="<?php echo(isset($desc) && ($desc !== '') ? $desc : '页面描述'); ?>">

</head>
<body>


<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span
            class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r"
                                                  style="line-height:1.6em;margin-top:3px"
                                                  href="javascript:location.replace(location.href);" title="刷新"><i
                class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20">
        <!--<a href="javascript:;" onclick="member_add('添加用户','<?php echo url("member/addMember"); ?>','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span>-->
        <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value="">
                </th>
                <th width="80">ID
                </th>
                <th width="">微信会员编号
                </th>
                <th width="">姓名
                </th>
                <th width="">电话
                </th>
                <th width="">积分
                </th>
                <th width="">累计积分
                </th>
                <th width="">小程序OPENID
                </th>
                <th width="">服务号OPENID
                </th>
                <th width="">开放平台
                </th>
                <th width="">会员卡号
                </th>
                <th>卡密码
                </th>
                <th>卡类型
                </th>
                <th>开卡店仓
                </th>
                <th>有效
                </th>
                <th>版本信息号
                </th>
                <th>操作
                </th>

            </tr>
            </thead>
            <tbody>
            <?php if (is_array($member) || $member instanceof \think\Collection || $member instanceof \think\Paginator): $i = 0;
                $__LIST__ = $member;
                if (count($__LIST__) == 0) : echo "";
                else: foreach ($__LIST__ as $key => $vo): $mod = ($i % 2);
                    ++$i; ?>
                    <tr class="text-c">
                        <td><input type="checkbox" value="1" name=""></td>
                        <td><?php echo $vo['ID']; ?></td>
                        <td><?php echo $vo['CODE']; ?></td>
                        <td><?php echo $vo['VIPNAME']; ?></td>
                        <td><?php echo $vo['MOBIL']; ?></td>
                        <td><?php echo $vo['INTEGRAL']; ?></td>
                        <td><?php echo $vo['LJJNTEGRAL']; ?></td>
                        <td><?php echo $vo['OPENID_XCX']; ?></td>
                        <td><?php echo $vo['OPENID_FFH']; ?></td>
                        <td><?php echo $vo['UNIONID']; ?></td>
                        <td><?php echo $vo['CARDNO']; ?></td>
                        <td><?php echo $vo['PASS_WORD']; ?></td>
                        <td><?php echo $vo['C_VIPTYPE']; ?></td>
                        <td><?php echo $vo['C_STORE_ID']; ?></td>
                        <td><?php echo $vo['VIPSTATE']; ?></td>
                        <td><?php echo $vo['MSGVAR']; ?></td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;"
                               onclick="member_edit('编辑','<?php echo url("member/memberEdit", ["ID" => $vo["ID"]]); ?>','4','','510')"
                               class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                            <!--<a style="text-decoration:none" class="ml-5" onClick="change_password('修改密码','<?php echo url("member/MemberPw", ["ID" => $vo["ID"]]); ?>','10001','600','270')" href="javascript:;" title="修改密码">-->
                            <!--<i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>-->
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "";endif; ?>
            </tbody>
        </table>
    </div>
    <!--显示分页按钮-->
    <div><?php echo $page; ?></div>

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
        layer.confirm('确认要停用吗？', function (index) {
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!', {icon: 5, time: 1000});
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        });
    }

    /*用户-启用*/
    function member_start(obj, id) {
        layer.confirm('确认要启用吗？', function (index) {
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!', {icon: 6, time: 1000});
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        });
    }

    /*用户-编辑*/
    function member_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    /*密码-修改*/
    function change_password(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    /*用户-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        });
    }
</script> 

