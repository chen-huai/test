<?php /*a:2:{s:59:"C:\xampp\htdocs\test\application\admin\view\user\index.html";i:1583135372;s:53:"C:\xampp\htdocs\test\application\admin\view\base.html";i:1583135369;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="/static/common/layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css" />
	
</head>
<body class="childrenBody">
	
<blockquote class="layui-elem-quote quoteBox">
    <form class="layui-form layui-row layui-col-space3">
        <div class="layui-col-md2 layui-col-sm3 layui-col-xs12">
            <input type="text" class="layui-input" name="name,account" placeholder="姓名 / 登录账号" autocomplete="off">
        </div>
        <div class="layui-col-md2 layui-col-sm3 layui-col-xs6">
            <select name="role_id">
                <option value="">所属角色</option>
                <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="layui-col-md2 layui-col-sm3 layui-col-xs6">
            <select name="status">
                <option value="">状态</option>
                <option value="1">启用</option>
                <option value="0">禁用</option>
            </select>
        </div>
        <div class="layui-col-md2 layui-col-sm3 layui-col-xs12 magt5">
            <div class="layui-btn-group">
                <button class="layui-btn layui-btn-sm" lay-submit lay-filter="search">查询</button>
                <button type="button" class="layui-btn layui-btn-sm" id="add-btn">添加用户</button>
            </div>
        </div>
    </form>
</blockquote>
<table id="tableList" lay-filter="tableList"></table>
<script type="text/html" id="tableListBar">
    <?php if($loginInfo['id'] != '10000'): ?>
    {{# if(d.id != 10000){ }}
    <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="resetPassword">重置</a>
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
    {{# } }}
    <?php else: ?>
    <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="resetPassword">重置</a>
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    {{# if(d.id !== 10000){ }}
    <a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
    {{# }else{ }}
    <a class="layui-btn layui-btn-xs layui-btn-disabled">删除</a>
    {{# } }}
    <?php endif; ?>
</script>

	<script type="text/javascript" src="/static/common/layui/layui.js"></script>
	<script type="text/javascript">
		layui.use(['jquery','layer'],function(){
			$ = layui.jquery;
			layer = parent.layer === undefined ? layui.layer : parent.layer;
		});
	</script>
	<script type="text/javascript" src="/static/admin/js/common.js"></script>
	
<script type="text/javascript" src="/static/admin/js/user/index.js"></script>

</body>
</html>