<?php /*a:2:{s:59:"C:\xampp\htdocs\test\application\admin\view\main\index.html";i:1583135370;s:53:"C:\xampp\htdocs\test\application\admin\view\base.html";i:1583135369;}*/ ?>
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
	
<blockquote class="layui-elem-quote layui-bg-green">
    <div id="nowTime"></div>
</blockquote>
<div class="layui-row layui-col-space10 panel_box">
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)" data-url="" target="_blank">
            <div class="panel_icon layui-bg-green">
                <i class="layui-anim seraph icon-good"></i>
            </div>
            <div class="panel_word">
                <span>为我点赞</span>
                <cite>点赞地址链接</cite>
            </div>
        </a>
    </div>
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)" data-url="" target="_blank">
            <div class="panel_icon layui-bg-black">
                <i class="layui-anim seraph icon-github"></i>
            </div>
            <div class="panel_word">
                <span>Github</span>
                <cite>模版下载链接</cite>
            </div>
        </a>
    </div>
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)" data-url="" target="_blank">
            <div class="panel_icon layui-bg-red">
                <i class="layui-anim seraph icon-oschina"></i>
            </div>
            <div class="panel_word">
                <span>码云</span>
                <cite>模版下载链接</cite>
            </div>
        </a>
    </div>
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)" data-url="">
            <div class="panel_icon layui-bg-orange">
                <i class="layui-anim seraph icon-icon10" data-icon="icon-icon10"></i>
            </div>
            <div class="panel_word userAll">
                <span></span>
                <em>用户总数</em>
                <cite class="layui-hide">用户中心</cite>
            </div>
        </a>
    </div>
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)" data-url="">
            <div class="panel_icon layui-bg-cyan">
                <i class="layui-anim layui-icon" data-icon="&#xe857;">&#xe857;</i>
            </div>
            <div class="panel_word outIcons">
                <span></span>
                <em>外部图标</em>
                <cite class="layui-hide">图标管理</cite>
            </div>
        </a>
    </div>
    <div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
        <a href="javascript:void(0)">
            <div class="panel_icon layui-bg-blue">
                <i class="layui-anim seraph icon-clock"></i>
            </div>
            <div class="panel_word">
                <span class="loginTime"><?php echo htmlentities($loginInfo['login_time']); ?></span>
                <cite>登录时间</cite>
            </div>
        </a>
    </div>
</div>
<div class="layui-row layui-col-space10">
    <div class="layui-col-lg6 layui-col-md12">
        <blockquote class="layui-elem-quote title">系统基本参数</blockquote>
        <table class="layui-table magt0">
            <colgroup>
                <col width="150">
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <td>IP地址</td>
                    <td><?php echo htmlentities($data['ip']); ?></td>
                </tr>
                <tr>
                    <td>当前版本</td>
                    <td><?php echo htmlentities($data['this_version']); ?></td>
                </tr>
                <tr>
                    <td>操作系统</td>
                    <td><?php echo htmlentities($data['system']); ?></td>
                </tr>
                <tr>
                    <td>PHP版本</td>
                    <td><?php echo htmlentities($data['php_version']); ?></td>
                </tr>
                <tr>
                    <td>运行环境</td>
                    <td><?php echo htmlentities($data['sapi']); ?></td>
                </tr>
                <tr>
                    <td>基于框架</td>
                    <td><?php echo htmlentities($data['frame']); ?></td>
                </tr>
                <tr>
                    <td>数据库版本</td>
                    <td><?php echo htmlentities($data['database_version']); ?></td>
                </tr>
                <tr>
                    <td>服务器信息</td>
                    <td><?php echo htmlentities($data['server']); ?></td>
                </tr>
                <tr>
                    <td>最大上传限制</td>
                    <td><?php echo htmlentities($data['max_upload_size']); ?></td>
                </tr>
                <tr>
                    <td>执行时间限制</td>
                    <td><?php echo htmlentities($data['execution_time']); ?></td>
                </tr>
                <tr>
                    <td>剩余空间大小</td>
                    <td><?php echo htmlentities($data['remain_room_size']); ?></td>
                </tr>
                <tr>
                    <td>当前所属角色</td>
                    <td><?php echo htmlentities($loginInfo['role_name']); ?></td>
                </tr>
            </tbody>
        </table>
        <blockquote class="layui-elem-quote title">最新文章 <i class="layui-icon layui-red">&#xe756;</i></blockquote>
        <table class="layui-table mt-0" lay-skin="line">
            <colgroup>
                <col>
                <col width="110">
            </colgroup>
            <tbody class="hot_news">
                <tr><td align="left"><a href="javascript:void(0)"> testtest</a></td><td>2019-11-11</td></tr>
            </tbody>
        </table>
    </div>
    <div class="layui-col-lg6 layui-col-md12">
    </div>
</div>

	<script type="text/javascript" src="/static/common/layui/layui.js"></script>
	<script type="text/javascript">
		layui.use(['jquery','layer'],function(){
			$ = layui.jquery;
			layer = parent.layer === undefined ? layui.layer : parent.layer;
		});
	</script>
	<script type="text/javascript" src="/static/admin/js/common.js"></script>
	
<script type="text/javascript" src="/static/admin/js/main.js"></script>

</body>
</html>