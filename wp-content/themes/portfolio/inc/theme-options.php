<?php
if ( ! defined( 'ABSPATH' ) ) { die; }

if(! function_exists(' mihir_theme_options')) {

    add_filter('cs_framework_options', 'mihir_theme_options');
    function mihir_theme_options($options) {
        $options = [];

        // Header Option
        $options[]      = [
            'title'       => 'Header',
            'name'        => 'header',
            'fields'      => [
                [
                    'id'      => 'firstname',
                    'title'   => __( 'First Name', 'portfolio'),
                    'type'    => 'text',
                    'default' => 'Sabber'
                ],
                [
                    'id'      => 'lasttname',
                    'type'    => 'text',
                    'title'   => __( 'Last Name', 'portfolio'),
                    'default' => 'Hossain'
                ],
                [
                    'id'      => 'favicon',
                    'type'    => 'image',
                    'title'   => __( 'Favicon image', 'portfolio'),
                ],
                [
                    'id'                => 'social_icons',
                    'type'              => 'group',
                    'title'             => __( 'Social icons', 'portfolio'),
                    'button_title'      => 'Add social icon',
                    'accordion_title'   => 'New social icon',
                    'fields'            => [
                        [
                        'id'      => 'social_icon',
                        'type'    => 'text',
                        'title'   => __( 'Social icon name', 'portfolio'),
                        'desc'    => __( 'Write social icon name', 'portfolio'),
                        ],
                        [
                        'id'      => 'social_link',
                        'type'    => 'text',
                        'title'   => __( 'Social link', 'portfolio'),
                        'desc'    => __( 'Write social link', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // About Option
        $options[]      = [
            'title'       => 'About',
            'name'        => 'about',
            'fields'      => [
                [
                    'id'      => 'about_img',
                    'title'   => __( 'About image', 'portfolio'),
                    'type'    => 'image',
                ],
                [
                    'id'      => 'about_text',
                    'title'   => __( 'About detials', 'portfolio'),
                    'type'    => 'wysiwyg',
                ],
                [
                    'id'                => 'personal_infos',
                    'type'              => 'group',
                    'title'             => __( 'Personal info', 'portfolio'),
                    'button_title'      => 'Add personal info',
                    'accordion_title'   => 'New personal info',
                    'fields'            => [
                        [
                        'id'      => 'info_title',
                        'type'    => 'text',
                        'title'   => __( 'Info title', 'portfolio'),
                        'desc'    => __( 'Write Info title', 'portfolio'),
                        ],
                        [
                        'id'      => 'info_details',
                        'type'    => 'text',
                        'title'   => __( 'Info details', 'portfolio'),
                        'desc'    => __( 'Write Info details', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // About Option
        $options[]      = [
            'title'       => 'Service',
            'name'        => 'service',
            'fields'      => [
                [
                    'id'                => 'services',
                    'type'              => 'group',
                    'title'             => __( 'Services', 'portfolio'),
                    'button_title'      => 'Add service',
                    'accordion_title'   => 'New service',
                    'fields'            => [
                        [
                        'id'      => 'service_icon',
                        'type'    => 'image',
                        'title'   => __( 'Service icon', 'portfolio'),
                        ],
                        [
                        'id'      => 'service_title',
                        'type'    => 'text',
                        'title'   => __( 'Service title', 'portfolio'),
                        'desc'    => __( 'Write service title', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // Education Option
        $options[]      = [
            'title'       => 'Education',
            'name'        => 'education',
            'fields'      => [
                [
                    'id'                => 'educations',
                    'type'              => 'group',
                    'title'             => __( 'Educations', 'portfolio'),
                    'button_title'      => 'Add education',
                    'accordion_title'   => 'New education',
                    'fields'            => [
                        [
                        'id'      => 'education_date',
                        'type'    => 'text',
                        'title'   => __( 'Education date', 'portfolio'),
                        'desc'    => __( 'Write education date', 'portfolio'),
                        ],
                        [
                        'id'      => 'education_degree',
                        'type'    => 'text',
                        'title'   => __( 'Education degree', 'portfolio'),
                        'desc'    => __( 'Write education degree', 'portfolio'),
                        ],
                        [
                        'id'      => 'education_name',
                        'type'    => 'text',
                        'title'   => __( 'Education instute name', 'portfolio'),
                        'desc'    => __( 'Write education instute name', 'portfolio'),
                        ],
                        [
                        'id'      => 'education_text',
                        'type'    => 'textarea',
                        'title'   => __( 'Education details', 'portfolio'),
                        'desc'    => __( 'Write education details', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // Experience Option
        $options[]      = [
            'title'       => 'Experience',
            'name'        => 'experience',
            'fields'      => [
                [
                    'id'                => 'experiences',
                    'type'              => 'group',
                    'title'             => __( 'Experiences', 'portfolio'),
                    'button_title'      => 'Add experience',
                    'accordion_title'   => 'New experience',
                    'fields'            => [
                        [
                        'id'      => 'experience_date',
                        'type'    => 'text',
                        'title'   => __( 'experience date', 'portfolio'),
                        'desc'    => __( 'Write experience date', 'portfolio'),
                        ],
                        [
                        'id'      => 'experience_title',
                        'type'    => 'text',
                        'title'   => __( 'experience title', 'portfolio'),
                        'desc'    => __( 'Write experience title', 'portfolio'),
                        ],
                        [
                        'id'      => 'experience_name',
                        'type'    => 'text',
                        'title'   => __( 'experience instute name', 'portfolio'),
                        'desc'    => __( 'Write experience instute name', 'portfolio'),
                        ],
                        [
                        'id'      => 'experience_text',
                        'type'    => 'textarea',
                        'title'   => __( 'experience details', 'portfolio'),
                        'desc'    => __( 'Write experience details', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // Experience Option
        $options[]      = [
            'title'       => 'Awards',
            'name'        => 'award',
            'fields'      => [
                [
                    'id'                => 'awards',
                    'type'              => 'group',
                    'title'             => __( 'Awards', 'portfolio'),
                    'button_title'      => 'Add award',
                    'accordion_title'   => 'New award',
                    'fields'            => [
                        [
                        'id'      => 'award_date',
                        'type'    => 'text',
                        'title'   => __( 'award date', 'portfolio'),
                        'desc'    => __( 'Write award date', 'portfolio'),
                        ],
                        [
                        'id'      => 'award_title',
                        'type'    => 'text',
                        'title'   => __( 'Award title', 'portfolio'),
                        'desc'    => __( 'Write award title', 'portfolio'),
                        ],
                        [
                        'id'      => 'award_name',
                        'type'    => 'text',
                        'title'   => __( 'Award instute name', 'portfolio'),
                        'desc'    => __( 'Write award instute name', 'portfolio'),
                        ],
                        [
                        'id'      => 'award_text',
                        'type'    => 'textarea',
                        'title'   => __( 'Award details', 'portfolio'),
                        'desc'    => __( 'Write award details', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // Experience Option
        $options[]      = [
            'title'       => 'Skills',
            'name'        => 'skill',
            'fields'      => [
                [
                    'id'                => 'skills',
                    'type'              => 'group',
                    'title'             => __( 'Skills', 'portfolio'),
                    'button_title'      => 'Add skill',
                    'accordion_title'   => 'New skill',
                    'fields'            => [
                        [
                        'id'      => 'skill_value',
                        'type'    => 'text',
                        'title'   => __( 'Skill data value', 'portfolio'),
                        'desc'    => __( 'Skill data value in decimel.', 'portfolio'),
                        ],
                        [
                        'id'      => 'skill_number',
                        'type'    => 'text',
                        'title'   => __( 'Skill number', 'portfolio'),
                        'desc'    => __( 'Write skill number.', 'portfolio'),
                        ],
                        [
                        'id'      => 'skill_title',
                        'type'    => 'text',
                        'title'   => __( 'Skill title', 'portfolio'),
                        'desc'    => __( 'Write skill title.', 'portfolio'),
                        ],
                    ]
                ],
                [
                    'id'                => 'soft_skills',
                    'type'              => 'group',
                    'title'             => __( 'Skills', 'portfolio'),
                    'button_title'      => 'Add skill',
                    'accordion_title'   => 'New skill',
                    'fields'            => [
                        [
                        'id'      => 'soft_skill_number',
                        'type'    => 'text',
                        'title'   => __( 'Skill number', 'portfolio'),
                        'desc'    => __( 'Write skill number.', 'portfolio'),
                        ],
                        [
                        'id'      => 'soft_skill_title',
                        'type'    => 'text',
                        'title'   => __( 'Skill title', 'portfolio'),
                        'desc'    => __( 'Write skill title.', 'portfolio'),
                        ],
                    ]
                ],
                [
                    'id'                => 'lang_skills',
                    'type'              => 'group',
                    'title'             => __( 'Skills', 'portfolio'),
                    'button_title'      => 'Add skill',
                    'accordion_title'   => 'New skill',
                    'fields'            => [
                        [
                        'id'      => 'lang_skill_number',
                        'type'    => 'text',
                        'title'   => __( 'Skill number', 'portfolio'),
                        'desc'    => __( 'Write skill number.', 'portfolio'),
                        ],
                        [
                        'id'      => 'lang_skill_title',
                        'type'    => 'text',
                        'title'   => __( 'Skill title', 'portfolio'),
                        'desc'    => __( 'Write skill title.', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // cta option
        $options[]      = [
            'title'       => 'Call to action',
            'name'        => 'cta',
            'fields'      => [
                [
                    'id'      => 'cta_bg',
                    'type'    => 'image',
                    'title'   => __( 'cta background', 'mihir'),
                    'desc'    => __( 'upload cta background', 'mihir'),
                ],
                [
                    'id'      => 'download_btn',
                    'type'    => 'text',
                    'title'   => __( 'Download text', 'mihir'),
                ],
                [
                    'id'      => 'download_link',
                    'type'    => 'text',
                    'title'   => __( 'Download link', 'mihir'),
                ],
                [
                    'id'      => 'hire_btn',
                    'type'    => 'text',
                    'title'   => __( 'Hire text', 'mihir'),
                ],
                [
                    'id'      => 'hire_link',
                    'type'    => 'text',
                    'title'   => __( 'Hire link', 'mihir'),
                ]
            ],
        ];

        // Experience Option
        $options[]      = [
            'title'       => 'Clients',
            'name'        => 'client',
            'fields'      => [
                [
                    'id'                => 'clients',
                    'type'              => 'group',
                    'title'             => __( 'Clients', 'portfolio'),
                    'button_title'      => 'Add client',
                    'accordion_title'   => 'New client',
                    'fields'            => [
                        [
                        'id'      => 'client_img',
                        'type'    => 'image',
                        'title'   => __( 'Client image', 'portfolio'),
                        'desc'    => __( 'Upload client image', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // Experience Option
        $options[]      = [
            'title'       => 'Counter',
            'name'        => 'counter',
            'fields'      => [
                [
                    'id'                => 'counters',
                    'type'              => 'group',
                    'title'             => __( 'Counters', 'portfolio'),
                    'button_title'      => 'Add counter',
                    'accordion_title'   => 'New counter',
                    'fields'            => [
                        [
                        'id'      => 'counter_count',
                        'type'    => 'text',
                        'title'   => __( 'Counter count', 'portfolio'),
                        'desc'    => __( 'Write counter count', 'portfolio'),
                        ],
                        [
                        'id'      => 'counter_title',
                        'type'    => 'text',
                        'title'   => __( 'Counter title', 'portfolio'),
                        'desc'    => __( 'Write counter title', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        // logo option
        $options[]      = [
            'title'       => 'Contact',
            'name'        => 'contact',
            'fields'      => [
                [
                    'id'      => 'contact_shortcode',
                    'type'    => 'wysiwyg',
                    'title'   => __( 'Contact from shortcode', 'mihir'),
                    'desc'    => __( 'write your contact from shortcode', 'mihir'),
                ],
                [
                    'id'      => 'image',
                    'type'    => 'image',
                    'title'   => __( 'Your image', 'mihir'),
                    'desc'    => __( 'Upload your image', 'mihir'),
                ],
                [
                    'id'      => 'mail',
                    'type'    => 'text',
                    'title'   => __( 'your mail adderess', 'mihir'),
                    'desc'    => __( 'write your mail adderess', 'mihir'),
                ],
                [
                    'id'      => 'number',
                    'type'    => 'text',
                    'title'   => __( 'your phone number', 'mihir'),
                    'desc'    => __( 'write your phone number', 'mihir'),
                ],
                [
                    'id'      => 'address',
                    'type'    => 'text',
                    'title'   => __( 'your adderess', 'mihir'),
                    'desc'    => __( 'write your adderess', 'mihir'),
                ],
            ],
        ];

        // logo option
        $options[]      = [
            'title'       => 'footer',
            'name'        => 'footer',
            'fields'      => [
                [
                    'id'      => 'copyright_text',
                    'type'    => 'text',
                    'title'   => __( 'Site text', 'mihir'),
                    'desc'    => __( 'write your site text', 'mihir'),
                ],
                [
                    'id'                => 'social_links',
                    'type'              => 'group',
                    'title'             => __( 'Soscial links', 'portfolio'),
                    'button_title'      => 'Add social links',
                    'accordion_title'   => 'New social links',
                    'fields'            => [
                        [
                        'id'      => 'social_link_text',
                        'type'    => 'text',
                        'title'   => __( 'Social media', 'portfolio'),
                        'desc'    => __( 'Social media name', 'portfolio'),
                        ],
                        [
                        'id'      => 'social_link',
                        'type'    => 'text',
                        'title'   => __( 'Social link', 'portfolio'),
                        'desc'    => __( 'Write social link', 'portfolio'),
                        ],
                    ]
                ],
            ],
        ];

        return $options;
    }
}


        // logo option
        // $options[]      = [
        //     'title'       => 'Logo',
        //     'name'        => 'logo',
        //     'fields'      => [
        //         [
        //             'id'      => 'logo',
        //             'type'    => 'text',
        //             'title'   => __( 'Site text', 'mihir'),
        //             'desc'    => __( 'write your site text', 'mihir'),
        //         ],
        //     ],
        // ];