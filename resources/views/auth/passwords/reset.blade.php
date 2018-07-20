@extends('layouts.default')
@section('title', '更新密码')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card" style="margin-top: 50px">
            <div class="card-header">更新密码</div>

            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="post" action="{{ route('password.update') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? 'hase-error' : '' }}">
                        <label for="email">邮箱地址：</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                        @if($errors->has('email'))
                            <span class="form-text">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? 'hase-error' : '' }}">
                        <label for="password">密码：</label>
                        <input type="password" id="password" class="form-control" name="password" required>

                        @if($errors->has('password'))
                            <span class="form-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? 'hase-error' : '' }}">
                        <label for="password-confirm">确定密码：</label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>

                        @if($errors->has('password_confirmation'))
                            <span class="form-text">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">
                        修改密码
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop