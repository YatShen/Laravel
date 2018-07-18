<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav class="navbar navbar-dark navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        @if(Auth::check())
                            <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item text-center" href="{{ route('users.show', Auth::user()->id) }}">个人中心</a>
                                    <a class="dropdown-item text-center" href="#">编辑资料</a>
                                    <a class="dropdown-item" href="#" id="logout">
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>