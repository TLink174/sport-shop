<?php
return [
    [
        'title' => 'Category',
        'name' => 'category',
        'icon' => 'fa fa-list',
        'route' => 'admin.categories.index',
        'children' => [
            [
                'title' => 'List Category',
                'name' => 'index',
                'route' => 'admin.categories.index',
            ],
            [
                'title' => 'Create Category',
                'name' => 'create',
                'route' => 'admin.categories.create',
            ],
            [
                'title' => 'Edit Category',
                'name' => 'edit',
            ]

        ],
    ],
    [
        'title' => 'Blog',
        'name' => 'blog',
        'icon' => 'fa fa-list',
        'route' => 'admin.blogs.index',
        'children' => [
            [
                'title' => 'List Blog',
                'name' => 'index',
                'route' => 'admin.blogs.index',
            ],
            [
                'title' => 'Create Blog',
                'name' => 'create',
                'route' => 'admin.blogs.create',
            ],
            [
                'title' => 'Edit Blog',
                'name' => 'edit',
            ]

        ],
    ],
    [
        'title' => 'Tag',
        'name' => 'tag',
        'icon' => 'fa fa-list',
        'route' => 'admin.tags.index',
        'children' => [
            [
                'title' => 'List Tag',
                'name' => 'index',
                'route' => 'admin.tags.index',
            ],
            [
                'title' => 'Create Tag',
                'name' => 'create',
                'route' => 'admin.tags.create',
            ],
            [
                'title' => 'Edit Tag',
                'name' => 'edit',
            ]

        ],
    ],
    [
        'title' => 'User',
        'name' => 'user',
        'icon' => 'fa fa-list',
        'route' => 'admin.users.index',
        'children' => [
            [
                'title' => 'List User',
                'name' => 'index',
                'route' => 'admin.users.index',
            ],
            [
                'title' => 'Create User',
                'name' => 'create',
                'route' => 'admin.users.create',
            ],
            [
                'title' => 'Edit User',
                'name' => 'edit',
            ]
        ],
      ],
    [
        'title' => 'Role',
        'name' => 'role',
        'icon' => 'fa fa-list',
        'route' => 'admin.roles.index',
        'children' => [
            [
                'title' => 'List Role',
                'name' => 'index',
                'route' => 'admin.roles.index',
            ],
            [
                'title' => 'Create Role',
                'name' => 'create',
                'route' => 'admin.roles.create',
            ],
            [
                'title' => 'Edit Role',
                'name' => 'edit',
            ]
        ],
    ],
    [
        'title' => 'Permission',
        'name' => 'permission',
        'icon' => 'fa fa-list',
        'route' => 'admin.permissions.index',
        'children' => [
            [
                'title' => 'List Permission',
                'name' => 'index',
                'route' => 'admin.permissions.index',
            ],
            [
                'title' => 'Create Permission',
                'name' => 'create',
                'route' => 'admin.permissions.create',
            ],
            [
                'title' => 'Edit Permission',
                'name' => 'edit',
            ]
        ],
    ],
    [
        'title' => 'Permission Category',
        'name' => 'permission_category',
        'icon' => 'fa fa-list',
        'route' => 'admin.permission-categories.index',
        'children' => [
            [
                'title' => 'List Permission Category',
                'name' => 'index',
                'route' => 'admin.permission-categories.index',
            ],
            [
                'title' => 'Create Permission Category',
                'name' => 'create',
                'route' => 'admin.permission-categories.create',
            ],
            [
                'title' => 'Edit Permission Category',
                'name' => 'edit',
            ]
        ],
    ],

];
