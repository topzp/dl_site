@extends('layouts.pcLayout')

@section('content')
<div class="case_container" style="background-color: #f5f5f5;">s
    <div class="wrap">
      <div class="tabs clearfix">
        <span class="fl">分类：</span>
        <a href="/cases?categoryId=0" id="category_0">全部</a>
        @foreach ($categories as $category )
        <a href="/cases?categoryId={{$category->id}}" id="category_{{$category->id}}">{{$category->name}}</a>
        @endforeach
      </div>
      <div class="moran-al">
        <div class="case_list">
          <div class="w1152">
            <div class="list">
              <ul>
                @foreach($useCases as $useCase)
                <li>
                  <div class="con">
                    <img src="/storage/{{$useCase->logo}}" class="caseLogo" alt="魔方很忙">
                    <h3>{{$useCase->title}}</h3>
                    <div class="bot">
                      @foreach($useCase->miniModules as $module)
                      <span>{{$module->name}}</span>
                      @endforeach
                    </div>
                    <div class="mode">{{$useCase->description}}</div>
                  </div>
                  <div class="poupopCode">
                    <img src="/storage/{{$useCase->qrCode}}" class="caseCode" alt="魔方很忙">
                    <span>扫码体验小程序</span>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
      
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('css-insert')
<link type=text/css rel="stylesheet" href="/css/pages/case.css">    
@endsection