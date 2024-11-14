<div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="{{ route('admin.dashboard.show') }}" class="brand-link">
        <!--begin::Brand Image-->
        <img src="{{ asset('admin/assets/images/logo.jpg') }}" alt="golftrip.asia" class="brand-image opacity-75 shadow" />
        <!--end::Brand Image--><!--begin::Brand Text-->
        <span class="brand-text fw-light">golftrip.asia</span>
        <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
</div>

<div class="sidebar-wrapper" data-overlayscrollbars="host">
    <div class="os-size-observer os-size-observer-appear"><div class="os-size-observer-listener ltr"></div></div>
    <div data-overlayscrollbars-viewport="scrollbarHidden" style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px; overflow-y: scroll;">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @can('admin.dashboard.show')
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.show') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endcan
                @can(['admin.roles.show', 'admin.user.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                             Tài khoản
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Nhóm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Thành viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('admin.golf.show')
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Golf
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.golf.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sân Golf</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['admin.room.show', 'admin.hotel.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Khách sạn
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.room.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Hạng phòng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hotel.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dịch vụ khách sạn</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['admin.carconfig.show', 'admin.car.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Thuê xe
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.carconfig.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Phí phát sinh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.car.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Phí thuê xe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['admin.other.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Dịch vụ khác
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.other.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Danh sách dịch vụ khác</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['admin.package.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Package
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.package.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Danh sách package</p>
                            </a>
                        </li>                        
                    </ul>
                </li>
                @endcan

                @can(['admin.price_market.golf', 'admin.price_market.hotel', 'admin.price_market.car'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Quản lý giá thị trường
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.price_market.golf') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá tt sân Golf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.price_market.hotel') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá tt hotel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.price_market.car') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá tt xe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can(['admin.market.golf', 'admin.market.hotel', 'admin.market.car'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Quản lý giá net
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.price.golf') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá sân Golf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.price.hotel') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá hotel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.price.car') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sửa giá xe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan 

                @can(['admin.price.golf', 'admin.price.hotel', 'admin.price.car'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Quản lý giá bán
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.market.golf') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cập nhật giá sân Golf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.market.hotel') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cập nhật giá hotel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.market.car') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cập nhật giá xe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan 

                @can(['admin.consultant.golf', 'admin.consultant.hotel', 'admin.consultant.car', 'admin.consultant.other'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Danh sách giá kinh doanh
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.consultant.golf') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Bảng giá sân golf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.consultant.hotel') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Bảng giá khách sạn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.consultant.car') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Bảng giá thuê xe</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.consultant.other') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Bảng giá dịch vụ khác</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.consultant.fee') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Phí phát sinh thuê xe</p>
                            </a>
                        </li>
                    </ul>
                </li>   
                @endcan 

                @can(['admin.setting.show', 'admin.link.show'])
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Quản trị
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cài đặt giá</p>
                            </a>
                        </li>
                        @can('admin.link.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.link.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Cài đặt link</p>
                            </a>
                        </li>
                        @endcan 
                    </ul>
                </li>
                @endcan 

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Liên kết nhanh
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @if(isset($site_settings) && count($site_settings))
                            @foreach($site_settings as $setting)
                            <?php 
                                $type = '';
                                if($setting->type == 2) {
                                    $type = 'target="_blank"';
                                }
                            ?>
                            <a href="{{ $setting->url }}" {{ $type }} class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>{{ $setting->text }}</p>
                            </a>
                            @endforeach
                            @endif

                        </li>
                    </ul>
                </li>

                @can(['admin.customer.show', 'admin.service.show', 'admin.payment.show', 'admin.tour.show', 'admin.statistic.show'])
                <li class="nav-item menu-close">
                    
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Kinh doanh
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('admin.customer.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Lead khách hàng</p>
                            </a>
                        </li>
                        @endcan
                        @can('admin.service.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.service.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Khách hàng & dịch vụ</p>
                            </a>
                        </li>
                        @endcan
                        @can('admin.payment.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.payment.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Theo dõi thanh toán</p>
                            </a>
                        </li>
                        @endcan
                        @can('admin.tour.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.tour.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Điều hành tour - booking</p>
                            </a>
                        </li>
                        @endcan
                        @can('admin.statistic.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.statistic.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Doanh thu</p>
                            </a>
                        </li>
                        @endcan

                        @can('admin.sale.show')
                        <li class="nav-item">
                            <a href="{{ route('admin.sale.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Doanh số</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan 

                <li class="nav-item menu-close">
                    
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Đơn hàng
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.booking.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.invoice.show') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable os-scrollbar-auto-hide-hidden">
        <div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%;"></div></div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-theme-light os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-visible os-scrollbar-cornerless os-scrollbar-auto-hide-hidden">
        <div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 68.022%;"></div></div>
    </div>
</div>

