<!-- start admin.sidebar -->
<div class="my-sidebar-header">
    管理
</div>

<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a class="nav-link {{ active_if_routes('admin.index') }}" href="{{ route_uri('admin.index') }}">
            <i class="fas fa-home fa-fw"></i> 首頁
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ active_if_routes('admin.regions*') }}" href="{{ route_uri('admin.regions.index') }}">
            <i class="fas fa-cog fa-fw"></i> 地區
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ active_if_routes('admin.artist_tagcats*') }}" href="{{ route_uri('admin.artist_tagcats.index') }}">
            <i class="fas fa-cog fa-fw"></i> 藝人的標籤分類
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ active_if_routes('admin.artist_tags*') }}" href="{{ route_uri('admin.artist_tags.index') }}">
            <i class="fas fa-cog fa-fw"></i> 藝人的標籤
        </a>
    </li>
</ul>
<!-- end admin.sidebar -->
