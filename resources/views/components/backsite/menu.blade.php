<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">DASHBOARD PENJUALAN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">QT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ request()->is('backsite/dashboard-jenis-barang') || request()->is('backsite/dashboard-jenis-barang/*') || request()->is('backsite/*/dashboard-jenis-barang') || request()->is('backsite/*/dashboard-jenis-barang/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('backsite.dashboard-jenis-barang.index') }}"><i class="fas fa-th-large"></i> <span>Jenis Barang</span></a></li>
            <li class="{{ request()->is('backsite/dashboard-barang') || request()->is('backsite/dashboard-barang/*') || request()->is('backsite/*/dashboard-barang') || request()->is('backsite/*/dashboard-barang/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('backsite.dashboard-barang.index') }}"><i class="fas fa-th-large"></i> <span>Barang</span></a></li>
            <li class="{{ request()->is('backsite/dashboard-penjualan') || request()->is('backsite/dashboard-penjualan/*') || request()->is('backsite/*/dashboard-penjualan') || request()->is('backsite/*/dashboard-penjualan/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('backsite.dashboard-penjualan.index') }}"><i class="fas fa-th-large"></i> <span>Penjualan Barang</span></a></li>
        </ul>
    </aside>
</div>