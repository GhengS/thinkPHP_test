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
    p {
        /* background-color: #9f9f9f; */
    }


    .nav-bar,
    .left-side-bar,
    .right-side-bar,
    .main-bar {
        margin-top: 30px;
    }
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

    <!-- 分隔符 -->
    <div class="container">
        <hr>
    </div>

    <!-- 主体内容 -->
    <div class="row main-bar">
        <!-- 左侧的侧边栏 -->
        <div class="container col-md-2 col-md-offset-2 side-bar text-center ">
            <div>
                <p>
                    <h3><a href="" id="model1">模块</a></h3>
                </p>
            </div>
            <div>
                <p>
                    <h3><a href="">模块</a></h3>
                </p>
            </div>
            <div>
                <p>
                    <h3><a href="">模块</a></h3>
                </p>
            </div>
            <div>
                <p>
                    <h3><a href="">模块</a></h3>
                </p>
            </div>
            <div>
                <p>
                    <h3><a href="">模块</a></h3>
                </p>
            </div>
            <div>
                <p>
                    <h3><a href="">模块</a></h3>
                </p>
            </div>
        </div>
        <!-- 右侧的主体内容 -->
        <div class="container col-md-6 col-md-offset-0" style=" min-height:500px;box-shadow:0 0 2px 2px #9f9f9f"
            id="main-content">
            这里是登录界面
        </div>
    </div>
    <script>
        // $(document).ready(function(){
        //     $("a").click(function(){
        //         $(this).hide();
        //     });
        // })
        $(document).ready(function () {
            $("#model1").click(function () {
                $(this).hide();
            });
        });

    </script>
</body>

</html>