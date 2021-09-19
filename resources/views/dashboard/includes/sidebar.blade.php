<!-- Begin SideBar-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="#">
                    <i class="la la-mouse-pointer"></i>
                    <span class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item">
                <a href="#"><i class="la la-language"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع  </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                            اضافة لغة جديدة
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الأقسام الرئيسية </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                            إضافة قسم جديد
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الأقسام الفرعية  </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li>
                        <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                            إضافة قسم فرعي جديد
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المتاجر  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">
                            إضافة متجر جديد
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الطلاب  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.dash.crypto">أضافة
                            طالب </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="#"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">تذاكر المراسلات   </span>
                    <span
                        class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="#"
                                          data-i18n="nav.dash.ecommerce"> تذاكر الطلاب </a>
                    </li>
                </ul>
            </li>


            <li class=" nav-item"><a href="#"><i class="la la-cogs"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                       {{__('admin/sidebar.settings')}}
                    </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">
                            {{__('admin/sidebar.shipping methods')}}
                        </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href=" {{route('edit.shipping.methods' , 'free')}}">
                                     {{ __('admin/sidebar.free shipping') }}
                                </a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{route('edit.shipping.methods' , 'inner')}}">
                                    {{ __('admin/sidebar.inner shipping') }}
                                </a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{route('edit.shipping.methods' , 'outer')}}">
                                    {{ __('admin/sidebar.outer shipping') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>

<!--End Sidebare-->
