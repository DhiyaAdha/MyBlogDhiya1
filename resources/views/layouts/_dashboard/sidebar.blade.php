<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            {{-- Link:Dashboard --}}
            <a class="nav-link active" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                {{-- Dashboard --}}
                {{ trans('dashboard.link.dashboard') }}
            </a>
            {{-- Menu:master --}}
            <div class="sb-sidenav-menu-heading">
                {{-- Master --}}
                {{ trans('dashboard.menu.master') }}
            </div>

            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="far fa-newspaper"></i>
                </div>
                {{-- Posts --}}
                {{ trans('dashboard.link.posts') }}
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-bookmark"></i>
                </div>
                {{-- Categories --}}
                {{ trans('dashboard.link.categories') }}
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tags"></i>
                </div>
                {{-- Tags --}}
                {{ trans('dashboard.link.tags') }}
            </a>
            {{-- Menu:user permission --}}
            <div class="sb-sidenav-menu-heading">
                {{-- User permission --}}
                {{ trans('dashboard.menu.user_permission') }}
            </div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-user"></i>
                </div>
                {{-- User --}}
                {{ trans('dashboard.link.users') }}
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                {{-- Role --}}
                {{ trans('dashboard.link.roles') }}
            </a>
            {{-- Menu:settings --}}
            <div class="sb-sidenav-menu-heading">
                {{-- Settings --}}
                {{ trans('dashboard.menu.settings') }}
            </div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-photo-video"></i>
                </div>
                {{-- File manager --}}
                {{ trans('dashboard.link.file_manager') }}
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">
            {{-- Logged in as: --}}
            {{ trans('dashboard.label.logged_in_as') }}
        </div>
        <!-- show username -->
        {{ Auth::user()->name }}
    </div>
</nav>
