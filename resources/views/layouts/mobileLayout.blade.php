<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>达乐科技</title>
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link type=text/css rel="stylesheet" href="/css/base/font.css">
    <link type=text/css rel="stylesheet" href="/css/base/animate.css">
    <link type=text/css rel="stylesheet" href="/css/base/case-m.css">
    <link type=text/css rel="stylesheet" href="/css/base/base-m.css">
    @yield('css-insert')
    <script>
        //移动端rem适配
        var htmlDom = document.documentElement;
        var windowWidth = htmlDom.clientWidth;
        var evt = "onorientationchange" in window ? "orientationchange" : "resize";
        htmlDom.style.fontSize = windowWidth / 7.5 + 'px';
        (function () {
            document.addEventListener('DOMContentLoaded', function () {
                if (!htmlDom.style.fontSize) {
                    var htmlDomProtect = document.documentElement;
                    var windowWidth = htmlDomProtect.clientWidth;
                    htmlDomProtect.style.fontSize = windowWidth / 7.5 + 'px';
                }
            }, false);
        })();

        window.addEventListener(evt, function () {
            setTimeout(function () {
                var htmlDomProtect = document.documentElement;
                var windowWidth = htmlDomProtect.clientWidth;
                htmlDomProtect.style.fontSize = windowWidth / 7.5 + 'px';
            }, 200);
        }, false);
    </script>
</head>
<body>
    <div class="mNav" >
        <div class="mLogo">
            <a href="/" data-count="移动端-顶部导航_首页">
                <img  src="/images/dl_logo.png">
            </a>
        </div>
        <div class="mTopLogOrReg">
            <i id="sliderClick" class='sliderBtn iconfont icondaohang'></i>
        </div>
    </div>
    <div class="nav-space"></div>
    <div class="outerSlider" id="outerSlider">
        <div class="menuBox" id="menuBox">
            <div class="sideHeader">
                <img class="closeSide" src="/images/icon_close.png" alt="">
                <a class="sideLogo" href="/" data-count="移动端-顶部导航_首页">
                    <img  src="/images/dl_logo.png">
                </a>
            </div>
            <div class="scrollList">
                <ul class="mobileNavSlider">
                    <li id="indexPage" data-count="移动端-顶部导航_首页">
                        <a data-count="mobile,顶部导航,首页"
                           href="/">
                            首页
                        </a>
                    </li>
                    <li>
                        <a data-count="移动端-顶部导航_渠道合作"
                           href="/weChatMall">
                            微商城解决方案
                        </a>
                    </li>
                    <li class="sideSecondBox">
                        <div class="sideSecondTitle">
                            互联网营销&nbsp;
                            <i class="narraw active iconfont  icontriangle-down"></i></div>
                        <dl class="sideSecondList">
                            <dd>
                                <a data-count="移动端-顶部导航_更多_API自主开发"
                                   href="/website">
                                    网站建设
                                </a>
                            </dd>
                            <dd>
                                <a data-count="移动端-顶部导航_更多_应用市场"
                                   href="/weChat">
                                    公众号开发
                                </a>
                            </dd>
                            <!-- <dd>
                                <a data-count="移动端-顶部导航_更多_定制服务"
                                   href="/mobile/pages/onLine">
                                    营销服务
                                </a>
                            </dd> -->
                            <dd>
                                <a data-count="移动端-顶部导航_更多_定制服务">
                                    其他服务
                                </a>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <a data-count="移动端-顶部导航_渠道合作"
                           href="/customize">
                            定制开发
                        </a>
                    </li>
                    <li id="aboutUs" class="sideSecondBox">
                        <div class="sideSecondTitle">
                            关于我们&nbsp;
                            <i class="narraw active iconfont  icontriangle-down"></i></div>
                        <dl class="sideSecondList">
                            <dd>
                                <a class="aboutUs"
                                   data-count="移动端-顶部导航_关于我们_公司简介"
                                   href="/aboutUs">
                                    公司简介
                                </a>
    
                            </dd>
                            <!-- <dd>
                                <a  class="aboutUs"
                                    data-count="移动端-顶部导航_关于我们_加入我们"
                                    href="/news?id=1">
                                    热点资讯
                                </a>
                            </dd> -->
                        </dl>
                    </li>
                </ul>
            </div>
    
        </div>
    </div>
    
  <div>
    @yield('content')
  </div>

  <div class="footer">
    <div class="footer-content">
        <div class="foot_menu">
            <div class="item">
                <div class="item_title">产品与服务</div>
                <div class="alink">
                    <a href="/weChatMall">
                        微商城解决方案
                    </a>
                </div>
                <div class="alink">
                    <a href="/website">
                        互联网营销
                    </a>
                </div>
                <div class="alink">
                    <a href="/customize">
                        软件定制开发
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="item_title">关于我们</div>
                <div class="alink">
                    <a href="/aboutUs">
                        公司简介
                    </a>
                </div>
                <div class="alink">
                    <a href="">
                        加入我们
                    </a>
                </div>
            </div>
        </div>

        <div class="foot">
            <h2 class="tel">0511-85967767</h2>
            <p class="time">周一至周日 9:00-21:30</p>
            <div class="email">
                <p>公司地址：江苏省镇江市京口区中山东路88号金汇大厦12层</p>
            </div>
        </div>
        <div class="copyright">
            <p class="copyright-info">Copyright ©2017 镇江达乐网络科技有限公司</p>
            <p class="copyright-info">All Rights Reserved. </p>
        </div>
    </div>
  </div>

  <script src="/js/jquery.js"></script>
  <script src="/js/case/base-m.js"></script>
  @yield('js-insert')

</body>
</html>
