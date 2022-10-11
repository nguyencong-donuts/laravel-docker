<div class="page-wrapper chiller-theme toggled">
    <span id="show-sidebar" class="btn btn-sm btn-dark">
        <i class="fa-sharp fa-solid fa-arrow-right"></i>
    </span>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/#">株式会社 Taro Nguyen</a>
                <span id="close-sidebar">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                </span>
            </div>
            {{-- <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded"
                        src="https://assets.reedpopcdn.com/Genshin-Impact-anime.jpg/BROK/thumbnail/1600x900/quality/100/Genshin-Impact-anime.jpg"
                        alt="User picture">
                </div>
                <div class="user-info">
                    <span class="user-name">Taro
                        <strong>Nguyen</strong>
                    </span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                </div>
            </div> --}}
            <!-- sidebar-header  -->
            {{-- <div class="sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Search...">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    {{-- <li class="header-menu">
                        <span>General</span>
                    </li> --}}
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-home"></i>
                            <span>ダッシュボード</span>
                            {{-- <span class="badge badge-pill badge-warning">New</span> --}}
                        </a>
                        {{-- <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Dashboard 1
                                        <span class="badge badge-pill badge-success">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="#">Dashboard 3</a>
                                </li>
                            </ul>
                        </div> --}}
                    </li>
                    <li>
                        <a href="{{ route('users') }}">
                            <i class="fa fa-user"></i>
                            <span>ユーザー一覧</span>
                            {{-- <span class="badge badge-pill badge-danger">3</span> --}}
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Components</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
    </nav>
    <!-- page-content" -->
</div>
