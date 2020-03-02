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
}
