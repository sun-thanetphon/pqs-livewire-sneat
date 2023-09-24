<li class="menu-item {{ Request::routeIs($routeName) ? 'active' : '' }}">
    <a href="{{route($routeName)}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">{{$menuName}}</div>
    </a>
</li>