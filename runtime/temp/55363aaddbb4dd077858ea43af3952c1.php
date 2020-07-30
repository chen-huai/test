<?php /*a:2:{s:59:"C:\xampp\htdocs\test\application\admin\view\menu\index.html";i:1583135371;s:53:"C:\xampp\htdocs\test\application\admin\view\base.html";i:1583135369;}*/ ?>
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
    <div class="layui-btn-group">
        <button class="layui-btn layui-btn-sm" id="expand-btn">全部展开</button>
        <button class="layui-btn layui-btn-sm" id="fold-btn">全部折叠</button>
        <button class="layui-btn layui-btn-sm" id="refresh-btn">刷新表格</button>
        <button class="layui-btn layui-btn-sm" id="add-btn">添加菜单</button>
    </div>
</blockquote>
<table id="tableList" lay-filter="tableList"></table>
<script type="text/html" id="tableListBar">
    {{# if(d.type != 3){ }}
    <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="add">添加</a>
    {{# }else{ }}
    <a class="layui-btn layui-btn-xs layui-btn-disabled">添加</a>
    {{# } }}
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
</script>

	<script type="text/javascript" src="/static/common/layui/layui.js"></script>
	<script type="text/javascript">
		layui.use(['jquery','layer'],function(){
			$ = layui.jquery;
			layer = parent.layer === undefined ? layui.layer : parent.layer;
		});
	</script>
	<script type="text/javascript" src="/static/admin/js/common.js"></script>
	
<script type="text/javascript" src="/static/admin/js/menu/index.js"></script>

</body>
</html>