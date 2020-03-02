<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>达乐科技</title>
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link type=text/css rel="stylesheet" href="/css/base/font.css">
    <link type=text/css rel="stylesheet" href="/css/base/case-m.css">
    <link type=text/css rel="stylesheet" href="/css/base/base-m.css">
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
            <a href="http://customer.hich-tech.com" data-count="移动端-顶部导航_首页">
                <img  src="/images/logo6.jpg">
            </a>
        </div>
        <div class="mTopLogOrReg">
            {{-- <i id="sliderClick" class='sliderBtn iconfont icondaohang'></i> --}}
        </div>
    </div>
    <div class="nav-space"></div>
    <div class="outerSlider" id="outerSlider">
        <div class="menuBox" id="menuBox">
            <div class="sideHeader">
                <img class="closeSide" src="/images/icon_close.png" alt="">
                <a class="sideLogo" href="/" data-count="移动端-顶部导航_首页">
                    <img  src="/images/logo6.jpg">
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
                           href="/mobile/pages/customize">
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
                                   href="/mobile/pages/website">
                                    网站建设
                                </a>
                            </dd>
                            <dd>
                                <a data-count="移动端-顶部导航_更多_应用市场"
                                   href="/mobile/pages/weChat">
                                    公众号开发
                                </a>
                            </dd>
                            <dd>
                                <a data-count="移动端-顶部导航_更多_定制服务"
                                   href="/mobile/pages/onLine">
                                    营销服务
                                </a>
                            </dd>
                            <dd>
                                <a data-count="移动端-顶部导航_更多_定制服务">
                                    其他服务
                                </a>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <a data-count="移动端-顶部导航_服务价格">
                            集成平台方案
                        </a>
                    </li>
                    <li>
                        <a data-count="移动端-顶部导航_渠道合作"
                           href="/mobile/pages/customize">
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
                                   href="/mobile/pages/aboutUs">
                                    公司简介
                                </a>
    
                            </dd>
                            <dd>
                                <a  class="aboutUs"
                                    data-count="移动端-顶部导航_关于我们_加入我们"
                                    href="/mobile/pages/hotNews/news1">
                                    热点资讯
                                </a>
                            </dd>
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
                    <a href="http://customer.hich-tech.com">
                        小程序行业解决方案
                    </a>
                </div>
                <div class="alink">
                    <a href="http://customer.hich-tech.com/mobile/pages/website">
                        互联网营销
                    </a>
                </div>
                <div class="alink">
                    <a href="http://customer.hich-tech.com">
                        集成平台方案
                    </a>
                </div>
                <div class="alink">
                    <a href="http://customer.hich-tech.com/mobile/pages/customize">
                        软件定制开发
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="item_title">关于我们</div>
                <div class="alink">
                    <a href="http://customer.hich-tech.com/mobile/pages/aboutUs">
                        公司简介
                    </a>
                </div>
                <div class="alink">
                    <a href="http://customer.hich-tech.com">
                        加入我们
                    </a>
                </div>
            </div>
        </div>

        <div class="foot">
            <h2 class="tel">400-891-6658</h2>
            <p class="time">周一至周日 9:00-21:30</p>
            <div class="email">
                <p>公司地址：江苏省昆山市前进东路888号宏基财富广场4栋12单元4层</p>
            </div>
        </div>
        <div class="copyright">
            <p class="copyright-info">Copyright ©2019 江苏骇驰智能科技有限公司</p>
            <p class="copyright-info">All Rights Reserved. </p>
        </div>
    </div>
  </div>

  <script src="/js/jquery.js"></script>
  <script src="/js/case/base-m.js"></script>

</body>
</html>
