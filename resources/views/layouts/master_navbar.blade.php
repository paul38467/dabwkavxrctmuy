<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark my-navbar">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">藝人</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">AV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">電影</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">管理</a>
            </li>
            <li class="nav-item {{ active_if_routes('test_views*') }}">
                <a class="nav-link" href="{{ route_uri('test_views.index') }}">測試
                    @if (active_if_routes('test_views*') == 'active') <span class="sr-only">(current)</span> @endif
                </a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div><!-- /#navbarSupportedContent -->
</nav>
