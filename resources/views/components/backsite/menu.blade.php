<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">SECRET ENCHANTE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">SE</a>
        </div>
        {{-- Disini Sedebarnnya untuk role ADMIN --}}
        {{-- @if(auth()->user() && auth()->user()->role === 'admin') --}}
            <ul class="sidebar-menu">
                {{-- Disini Statistik Dashboard --}}
                <li class="menu-header">Menu</li>
                <li class=""><a class="nav-link" href="{{ route('backsite.dashboard-penjualan.index') }}"><i class="fas fa-th-large"></i> <span>Penjualan Barang</span></a></li>
                <li>
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                    </a>
                </li>
                
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        {{-- @endif --}}
    </aside>
</div>