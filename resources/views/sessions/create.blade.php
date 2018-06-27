@extends('layouts.default')
@section('title','登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default" style="border: 1px solid #df65ff">
            <div class="panel-heading" style="background-color:#df65ff;">
                <h5 style="color: #fff">登录</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input style="border: 1px solid #df65ff" type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a>）：</label>
                        <input style="border: 1px solid #df65ff" type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">记住我</label>
                    </div>

                    <button class="btn btn-primary" type="submit" style="background-color:#df65ff;color: #fff">登录</button>
                </form>
                <hr style="border: 0.1px solid #df65ff">
                <p>还没帐号？<a href="{{ route('users.create') }}">现在注册！</a></p>
            </div>
        </div>
    </div>
@stop