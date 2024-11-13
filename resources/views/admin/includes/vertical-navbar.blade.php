<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{route('admin.dashboard')}}" class="brand-link">
            <img src="{{asset('adminlte/images/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">IMS ADMIN</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @if(isset($menus) && !empty($menus))
                    @foreach ($menus as $id => $menu)
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>{{$menu['label']}}<i class="nav-arrow bi bi-chevron-right"></i></p>
                            </a>
                            @if(!empty($menu['childs']) && isset($menu['childs']))
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        @foreach($menu['childs'] as $subMenuId => $submenu)
                                            <a href="{{route($submenu['route'])}}" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>{{$submenu['label']}}</p>
                                            </a>
                                        @endforeach
                                    </li>
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
                <!-- CHAT MENU OPTION -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-chat-text"></i>
                        <span class="navbar-badge badge text-bg-danger">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('adminlte/images/user1-128x128.jpg')}}" alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3">
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"> <img src="{{asset('adminlte/images/user8-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i>
                                        </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"> <img src="{{asset('adminlte/images/user3-128x128.jpg')}}"
                                        alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i>
                                        </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All
                            Messages</a>
                    </div>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>