<?php

return [
    'dates' => [
        [
            'id' => 1,
            'text' => 'Thứ 2',
        ],
        [
            'id' => 2,
            'text' => 'Thứ 3',
        ],
        [
            'id' => 3,
            'text' => 'Thứ 4',
        ],
        [
            'id' => 4,
            'text' => 'Thứ 5',
        ],
        [
            'id' => 5,
            'text' => 'Thứ 6',
        ],
        [
            'id' => 6,
            'text' => 'Thứ 7',
        ],
        [
            'id' => 7,
            'text' => 'Chủ nhật',
        ],
        [
            'id' => 8,
            'text' => 'Holiday',
        ],
    ],
    'hotel_types' => [
        [
            'id' => 1,
            'text' => 'Thấp điểm'
        ],
        [
            'id' => 2,
            'text' => 'Cao điểm'
        ]
    ],
    'price_sells' => [
        [
            'id' => 5,
            'text' => '5%'
        ],
        [
            'id' => 10,
            'text' => '10%'
        ],
        [
            'id' => 15,
            'text' => '15%'
        ],
    ],
    'type_hotel' => array(
        [
            'id' => 1,
            'text' => '1 người 1 phòng',
        ],
        [
            'id' => 2,
            'text' => '2 người 1 phòng',
        ],
    ),
    'type_package' => array(
        [
            'id' => 0,
            'text' => 'Package chưa xác định',
        ],
        [
            'id' => 1,
            'text' => 'Package cụ thể',
        ],
    ),

    'roles' => [
        'admin.dashboard' => [
            'title' => 'Dashboard',
            'rowspan' => 1,
        ],
        'admin.roles' => [
            'title' => 'Nhóm',
            'rowspan' => 7,
        ],
        'admin.user' => [
            'title' => 'Thành viên',
            'rowspan' => 5,
        ],
        'admin.golf' => [
            'title' => 'Golf',
            'rowspan' => 6,
        ],
        'admin.room' => [
            'title' => 'Hạng phòng',
            'rowspan' => 5,
        ],
        'admin.hotel' => [
            'title' => 'Khách sạn',
            'rowspan' => 6,
        ],
        'admin.carconfig' => [
            'title' => 'Phí phát sinh',
            'rowspan' => 2,
        ],
        'admin.car' => [
            'title' => 'Phí thuê xe',
            'rowspan' => 5,
        ],
        'admin.other' => [
            'title' => 'Dịch vụ khác',
            'rowspan' => 5,
        ],
        'admin.price_market' => [
            'title' => 'Quản lý giá thị trường',
            'rowspan' => 9,
        ],
        'admin.price' => [
            'title' => 'Quản lý giá net',
            'rowspan' => 6,
        ],
        'admin.market' => [
            'title' => 'Quản lý giá bán',
            'rowspan' => 6,
        ],
        'admin.consultant' => [
            'title' => 'Danh sách giá kinh doanh',
            'rowspan' => 8,
        ],
        'admin.package' => [
            'title' => 'Package',
            'rowspan' => 24,
        ],
        'admin.setting' => [
            'title' => 'Cài đặt giá',
            'rowspan' => 2,
        ],
        'admin.customer' => [
            'title' => 'Lead khách hàng',
            'rowspan' => 4,
        ],
        'admin.service' => [
            'title' => 'Khách hàng và dịch vụ',
            'rowspan' => 4,
        ],
        'admin.payment' => [
            'title' => 'Theo dõi thanh toán',
            'rowspan' => 3,
        ],
        'admin.tour' => [
            'title' => 'Điều hành tour - booking',
            'rowspan' => 3,
        ],
        'admin.statistic' => [
            'title' => 'Doanh thu',
            'rowspan' => 1,
        ],
        'admin.link' => [
            'title' => 'Cài đặt link',
            'rowspan' => 5,
        ],
        'admin.booking' => [
            'title' => 'Booking',
            'rowspan' => 7,
        ],
        'admin.invoice' => [
            'title' => 'Invoice',
            'rowspan' => 5,
        ],
        'admin.sale' => [
            'title' => 'Doanh số',
            'rowspan' => 1,
        ]
    ],
    'service_types' => [
        1 => 'Teetime',
        2 => 'Package',
        3 => 'Teetime+Car',
        4 => 'Teetime+Hotel',
        5 => 'Car',
        6 => 'Hotel',
        7 => 'Other',
    ],
    'service_destinations' => [
        'hcm' => 'HCM', 
        'phanthiet' => 'Phan Thiết', 
        'dalat' => 'Đà Lạt', 
        'nhatrang' => 'Nha Trang', 
        'danang' => 'Đà Nẵng', 
        'hanoi' => 'Hà Nội', 
        'halong' => 'Hạ Long', 
        'haiphong' => 'Hải Phòng'
    ],
    'service_votes' => [
        1 => 'Tư vấn Dễ',
        2 => 'Tư vấn Trung Bình',
        3 => 'Tư vấn Khó',
    ],
    'service_status' => [
        0 => 'Rớt',
        1 => 'Đậu',
    ],
    'service_status_payment' => [
        0 => 'Đang thanh toán',
        1 => 'Thanh toán xong',
    ],
    'service_used' => [
        0 => 'Not use',
        1 => 'Đã lock',
        2 => 'Đã xác nhận dịch vụ',
        3 => 'Đã yêu cầu thanh toán',
        4 => 'Đã thanh toán dịch vụ',
        5 => 'Đang điều hành',
        6 => 'Đã hoàn thành',
        7 => 'Khách huỷ dịch vụ này',
        8 => 'Đợi dịch vụ hoàn tiền',
        9 => 'Hoàn tiền cho khách',
    ],
    'link_custom_type' => [
        [
            'id' => 1,
            'text' => 'Di chuyển đến trang mới',
        ],
        [
            'id' => 2,
            'text' => 'Mở tab mới',
        ],
    ],
];
