<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                {{-- <li  id="dashboard" class="">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>Dashboards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul id="dashboard_list">
                        <li>
                            <a href="{{url('dashboard')}}" class="analytics_active">
                                <i class="metismenu-icon"></i>Analytics
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/web-settings')}}" class="settings_active">
                                <i class="metismenu-icon"></i>Web Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/banner/index')}}" class="banner_active">
                                <i class="metismenu-icon"></i>Banners
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/testimonial/index')}}" class="testimonials_active">
                                <i class="metismenu-icon"></i>Testimonials
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/blog/index')}}" class="blog_active">
                                <i class="metismenu-icon"></i>Blogs
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li id="item_manager" class="">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-server"></i>Item Manager
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul id="item_manager_list">
                        <li>
                            <a href="{{url('admin/dashboard')}}" class="dashboard_active">
                                <i class="metismenu-icon"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/category/index')}}" class="category_active">
                                <i class="metismenu-icon"></i>Category
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/sub-category/index')}}" class="sub_category_active">
                                <i class="metismenu-icon"></i>Sub Category
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/product/index')}}" class="product_active">
                                <i class="metismenu-icon"></i>Product
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
