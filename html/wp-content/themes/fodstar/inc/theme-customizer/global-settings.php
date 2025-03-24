<?php

new \Kirki\Section(
	'fodstar_global',
	[
		'title'       => esc_html__('Global Settings', 'fodstar'),
		'description' => esc_html__('Customize Global Options.', 'fodstar'),
		'panel'       => 'fodstar_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Color(
    [
        'settings'    => 'fodstar_primary_color',
        'label'       => esc_html__('Primary Color', 'fodstar'),
        'section'     => 'fodstar_global',
        'default'     => '#f94b44', // Default color
        'priority'    => 1,
        'transport'   => 'auto',
        'choices'     => [
            'alpha' => true, // Allow opacity adjustments if needed
        ],
        'output'      => [
            [
                'element'  => ':root', // Use :root to define a CSS variable
                'property' => '--fodstar-primary', // Set CSS variable
                'value'    => 'color', // This will allow the color to be applied from the input
            ],
            [
                'element'  => '.fodstar-primary', // Target specific elements
                'property' => 'color',
            ],
            [
                'element'  => 'a', // Target all links for the primary color
                'property' => 'color',
            ],
        ],
    ]
);

new \Kirki\Field\Custom(
    [
        'settings' => 'separator',
        'section'  => 'fodstar_global',
        'default'  => '<hr />', // HTML code for the horizontal line
        'priority' => 3.5, // Adjust priority to position the line between color and typography
    ]
);


// Add a color picker for heading colors
new \Kirki\Field\Color(
    [
        'settings'    => 'fodstar_heading_color',
        'label'       => esc_html__('Secondary Color', 'fodstar'),
        'section'     => 'fodstar_global',
        'default'     => '#111827', // Default heading color
        'priority'    => 2,
        'transport'   => 'auto',
        'output'      => [
            [
                'element'  => 'h1, h2, h3, h4, h5, h6', // Target all heading elements
                'property' => 'color',
            ],
			[
                'element'  => 'body, .fodstar-heading', // Target specific elements
                'property' => 'color',
            ],
        ],
    ]
);

// Add a color picker for paragraph color
new \Kirki\Field\Color(
    [
        'settings'    => 'fodstar_paragraph_color',
        'label'       => esc_html__('Paragraph Color', 'fodstar'),
        'section'     => 'fodstar_global',
        'default'     => '#323b49', // Default paragraph color
        'priority'    => 3,
        'transport'   => 'auto',
        'output'      => [
            [
                'element'  => 'p', // Target paragraph elements
                'property' => 'color',
            ],
        ],
    ]
);


new \Kirki\Field\Typography(
	[
		'settings'    => 'fodstar_typography',
		'label'       => esc_html__('Theme Typography', 'fodstar'),
		'section'     => 'fodstar_global',
		'default'     => [
			'font-family'    => 'Montserrat',
			'variant'        => '400',
			'font-size'      => '16px',
			'line-height'    => '28px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
		],
		'priority'    => 4, // Adjust priority as needed
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body', // You can target other elements as well
			],
		],
	]
);

