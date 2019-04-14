<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- 确保适当的绘制和触屏缩放,禁用zooming缩放 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link type="image/x-icon" rel="icon" href="<?php echo (IMG_URL); ?>logo.ico" />
    <title>页面</title>
    <!-- Bootstrap层叠样式表 -->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.3.3.7.min.css">
    <!-- 引入jQuery -->
    <script src="<?php echo (JS_URL); ?>jquery.3.3.7.min.js"></script>
    <!-- bootstrap页面交互代码     -->
    <script src="<?php echo (JS_URL); ?>bootstrap.3.3.7.min.js"></script>
    <style>

    </style>
</head>

<body>
    <!-- 上端的导航栏 -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <h2>
                <a href="">导航 |</a>
                <a href="">导航 |</a>
                <a href="">导航 |</a>
                <a href="">导航</a>
            </h2>
        </div>
    </div>
    <!-- 分割线 -->
    <div class="container">
        <hr>
    </div>
    <!-- 登录表单 -->
    <div class="container">
        <form action="" method="get" role="form">
            <div class="form-group">
                <label for="username">用户名:</label><input type="text" placeholder="请输入用户名字" class="form-control"
                    id="username">
            </div>
            <div class="form-group">
                <label for="password">密&nbsp;&nbsp;码:</label><input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="inputfile">请选择文件:</label>
                <input type="file" id="inputfile">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="check_agree"><label for="check_agree">我已阅读并同意本协议</label><br>
            </div>
            <input type="submit" class="btn btn-default">
        </form>
    </div>
</body>

</html>