<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>创学公众</title>

    <!-- Fonts -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            height: 100%;
            background: #fff;
            font-family: "Avenir Next", "PingFang SC", "Helvetica Neue", "Microsoft Yahei", "微软雅黑", sans-serif;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        a:hover, a:focus {
            text-decoration: none;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 25px;
            position: fixed;
            left: 0;
            top: 0;
            background: #fff;
            /*box-shadow: 0 1px 3px rgba(0, 0, 0, .2);*/
        }

        .header > ul {
            text-align: right;
            display: block;
            margin-right: 30px;
            flex: 1;
        }

        .header > ul > li {
            display: inline-block;
            margin: 0 18px;
            font-size: 1.15em;
        }

        .logo {
            text-align: left;
            margin-left: 30px;
        }

        .logo > a {
            display: block;
            width: 60px;
        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .typed-out {
            animation: typing steps(3) 1.4s, blink .7s step-end infinite;
            animation-fill-mode: both;
            white-space: nowrap;
            overflow: hidden;
            font-size: 2em;
            border-right: 4px solid rgba(0, 0, 0, .95);
        }

        .flex {
            display: flex;
            justify-content: center;

        }

        /* 创学圈 */
        .cx-zone {
            width: 100%;
            height: 100%;
            background-color: #d9e6e4;
            margin-top: 110px;
            padding: 50px 0;
        }

        .cx-zone .typed-out {
            width: calc(5ch + 5px);
            font-size: 3em;
        }

        /* 不得不玩的圈儿 */
        .must-play {
            width: 100%;
            height: 100%;
            background-color: #f3f9f1;
            padding: 50px 0;
        }

        .must-play .typed-out {
            width: 12ch;
            animation: typing steps(7) 1.4s .3s, blink .7s step-end infinite;
        }

        /* 圈子里的那些事儿 */
        .those-things {
            width: 100%;
            height: 100%;
            background-color: #e5eedc;
            padding: 50px 0;
        }

        .those-things .typed-out {
            width: calc(13ch + 12px);
            animation: typing steps(8) 1.4s .7s, blink .7s step-end infinite;
        }

        @keyframes typing {
            0% {
                width: 0;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }
    </style>
    <!-- Styles -->

</head>
<body>
<header class="header">
    <!-- Left side logo -->
    <div class="logo">
        <a href="/">
            <img src="/assets/logo.png" alt="Logo">
        </a>
    </div>
    <!-- Right side list -->
    <ul>
        <li>
            <!-- Login -->
            <a href="#">登录</a>
        </li>
        <li>
            <!-- Register -->
            <a href="#">注册</a>
        </li>
        <li>
            <!-- Help -->
            <a href="#">客服</a>
        </li>
    </ul>
</header>
<section class="cx-zone">
    <div class="flex full-flex">
        <h1 class="typed-out">
            创学圈
        </h1>
    </div>
</section>
<section class="must-play">
    <div class="flex full-flex">
        <h1 class="typed-out">
            不得不玩的圈儿
        </h1>
    </div>
</section>
<section class="those-things">
    <div class="flex full-flex">
        <h1 class="typed-out">
            圈子里的那些事儿
        </h1>
    </div>
</section>
<footer class="footer">
    <div class="flex">
        <ul class="">
            <li>
                <a href="#">公司简介</a>
            </li>
            <li>
                <a href="#">合作伙伴</a>
            </li>
            <li>
                <a href="#">加入我们</a>
            </li>
        </ul>
    </div>
</footer>
<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
