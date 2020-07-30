<?php /*a:1:{s:54:"C:\xampp\htdocs\test\application\admin\view\index.html";i:1583135561;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="/static/common/layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/css/index.css" />
</head>
<body class="main_body">
	<div class="layui-layout layui-layout-admin">
		<!-- 顶部 -->
		<div class="layui-header header">
			<div class="layui-main">
				<a href="/admin" class="logo">管理系统</a>
				<!-- 显示/隐藏菜单 -->
				<a href="javascript:void(0)" class="seraph hideMenu icon-caidan"></a>
				<!-- 顶级菜单 -->
				<ul class="layui-nav mobileTopLevelMenus" mobile>
					<li class="layui-nav-item">
						<a href="javascript:void(0)"><i class="seraph icon-caidan"></i><cite>顶级菜单</cite></a>
						<dl class="layui-nav-child">
							<?php if(is_array($topMenu) || $topMenu instanceof \think\Collection || $topMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $topMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<dd <?php if($key == '0'): ?> class="layui-this" <?php endif; ?> data-menu="<?php echo htmlentities($vo['id']); ?>"><a target="<?php echo htmlentities($vo['target']); ?>" <?php if(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty())): ?> href="javascript:void(0)" <?php else: ?> href="<?php echo htmlentities($vo['href']); ?>" <?php endif; ?>><i class="<?php echo htmlentities($vo['icon']); ?>" data-icon="<?php echo htmlentities($vo['icon']); ?>"></i><cite><?php echo htmlentities($vo['name']); ?></cite></a></dd>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</dl>
					</li>
				</ul>
				<ul class="layui-nav topLevelMenus" pc>
					<?php if(is_array($topMenu) || $topMenu instanceof \think\Collection || $topMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $topMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="layui-nav-item <?php if($key == '0'): ?> layui-this <?php endif; ?>" data-menu="<?php echo htmlentities($vo['id']); ?>">
						<a target="<?php echo htmlentities($vo['target']); ?>" <?php if(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty())): ?> href="javascript:void(0)" <?php else: ?> href="<?php echo htmlentities($vo['href']); ?>" <?php endif; ?>><i class="<?php echo htmlentities($vo['icon']); ?>" data-icon="<?php echo htmlentities($vo['icon']); ?>"></i><cite><?php echo htmlentities($vo['name']); ?></cite></a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			    <!-- 顶部右侧菜单 -->
			    <ul class="layui-nav top_menu">
					<li class="layui-nav-item" pc>
						<a href="javascript:void(0)" class="clearCache"><i class="layui-icon" data-icon="&#xe640;">&#xe640;</i><cite>清除缓存</cite><span class="layui-badge-dot"></span></a>
					</li>
					<li class="layui-nav-item lockcms" pc>
						<a href="javascript:void(0)"><i class="seraph icon-lock"></i><cite>锁屏</cite></a>
					</li>
					<li class="layui-nav-item" id="userInfo">
						<a href="javascript:void(0)"><img src="<?php echo htmlentities($loginInfo['head_img']); ?>" class="layui-nav-img userAvatar" width="35" height="35"><cite class="adminName"><?php echo !empty($loginInfo['name']) ? htmlentities($loginInfo['name']) : htmlentities($loginInfo['account']); ?></cite></a>
						<dl class="layui-nav-child">
							<dd><a href="javascript:void(0)" onclick="checkPermission('<?php echo url('/admin/user/personData'); ?>');" data-url="<?php echo url('/admin/user/personData'); ?>"><i class="seraph icon-ziliao" data-icon="icon-ziliao"></i><cite>个人资料</cite></a></dd>
							<dd><a href="javascript:void(0)" class="modifyPwd"><i class="seraph icon-xiugai" data-icon="icon-xiugai"></i><cite>修改密码</cite></a></dd>
							<dd><a href="javascript:void(0)" class="showNotice"><i class="layui-icon">&#xe645;</i><cite>系统公告</cite><span class="layui-badge-dot"></span></a></dd>
							<dd pc><a href="javascript:void(0)" class="functionSetting"><i class="layui-icon">&#xe620;</i><cite>功能设定</cite><span class="layui-badge-dot"></span></a></dd>
							<dd pc><a href="javascript:void(0)" class="changeSkin"><i class="layui-icon">&#xe61b;</i><cite>更换皮肤</cite></a></dd>
							<dd><a href="javascript:void(0)" class="signOut" onclick="logout()"><i class="seraph icon-tuichu"></i><cite>退出</cite></a></dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<!-- 左侧导航 -->
		<div class="layui-side layui-bg-black">
			<div class="user-photo">
				<a class="img" title="我的头像" ><img src="<?php echo htmlentities($loginInfo['head_img']); ?>" class="userAvatar"></a>
				<p>你好！<span class="userName"><?php echo !empty($loginInfo['name']) ? htmlentities($loginInfo['name']) : htmlentities($loginInfo['account']); ?></span>, 欢迎登录</p>
			</div>
			<div class="navBar layui-side-scroll" id="navBar">
				<ul class="layui-nav layui-nav-tree">
					<li class="layui-nav-item layui-this">
						<a href="javascript:void(0)" data-url="page/main.html"><i class="layui-icon" data-icon=""></i><cite>后台首页</cite></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- 右侧内容 -->
		<div class="layui-body layui-form">
			<div class="layui-tab" lay-filter="bodyTab" id="top_tabs_box">
				<ul class="layui-tab-title top_tab" id="top_tabs">
					<li class="layui-this" lay-id=""><i class="layui-icon">&#xe68e;</i> <cite>后台首页</cite></li>
				</ul>
				<ul class="layui-nav closeBox">
				  <li class="layui-nav-item">
				    <a href="javascript:void(0)"><i class="layui-icon caozuo">&#xe643;</i> 页面操作</a>
				    <dl class="layui-nav-child">
					  <dd><a href="javascript:void(0)" class="refresh refreshThis"><i class="layui-icon">&#x1002;</i> 刷新当前</a></dd>
				      <dd><a href="javascript:void(0)" class="closePageOther"><i class="seraph icon-prohibit"></i> 关闭其他</a></dd>
				      <dd><a href="javascript:void(0)" class="closePageAll"><i class="seraph icon-guanbi"></i> 关闭全部</a></dd>
				    </dl>
				  </li>
				</ul>
				<div class="layui-tab-content clildFrame">
					<div class="layui-tab-item layui-show">
						<iframe src="<?php echo url('/admin/main'); ?>"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- 底部 -->
		<div class="layui-footer footer">
			<p><span>copyright @<?php echo date('Y'); ?> <?php echo !empty($loginInfo['name']) ? htmlentities($loginInfo['name']) : htmlentities($loginInfo['account']); ?></span></p>
		</div>
	</div>

	<!-- 移动导航 -->
	<div class="site-tree-mobile"><i class="layui-icon">&#xe602;</i></div>
	<div class="site-mobile-shade"></div>
	<script type="text/javascript" src="/static/common/layui/layui.js"></script>
	<script type="text/javascript" src="/static/admin/js/common.js"></script>
	<script type="text/javascript" src="/static/admin/js/index.js"></script>
	<script type="text/javascript" src="/static/admin/js/cache.js"></script>
</body>
</html>