@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/category" enctype="multipart/form-data" method="post" class="mb-5">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>添加分类</h1>
            </div>
            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label">分类</label>
                <div>说明：这里是添加案例所属的分类，会显示在页面上，在添加案例的时候可以选择这些分类</div>
                <input id="category" type="text" 
                        class="form-control @error('category') is-invalid @enderror" 
                        name="category" value="{{ old('category') }}"  
                        autocomplete="category" autofocus>
    
                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <strong>{{ $message }}</strong>                
                @enderror
            </div> --}}

            <div class="row pt-4">
                <button class="btn btn-primary">添加</button>
            </div>
        </div>
    </form>

    <form action="/module" enctype="multipart/form-data" method="post" class="mb-5">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>添加模块</h1>
            </div>
            <div class="form-group row">
                <label for="module" class="col-md-4 col-form-label">模块</label>
                <div>说明：这里是添加案例所用到的模块，会显示在页面上，在添加案例的时候可以选择这些模块</div>
                <input id="module" type="text" 
                        class="form-control @error('module') is-invalid @enderror" 
                        name="module" value="{{ old('module') }}"  
                        autocomplete="module" autofocus>
    
                @error('module')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <strong>{{ $message }}</strong>                
                @enderror
            </div> --}}

            <div class="row pt-4">
                <button class="btn btn-primary">添加</button>
            </div>
        </div>
    </form>

    <form action="/case/create" enctype="multipart/form-data" method="post" class="mb-5">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>添加案例</h1>
            </div>
            <div class="mb-3">
                <label class="col-form-label d-block">类别</label>
                <div class="checkbox">
                    @foreach ($categories as $category )
                    <label class="ml-2">
                        <input name="categories[]" type="checkbox" value="{{$category->id}}" />
                           {{$category->name}}
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <label class="col-form-label">涉及模块</label>
                <div class="checkbox">
                    @foreach ($modules as $module )
                    <label class="ml-2">
                        <input name="modules[]" type="checkbox" value="{{$module->id}}" />
                           {{$module->name}}
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="case" class="col-md-4 col-form-label">名称</label>
        
                <input id="case" type="text" 
                        class="form-control @error('case') is-invalid @enderror" 
                        name="case" value="{{ old('case') }}"  
                        autocomplete="case" autofocus>
    
                @error('case')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">简介</label>
        
                <input id="description" type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" value="{{ old('description') }}"  
                        autocomplete="description" autofocus>
    
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="row">
                <label for="logo" class="col-md-4 col-form-label">logo</label>
                <div>这里是添加案例中的logo，要求是133*133，这里是范例 <a href="http://xrs.ixiaochengxu.cc/2017-08-07_5987dce75cefc.jpg">点我</a></div>
                <input type="file" class="form-control-file" id="logo" name="logo">
                @error('logo')
                    <strong>{{ $message }}</strong>                
                @enderror
            </div>

            <div class="row">
                <label for="qrcode" class="col-md-4 col-form-label">qrcode</label>
                <div>这里是添加案例中的logo，要求是345*345，这里是范例 <a href="http://xrs.ixiaochengxu.cc/2017-08-07_5987dd1507f50.jpg">点我</a></div>
                <input type="file" class="form-control-file" id="qrcode" name="qrcode">
                @error('qrcode')
                    <strong>{{ $message }}</strong>                
                @enderror
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">添加</button>
            </div>
        </div>
    </form>

</div>
@endsection
