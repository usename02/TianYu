<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:77:"D:\wamp64\www\h_ui_tp5\public/../application/index\view\admin\admin-list.html";i:1544692860;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_base.html";i:1543975768;s:63:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_meta.html";i:1541402618;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_search.html";i:1543976040;s:65:"D:\wamp64\www\h_ui_tp5\application\index\view\public\_footer.html";i:1541402872;}*/ ?>
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


    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo(isset($keywords) && ($keywords !== '') ? $keywords : '页面关键字'); ?>">
    <meta name="description" content="<?php echo(isset($desc) && ($desc !== '') ? $desc : '页面描述'); ?>">

</head>
<body>


<nav class="breadcrumb">

    <i class="Hui-iconfont">&#xe67f;</i>
    首页 <span class="c-gray en">&gt;</span>
    管理员管理 <span class="c-gray en">&gt;</span>
    管理员列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
       href="javascript:location.replace(location.href);" title="刷新">
        <i class="Hui-iconfont">&#xe68f;</i></a>

</nav>

<div class="page-container">
    <!--如果是admin显示用户数量及添加按钮,管理员可以添加其它用户没必要显示-->

    <div class="cl pd-5 bg-1 bk-gray mt-20">

        <?php switch (\think\Session::get('user_info.role')): case "2": ?>
            <span class="l"><a href="javascript:;" onclick="unDelete()" class="btn btn-danger radius">
			<i class="Hui-iconfont">&#xe6e2;</i> 批量恢复</a>

						<a href="javascript:;"
                           onclick="admin_add('添加管理员','<?php echo url("user/adminAdd"); ?>','800','500')"
                           class="btn btn-primary radius">
			<i class="Hui-iconfont">&#xe600;</i> 添加管理员</a>
		</span>
            <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
            <?php break;
            case "1": ?>
                <span class="l">
						<a href="javascript:;"
                           onclick="admin_add('添加管理员','<?php echo url("user/adminAdd"); ?>','800','500')"
                           class="btn btn-primary radius">
							<i class="Hui-iconfont">&#xe600;</i> 添加管理员</a>
		</span>
                <?php break;
            case "0":
                break; endswitch; ?>
        <!--搜索框-->

        <table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer"
               id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

            <table class="table table-border table-bordered table-bg">
                <thead>
                <tr>
                    <th scope="col" colspan="9">管理员列表</th>

                </tr>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" name="" value=""></th>
                    <th width="40">ID</th>
                    <th>员工号</th>
                    <th width="70">用户名</th>
                    <th width="100">邮箱</th>
                    <th>手机号</th>
                    <th>店仓编号</th>
                    <th>在职状态</th>
                    <th width="100">角色</th>
                    <th width="50">登陆次数</th>
                    <th width="100">上次登陆时间</th>
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
                            <td><?php echo $vo['id']; ?></td>
                            <td><?php echo $vo['NO']; ?></td>
                            <td><?php echo $vo['name']; ?></td>
                            <td><?php echo $vo['email']; ?></td>
                            <td><?php echo $vo['HANDSET']; ?></td>
                            <td><?php echo $vo['STORE']; ?></td>
                            <td><?php echo $vo['INCUMBENCY_STS']; ?></td>
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
                                    <a style="text-decoration:none"
                                       onClick="admin_stop(this,'<?php echo $vo['id']; ?>')" href="javascript:;"
                                       title="停用">
                                        <i class="Hui-iconfont">&#xe631;</i>
                                    </a>
                                <?php else: ?>
                                    <a style="text-decoration:none"
                                       onClick="admin_stop(this,'<?php echo $vo['id']; ?>')" href="javascript:;"
                                       title="启用">
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

        </table>
        <!--显示分页按钮-->
        <!--获取数据总数，计算页数和显示的数据以及偏移量。prev-->
        <!--将分页数据初始化，对头部和尾部省略处理 dasta-->
        <!--设置分页条样式显示即可 bootstarp6-->
        <?php echo $page; ?>
    </div>
</div>


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
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/h_ui_tp5/public/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    /*
        参数解释：
        title	标题
        url		请求的url
        id		需要操作的数据id
        w		弹出层宽度（缺省调默认值）
        h		弹出层高度（缺省调默认值）
    */
    /*管理员-增加*/
    function admin_add(title, url, w, h) {
        $.post(url);
        layer_show(title, url, w, h);
    }

    /*管理员-删除*/
    function admin_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('user/deleteUser'); ?>", {id: id})
            //remove()从DOM中删除所有匹配的元素。
            //parents()取得一个包含着所有匹配元素的祖先元素的元素集合（不包含根元素）。可以通过一个可选的表达式进行筛选。

            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });

    }

    /*管理员-编辑*/
    function admin_edit(title, url, id, w, h) {
        $.get(url, {id: id}); //执行控制器中的编辑操作
        layer_show(title, url, w, h);
    }

    /*管理员-停用*/
    function admin_stop(obj, id) {

        layer.confirm('确认要停用吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('user/setStatus'); ?>", {id: id});

            $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,' + id + ')" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
            $(obj).remove();
            layer.msg('已停用!', {icon: 5, time: 1000});
        });
    }

    /*管理员-启用*/
    function admin_start(obj, id) {
        layer.confirm('确认要启用吗？', function (index) {
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('user/setStatus'); ?>", {id: id});

            $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,' + id + ')" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!', {icon: 6, time: 1000});
        });
    }

    //批量恢复
    function unDelete() {

        layer.confirm('确认要恢复吗？', function () {
            $.get("<?php echo url('user/unDelete'); ?>");

            layer.msg('已恢复!', {icon: 1, time: 1000}); //消息弹层1秒后消失
            window.location.reload(); //重新加载页面,显示所有数据
        });
    }

    //查询数据
    //     $(document).ready(function b_onclick(){
    //         var xhr=null;
    //         $('input[name="searchKeyword"]').keyup(function() {
    //             if(xhr){
    //                 xhr.abort();//如果存在ajax的请求，就放弃请求
    //             }
    //             var inputText= $.trim(this.value);
    //             if(inputText!="")//检测键盘输入的内容是否为空，为空就不发出请求
    //             {
    //                 xhr=$.ajax(
    //                     {
    //                     type: 'GET',
    //                     url: 'service/suggestion.php',
    //                     cache:false,//不从浏览器缓存中加载请求信息
    //                     data: "keyword=" + inputText,//向服务器端发送的数据
    //                     dataType: 'json',//服务器返回数据的类型为json
    //                     success: function (json)
    // 					{
    //                         if (json.length != 0));
    //                             lists+="</ul>";
    //
    //                             $("#searchBox").html(lists).show();//将搜索到的结果展示出来
    //
    //                             $("li").click(function(){
    //                                 $("#keyword").val($(this).text());//点击某个li就会获取当前的值
    //                                 $("#searchBox").hide();
    //                             })
    //
    //                         } else {
    //                             $("#searchBox").hide();
    //                         }
    //                     }
    //                 });
    //             }else{
    //                 $("#searchBox").hide();//没有查询结果就隐藏搜索框
    //             }
    //         }).blur(function(){
    //             $("#searchBox").hide();//输入框失去焦点的时候就隐藏搜索框
    //         });
    //
    //     });
</script>

