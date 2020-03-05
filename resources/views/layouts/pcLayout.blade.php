<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>达乐科技</title>
  <link rel="shortcut icon" href="/images/logoicon.png" type="image/x-icon">
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
  <link type=text/css rel="stylesheet" href="/css/base/font.css">
  <link type=text/css rel="stylesheet" href="/css/base/animate.css">
  <link type=text/css rel="stylesheet" href="/css/base/base.css">
  <link type=text/css rel="stylesheet" href="/css/base/case.css">
  @yield('css-insert')
</head>
<body>
    <div id="nav" class="nav whiteNav">
        <div class="nav-content">
            <a href="/" class="nav-logo_wrap"></a>
            <div class="nav-func">
            <a id="navRoot" href="/" class="nav-func_item">首页</a>
            <a id="navRoot" href="/" class="nav-func_item">微商城解决方案</a>
            <div id="marketing" class="nav-func_item nav-more">
                互联网营销
                <i class="arrow-down iconfont iconicon_nav_downArrow"></i>
                <div class="more-list">
                <a href="/website" class="more-item">网站建设</a>
                <a href="/weChat" class="more-item">微信公众号运营</a>
                <a class="more-item">其他服务</a>
                </div>
            </div>
            <a id="clientCases" href="/cases?categoryId=0" class="nav-func_item">案例</a>
            <a id="customize" href="/customize" class="nav-func_item" data-count="pc-顶部导航_首页">定制开发</a>
            <!-- <a id="navRoot" href="/" class="nav-func_item" data-count="pc-顶部导航_首页">案例</a> -->
            <div id="us" class=" nav-func_item nav-more">
                关于我们
                <i class="arrow-down iconfont iconicon_nav_downArrow"></i>
                <div class="more-list">
                <a href="/aboutUs" class="more-item">公司简介</a>
                <a href="/news?id=1" class="more-item">热点资讯</a>
                </div>
            </div>
            </div>
            <div class="phone">
            {{-- <a href="http://mini.hich-tech.com" target="_blank" class="login-btn SmallBtnType22">登录/注册</a> --}}
            <img src="/images/phone.svg" class="phone-icon">
            <span>0511-85967767</span>
            </div>
        </div>
    </div>
    <div id="nav-space" class="nav-space"></div>

    @yield('content')

    <div class="bg161E30">
        <div class="footer">
        <div class="footer-content">
            <div class="foot">
            <h2 class="tel">0511-85967767</h2>
            <p class="time">周一至周日 9:00-21:30</p>
            <div class="logo-footer">
                <img src="/images/footer_logo.png" alt="">
            </div>
            </div>

            <dl>
            <dt>产品与服务</dt>
            <dd>
                <a class="footer-href" href="/" target="_blank">微商城解决方案</a>
            </dd>
            <dd>
                <a class="footer-href" href="/website" target="_blank">互联网营销</a>
            </dd>
            <dd>
                <a class="footer-href" href="/website" target="_blank">软件定制开发</a>
            </dd>
            </dl>
            <dl>
            <dt>关于我们</dt>
            <dd>
                <a class="footer-href" href="/aboutUs" data-count="pc-底部导航_公司相关_关于我们">公司简介</a>
            </dd>
            <dd>
                <a class="footer-href" href="#" data-count="pc-底部导航_公司相关_加入我们">加入我们</a>
            </dd>
            </dl>
            <dl>
            <dt>公司地址</dt>
            <dd>
                <p class="footer-href">江苏省镇江市京口区中山东路88号</p>
                <p class="footer-href">金汇大厦12层</p>
            </dd>
            </dl>
            <dl class="media-report">
            <dt>热点资讯</dt>
            <dd>
                <a class="footer-href" href="/news?id=1">企业网站容易忽视的重点</a>
            </dd>
            <dd>
                <a class="footer-href" href="/news?id=2">网站建设网页设计如何选择靠谱的网络公司</a>
            </dd>
            <dd>
                <a class="footer-href" href="/news?id=3">知识店铺平台一般可以实现怎样的功能？</a>
            </dd>
            </dl>
        </div>
        <div class="bottom">
            <div class="copyright">
            <p class="copyright-info">Copyright © 2017 镇江达乐网络科技有限公司 All Rights Reserved. </p>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
            <img src="/images/con.jpg" class="contact-modal"  >
            </div>
        </div>
        </div>
    </div>

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/case/base.js"></script>
    @yield('js-insert')

</body>
</html>