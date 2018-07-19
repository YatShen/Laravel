@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h1>所有用户</h1>
        <ul class="users">
            @foreach($users as $user)
                @include('users._user')
            @endforeach
        </ul>

        {!! $users->render() !!}
    </div>
@stop