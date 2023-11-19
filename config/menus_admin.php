<?php

return [
    'dashboard' => [
        'name' => 'Dashboard',
        'route' => 'admin.index',
        'icon' => 'anticon anticon-dashboard',
    ],
    'genres' => [
        'name' => 'Thể loại',
        'route' => 'admin.genres.index',
        'icon' => 'anticon anticon-book',
    ],
    'publishers' => [
        'name' => 'Nhà xuất bản',
        'route' => 'admin.publishers.index',
        'icon' => 'anticon anticon-book',
    ],
    'authors' => [
        'name' => 'Tác giả',
        'route' => 'admin.authors.index',
        'icon' => 'anticon anticon-book',
    ],
    'books' => [
        'name' => 'Sách',
        'route' => 'admin.books.index',
        'icon' => 'fas fa-book',
    ],
    'users' => [
        'name' => 'Người dùng',
        'route' => 'admin.users.index',
        'icon' => 'anticon anticon-user',
    ],
    'orders' => [
        'name' => 'Đơn hàng',
        'route' => 'admin.orders.index',
        'icon' => 'anticon anticon-shopping-cart',
    ],
];
