@extends('layouts.default')
@section('title','编辑个人资料')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default" style="border: 1px solid #df65ff">
            <div class="panel-heading" style="background-color:#df65ff;">
                <h5 style="color: #fff">编辑个人资料</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                    </a>
                </div>
                <form action="{{ route('users.update',$user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input style="border: 1px solid #df65ff" type="text" name="name" class="form-control"
                               value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input style="border: 1px solid #df65ff;background-color: #f9e2ff" type="text" name="email"
                               class="form-control" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input style="border: 1px solid #df65ff" type="password" name="password" class="form-control"
                               value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input style="border: 1px solid #df65ff" type="password" name="passowrd_confirmation"
                               class="form-control" value="{{ old('password_confirmation') }}">
                    </div>
                    <button style="background-color:#df65ff;color: #fff" type="submit" class="btn btn-primary">更新
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop