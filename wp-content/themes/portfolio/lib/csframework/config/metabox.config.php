<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================


$options = array();

// pricing metabox
$options[]    = [
    'name'      => 'pricing_options',
    'id'        => 'pricing_options',
    'title'     => 'Pricing Options',
    'context'   => 'normal',
    'priority'  => 'high',
    'post_type' => 'pricing',
    'sections'  => [
        [
            'name'   => 'pricing_options_meta',
            'fields' => [
                [
                    'id'        => 'pricing_price',
                    'type'      => 'text',
                    'title'     => 'Pricing price',
                    'desc'      => esc_html__('Write price', 'freedomit'),
                ]
            ]
        ]
    ],
];

// testimonial metabox
$options[]    = [
    'name'      => 'testimonial_options',
    'id'        => 'testimonial_options',
    'title'     => 'Testimonial Options',
    'context'   => 'normal',
    'priority'  => 'high',
    'post_type' => 'testimonial',
    'sections'  => [
        [
            'name'   => 'testimonial_options_meta',
            'fields' => [
                [
                    'id'        => 'testimonial_authore',
                    'type'      => 'text',
                    'title'     => 'Testimonial authore',
                    'desc'      => esc_html__('Write authore', 'freedomit'),
                ]
            ]
        ]
    ],
];

// testimonial metabox
$options[]    = [
    'name'      => 'portfolio_options',
    'id'        => 'portfolio_options',
    'title'     => 'portfolio Options',
    'context'   => 'normal',
    'priority'  => 'high',
    'post_type' => 'portfolio',
    'sections'  => [
        [
            'name'   => 'portfolio_options_meta',
            'fields' => [
                [
                    'id'        => 'portfolio_link',
                    'type'      => 'text',
                    'title'     => 'Portfolio authore',
                    'desc'      => esc_html__('Write portfolio link', 'freedomit'),
                ]
            ]
        ]
    ],
];




CSFramework_Metabox::instance( $options );
