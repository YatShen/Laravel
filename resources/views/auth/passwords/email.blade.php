@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card" style="margin-top: 50px">
            <div class="card-header">重置密码</div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="post" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? 'hase-error' : '' }}">
                        <label for="email">邮箱地址：</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if($errors->has('email'))
                            <span class="form-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">
                        发送密码重置邮件
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop