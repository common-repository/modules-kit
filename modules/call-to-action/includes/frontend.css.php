<?php

// Box( Color , Alignment)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align',
    'selector' => ".fl-node-$id .mkbb-box-style",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align',
    'media' => 'medium',
    'selector' => ".fl-node-$id .mkbb-box-style",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align',
    'media' => 'responsive',
    'selector' => ".fl-node-$id .mkbb-box-style",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_responsive,
    ),
));

FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-box-style",
    'props' => array(
        'background-color' => $settings->mkbb_box_background_color,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style",
    'media' => 'default',
    'setting_name' => 'mkbb_box_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_top . $settings->mkbb_box_content_padding_unit,
        'padding-right' => $settings->mkbb_box_content_padding_right . $settings->mkbb_box_content_padding_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_bottom . $settings->mkbb_box_content_padding_unit,
        'padding-left' => $settings->mkbb_box_content_padding_left . $settings->mkbb_box_content_padding_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style",
    'media' => 'medium',
    'setting_name' => 'mkbb_box_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_top_medium . $settings->mkbb_box_content_padding_medium_unit,
        'padding-right' => $settings->mkbb_box_content_padding_right_medium . $settings->mkbb_box_content_padding_medium_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_bottom_medium . $settings->mkbb_box_content_padding_medium_unit,
        'padding-left' => $settings->mkbb_box_content_padding_left_medium . $settings->mkbb_box_content_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style",
    'media' => 'responsive',
    'setting_name' => 'mkbb_box_content_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_top_responsive . $settings->mkbb_box_content_padding_responsive_unit,
        'padding-right' => $settings->mkbb_box_content_padding_right_responsive . $settings->mkbb_box_content_padding_responsive_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_bottom_responsive . $settings->mkbb_box_content_padding_responsive_unit,
        'padding-left' => $settings->mkbb_box_content_padding_left_responsive . $settings->mkbb_box_content_padding_responsive_unit,
    ),
));

// Title(Spacing , Color , Typography)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom . $settings->mkbb_title_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'media' => 'medium',
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom_medium . $settings->mkbb_title_spacing_bottom_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-title-style",
    'media' => 'responsive',
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom_responsive . $settings->mkbb_title_spacing_bottom_responsive_unit,
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

// description(Spacing , Color , Typography)	
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-description-style",
    'setting_name' => 'mkbb_description_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_description_spacing . $settings->mkbb_description_spacing_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-description-style",
    'media' => 'medium',
    'setting_name' => 'mkbb_description_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_description_spacing_medium . $settings->mkbb_description_spacing_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-description-style",
    'media' => 'responsive',
    'setting_name' => 'mkbb_description_spacing',
    'props' => array(
        'margin-bottom' => $settings->mkbb_description_spacing_responsive . $settings->mkbb_description_spacing_responsive_unit,
    ),
));
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

// Button(text color , bg color , border , padding , spacing)
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
    'props' => array(
        'color' => $settings->mkbb_button_text_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
    'props' => array(
        'background-color' => $settings->mkbb_button_background_color,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_border',
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_typography',
    'selector' => ".fl-node-$id .mkbb-button-space",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
    'media' => 'default',
    'setting_name' => 'mkbb_button_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_top . $settings->mkbb_button_padding_unit,
        'padding-right' => $settings->mkbb_button_padding_right . $settings->mkbb_button_padding_unit,
        'padding-bottom' => $settings->mkbb_button_padding_bottom . $settings->mkbb_button_padding_unit,
        'padding-left' => $settings->mkbb_button_padding_left . $settings->mkbb_button_padding_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_top_medium . $settings->mkbb_button_padding_medium_unit,
        'padding-right' => $settings->mkbb_button_padding_right_medium . $settings->mkbb_button_padding_medium_unit,
        'padding-bottom' => $settings->mkbb_button_padding_bottom_medium . $settings->mkbb_button_padding_medium_unit,
        'padding-left' => $settings->mkbb_button_padding_left_medium . $settings->mkbb_button_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-cta",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_padding',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_top_responsive . $settings->mkbb_button_padding_responsive_unit,
        'padding-right' => $settings->mkbb_button_padding_right_responsive . $settings->mkbb_button_padding_responsive_unit,
        'padding-bottom' => $settings->mkbb_button_padding_bottom_responsive . $settings->mkbb_button_padding_responsive_unit,
        'padding-left' => $settings->mkbb_button_padding_left_responsive . $settings->mkbb_button_padding_responsive_unit,
    ),
));















