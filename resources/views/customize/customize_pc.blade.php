@extends('layouts.pcLayout')

@section('content')
  <div class="form-container">
    <div class="form-inner">
      <div class="form-top">定制需求信息收集</div>
      <form id="cusform">
        <div class="form-group">
          <label>1. 定制产品需求详情</label>
          <textarea id="detail" rows="4" class="form-control" placeholder="需求详情" name="name"></textarea>
        </div>
        <div class="form-group mt30">
          <label>2. 期望上线时间</label>
          <input id="onlineTime" class="form-control" placeholder="上线时间" name="company">
        </div>
        <div class="form-group mt30">
          <label>3. 公司名称(联系人)</label>
          <input id="company" class="form-control" placeholder="名称" name="phone">
        </div>
        <div class="form-group mt30">
          <label>4. 联系电话</label>
          <input id="contact" class="form-control" placeholder="电话" name="remark">
        </div>
        <!-- <div class="form-group mt30">
          <label>5. 联系电话</label>
          <input class="form-control" placeholder="名称">
        </div> -->
        <div style="text-align: center;">
          <a id="sb" class="btn btn-default sb">提 交</a>
        </div>
      </form a>
    </div>
  </div>
@endsection

@section('js-insert')
<script src="/js/customize.js"></script>
@endsection

@section('css-insert')
<link type=text/css rel="stylesheet" href="/css/pages/customize.css">    
@endsection