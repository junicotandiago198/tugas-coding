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
                <li class=""><a class="nav-link" href="{{ route('backsite.dashboard.admin') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                <li class=""><a class="nav-link" href="{{ route('backsite.category.index') }}"><i class="fas fa-th-large"></i> <span>Category</span></a></li>
                <li class=""><a class="nav-link" href="{{ route('backsite.product.index') }}"><i class="fas fa-tshirt"></i> <span>Product</span></a></li>
                <li class=""><a class="nav-link" href="{{ route('backsite.transaction.index') }}"><i class="far fa-credit-card"></i> <span>Transaction</span></a></li>

                {{-- Disini Untuk Master Datanya --}}
                <li class="menu-header">General</li>
                <li class=""><a class="nav-link" href="{{ route('backsite.user.index') }}"><i class="fas fa-users"></i> <span>User</span></a></li>
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