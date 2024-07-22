<?php

return [
    'menu_top' => [
        'menu' => 'MENU',
        'api_users' => 'API foydalanuvchilar'
    ],
    'userManagement' => [
        'title'          => 'Foydalanuvchini boshqarish',
        'title_singular' => 'Boshqarish',
    ],
    'permission'     => [
        'title'          => 'Ruxsatlarni boshqarish',
        'title_singular' => 'Ruxsat',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Izoh',
            'name'              => 'Nomi',
            'permissions'       => 'Ruxsatlar',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Ro`llarni boshqarish',
        'title_singular' => 'Ro`l',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'             => 'Izoh',
            'name'              => 'Nomi',
            'roles'             => 'Rollari',
            'title_helper'       => ' ',
            'permissions'        => 'Ro`lning ruxsatlari',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'Foydalanuvchilar',
        'title_singular' => 'Foydalanuvchi',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Ism',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Parol',
            'password_helper'          => ' ',
            'roles'                    => 'Ro`llari',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'setting'        => [
        'title'          => 'Sozlamalar',
        'about_company'  => 'Kompaniya haqida',
        'text_bot'       => "Telgram-bot uchun kirish so'z",
        'about'  => [
            'description' => 'Kompaniya haqida'
        ],
        'start_message' => [
            'title' => "Kirish so'z"
        ]
    ],
    'regions_districts' => [
        'title'          => 'Viloyatlar va tumanlar',
        'regions' => [
            'title' => 'Viloyatlar',
            'name_uz' => "O'zbekcha nomi",
            'name_ru' => 'Rus tilida nomi'
        ],
        'districts' => [
            'title' => 'Tumanlar',
            "select_region" => 'Viloyatni tanlang'
        ]
    ],
    'job'  => [
        'title' => 'Ish',
        'programs' => 'Dasturlar',
        'fields' => [
            'name_uz' => "O'zbekcha nomi",
            'name_ru' => 'Rus tilida nomi'
        ]
    ],
    'branches' => [
        'title' => 'Magazinlar',
        'fields' => [
            'name_uz' => "O'zbekcha nomi",
            'name_ru' => 'Rus tilida nomi',
            'description_uz' => "O'zbek tilida izoh",
            'description_ru' => "Rus tilida izoh",
            'photo' => "Rasm",
            'longitude' => 'Uzunlik',
            'latitude' => 'Kenglik',
            'region_id' => 'Joylashgan viloyati',
            'address' => "Manzil",
            'open_with_google_maps' => 'Google Xarita orqali oching'
        ]
    ],

    'blogs' => [
        'title' => 'Blog',
        'fields' => [
            'name_uz' => "O'zbekcha nomi",
            'name_ru' => 'Rus tilida nomi',
            'description_uz' => "O'zbek tilida izoh",
            'description_ru' => "Rus tilida izoh",
            'photo' => "Rasm",
            'address' => "Manzil",
            'open_with_google_maps' => 'Google Xarita orqali oching'
        ]
    ],
    'category' => [
        'title' => 'Kategoriyalar',
        'fields' => [
            'branch_id' => 'Offis',
            'name_uz' => "O'zbekcha nomi",
            'name_ru' => 'Rus tilida nomi',
            'parent_id'=>'Bosh kategoriya',
            'address' => "Manzil"
        ]
        ],
        'banners' => [
        'title' => 'Banner',
        'fields' => [
            'name_uz' => 'O\'zbekcha nomis',
        ]
        ],
        'brands' => [
            'title' => 'Brandlar',
            'fields' => [
                'name_uz' => 'O\'zbekcha nomis',
            ]
            ],
            'product_model' => [
                'title' => 'Avto model',
                'fields' => [
                    'name_uz' => 'O\'zbekcha nomis',
                ]
            ]
];
