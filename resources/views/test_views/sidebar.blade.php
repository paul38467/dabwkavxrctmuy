<!-- start test_views.sidebar -->
<div class="my-sidebar-header">
    測試
</div>

<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a class="nav-link {{ active_if_routes('test_views.index') }}" href="{{ route_uri('test_views.index') }}">
            <i class="fas fa-angle-right fa-fw"></i>首頁
        </a>
    </li>
</ul>
<!-- end test_views.sidebar -->
