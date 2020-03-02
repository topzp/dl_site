<?php

namespace App\Http\Controllers;

use App\News;
use App\UseCase;
use App\MiniModule;
use App\CaseCategory;
use App\Service\WebService;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    //
    public function index()
    {
        if (WebService::isMobile()) {
            $returnView = "index.index_mobile";
        } else {
            $returnView = "index.index_pc";
        }
        return view($returnView);
    }

    public function website()
    {
        if (WebService::isMobile()) {
            $returnView = "website.web_mobile";
        } else {
            $returnView = "website.web_pc";
        }
        return view($returnView);
    }

    public function wechat()
    {
        if (WebService::isMobile()) {
            $returnView = "wechat.wechat_mobile";
        } else {
            $returnView = "wechat.wechat_pc";
        }
        return view($returnView);
    }

    public function customize()
    {
        if (WebService::isMobile()) {
            $returnView = "customize.customize_mobile";
        } else {
            $returnView = "customize.customize_pc";
        }
        return view($returnView);
    }

    public function aboutUs()
    {
        if (WebService::isMobile()) {
            $returnView = "aboutUs.aboutUs_mobile";
        } else {
            $returnView = "aboutUs.aboutUs_pc";
        }
        return view($returnView);
    }

    public function news()
    {
        $id = request('id');
        $news = News::find($id);
        $allNews = News::all();
        $relatedNews = array();
        foreach ($allNews as $news1) {
            if ($news1->id != $id) {
                array_push($relatedNews, $news1);
            }
        }
        if (WebService::isMobile()) {
            $returnView = "hotNews.hotNews_mobile";
        } else {
            $returnView = "hotNews.hotNews_pc";
        }
        return view($returnView, compact('news', 'relatedNews'));
    }

    public function showCases()
    {
        $categoryId = request('categoryId');
        if ($categoryId == 0) {
            $useCases = UseCase::all();
        } else {
            $useCases = UseCase::whereHas('caseCategories', function($q) use($categoryId) {
                $q->where('case_category_id', $categoryId);
            })->get();
        }
        if (WebService::isMobile()) {
            $returnView = "useCase.case_mobile";
        } else {
            $returnView = "useCase.case_pc";
        }
        return view($returnView, [
            'categories' => CaseCategory::all(),
            'modules' => MiniModule::all(),
            'useCases' => $useCases
        ]);
    }

    public function admin()
    {
        $this->middleware('auth');
        return view("admin.admin");
    }

    public function newsCreate()
    {

        // $allNews = News::all();
        // $relatedNews = array();
        // foreach ($allNews as $news) {
        //     if ($news->id != $id) {
        //         array_push($relatedNews, $news);
        //     }
        // }
        // if (WebService::isMobile()) {
        //     $returnView = "hotNews.hotNews_mobile";
        // } else {
        //     $returnView = "hotNews.hotNews_pc";
        // }

        $news1 = new News();
        $news1->content='          <p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
        当你看到这篇文章的时候，说明你已经有企业站了，或是正在运营者企业站。企业站的推广和运营是网站的价值所在，也是企业网络营销的根本。既然做了企业站，那也肯定做了SEO，但要运营好一个网站，单单靠SEO是远远不足的。不管是用什么方法，我们的最终目的都是成交，只要能成交，不管你用什么方法宣传运营，都是可以的。              </span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
        那人家看了你的网站，为什么会下订单呢？这就涉及到网站的内容了，不管你的网站有多少人访问，有人看到了你的网站里面的东西，吸引了他，让他足够相信你，他才能下单，所以，网站的内容是重中之重，包括网站的布局，网站的文字，图片，动画等所以用来表达企业产品相关信息的介质。其实也就是我们说的用户体验。
    </span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
        我们打开很多是企业网站会发现，很多的企业站都是这样的，首页，新闻中心，产品展示，联系我们，关于我们。我们站在客户的角度想想，这些都是我们需要的吗？其实客户最关心的你的产品和服务，只要把这两个做好了，那下订单的概率就大大加大了。
    </span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
        有的网站，我们看到里面的内容很多，图片文字一大堆，但分类不好，有的图片不清楚，甚至有的根本就不是自己的产品真实图片，随便从哪里复制过来的，模糊不清。所以，做内容，要求质，不能求量。要做好，就要请专业的人来做，优秀的网站编辑人员，技术员，客服等。文章些的好不好，直接关
                系到产品的销售，图片拍的好不好、客服怎么样，这些都是很重要的。
    </span></p>';
        $news1->data = "2019-06-13 18:35";
        $news1->title = "企业网站容易忽视的重点";
        $news1->save();

        $news1 = new News();
        $news1->content='          <p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
        在互联网时代的今天，网站网页现已称为了现代社会傍边不可缺少的一个产品了，关于每一个人们而言，在其每天的工作和日子傍边都是会要接触到许多的网站和网页的。因此现在关于网站网页的制作需求可以说是非常的大的，市面上也有许多的网站网页制作专业公司，那么在有制作需求的时分，毕竟哪家好呢？
</span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
       在选择网站网页制作专业公司的时分必定要重视这一个公司的内部工作人员配备情况，看看其工作人员在各个方面的配备是否合理，只需工作人员合理的配备才可以起到一个更好的制作效果。尤其是在技术开发人员的配备上面更是很重要，看一个网站公司专业制作团队怎样，关于需求者而言具有很大的参看价值，因此这一个方面是必定要留心引起重视，只需这样才可以帮忙自己选择到一个更好的公司，顺利的结束网站制作。

</span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
在判别一个公司的好坏情况的时分，在工作傍边所具有的口碑怎样也是一个重要的判别和参看的标准。在选择的时分要尽量选择那些在工作傍边口碑好的公司和企业，这样的公司在各个方面都非常好的，客户满意度也更高，选择这样的公司关于人们而言也是具有更大大帮忙的，因此这也是必需求格外留心的一个方面。
</span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;"><br style="max-inline-size: 100%; overflow-wrap: break-word !important;"></span></p>
<p style="max-inline-size: 100%; margin-top: 5px; margin-bottom: 5px; overflow-wrap: break-word !important;"><span style="max-inline-size: 100%; overflow-wrap: break-word !important;">
在选择公司的时分必需求格外留心看看这一个公司以往所开发的网站的效果怎样，这也是一个重要的判别标准。以往开发的网站效果怎样，关于选择者而言也是具有很大的参看价值的，因此这一个方面也是需求引起重视。
网站网页制作专业公司哪家好，信赖在经过上面的这些介绍之后人们都有了一个更加深化的了解了，关于每一个人们而言如果有这样的需求的话，从上面的这样几个方面来选择是具有更大的帮忙的。
</span></p>';
        $news1->data = "2019-06-26 13:40:57";
        $news1->title = "网站建设网页设计如何选择靠谱的网络公司";
        $news1->save();

        $news1 = new News();
        $news1->content='                      <p>如今的<a href="https://www.xiaoe-tech.com/?xeuti=ituex" target="_self">知识店铺平台</a>一般都是可以满足各个类型的<a href="https://www.xiaoe-tech.com/?xeuti=ituex" target="_self">知识店铺</a>的上线的，因此我们不管是哪个领域的，只要是符合相关规定和要求的，一般都是可以在知识店铺平台有一个很好的展现的。并且当前这一平台还可以实现一个个性化的定制，我们可以根据自己知识店铺的特点来进行一个专属风格的打造，这样对于提升自身吸引力和竞争力也是有着很大的帮助的。
        &nbsp;</p><p><br></p><p>另外，其实如今很多<a href="https://www.xiaoe-tech.com/?xeuti=ituex" target="_self">知识店铺平台</a>也是可以有一个很好的营销功能的，要知道如今不少人之所以想要在知识店铺平台上线，除了可以维护自己的知识产权之外，很多时候也是希望其可以给自己带来一定的利益的，而此时适度的营销还是可以帮助我们更加容易的实现这一目的的。当然，<a href="https://www.xiaoe-tech.com/?xeuti=ituex" target="_self">知识店铺平台</a>很多时候还是可以为我们展现出一个非常详细的运营数据，而我们都知道，其实很多时候如果我们想要更好的发展，都是需要数据的分析来支撑的。
        &nbsp;</p><p><br></p><p>其实对于知识店铺平台所可以实现的功能，还不止上述这些内容，不过更多的还是需要我们在日后实际的使用过程中自行去探索和发现的。另外，小鹅通其实当前也有一个很不错的平台，大家有需要的话，也是可以尝试的。
        &nbsp;</p><p><br></p>';
        $news1->data = "2020-01-02 10:47:55";
        $news1->title = "知识店铺平台一般可以实现怎样的功能？";
        $news1->save();

        dd('ok');
        

        return view($returnView, compact('news', 'relatedNews'));
    }
}
