
  <div id="layout-menu" class="layout-menu menu-vertical position-relative menu bg-dark bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                   <img src="" class="m-2"  alt="logo">
                </span>
            </a>

            <a href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>

        </div>

        <div class="nav-panel-close p-2 bg-danger text-white rounded-bottom-3 position-absolute end-0">
            <i class='bx bx-x fs-3'></i>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1 bg-dark">

            <!-- Dashboard -->
            <li class="menu-item {{ Request::is('home') ? "active" : "" }}">
                <a href="{{ route('home') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Dashboard</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div>Reports</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Without menu</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Without navbar</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Employee</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div >Employee</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Account</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div>Notifications</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div >Authentications</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link" target="_blank">
                            <div>Login</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link" target="_blank">
                            <div>Register</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                    <div >Misc</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div>Error</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Under Maintenance</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div >Cards</div>
                </a>
            </li>
            <!-- User interface -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div>User interface</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="ui-accordion.html" class="menu-link">
                            <div>Accordion</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Alerts</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Badges</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Typography</div>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-copy"></i>
                    <div >Extended UI</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div>Perfect scrollbar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Text Divider</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="icons-boxicons.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-crown"></i>
                    <div>Boxicons</div>
                </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp;
                    Tables</span></li>
            <!-- Forms -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div >Form Elements</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Basic Inputs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div>Input groups</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div >Form Layouts</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Vertical Form</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">
                            <div >Horizontal Form</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Tables -->
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div >Tables</div>
                </a>
            </li>
            <!-- Settings -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Settings</span>
            </li>

            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-support"></i>
                    <div >Settings 1</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-file"></i>
                    <div >Settings 2</div>
                </a>
            </li>
        </ul>
    </div>
