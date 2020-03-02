@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/news/create" enctype="multipart/form-data" method="post" class="mb-5">
        @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>文章录入</h1>
            </div>
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label">标题</label>
                <input id="title" type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title" value="{{ old('title') }}"  
                        autocomplete="title" autofocus>
    
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="date" class="col-md-4 col-form-label">日期</label>
                <input id="date" type="text" 
                        class="form-control @error('date') is-invalid @enderror" 
                        name="date" value="{{ old('date') }}"  
                        autocomplete="date" autofocus>
    
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label">内容</label>
                <textarea id="content" type="text" rows=5
                        class="form-control @error('content') is-invalid @enderror" 
                        name="content" value="{{ old('content') }}"  
                        autocomplete="content" autofocus></textarea>
    
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="row pt-4">
                <button class="btn btn-primary">添加</button>
            </div>
        </div>
    </form>

</div>
@endsection
