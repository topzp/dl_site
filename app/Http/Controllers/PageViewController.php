<?php

namespace App\Http\Controllers;

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
}
