@extends('layouts.app')

@section('content')
<div class="container">
   <h1>添加成功!</h1> 
   <a class="btn btn-primary" href="{{URL::previous()}}" role="button">继续添加</a>
</div>
@endsection
