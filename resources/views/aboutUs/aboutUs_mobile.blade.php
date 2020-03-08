@extends('layouts.mobileLayout')

@section('content')
<div class="swiper-banner swiper-container swiper-container-horizontal">
    <div class="swiper-slide header EC5 swiper-slide-duplicate swiper-slide-active test">
        <div class="xe-banner3 w1200">
            <div class="bigTitle T1 mb8">关于我们</div>
            <p class="T5 mb64">赋能新时代营销模式，助力企业数字化转型</p>
            <!-- <a target="_blank" class="BigBtnType1" data-toggle="modal" data-target="#myModal">联系我们</a> -->
            <div class="btn-group">
                <a target="_blank" href="tel://051185967767" class="btn_bbw">联系我们</a>
            </div>
        </div>
    </div>
</div>
<div class="product-content w1200">
    <div class="product-items product-items01">
        <div class="title">
            公司简介
        </div>
        <div class="product-item">
            <div class="product-info">
                <p>达乐科技专注企业数字化转型，高效落地企业软硬件服务方案，也是专业的融合门户服务解决方案提供商。提供融合服务平台架构、云服务方式的服务资源聚合，网站、微信小程序开发、移动门户、微信门户、政府一站式办事大厅、APP定制开发、企业营销软件、集成电路设计等服务渠道的建设与运营支撑服务。</p>
                <p>达乐科技从顶层咨询规划，到基础的IT设施建设，到融合服务体系建设与运营服务，具备全面的服务能力和业务覆盖。近年来，达乐科技小程序平台建设、移动开放平台建设、融合门户服务建设与运营、集成电路设计，企业服务等业务覆盖全国近千家用户，形成了强大的能力优势，包括业务专家团队、研发团队、设计团队、本地化运维服务团队。</p>
            </div>
        </div>
    </div>
    <div class="pt120 pb120">
        <div class="xe-title1 mb64">
            我们努力践行的文化
        </div>
        <ul class="culture w1200">

            <li class="culture-item">
                <img src="./images/aboutUs01.png" alt="" srcset="" width="346" height="374">
                <h3 class="culture-item-title EC2">
                    使命
                </h3>
                <p class="culture-item-desc EC3">
                    让知识更有价值
                </p>
            </li>

            <li class="culture-item items02">
                <img src="./images/aboutUs02.png" alt="" srcset="" width="346" height="374">
                <h3 class="culture-item-title EC2">
                    愿景
                </h3>
                <p class="culture-item-desc EC3">
                    最值得信赖的技术服务商
                </p>
            </li>

            <li class="culture-item items02">
                <img src="./images/aboutUs03.png" alt="" srcset="" width="346" height="374">
                <h3 class="culture-item-title EC2">
                    价值观
                </h3>
                <p class="culture-item-desc EC3">
                    以客户为中心，向善，有担当
                </p>
            </li>

        </ul>
    </div>
    <div class="pb96">
        <div class="xe-title1 mb64">
            我们始终秉承的理念
        </div>
        <ul class="mind w1200">

            <li class="mind-item">
                <i class="iconfont iconkaifashili EC1"></i>
                <h3 class="mind-item-title EC2 T6">
                    专业技术
                </h3>
                <p class="mind-item-desc EC4 T7">
                    我们拥有行业专业技术实力与资深工程开发团队，为您的商业变现及产品需求保驾护航。
                </p>
            </li>

            <li class="mind-item">
                <i class="iconfont icontiexinshouhou EC1"></i>
                <h3 class="mind-item-title EC2 T6">
                    贴心服务
                </h3>
                <p class="mind-item-desc EC4 T7">
                    我们始终坚持优质的服务理念，无论任何时候您遇到困难，我们都会及时提供精准有效的解决方案。
                </p>
            </li>

            <li class="mind-item">
                <i class="iconfont iconhezuohuoban EC1"></i>
                <h3 class="mind-item-title EC2 T6">
                    创业伙伴
                </h3>
                <p class="mind-item-desc EC4 T7">
                    我们把每一位客户都当做创业伙伴，期盼在未来成长的道路上一路相伴，携手前行。
                </p>
            </li>

        </ul>
    </div>
</div>
<div class="data-content">
    <div class="data-title">用心做服务<br> 成就行业口碑影响力</div>
    <div class="data-list">
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
                <span id="dataGoods" class="data">90%</span>
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
<div class="foot_free">
    <div class="title EC2 T2">
        达乐科技<br>
        助力每一个努力的身影!
    </div>
    <div class="btn-group">
        <a target="_blank" href="tel://051185967767" class="BigBtnType1 btn">联系我们</a>
    </div>
</div>
@endsection

@section('css-insert')
<link type=text/css rel="stylesheet" href="/css/pages/aboutUs-m.css">
@endsection