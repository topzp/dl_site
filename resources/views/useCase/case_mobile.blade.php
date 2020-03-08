@extends('layouts.mobileLayout')

@section('content')
<div class="case_container" style="background-color: #f5f5f5;">
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
              <ul class="row">
                @foreach($useCases as $useCase)
                <li class="col-sm-6 col-xs-6" onClick="$(this).find('.poupopCode').toggle()">
                  <div>
                    <div class="con">
                      <img src="/storage/{{$useCase->logo}}" class="caseLogo" alt="魔方很忙">
                      <h3>{{$useCase->title}}</h3>
                      <div class="bot">
                        @foreach($useCase->miniModules as $module)
                        <span>{{$module->name}}</span>
                        @endforeach
                      </div>
                      <!-- <div class="mode">{{$useCase->description}}</div> -->
                    </div>
                    <div class="poupopCode">
                      <img src="/storage/{{$useCase->qrCode}}" class="caseCode" alt="魔方很忙">
                      <span>扫码体验小程序</span>
                    </div>
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

@section('js-insert')
<script src="/js/customize.js"></script>
@endsection

@section('css-insert')
<link type=text/css rel="stylesheet" href="/css/pages/case-m.css">    
@endsection