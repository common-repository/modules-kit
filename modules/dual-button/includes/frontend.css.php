<?php

// Button
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-dual-button",
    'media' => 'default',
    'setting_name' => 'mkbb_button_height',
    'props' => array(
        'height' => $settings->mkbb_button_height . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-dual-button",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_height',
    'props' => array(
        'height' => $settings->mkbb_button_height . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-dual-button",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_height',
    'props' => array(
        'height' => $settings->mkbb_button_height . 'px',
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_border',
    'selector' => ".fl-node-$id .mkbb-dual-button",
));

// Button one
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-one-a",
    'props' => array(
        'color' => $settings->mkbb_button_one_text_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-one-a:hover",
    'props' => array(
        'color' => $settings->mkbb_button_one_text_hover,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-one-a",
    'props' => array(
        'background-color' => $settings->mkbb_button_one_background_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-one-a:hover",
    'props' => array(
        'background-color' => $settings->mkbb_button_one_background_hover,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_one_typography',
    'selector' => ".fl-node-$id .mkbb-button-one-text",
));

// Button two
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-two-a",
    'props' => array(
        'color' => $settings->mkbb_button_two_text_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-two-a:hover",
    'props' => array(
        'color' => $settings->mkbb_button_two_text_hover,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-two-a",
    'props' => array(
        'background-color' => $settings->mkbb_button_two_background_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-two-a:hover",
    'props' => array(
        'background-color' => $settings->mkbb_button_two_background_hover,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_two_typography',
    'selector' => ".fl-node-$id .mkbb-button-two-text",
));

// Connector
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'default',
    'setting_name' => 'mkbb_button_connector_size',
    'props' => array(
        'height' => $settings->mkbb_button_connector_size . 'px',
        'line-height' => $settings->mkbb_button_connector_size . 'px',
        'width' => $settings->mkbb_button_connector_size . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_connector_size',
    'props' => array(
        'height' => $settings->mkbb_button_connector_size . 'px',
        'line-height' => $settings->mkbb_button_connector_size . 'px',
        'width' => $settings->mkbb_button_connector_size . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_connector_size',
    'props' => array(
        'height' => $settings->mkbb_button_connector_size . 'px',
        'line-height' => $settings->mkbb_button_connector_size . 'px',
        'width' => $settings->mkbb_button_connector_size . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'default',
    'setting_name' => 'mkbb_button_connector_radius',
    'props' => array(
        'border-radius' => $settings->mkbb_button_connector_radius . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_connector_radius',
    'props' => array(
        'border-radius' => $settings->mkbb_button_connector_radius . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_connector_radius',
    'props' => array(
        'border-radius' => $settings->mkbb_button_connector_radius . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-connector-text",
    'props' => array(
        'color' => $settings->mkbb_connect_text_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-connector-icon",
    'props' => array(
        'color' => $settings->mkbb_connect_icon_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-connector",
    'props' => array(
        'background-color' => $settings->mkbb_connect_background_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_connector_typography',
    'selector' => ".fl-node-$id .mkbb-button-connector-text",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector-icon",
    'media' => 'default',
    'setting_name' => 'mkbb_connect_icon_size',
    'props' => array(
        'font-size' => $settings->mkbb_connect_icon_size . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector-icon",
    'media' => 'medium',
    'setting_name' => 'mkbb_connect_icon_size',
    'props' => array(
        'font-size' => $settings->mkbb_connect_icon_size . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-connector-icon",
    'media' => 'responsive',
    'setting_name' => 'mkbb_connect_icon_size',
    'props' => array(
        'font-size' => $settings->mkbb_connect_icon_size . 'px',
    ),
));
