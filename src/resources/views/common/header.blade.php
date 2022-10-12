<nav class="navbar navbar-expand-lg navbar-laravel shadow-sm p-3 mb-2">
    <div class="container">
        <a class="navbar-brand text-white font-weight-bold" href="/admin">Taro Nguyen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">登録</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <i class="fa fa-user"></i>
                            プロフィール</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                                <i class="fa fa-right-from-bracket"></i>
                            ログアウト</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
