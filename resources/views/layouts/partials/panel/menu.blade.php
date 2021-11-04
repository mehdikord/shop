<li class="nav-item {{panel_check_menu_active('panel')}}">
    <a href="{{ route('panel_dashboard') }}">
        <i class="bx bxs-dashboard font-24 text-danger"></i>
        <span class="menu-title text-truncate">داشبورد</span>
    </a>
</li>
<li class="navigation-header text-truncate"><span class="text-warning">محصولات و دسته‌ بندی</span></li>
<li class="nav-item {{panel_check_menu_active('panel/categories')}}">
    <a href="{{ route('panel_categories') }}">
        <i class="bx bx-category-alt font-24 text-danger"></i>
        <span class="menu-title text-truncate">دسته بندی ها</span>
    </a>
</li>
<li class=" nav-item">
    <a href="">
        <i class="" data-icon="desktop">
        </i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
        <span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto">2</span>
    </a>
    <ul class="menu-content">
        <li>
            <a class="d-flex align-items-center" href="">
                <i class="bx bx-right-arrow-alt"></i>
                <span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span>
            </a>
        </li>
        <li>
            <a class="d-flex align-items-center" href="">
                <i class="bx bx-right-arrow-alt"></i>
                <span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span>
            </a>
        </li>
    </ul>
</li>

