<?php

// Header
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-header-style-pt",
    'media' => 'default',
    'setting_name' => 'mkbb_header_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_header_padding_pt_top . $settings->mkbb_header_padding_pt_unit,
        'padding-right' => $settings->mkbb_header_padding_pt_right . $settings->mkbb_header_padding_pt_unit,
        'padding-bottom' => $settings->mkbb_header_padding_pt_bottom . $settings->mkbb_header_padding_pt_unit,
        'padding-left' => $settings->mkbb_header_padding_pt_left . $settings->mkbb_header_padding_pt_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-header-style-pt",
    'media' => 'medium',
    'setting_name' => 'mkbb_header_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_header_padding_pt_top_medium . $settings->mkbb_header_padding_pt_medium_unit,
        'padding-right' => $settings->mkbb_header_padding_pt_right_medium . $settings->mkbb_header_padding_pt_medium_unit,
        'padding-bottom' => $settings->mkbb_header_padding_pt_bottom_medium . $settings->mkbb_header_padding_pt_medium_unit,
        'padding-left' => $settings->mkbb_header_padding_pt_left_medium . $settings->mkbb_header_padding_pt_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-header-style-pt",
    'media' => 'responsive',
    'setting_name' => 'mkbb_header_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_header_padding_pt_top_responsive . $settings->mkbb_header_padding_pt_responsive_unit,
        'padding-right' => $settings->mkbb_header_padding_pt_right_responsive . $settings->mkbb_header_padding_pt_responsive_unit,
        'padding-bottom' => $settings->mkbb_header_padding_pt_bottom_responsive . $settings->mkbb_header_padding_pt_responsive_unit,
        'padding-left' => $settings->mkbb_header_padding_pt_left_responsive . $settings->mkbb_header_padding_pt_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-header-title-style-pt",
    'props' => array(
        'color' => $settings->mkbb_header_title_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_header_title_typography_pt',
    'selector' => ".fl-node-$id .mkbb-header-title-style-pt",
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-header-description-style-pt",
    'props' => array(
        'color' => $settings->mkbb_header_description_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_header_description_typography_pt',
    'selector' => ".fl-node-$id .mkbb-header-description-style-pt",
));

// Pricing
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-pricing-style-pt",
    'media' => 'default',
    'setting_name' => 'mkbb_pricing_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_pricing_padding_pt_top . $settings->mkbb_pricing_padding_pt_unit,
        'padding-right' => $settings->mkbb_pricing_padding_pt_right . $settings->mkbb_pricing_padding_pt_unit,
        'padding-bottom' => $settings->mkbb_pricing_padding_pt_bottom . $settings->mkbb_pricing_padding_pt_unit,
        'padding-left' => $settings->mkbb_pricing_padding_pt_left . $settings->mkbb_pricing_padding_pt_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-pricing-style-pt",
    'media' => 'medium',
    'setting_name' => 'mkbb_pricing_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_pricing_padding_pt_top_medium . $settings->mkbb_pricing_padding_pt_medium_unit,
        'padding-right' => $settings->mkbb_pricing_padding_pt_right_medium . $settings->mkbb_pricing_padding_pt_medium_unit,
        'padding-bottom' => $settings->mkbb_pricing_padding_pt_bottom_medium . $settings->mkbb_pricing_padding_pt_medium_unit,
        'padding-left' => $settings->mkbb_pricing_padding_pt_left_medium . $settings->mkbb_pricing_padding_pt_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-pricing-style-pt",
    'media' => 'responsive',
    'setting_name' => 'mkbb_pricing_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_pricing_padding_pt_top_responsive . $settings->mkbb_pricing_padding_pt_responsive_unit,
        'padding-right' => $settings->mkbb_pricing_padding_pt_right_responsive . $settings->mkbb_pricing_padding_pt_responsive_unit,
        'padding-bottom' => $settings->mkbb_pricing_padding_pt_bottom_responsive . $settings->mkbb_pricing_padding_pt_responsive_unit,
        'padding-left' => $settings->mkbb_pricing_padding_pt_left_responsive . $settings->mkbb_pricing_padding_pt_responsive_unit,
    ),
));

// Price
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-price-style-pt",
    'props' => array(
        'color' => $settings->mkbb_pricing_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_header_price_typography_pt',
    'selector' => ".fl-node-$id .mkbb-price-style-pt",
));

// Currency
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-currency-style-pt",
    'setting_name' => 'mkbb_currency_size_pt',
    'props' => array(
        'font-size' => $settings->mkbb_currency_size_pt . 'px',
    ),
));

// Original Price
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-original-price-style-pt",
    'props' => array(
        'color' => $settings->mkbb_original_price_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_original_price_typography_pt',
    'selector' => ".fl-node-$id .mkbb-original-price-style-pt",
));

// Period
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-period-style-pt",
    'props' => array(
        'color' => $settings->mkbb_period_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_period_typography_pt',
    'selector' => ".fl-node-$id .mkbb-period-style-pt",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-period-style-pt",
    'setting_name' => 'mkbb_period_spacing_pt',
    'props' => array(
        'margin-top' => $settings->mkbb_period_spacing_pt . 'px',
    ),
));

// features 
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
    'media' => 'default',
    'setting_name' => 'mkbb_features_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_features_padding_pt_top . $settings->mkbb_features_padding_pt_unit,
        'padding-right' => $settings->mkbb_features_padding_pt_right . $settings->mkbb_features_padding_pt_unit,
        'padding-bottom' => $settings->mkbb_features_padding_pt_bottom . $settings->mkbb_features_padding_pt_unit,
        'padding-left' => $settings->mkbb_features_padding_pt_left . $settings->mkbb_features_padding_pt_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
    'media' => 'medium',
    'setting_name' => 'mkbb_features_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_features_padding_pt_top_medium . $settings->mkbb_features_padding_pt_medium_unit,
        'padding-right' => $settings->mkbb_features_padding_pt_right_medium . $settings->mkbb_features_padding_pt_medium_unit,
        'padding-bottom' => $settings->mkbb_features_padding_pt_bottom_medium . $settings->mkbb_features_padding_pt_medium_unit,
        'padding-left' => $settings->mkbb_features_padding_pt_left_medium . $settings->mkbb_features_padding_pt_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
    'media' => 'responsive',
    'setting_name' => 'mkbb_features_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_features_padding_pt_top_responsive . $settings->mkbb_features_padding_pt_responsive_unit,
        'padding-right' => $settings->mkbb_features_padding_pt_right_responsive . $settings->mkbb_features_padding_pt_responsive_unit,
        'padding-bottom' => $settings->mkbb_features_padding_pt_bottom_responsive . $settings->mkbb_features_padding_pt_responsive_unit,
        'padding-left' => $settings->mkbb_features_padding_pt_left_responsive . $settings->mkbb_features_padding_pt_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
    'props' => array(
        'color' => $settings->mkbb_features_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_features_typography_pt',
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-divider-style-pt:not(:first-child)",
    'enabled' => 'mkbb_divider_show' === $settings->mkbb_divider_pt,
    'props' => array(
        'border-top-style' => $settings->mkbb_divider_border_pt,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-divider-style-pt:not(:first-child)",
    'setting_name' => 'mkbb_divider_weight_pt',
    'props' => array(
        'border-top-width' => $settings->mkbb_divider_weight_pt . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-divider-style-pt",
    'props' => array(
        'border-top-color' => $settings->mkbb_divider_color_pt,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-divider-style-pt:not(:first-child)",
    'setting_name' => 'mkbb_divider_gap_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_divider_gap_pt . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-divider-style-pt:not(:last-child)",
    'setting_name' => 'mkbb_divider_gap_pt',
    'props' => array(
        'margin-bottom' => $settings->mkbb_divider_gap_pt . 'px',
    ),
));

// Button(text color , bg color , border , padding , spacing)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt-css",
    'media' => 'default',
    'setting_name' => 'mkbb_footer_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_footer_padding_pt_top . $settings->mkbb_footer_padding_pt_unit,
        'padding-right' => $settings->mkbb_footer_padding_pt_right . $settings->mkbb_footer_padding_pt_unit,
        'padding-bottom' => $settings->mkbb_footer_padding_pt_bottom . $settings->mkbb_footer_padding_pt_unit,
        'padding-left' => $settings->mkbb_footer_padding_pt_left . $settings->mkbb_footer_padding_pt_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt-css",
    'media' => 'medium',
    'setting_name' => 'mkbb_footer_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_footer_padding_pt_top_medium . $settings->mkbb_footer_padding_pt_medium_unit,
        'padding-right' => $settings->mkbb_footer_padding_pt_right_medium . $settings->mkbb_footer_padding_pt_medium_unit,
        'padding-bottom' => $settings->mkbb_footer_padding_pt_bottom_medium . $settings->mkbb_footer_padding_pt_medium_unit,
        'padding-left' => $settings->mkbb_footer_padding_pt_left_medium . $settings->mkbb_footer_padding_pt_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt-css",
    'media' => 'responsive',
    'setting_name' => 'mkbb_footer_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_footer_padding_pt_top_responsive . $settings->mkbb_footer_padding_pt_responsive_unit,
        'padding-right' => $settings->mkbb_footer_padding_pt_right_responsive . $settings->mkbb_footer_padding_pt_responsive_unit,
        'padding-bottom' => $settings->mkbb_footer_padding_pt_bottom_responsive . $settings->mkbb_footer_padding_pt_responsive_unit,
        'padding-left' => $settings->mkbb_footer_padding_pt_left_responsive . $settings->mkbb_footer_padding_pt_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
    'props' => array(
        'color' => $settings->mkbb_button_text_color_pt,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_border_pt',
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_typography_pt',
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
    'media' => 'default',
    'setting_name' => 'mkbb_button_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_pt_top . $settings->mkbb_button_padding_pt_unit,
        'padding-right' => $settings->mkbb_button_padding_pt_right . $settings->mkbb_button_padding_pt_unit,
        'padding-bottom' => $settings->mkbb_button_padding_pt_bottom . $settings->mkbb_button_padding_pt_unit,
        'padding-left' => $settings->mkbb_button_padding_pt_left . $settings->mkbb_button_padding_pt_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_pt_top_medium . $settings->mkbb_button_padding_pt_medium_unit,
        'padding-right' => $settings->mkbb_button_padding_pt_right_medium . $settings->mkbb_button_padding_pt_medium_unit,
        'padding-bottom' => $settings->mkbb_button_padding_pt_bottom_medium . $settings->mkbb_button_padding_pt_medium_unit,
        'padding-left' => $settings->mkbb_button_padding_pt_left_medium . $settings->mkbb_button_padding_pt_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_padding_pt',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_pt_top_responsive . $settings->mkbb_button_padding_pt_responsive_unit,
        'padding-right' => $settings->mkbb_button_padding_pt_right_responsive . $settings->mkbb_button_padding_pt_responsive_unit,
        'padding-bottom' => $settings->mkbb_button_padding_pt_bottom_responsive . $settings->mkbb_button_padding_pt_responsive_unit,
        'padding-left' => $settings->mkbb_button_padding_pt_left_responsive . $settings->mkbb_button_padding_pt_responsive_unit,
    ),
));

// Ribbon	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-ribbon-text-style-pt",
    'props' => array(
        'background-color' => $settings->mkbb_ribbon_bg_color_pt,
    ),
));

FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-ribbon-style-pt",
    'media' => 'medium',
    'setting_name' => 'mkbb_ribbon_distance_pt',
    'props' => array(
        'margin-top' => $settings->mkbb_ribbon_distance_pt_medium . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-ribbon-style-pt",
    'media' => 'responsive',
    'setting_name' => 'mkbb_ribbon_distance_pt',
    'props' => array(
        'margin-top' => $settings->mkbb_ribbon_distance_pt_responsive . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-ribbon-style-pt",
    'setting_name' => 'mkbb_ribbon_distance_pt',
    'props' => array(
        'margin-top' => $settings->mkbb_ribbon_distance_pt . 'px',
    ),
));

FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-ribbon-text-style-pt",
    'props' => array(
        'color' => $settings->mkbb_ribbon_text_color_pt,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_ribbon_typography_pt',
    'selector' => ".fl-node-$id .mkbb-ribbon-text-style-pt",
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_ribbon_border_pt',
    'selector' => ".fl-node-$id .mkbb-ribbon-text-style-pt",
));

FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-header-style-pt",
    'props' => array(
        'background-color' => $settings->mkbb_header_background_color_pt,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-style-pt-css",
    'props' => array(
        'background-color' => $settings->mkbb_footer_background_color_pt,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-pricing-style-pt",
    'props' => array(
        'background-color' => $settings->mkbb_pricing_background_color_pt,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-features-style-pt",
    'props' => array(
        'background-color' => $settings->mkbb_features_background_color_pt,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-button-style-pt",
    'props' => array(
        'background-color' => $settings->mkbb_button_background_color_pt,
    ),
));

