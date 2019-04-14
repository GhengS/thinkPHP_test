<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" rel="icon" href="<?php echo (IMG_URL); ?>logo.ico" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.3.3.7.min.css">
    <!-- jquery -->
    <script src="<?php echo (JS_URL); ?>jquery.2.1.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo (JS_URL); ?>bootstrap.3.3.7.js"></script>
    <title>Document</title>
    <style>
        * {
            margin: 2px;
            padding: 1px;
        }

        /* 设置容器圆角,边框阴影 */
        .container,
        .container-fluid {
            border-radius: 15px;
            box-shadow: 2px 2px 2px #888888;
        }
    </style>
</head>

<body>
    <!-- logo与搜索 -->
    <div class="container">
        <div class="row center-block">
            <!-- logo -->
            <div class="col-md-5 col-md-offset-1">
                <a href="" style="display:inline-block">
                    <img src="<?php echo (IMG_URL); ?>404.jpg" alt="404" height="70px"
                        style="border-radius:15px;box-shadow:2px 2px 2px #888888">
                </a>
            </div>
            <!-- 搜索 -->
            <div class="col-md-5 pull-right">
                <h2>
                    <form class="form-inline">
                        <div class="form-group">
                            <label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="搜索...">
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary ">提交</button>
                    </form>
                </h2>
            </div>
        </div>
    </div>
    <!-- 导航栏 -->
    <div class="conatiner-fluid">
        <div class="row text-center " style="background-color:#000000">
            <h1><a href="">ThinkShop</a></h1>
            <h1>
                <a href="">
                    导航栏 | 导航 | 导航 | 导航 | 导航 | 导航
                </a>
            </h1>
        </div>
    </div>
    <!-- 主体 -->
    <div class="container" style="box-shadow: 2px 2px 2px #888888">
        <div class="article text-center">
            <h1>
                404 NOT FOUND
            </h1>
        </div>
        <div class="article-body">
            <h3>没有找到您请求的文件</h3>
            <p style="text-align:center;">
                <img src="<?php echo (IMG_URL); ?>404.jpg" alt="404"
                    style="border-radius:15px;box-shadow:2px 2px 2px #888888">
            </p>
            <p>
                404页面是网站必备的一个页面,它承载着用户体验与SEO的重任.404页面通常为用户访问了网站上不存在,或已经删除的页面,服务器返回的404错误,如果站长没有设置404页面,会出现死链接,蜘蛛爬行这类网站时,不利于搜索引擎收录.
            </p>
            <h3>404 Not Found 由来</h3>
            <p>据说在第三次科技革命之前，互联网的形态就是一个大型的中央数据库，这个数据库就设置在404房间里面。那时候所有的请求都是由人工手动完成的，如果在数据库中没有找到请求者所需要的文件，或者由于请求者写错了文件编号，用户就会得到一个返回信息：room
                404 : file not found。后来互联网兴起后，人们也就习惯了用404作为服务器未找到文件的错误代码了。当然实际考证传说中的room 404是不存在的。
            </p>

            <h3>设置404页面的两大好处</h3>
            <ul>
                <li>引导用户不要关闭网站,增强用户体验</li>
                <li>防止网站出现死链</li>
            </ul>
            <p>查看更多 <a href="http://www.runoob.com/http/http-status-codes.html">HTTP状态码介绍</a></p>
        </div>
    </div>
    </div>
    </div>
</body>

</html>