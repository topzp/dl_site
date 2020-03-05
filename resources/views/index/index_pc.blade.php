
@extends('layouts.pcLayout')

@section('content')
<div class="swiper-banner swiper-container swiper-container-horizontal">
    <div class="swiper-slide header EC5 swiper-slide-duplicate swiper-slide-active test">
        <div class="xe-banner3 w1200">
        <div class="title T1 mb8">达乐科技</div>
        <p class="T5 mb64">赋能新时代营销模式，助力企业数字化转型</p>
        <a target="_blank" class="BigBtnType1" data-toggle="modal" data-target="#myModal">联系我们</a>
        </div>
    </div>
</div>
<div class="product-content w1200">
    <div class="product-items">
      <div class="title">
        微商城解决方案
      </div>
      <div class="product-item">
        <div class="product-img">
          <img src="./images/1.jpg" class="advantages-img" data-rjs="2" alt="内容付费平台,内容分销">
        </div>
        <div class="product-info">
          <div class="info-item">
            <h3 class="subtitle">独立研发小程序基础平台</h3>
            <p class="desc">完整的小程序行业模块和用户后台管理平台</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">丰富的行业解决方案</h3>
            <p class="desc">拥有24行业功能解决方案，丰富的场景应用</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">附近小程序引流</h3>
            <p class="desc">自动流量入口，抢占先机，为用户推荐适合服务</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">关联公众号</h3>
            <p class="desc">双管齐下，让用户多一种体验，多一种渠道</p>
          </div>
          <a href="/" class="MediumBtnType1 link-register mb20" target="_blank">了解详情</a>
        </div>
      </div>
    </div>
    <div class="product-items">
      <div class="title">
        互联网营销让天下没有难做的生意
      </div>
      <div class="product-item">
        <div class="product-img">
          <img src="./images/internet.png" class="advantages-img" data-rjs="2" alt="内容付费平台,内容分销">
        </div>
        <div class="product-info">
          <div class="info-item">
            <h3 class="subtitle">营销网站建设</h3>
            <p class="desc">公司及品牌的传播工具，一门视觉的艺术</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">微信公众号运营</h3>
            <p class="desc">集约化的微信公众号管理，解决商家运营难点</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">线上营销推广</h3>
            <p class="desc">多种营销工具，配合营销方法论组合出击</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">丰富的配套服务</h3>
            <p class="desc">为商家提供地图标注，图文设计等一站式服务</p>
          </div>
          <a href="/website" class="MediumBtnType1 link-register mb20" target="_blank">了解详情</a>
        </div>
      </div>
    </div>
    <div class="product-items">
      <div class="title">
        贴合用户需求的定制化开发服务
      </div>
      <div class="product-item">
        <div class="product-img">
          <img src="/images/customize.png" class="advantages-img" data-rjs="2" alt="内容付费平台,内容分销">
        </div>
        <div class="product-info">
          <div class="info-item">
            <h3 class="subtitle">多端定制开发</h3>
            <p class="desc">开发范围涵盖pc、app、小程序等常用平台</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">多年的业务积累</h3>
            <p class="desc">丰富的开发经验，广泛的行业涉及</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">线下实体公司保障</h3>
            <p class="desc">线下面谈签合同，开发、售后有保障</p>
          </div>
          <div class="info-item">
            <h3 class="subtitle">安全运行</h3>
            <p class="desc">独立服务器，专业人士全程护航</p>
          </div>
          <a href="/customize" class="MediumBtnType1 link-register mb20" target="_blank">沟通需求</a>

        </div>
      </div>
    </div>
</div>
<div class="data-content pt96">
    <div class="data-title">用心做服务&nbsp;&nbsp;&nbsp;成就行业口碑影响力</div>
    <div class="data-list w1200">
        <div class="data-item">
        <div class="data-text">
            <span id="dataShop" class="data">3</span>千
        </div>
        <div class="data-item_content">企业客户之选</div>
        </div>
        <div class="data-item">
        <div class="data-text">
            <span id="dataMoney" class="data">10</span>年
        </div>
        <div class="data-item_content">专注互联网行业</div>
        </div>
        <div class="data-item">
        <div class="data-text">
            <span id="dataGoods" class="data">90</span>%
        </div>
        <div class="data-item_content">客户续费率</div>
        </div>
        <div class="data-item">
        <div class="data-text">
            <span id="dataUsers" class="data">100</span>位
        </div>
        <div class="data-item_content">全国设计师</div>
        </div>
    </div>
</div>
<div class="service-client">
    <ul class="w1200 clearfix">
        <li class="bg-grey">
        <a href="http://www.ty-tyre.com/" target="_blank" class="client-link">
            <img src="/images/clientLogos/tongyong.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="160">
        </a>
        </li>
        <li class="bg-white">
        <a href="http://www.jshltz.cn/" target="_blank" class="client-link">
            <img src="/images/clientLogos/heli.jpg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="100">
        </a>
        </li>
        <li class="bg-grey">
        <a href="http://www.hzsjx.cn/" target="_blank" class="client-link">
            <img src="/images/clientLogos/sijixian.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="160">
        </a>
        </li>
        <li class="bg-white">
        <a href="http://www.shenqian.com/" target="_blank" class="client-link">
            <img src="/images/clientLogos/shenqian.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="160">
        </a>
        </li>
        <li class="bg-grey">
        <a href="http://www.jshngj.com/" target="_blank" class="client-link">
            <img src="/images/clientLogos/huning.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="180">
        </a>
        </li>
        <li class="bg-white">
        <a href="https://www.sundan.com/" target="_blank" class="client-link">
            <img src="/images/clientLogos/shundian.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="150">
        </a>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/yunmi.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="100">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/yunmi.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/daan.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="100" height="100">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/daan.png" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/haitun.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="100">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/haitun.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/fz.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="100">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/fz.png" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/ankang.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="120">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/ankang.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/caiheng.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="120">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/caiheng.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/yemao.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="100">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/yemao.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/abai.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="120">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/abai.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/where.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="img-circle" width="120">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/where.png" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/wugang.jpeg" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="140">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/wugang.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-grey hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/xiaochengguo.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="110">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/xiaochengguo.jpg" alt="" width="160" height="160">
        </div>
        </li>
        <li class="bg-white hover-qr">
        <a class="client-link">
            <img src="/images/clientLogos/mixue.png" data-rjs="2" alt="知识付费工具,内容付费平台"
            class="" width="180">
        </a>
        <div class="qr-code animated zoomIn">
            <img src="/images/clientQrCodes/mixue.png" alt="" width="160" height="160">
        </div>
        </li>

    </ul>
</div>
<div class="extend-read">
    <div class="read-title">热点资讯</div>
    <div class="read-list">
      <a class="read-item" href="/news?id=1">
        <div class="read-item-box">
          <div class="read-item-title">企业网站容易忽视的重点</div>
          <div class="read-item-des">当你看到这篇文章的时候，说明你已经有企业站了，或是正在运营者企业站。企业站的推广和运营是网站的价值所在，也是企业网络营销的根本。既然做了企业站，那也肯定做了SEO，但要运营好一个网站，单单靠SEO是远远不足的。不管是用什么方法，我们的最终目的都是成交，只要能成交，不管你用什么方法宣传运营，都是可以的
          </div>
        </div>
        <div class="read-create-time">2019-06-13 18:35</div>
      </a>
      <a class="read-item" href="/news?id=2">
        <div class="read-item-box">
          <div class="read-item-title">网站建设网页设计如何选择靠谱的网络公司？</div>
          <div class="read-item-des">
              在互联网时代的今天，网站网页现已称为了现代社会傍边不可缺少的一个产品了，关于每一个人们而言，在其每天的工作和日子傍边都是会要接触到许多的网站和网页的。因此现在关于网站网页的制作需求可以说是非常的大的，市面上也有许多的网站网页制作专业公司，那么在有制作需求的时分，毕竟哪家好呢？          </div>
        </div>
        <div class="read-create-time">2019-06-26 13:40:57</div>
      </a>
      <a class="read-item" href="/news?id=7">
        <div class="read-item-box">
          <div class="read-item-title">如何提高你的网站收录量?</div>
          <div class="read-item-des">
              要是网站收录内容不多，那就想办法让网站静态化吧，如果没办法生成静态，就用伪静态，要是能搞成静态路径，那就生成静态吧。静态网页访问速度快，静态网页搜索引擎更喜欢，更容易被收录。</div>
        </div>
        <div class="read-create-time">2020-01-02 10:47:55</div>
      </a>
      <a class="read-item" href="/news?id=8">
        <div class="read-item-box">
          <div class="read-item-title">响应式网站有哪些特点</div>
          <div class="read-item-des">
              说起响应式网站有哪些特色，我想你们可以简单的罗列许多如习惯不一样设备、下降客户流量消耗、进一步客户体会、整体建站成本可以减少等等。“这种长处一般都是以建站服务提供商说的，要以他们的视点来审视响应式网站的，不怎么有人从网站建设和参加者的视觉去考虑。          </div>
        </div>
        <div class="read-create-time">2019-06-21 18:50</div>
      </a>
    </div>
</div>
<div class="free">
    <div class="EC2 T2">
      达乐科技，助力每一个努力的身影！
    </div>
    <div class="btn-group">
        <a target="_blank" class="BigBtnType1" data-toggle="modal" data-target="#myModal">联系我们</a>
    </div>
</div>
@endsection