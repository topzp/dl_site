<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    //
    public function index()
    {
        if (WebService::isMobile()) {
            $returnView = "index.index_pc";
        } else {
            $returnView = "index.index_mobile";
        }
        return view($returnView);
    }
}
