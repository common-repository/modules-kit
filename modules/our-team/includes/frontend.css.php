<?php

// Content Alignment
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_content_align_ot',
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'props' => array(
        'text-align' => $settings->mkbb_content_align_ot,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'media' => 'medium',
    'setting_name' => 'mkbb_content_align_ot',
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'props' => array(
        'text-align' => $settings->mkbb_content_align_ot_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'media' => 'responsive',
    'setting_name' => 'mkbb_content_align_ot',
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'props' => array(
        'text-align' => $settings->mkbb_content_align_ot_responsive,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'media' => 'default',
    'setting_name' => 'mkbb_content_padding_ot',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_ot_top . $settings->mkbb_content_padding_ot_unit,
        'padding-right' => $settings->mkbb_content_padding_ot_right . $settings->mkbb_content_padding_ot_unit,
        'padding-bottom' => $settings->mkbb_content_padding_ot_bottom . $settings->mkbb_content_padding_ot_unit,
        'padding-left' => $settings->mkbb_content_padding_ot_left . $settings->mkbb_content_padding_ot_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'media' => 'medium',
    'setting_name' => 'mkbb_content_padding_ot',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_ot_top_medium . $settings->mkbb_content_padding_ot_medium_unit,
        'padding-right' => $settings->mkbb_content_padding_ot_right_medium . $settings->mkbb_content_padding_ot_medium_unit,
        'padding-bottom' => $settings->mkbb_content_padding_ot_bottom_medium . $settings->mkbb_content_padding_ot_medium_unit,
        'padding-left' => $settings->mkbb_content_padding_ot_left_medium . $settings->mkbb_content_padding_ot_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'media' => 'responsive',
    'setting_name' => 'mkbb_content_padding_ot',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_ot_top_responsive . $settings->mkbb_content_padding_ot_responsive_unit,
        'padding-right' => $settings->mkbb_content_padding_ot_right_responsive . $settings->mkbb_content_padding_ot_responsive_unit,
        'padding-bottom' => $settings->mkbb_content_padding_ot_bottom_responsive . $settings->mkbb_content_padding_ot_responsive_unit,
        'padding-left' => $settings->mkbb_content_padding_ot_left_responsive . $settings->mkbb_content_padding_ot_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-content-style-ot",
    'props' => array(
        'background-color' => $settings->mkbb_content_bg_color_ot,
    ),
));

// Image(Width & Spacing)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot img",
    'setting_name' => 'mkbb_image_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing_ot . $settings->mkbb_image_spacing_ot_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot img",
    'media' => 'medium',
    'setting_name' => 'mkbb_image_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing_ot_medium . $settings->mkbb_image_spacing_ot_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-ot img",
    'media' => 'responsive',
    'setting_name' => 'mkbb_image_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing_ot_responsive . $settings->mkbb_image_spacing_ot_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-image-style-ot",
    'setting_name' => 'mkbb_image_size_ot',
    'props' => array(
        'width' => $settings->mkbb_image_size_ot . 'px',
        'height' => $settings->mkbb_image_size_ot . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-image-style-ot",
    'media' => 'medium',
    'setting_name' => 'mkbb_image_size_ot',
    'props' => array(
        'width' => $settings->mkbb_image_size_ot_medium . 'px',
        'height' => $settings->mkbb_image_size_ot_medium . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-image-style-ot",
    'setting_name' => 'mkbb_image_size_ot',
    'media' => 'responsive',
    'props' => array(
        'width' => $settings->mkbb_image_size_ot_responsive . 'px',
        'height' => $settings->mkbb_image_size_ot_responsive . 'px',
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_image_border_ot',
    'selector' => ".fl-node-$id .mkbb-image-style-ot",
));

// Title(Spacing , Color , Typography)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-name-style-ot",
    'setting_name' => 'mkbb_name_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_name_spacing_ot . $settings->mkbb_name_spacing_ot_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-name-style-ot",
    'media' => 'medium',
    'setting_name' => 'mkbb_name_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_name_spacing_ot_medium . $settings->mkbb_name_spacing_ot_medium_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-name-style-ot",
    'media' => 'responsive',
    'setting_name' => 'mkbb_name_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_name_spacing_ot_responsive . $settings->mkbb_name_spacing_ot_responsive_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-name-style-ot",
    'props' => array(
        'color' => $settings->mkbb_name_text_color_ot,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_name_typography_ot',
    'selector' => ".fl-node-$id .mkbb-name-style-ot",
));

// Designation(Color , Typography)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-designation-style-ot",
    'setting_name' => 'mkbb_designation_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_designation_spacing_ot . $settings->mkbb_designation_spacing_ot_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-designation-style-ot",
    'media' => 'medium',
    'setting_name' => 'mkbb_designation_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_designation_spacing_ot_medium . $settings->mkbb_designation_spacing_ot_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-designation-style-ot",
    'media' => 'responsive',
    'setting_name' => 'mkbb_designation_spacing_ot',
    'props' => array(
        'margin-bottom' => $settings->mkbb_designation_spacing_ot_responsive . $settings->mkbb_designation_spacing_ot_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-designation-style-ot",
    'props' => array(
        'color' => $settings->mkbb_designation_text_color_ot,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_designation_typography_ot',
    'selector' => ".fl-node-$id .mkbb-designation-style-ot",
));


// Social media Style
if ($settings->mkbb_show_post == 'mkbb_show_social_share') {
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'setting_name' => 'mkbb_social_icon_line_height',
        'props' => array(
            'font-size' => $settings->mkbb_social_icon_line_height . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'setting_name' => 'mkbb_social_icon_line_height',
        'media' => 'medium',
        'props' => array(
            'font-size' => $settings->mkbb_social_icon_line_height_medium . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'media' => 'responsive',
        'setting_name' => 'mkbb_social_icon_line_height',
        'props' => array(
            'font-size' => $settings->mkbb_social_icon_line_height_responsive . 'px',
        ),
    ));
    FLBuilderCSS::border_field_rule(array(
        'settings' => $settings,
        'setting_name' => 'mkbb_social_border_ot',
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot:not(:last-child)",
        'setting_name' => 'mkbb_social_icon_spacing',
        'props' => array(
            'margin-right' => $settings->mkbb_social_icon_spacing . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot:not(:last-child)",
        'setting_name' => 'mkbb_social_icon_spacing',
        'media' => 'medium',
        'props' => array(
            'margin-right' => $settings->mkbb_social_icon_spacing_medium . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot:not(:last-child)",
        'setting_name' => 'mkbb_social_icon_spacing',
        'media' => 'responsive',
        'props' => array(
            'margin-right' => $settings->mkbb_social_icon_spacing_responsive . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'setting_name' => 'mkbb_social_icon_padding',
        'props' => array(
            'padding' => $settings->mkbb_social_icon_padding . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'setting_name' => 'mkbb_social_icon_padding',
        'media' => 'medium',
        'props' => array(
            'padding' => $settings->mkbb_social_icon_padding_medium . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'setting_name' => 'mkbb_social_icon_padding',
        'media' => 'responsive',
        'props' => array(
            'padding' => $settings->mkbb_social_icon_padding_responsive . 'px',
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'props' => array(
            'color' => $settings->mkbb_social_icon_color_ot,
        ),
    ));
    FLBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .mkbb-social-link-style-ot",
        'props' => array(
            'background-color' => $settings->mkbb_social_icon_bg_color_ot,
        ),
    ));
}
	
	
	
	
	