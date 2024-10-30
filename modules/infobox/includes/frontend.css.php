<?php

// Content Alignment
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_content_align',
    'selector' => ".fl-node-$id .mkbb-content-style",
    'props' => array(
        'text-align' => $settings->mkbb_content_align,
    ),
));

FLBuilderCSS::rule(array(
    'settings' => $settings,
    'media' => 'medium',
    'setting_name' => 'mkbb_content_align',
    'selector' => ".fl-node-$id .mkbb-content-style",
    'props' => array(
        'text-align' => $settings->mkbb_content_align_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'media' => 'responsive',
    'setting_name' => 'mkbb_content_align',
    'selector' => ".fl-node-$id .mkbb-content-style",
    'props' => array(
        'text-align' => $settings->mkbb_content_align_responsive,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style",
    'media' => 'default',
    'setting_name' => 'mkbb_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_top . $settings->mkbb_content_padding_unit,
        'padding-right' => $settings->mkbb_content_padding_right . $settings->mkbb_content_padding_unit,
        'padding-bottom' => $settings->mkbb_content_padding_bottom . $settings->mkbb_content_padding_unit,
        'padding-left' => $settings->mkbb_content_padding_left . $settings->mkbb_content_padding_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style",
    'media' => 'medium',
    'setting_name' => 'mkbb_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_top_medium . $settings->mkbb_content_padding_medium_unit,
        'padding-right' => $settings->mkbb_content_padding_right_medium . $settings->mkbb_content_padding_medium_unit,
        'padding-bottom' => $settings->mkbb_content_padding_bottom_medium . $settings->mkbb_content_padding_medium_unit,
        'padding-left' => $settings->mkbb_content_padding_left_medium . $settings->mkbb_content_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style",
    'media' => 'responsive',
    'setting_name' => 'mkbb_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_content_padding_top_responsive . $settings->mkbb_content_padding_responsive_unit,
        'padding-right' => $settings->mkbb_content_padding_right_responsive . $settings->mkbb_content_padding_responsive_unit,
        'padding-bottom' => $settings->mkbb_content_padding_bottom_responsive . $settings->mkbb_content_padding_responsive_unit,
        'padding-left' => $settings->mkbb_content_padding_left_responsive . $settings->mkbb_content_padding_responsive_unit,
    ),
));

// Image(Width & Spacing)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'setting_name' => 'mkbb_image_width',
    'props' => array(
        'width' => $settings->mkbb_image_width . $settings->mkbb_image_width_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'media' => 'medium',
    'setting_name' => 'mkbb_image_width',
    'props' => array(
        'width' => $settings->mkbb_image_width_medium . $settings->mkbb_image_width_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'media' => 'responsive',
    'setting_name' => 'mkbb_image_width',
    'props' => array(
        'width' => $settings->mkbb_image_width_responsive . $settings->mkbb_image_width_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'setting_name' => 'mkbb_image_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing . $settings->mkbb_image_spacing_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'media' => 'medium',
    'setting_name' => 'mkbb_image_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing_medium . $settings->mkbb_image_spacing_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style img",
    'media' => 'responsive',
    'setting_name' => 'mkbb_image_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_image_spacing_responsive . $settings->mkbb_image_spacing_responsive_unit,
    ),
));

// Title(Spacing , Color , Typography)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'setting_name' => 'mkbb_title_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing . $settings->mkbb_title_spacing_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'media' => 'medium',
    'setting_name' => 'mkbb_title_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_medium . $settings->mkbb_title_spacing_medium_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'media' => 'responsive',
    'setting_name' => 'mkbb_title_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_responsive . $settings->mkbb_title_spacing_responsive_unit,
        'margin-top' => '0px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-title-style",
    'props' => array(
        'color' => $settings->mkbb_title_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_title_typography',
    'selector' => ".fl-node-$id .mkbb-title-style",
));

// Description(Color , Typography)
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-description-style",
    'props' => array(
        'color' => $settings->mkbb_description_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_description_typography',
    'selector' => ".fl-node-$id .mkbb-description-style",
));
