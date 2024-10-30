<?php

// Progress Bar
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-progress-bar",
    'setting_name' => 'mkbb_percentage_pb',
    'props' => array(
        'width' => $settings->mkbb_percentage_pb . '%',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-progress-bar",
    'props' => array(
        'background-color' => $settings->mkbb_progress_color_pb,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-progress-pb",
    'props' => array(
        'background-color' => $settings->mkbb_progress_bg_color_pb,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-progress-pb",
    'setting_name' => 'mkbb_height_pb',
    'props' => array(
        'line-height' => $settings->mkbb_height_pb . 'px',
        'height' => $settings->mkbb_height_pb . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-progress-pb",
    'setting_name' => 'mkbb_border_radius_pb',
    'props' => array(
        'border-radius' => $settings->mkbb_border_radius_pb . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-percent-pb",
    'props' => array(
        'color' => $settings->mkbb_inner_text_color_pb,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-inner-text-pb",
    'props' => array(
        'color' => $settings->mkbb_inner_text_color_pb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_inner_text_typography_pb',
    'selector' => ".fl-node-$id .mkbb-percent-pb",
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_inner_text_typography_pb',
    'selector' => ".fl-node-$id .mkbb-inner-text-pb",
));

// Title
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-title-pb",
    'props' => array(
        'color' => $settings->mkbb_title_color_pb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_title_typography_pb',
    'selector' => ".fl-node-$id .mkbb-title-pb",
));
