<?php
return [
//    [
//        'title' => 'Category',
//        'name' => 'category',
//        'icon' => 'fa fa-list',
//        'route' => 'admin.categories.index',
//        'children' => [
//            [
//                'title' => 'List Category',
//                'gate' => 'category-list',
//                'icon' => 'fa fa-list',
//                'name' => 'index',
//                'route' => 'admin.categories.index',
//            ],
//            [
//                'title' => 'Create Category',
//                'name' => 'create',
//                'icon' => 'fa fa-plus',
//                'gate' => 'category-create',
//                'route' => 'admin.categories.create',
//            ],
//            [
//                'title' => 'Edit Category',
//                'name' => 'edit',
//                'icon' => 'fa fa-edit',
//                'gate' => 'category-update',
//            ]
//
//        ],
//    ],
    [
        'title' => 'Category Product',
        'type' => 'public',
        'name' => 'category',
        'icon' => 'fa fa-list',
        'route' => 'admin.product-category.index',
        'children' => [
            [
                'title' => 'List Category',
                'type' => 'public',
                'icon' => 'fa fa-list',
                'name' => 'index',
                'route' => 'admin.product-category.index',
            ],
            [
                'title' => 'Create Category',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'type' => 'public',
                'route' => 'admin.product-category.create',
            ],
            [
                'title' => 'Edit Category',
                'name' => 'edit',
                'type' => 'public',
                'icon' => 'fa fa-edit',
            ]

        ],
    ],
    [
        'title' => 'Product',
        'type' => 'public',
        'name' => 'product',
        'icon' => 'fa fa-list',
        'route' => 'admin.product.index',
        'children' => [
            [
                'title' => 'List Product',
                'type' => 'public',
                'icon' => 'fa fa-list',
                'name' => 'index',
                'route' => 'admin.product.index',
            ],
            [
                'title' => 'Create Product',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'type' => 'public',
                'route' => 'admin.product.create',
            ],
            [
                'title' => 'Edit Product',
                'name' => 'edit',
                'type' => 'public',
                'icon' => 'fa fa-edit',
            ]

        ],
    ],
    [
        'title' => 'Color',
        'type' => 'public',
        'name' => 'color',
        'icon' => 'fa fa-tag',
        'route' => 'admin.color.index',
        'children' => [
            [
                'title' => 'List Color',
                'name' => 'index',
                'icon' => 'fa fa-list',
                'type' => 'public',
                'route' => 'admin.color.index',
            ],
            [
                'title' => 'Create Color',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'type' => 'public',
                'route' => 'admin.color.create',
            ],
            [
                'title' => 'Edit Color',
                'name' => 'edit',
                'icon' => 'fa fa-edit',
                'type' => 'public',
            ]

        ],
    ],
    [
        'title' => 'Size',
        'type' => 'public',
        'name' => 'size',
        'icon' => 'fa fa-tag',
        'route' => 'admin.size.index',
        'children' => [
            [
                'title' => 'List Size',
                'name' => 'index',
                'icon' => 'fa fa-list',
                'type' => 'public',
                'route' => 'admin.size.index',
            ],
            [
                'title' => 'Create Size',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'type' => 'public',
                'route' => 'admin.size.create',
            ],
            [
                'title' => 'Edit Size',
                'name' => 'edit',
                'icon' => 'fa fa-edit',
                'type' => 'public',
            ]

        ],
    ],
    [
        'title' => 'Blog',
        'name' => 'blog',
        'icon' => 'fa fa-blog',
        'route' => 'admin.blogs.index',
        'children' => [
            [
                'title' => 'List Blog',
                'name' => 'index',
                'icon' => 'fa fa-list',
                'gate' => 'blog-list',
                'route' => 'admin.blogs.index',
            ],
            [
                'title' => 'Create Blog',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'gate' => 'blog-create',
                'route' => 'admin.blogs.create',
            ],
            [
                'title' => 'Edit Blog',
                'name' => 'edit',
                'icon' => 'fa fa-edit',
                'gate' => 'blog-list',
            ]

        ],
    ],
//    [
//        'title' => 'Tag',
//        'name' => 'tag',
//        'icon' => 'fa fa-tag',
//        'route' => 'admin.tags.index',
//        'children' => [
//            [
//                'title' => 'List Tag',
//                'name' => 'index',
//                'icon' => 'fa fa-list',
//                'gate' => 'tag-list',
//                'route' => 'admin.tags.index',
//            ],
//            [
//                'title' => 'Create Tag',
//                'name' => 'create',
//                'icon' => 'fa fa-plus',
//                'gate' => 'tag-create',
//                'route' => 'admin.tags.create',
//            ],
//            [
//                'title' => 'Edit Tag',
//                'name' => 'edit',
//                'icon' => 'fa fa-edit',
//                'gate' => 'tag-list',
//            ]
//
//        ],
//    ],
    [
        'title' => 'User',
        'name' => 'user',
        'icon' => 'fa fa-user',
        'route' => 'admin.users.index',
        'children' => [
            [
                'title' => 'List User',
                'name' => 'index',
                'icon' => 'fa fa-list',
                'gate' => 'user-list',
                'route' => 'admin.users.index',
            ],
            [
                'title' => 'Create User',
                'name' => 'create',
                'icon' => 'fa fa-plus',
                'gate' => 'user-create',
                'route' => 'admin.users.create',
            ],
            [
                'title' => 'Edit User',
                'gate' => 'user-update',
                'name' => 'edit',
                'icon' => 'fa fa-edit',
            ]
        ],
    ],
//    [
//        'title' => 'Role',
//        'name' => 'role',
//        'icon' => 'fa fa-user-circle',
//        'route' => 'admin.roles.index',
//        'children' => [
//            [
//                'title' => 'List Role',
//                'name' => 'index',
//                'icon' => 'fa fa-list',
//                'gate' => 'role-list',
//                'route' => 'admin.roles.index',
//            ],
//            [
//                'title' => 'Create Role',
//                'name' => 'create',
//                'icon' => 'fa fa-plus',
//                'gate' => 'role-create',
//                'route' => 'admin.roles.create',
//            ],
//            [
//                'title' => 'Edit Role',
//                'name' => 'edit',
//                'icon' => 'fa fa-edit',
//                'gate' => 'role-update',
//            ]
//        ],
//    ],
//    [
//        'title' => 'Permission',
//        'name' => 'permission',
//        'icon' => 'fa fa-key',
//        'route' => 'admin.permissions.index',
//        'children' => [
//            [
//                'title' => 'List Permission',
//                'name' => 'index',
//                'icon' => 'fa fa-list',
//                'gate' => 'permission-list',
//                'route' => 'admin.permissions.index',
//            ],
//            [
//                'title' => 'Create Permission',
//                'name' => 'create',
//                'icon' => 'fa fa-plus',
//                'gate' => 'permission-create',
//                'route' => 'admin.permissions.create',
//            ],
//            [
//                'title' => 'Edit Permission',
//                'gate' => 'permission-update',
//                'name' => 'edit',
//                'icon' => 'fa fa-edit',
//            ]
//        ],
//    ],
//    [
//        'title' => 'Permission Category',
//        'name' => 'permission-category',
//        'icon' => 'fa fa-list',
//        'route' => 'admin.permission-categories.index',
//        'children' => [
//            [
//                'title' => 'List Permission Category',
//                'name' => 'index',
//                'icon' => 'fa fa-list',
//                'gate' => 'permission-category-list',
//                'route' => 'admin.permission-categories.index',
//            ],
//            [
//                'title' => 'Create Permission Category',
//                'name' => 'create',
//                'icon' => 'fa fa-plus',
//                'gate' => 'permission-category-create',
//                'route' => 'admin.permission-categories.create',
//            ],
//            [
//                'title' => 'Edit Permission Category',
//                'name' => 'edit',
//                'icon' => 'fa fa-edit',
//                'gate' => 'permission-category-update',
//            ]
//        ],
//    ],
    [
        'title' => 'File Manager',
        'name' => 'file-manager',
        'type' => 'public',
        'icon' => 'fa fa-file',
        'route' => 'admin.file-manager.index',
        'children' => [
            [
                'title' => 'View File',
                'type' => 'public',
                'name' => 'index',
                'icon' => 'fa fa-list',
                'route' => 'admin.file-manager.index',
            ]
        ],
    ]

];
