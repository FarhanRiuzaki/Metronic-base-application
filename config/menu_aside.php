<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title'     => 'Dashboard',
            'root'      => true,
            'icon'      => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page'      => '/',
            'new-tab'   => false,
            'permission'=> true,
        ],
        // Custom
        [
            'section'   => 'Super Admin',
            'role'      => 'super-admin'
        ],
        [
            'title'     => 'Datatables',
            'root'      => true,
            'icon'      => 'media/svg/icons/Layout/Layout-horizontal.svg', // or can be 'flaticon-home' or any flaticon-*
            'page'      => 'datatables',
            'new-tab'   => false,
            'role'      => 'super-admin'
        ],
        [
            'title'     => 'KTDatatable',
            'root'      => true,
            'icon'      => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
            'page'      => 'ktdatatables',
            'new-tab'   => false,
            'role'      => 'super-admin'
        ],
        [
            'title'     => 'Select2',
            'root'      => true,
            'icon'      => 'media/svg/icons/Design/Interselect.svg',
            'page'      => 'select2',
            'new-tab'   => false,
            'role'      => 'super-admin'
        ],
        [
            'title'     => 'Jquery Mask',
            'root'      => true,
            'icon'      => 'la-align-center',
            'page'      => 'jquerymask',
            'new-tab'   => false,
            'role'      => 'super-admin'
        ],
        [
            'title'     => 'Icons',
            'icon'      => 'media/svg/icons/General/Attachment2.svg',
            'bullet'    => 'dot',
            'role'      => 'super-admin',
            'submenu' => [
                [
                    'title' => 'SVG Icons',
                    'page'  => 'icons/svg',
                    'role'  => 'super-admin'
                ],
                [
                    'title' => 'Flaticon',
                    'page'  => 'icons/flaticon',
                    'role'  => 'super-admin'
                ],
                [
                    'title' => 'Fontawesome 5',
                    'page'  => 'icons/fontawesome',
                    'role'  => 'super-admin'
                ],
                [
                    'title' => 'Lineawesome',
                    'page'  => 'icons/lineawesome',
                    'role'  => 'super-admin'
                ],
                [
                    'title' => 'Socicons',
                    'page'  => 'icons/socicons',
                    'role'  => 'super-admin'
                ]
            ]
        ],
        [
            'section'   => 'Management Application',
            'can'       => ['permission.index','role.index','user.index', 'product.index'],
        ],
        [
            'title'     => 'Product',
            'root'      => true,
            'icon'      => 'media/svg/icons/Shopping/Cart2.svg', // or can be 'flaticon-home' or any flaticon-*
            'page'      => 'products',
            'new-tab'   => false,
            'can'       => 'product.index'
        ],
        [
        'title' => 'Management Apps',
            'icon'      => 'media/svg/icons/Shopping/Settings.svg',
            'bullet'    => 'dot',
            'can'       => ['permission.index','role.index','user.index'],
            'submenu' => [
                [
                    'title' => 'Permissions',
                    'page'  => 'permissions',
                    'can'   => 'permission.index'
                ],
                [
                    'title' => 'Roles',
                    'page'  => 'roles',
                    'can'   => 'role.index'
                ],
                [
                    'title' => 'Users',
                    'page'  => 'users',
                    'can'   => 'user.index'
                ],
            ]
        ],
    ]
];
