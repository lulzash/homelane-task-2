<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
    @if (auth()->user()->hasRole('admin'))
        <a class="c-sidebar-nav-link c-active" href="{{ route('admin.permission.index') }}">
            <i class="c-sidebar-nav-icon cil-home"></i>Permissions
        </a>
        <a class="c-sidebar-nav-link c-active" href="{{ route('admin.role.index') }}">
            <i class="c-sidebar-nav-icon cil-home"></i>Roles
        </a>
        <a class="c-sidebar-nav-link c-active" href="{{ route('admin.role.index') }}">
            <i class="c-sidebar-nav-icon cil-home"></i>Users
        </a>
    @endif
</li>
