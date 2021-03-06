@extends('layouts.pcLayout')

@section('content')
<div class="extend-read">
    <div class="extend-content w1200">
        <div class="extend-left">
            <div class="read-details">
                <div class="read-details-title">
                    {{$news->title}}
                </div>
                <div class="read-details-time">{{$news->data}}</div>
                <div class="read-details-content">
                    {{-- <p>当你看到这篇文章的时候，说明你已经有企业站了，或是正在运营者企业站。企业站的推广和运营是网站的价值所在，也是企业网络营销的根本。既然做了企业站，那也肯定做了SEO，但要运营好一个网站，单单靠SEO是远远不足的。不管是用什么方法，我们的最终目的都是成交，只要能成交，不管你用什么方法宣传运营，都是可以的。
                    &nbsp;</p>
                    <p><br></p>
                    <p>那人家看了你的网站，为什么会下订单呢？这就涉及到网站的内容了，不管你的网站有多少人访问，有人看到了你的网站里面的东西，吸引了他，让他足够相信你，他才能下单，所以，网站的内容是重中之重，包括网站的布局，网站的文字，图片，动画等所以用来表达企业产品相关信息的介质。其实也就是我们说的用户体验。
                    &nbsp;</p>
                    <p><br></p>
                    <p>我们打开很多是企业网站会发现，很多的企业站都是这样的，首页，新闻中心，产品展示，联系我们，关于我们。我们站在客户的角度想想，这些都是我们需要的吗？其实客户最关心的你的产品和服务，只要把这两个做好了，那下订单的概率就大大加大了。
                    &nbsp;</p><p><br></p>
                    <p>有的网站，我们看到里面的内容很多，图片文字一大堆，但分类不好，有的图片不清楚，甚至有的根本就不是自己的产品真实图片，随便从哪里复制过来的，模糊不清。所以，做内容，要求质，不能求量。要做好，就要请专业的人来做，优秀的网站编辑人员，技术员，客服等。文章些的好不好，直接关
                        系到产品的销售，图片拍的好不好、客服怎么样，这些都是很重要的。</p>
                    <p><br></p> --}}

                    {!!$news->content!!}
                </div>
            </div>
        </div>
        <div class="extend-right">
            <div class="extend-right-title">
                <div class="extend-line"></div>
                <div class="hot-read-text">热门推荐</div>
            </div>
            <div class="hot-read-list">
                @foreach($relatedNews as $news)
                <a class="hot-read-item" href="/news?id={{$news->id}}">
                    {{-- <div class="hot-read-date">{{$news->data}}</div> --}}
                    <div class="hot-read-des">{{$news->title}}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('css-insert')
<link type=text/css rel="stylesheet" href="/css/pages/news.css">   
@endsection