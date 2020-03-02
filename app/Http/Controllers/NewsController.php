<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newsCreate()
    {
        
        $data = request()->validate([
            'title' => 'required',
            'date' => 'required',
            'content' => 'required'
        ]);
        
        $news = new News();
        $news->title = $data['title'];
        $news->data = $data['date'];
        $news->content = $data['content'];

        $news->save();

        return view('admin.createSuccess');
    }
}
