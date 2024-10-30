<?php

// Box(alignment , padding , background-color)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_tm',
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_tm,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_tm',
    'media' => 'medium',
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_tm_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_tm',
    'media' => 'responsive',
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_tm_responsive,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'media' => 'default',
    'setting_name' => 'mkbb_box_content_padding_tm',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_tm_top . $settings->mkbb_box_content_padding_tm_unit,
        'padding-right' => $settings->mkbb_box_content_padding_tm_right . $settings->mkbb_box_content_padding_tm_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_tm_bottom . $settings->mkbb_box_content_padding_tm_unit,
        'padding-left' => $settings->mkbb_box_content_padding_tm_left . $settings->mkbb_box_content_padding_tm_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'media' => 'medium',
    'setting_name' => 'mkbb_box_content_padding_tm',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_tm_top_medium . $settings->mkbb_box_content_padding_tm_medium_unit,
        'padding-right' => $settings->mkbb_box_content_padding_tm_right_medium . $settings->mkbb_box_content_padding_tm_medium_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_tm_bottom_medium . $settings->mkbb_box_content_padding_tm_medium_unit,
        'padding-left' => $settings->mkbb_box_content_padding_tm_left_medium . $settings->mkbb_box_content_padding_tm_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'media' => 'responsive',
    'setting_name' => 'mkbb_box_content_padding_tm',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_tm_top_responsive . $settings->mkbb_box_content_padding_tm_responsive_unit,
        'padding-right' => $settings->mkbb_box_content_padding_tm_right_responsive . $settings->mkbb_box_content_padding_tm_responsive_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_tm_bottom_responsive . $settings->mkbb_box_content_padding_tm_responsive_unit,
        'padding-left' => $settings->mkbb_box_content_padding_tm_left_responsive . $settings->mkbb_box_content_padding_tm_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-box-style-testimonial",
    'props' => array(
        'background-color' => $settings->mkbb_box_background_color_tm,
    ),
));

// Image(Size , Border)	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-image-style-testimonial",
    'setting_name' => 'mkbb_image_size_tm',
    'props' => array(
        'width' => $settings->mkbb_image_size_tm . 'px',
        'height' => $settings->mkbb_image_size_tm . 'px',
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_image_border_tm',
    'selector' => ".fl-node-$id .mkbb-image-style-testimonial",
));

// Content(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-content-style-testimonial",
    'props' => array(
        'color' => $settings->mkbb_content_text_color_tm,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_content_typography_tm',
    'selector' => ".fl-node-$id .mkbb-content-style-testimonial",
));

// name(text color , typgraphy )	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-name-style-testimonial",
    'props' => array(
        'color' => $settings->mkbb_name_text_color_tm,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_name_typography_tm',
    'selector' => ".fl-node-$id .mkbb-name-style-testimonial",
));

// designation(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-designation-style-testimonial",
    'props' => array(
        'color' => $settings->mkbb_designation_text_color_tm,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_designation_typography_tm',
    'selector' => ".fl-node-$id .mkbb-designation-style-testimonial",
));














