@extends('layouts.default')
@section('title','微博')
@section('content')
<div class="jumbotron">
    <h1>Hello Life</h1>
    <p class="lead">
        微博-随时随地发现新鲜！
    </p>
    <p>
        一切，将从这里开始。
    </p>
    <p>
        <a href="{{ route('users.create') }}" class="btn btn-lg btn-success" role="button" style="background-color: #cb00ff">现在注册</a>
    </p>
</div>
@stop