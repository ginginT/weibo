@extends('layouts.default')
@section('title','微博')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>微博列表</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user' => Auth::user()])
                </section>
                <section class="stats">
                    @include('shared._stat',['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello Life</h1>
            <p class="lead">
                微博-随时随地发现新鲜！
            </p>
            <p>
                一切，将从这里开始。
            </p>
            <p>
                <a href="{{ route('users.create') }}" class="btn btn-lg btn-success" role="button"
                   style="background-color: #cb00ff">现在注册</a>
            </p>
        </div>
    @endif
@stop