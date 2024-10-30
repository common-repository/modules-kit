<?php

// Box(alignment , padding , background-color)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_pq',
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_pq,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_pq',
    'media' => 'medium',
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_pq_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_box_content_align_pq',
    'media' => 'responsive',
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes_responsive",
    'props' => array(
        'text-align' => $settings->mkbb_box_content_align_pq,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'default',
    'setting_name' => 'mkbb_box_content_padding_pq',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_pq_top . $settings->mkbb_box_content_padding_pq_unit,
        'padding-right' => $settings->mkbb_box_content_padding_pq_right . $settings->mkbb_box_content_padding_pq_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_pq_bottom . $settings->mkbb_box_content_padding_pq_unit,
        'padding-left' => $settings->mkbb_box_content_padding_pq_left . $settings->mkbb_box_content_padding_pq_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'medium',
    'setting_name' => 'mkbb_box_content_padding_pq',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_pq_top_medium . $settings->mkbb_box_content_padding_pq_medium_unit,
        'padding-right' => $settings->mkbb_box_content_padding_pq_right_medium . $settings->mkbb_box_content_padding_pq_medium_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_pq_bottom_medium . $settings->mkbb_box_content_padding_pq_medium_unit,
        'padding-left' => $settings->mkbb_box_content_padding_pq_left_medium . $settings->mkbb_box_content_padding_pq_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'responsive',
    'setting_name' => 'mkbb_box_content_padding_pq',
    'props' => array(
        'padding-top' => $settings->mkbb_box_content_padding_pq_top_responsive . $settings->mkbb_box_content_padding_pq_responsive_unit,
        'padding-right' => $settings->mkbb_box_content_padding_pq_right_responsive . $settings->mkbb_box_content_padding_pq_responsive_unit,
        'padding-bottom' => $settings->mkbb_box_content_padding_pq_bottom_responsive . $settings->mkbb_box_content_padding_pq_responsive_unit,
        'padding-left' => $settings->mkbb_box_content_padding_pq_left_responsive . $settings->mkbb_box_content_padding_pq_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'props' => array(
        'background-color' => $settings->mkbb_box_background_color_pq,
    ),
));

// Content(Text color , typography , spacing)
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-content-style-pullquotes",
    'props' => array(
        'color' => $settings->mkbb_content_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_content_typography_pq',
    'selector' => ".fl-node-$id .mkbb-content-style-pullquotes",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-pullquotes",
    'setting_name' => 'mkbb_content_spacing_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_content_spacing_pq . $settings->mkbb_content_spacing_pq_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-pullquotes",
    'media' => 'medium',
    'setting_name' => 'mkbb_content_spacing_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_content_spacing_pq_medium . $settings->mkbb_content_spacing_pq_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-content-style-pullquotes",
    'media' => 'responsive',
    'setting_name' => 'mkbb_content_spacing_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_content_spacing_pq_responsive . $settings->mkbb_content_spacing_pq_responsive_unit,
    ),
));

// Author(Text color , typography)
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-author-style-pullquotes",
    'props' => array(
        'color' => $settings->mkbb_author_text_color_pq,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_author_typography_pq',
    'selector' => ".fl-node-$id .mkbb-author-style-pullquotes",
));

// Border(color , Width ,Gap)
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'props' => array(
        'border-color' => $settings->mkbb_border_color_pq,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_width_pq',
    'props' => array(
        'border-left-style' => 'solid',
        'border-left-width' => $settings->mkbb_border_width_pq . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'medium',
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_width_pq',
    'props' => array(
        'border-left-style' => 'solid',
        'border-left-width' => $settings->mkbb_border_width_pq_medium . $settings->mkbb_border_width_pq_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'responsive',
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_width_pq',
    'props' => array(
        'border-left-style' => 'solid',
        'border-left-width' => $settings->mkbb_border_width_pq_responsive . $settings->mkbb_border_width_pq_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_gap_pq',
    'props' => array(
        'padding-left' => $settings->mkbb_border_gap_pq . $settings->mkbb_border_gap_pq_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'medium',
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_gap_pq',
    'props' => array(
        'padding-left' => $settings->mkbb_border_gap_pq_medium . $settings->mkbb_border_gap_pq_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-box-style-pullquotes",
    'media' => 'responsive',
    'enabled' => 'border' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_border_gap_pq',
    'props' => array(
        'padding-left' => $settings->mkbb_border_gap_pq_responsive . $settings->mkbb_border_gap_pq_responsive_unit,
    ),
));

// Quotation(color , Size , Spacing)	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-quotation-style-pullquotes",
    'enabled' => 'quotation' === $settings->mkbb_skin_pq,
    'props' => array(
        'color' => $settings->mkbb_quotation_color_pq,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => " .fl-node-$id .mkbb-quotation-style-pullquotes i",
    'setting_name' => 'mkbb_quotation_width_pq',
    'props' => array(
        'font-size' => $settings->mkbb_quotation_width_pq . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => " .fl-node-$id .mkbb-quotation-style-pullquotes i",
    'media' => 'medium',
    'setting_name' => 'mkbb_quotation_width_pq',
    'props' => array(
        'font-size' => $settings->mkbb_quotation_width_pq_medium . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => " .fl-node-$id .mkbb-quotation-style-pullquotes i",
    'media' => 'responsive',
    'setting_name' => 'mkbb_quotation_width_pq',
    'props' => array(
        'font-size' => $settings->mkbb_quotation_width_pq_responsive . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-quotation-style-pullquotes i",
    'enabled' => 'quotation' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_quotation_gap_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_quotation_gap_pq . $settings->mkbb_quotation_gap_pq_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-quotation-style-pullquotes i",
    'media' => 'medium',
    'enabled' => 'quotation' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_quotation_gap_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_quotation_gap_pq_medium . $settings->mkbb_quotation_gap_pq_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-quotation-style-pullquotes i",
    'media' => 'responsive',
    'enabled' => 'quotation' === $settings->mkbb_skin_pq,
    'setting_name' => 'mkbb_quotation_gap_pq',
    'props' => array(
        'margin-bottom' => $settings->mkbb_quotation_gap_pq_responsive . $settings->mkbb_quotation_gap_pq_responsive_unit,
    ),
));









