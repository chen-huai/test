<?php /*a:1:{s:61:"C:\xampp\htdocs\test\application\admin\view\common\login.html";i:1583135370;}*/ ?>
<!DOCTYPE html>
<html class="loginHtml">
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/static/common/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/login.css" />
</head>
<body class="loginBody">
    <div class="stars"></div>
    <form class="layui-form">
        <div class="login_face"><img src="" class="userAvatar"></div>
        <div class="layui-form-item input-item">
            <label for="userName">用户名</label>
            <input type="text" name="account" placeholder="请输入用户名" autocomplete="off" class="layui-input" lay-verify="required" lay-reqText="请输入用户名">
        </div>
        <div class="layui-form-item input-item">
            <label for="password">密码</label>
            <input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input" lay-verify="required" lay-reqText="请输入密码">
        </div>
        <div class="layui-form-item input-item" id="imgCode">
            <label for="code">验证码</label>
            <input type="text" name="captcha" placeholder="请输入验证码" autocomplete="off" class="layui-input" lay-verify="required" lay-reqText="请输入验证码" maxlength="6">
            <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'"/>
        </div>
        <div class="layui-form-item">
            <?php echo token(); ?>
            <button class="layui-btn layui-block" lay-filter="login" lay-submit>登录</button>
        </div>
    </form>
    <script type="text/javascript" src="/static/common/layui/layui.js"></script>
    <script type="text/javascript" src="/static/admin/js/login.js"></script>
    <script type="text/javascript" src="/static/common/js/plugin/starlight.js"></script>
</body>
</html>