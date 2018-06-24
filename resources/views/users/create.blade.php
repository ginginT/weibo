@extends('layouts.default')
@section('title','注册')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default" style="border: 1px solid #df65ff">
            <div class="panel-heading" style="background-color:#df65ff;">
                <h5 style="color: #fff">注册</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <form action="{{ route('users.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input style="border: 1px solid #df65ff" type="text" name="name" class="form-control"
                               value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input style="border: 1px solid #df65ff" type="text" name="email" class="form-control"
                               value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input style="border: 1px solid #df65ff" type="password" name="password" class="form-control"
                               value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input style="border: 1px solid #df65ff" type="password" name="password_confirmation"
                               class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color:#df65ff;color: #fff">注册
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop