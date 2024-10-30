.fl-node-<?php echo esc_attr( $id ); ?> .mkbb-front-style-flpb {
background-image: url(<?php echo esc_attr( $settings->mkbb_front_bg_imagefield_flpb_src); ?>);
background-repeat: <?php echo esc_attr( $settings->mkbb_front_bg_image_Repeat_flpb); ?>;
background-attachment: <?php echo esc_attr( $settings->mkbb_front_bg_image_attachment_flpb); ?>;
background-position: <?php echo esc_attr( $settings->mkbb_front_bg_image_position_flpb); ?>;
background-size: <?php echo esc_attr( $settings->mkbb_front_bg_image_Size_flpb); ?>;
}
.fl-node-<?php echo esc_attr( $id); ?> .mkbb-back-style-flpb {
background-image: url(<?php echo esc_attr( $settings->mkbb_back_bg_imagefield_flpb_src); ?>);
background-repeat: <?php echo esc_attr( $settings->mkbb_back_bg_image_Repeat_flpb); ?>;
background-attachment: <?php echo esc_attr( $settings->mkbb_back_bg_image_attachment_flpb); ?>;
background-position: <?php echo esc_attr( $settings->mkbb_back_bg_image_position_flpb); ?>;
background-size: <?php echo esc_attr( $settings->mkbb_back_bg_image_Size_flpb); ?>;
}
<?php if ($settings->mkbb_box_transform_style_flpb == 'flip') { ?>
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-front, .fl-node-<?php echo esc_attr( $id); ?> .mkbb-flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    }
    <?php if ($settings->mkbb_box_flip_style_flpb == 'up') { ?>
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box:hover .mkbb-flip-box-inner {
        transform: rotateX(180deg);
        }
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
        transform: rotateX(180deg);
        }
    <?php
    }
    if ($settings->mkbb_box_flip_style_flpb == 'down') {
        ?>
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box:hover .mkbb-flip-box-inner {
        transform: rotateX(-180deg);
        }
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
        transform: rotateX(-180deg);
        }
    <?php
    }
    if ($settings->mkbb_box_flip_style_flpb == 'left') {
        ?>
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box:hover .mkbb-flip-box-inner {
        transform: rotateY(180deg);
        }
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
        transform: rotateY(180deg);
        }
    <?php
    }
    if ($settings->mkbb_box_flip_style_flpb == 'right') {
        ?>
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box:hover .mkbb-flip-box-inner {
        transform: rotateY(-180deg);
        }
        .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
        transform: rotateY(-180deg);
        }
        <?php
    }
}

if ($settings->mkbb_box_flip_style_flpb == 'right' || $settings->mkbb_box_flip_style_flpb == 'left') {
    $scale = 'scaleX';
}
if ($settings->mkbb_box_flip_style_flpb == 'up' || $settings->mkbb_box_flip_style_flpb == 'down') {
    $scale = 'scaleY';
}
if ($settings->mkbb_box_flip_style_flpb == 'up') {
    $slide = 'bottom';
}
if ($settings->mkbb_box_flip_style_flpb == 'down') {
    $slide = 'top';
}
if ($settings->mkbb_box_flip_style_flpb == 'left') {
    $slide = 'right';
}
if ($settings->mkbb_box_flip_style_flpb == 'right') {
    $slide = 'left';
}
if ($settings->mkbb_box_transform_style_flpb == 'slide') {
    ?>

    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-front {
    width: 100%;
    height: 100%;
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
    -webkit-transition: -webkit-transform 1000ms;
    transition :-webkit-transform 1000ms;
    transition: transform 1000ms;
    transition: transform 1000ms, -webkit-transform 1000ms;
    -webkit-transform-origin: <?php echo esc_attr( $slide ); ?> center;
    transform-origin: <?php echo esc_attr( $slide ); ?> center;
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    transform: <?php echo esc_attr( $scale ); ?>(0);
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-inner:hover .mkbb-flip-box-back {
    transform: <?php echo esc_attr( $scale); ?>(1);
    }
    <?php
}
if ($settings->mkbb_box_transform_style_flpb == 'zoom out' || $settings->mkbb_box_transform_style_flpb == 'zoom in') {
    if ($settings->mkbb_box_transform_style_flpb == 'zoom out') {
        $out = 'front';
        $in = 'back';
        $value = '1';
        $value1 = '0';
    } else {
        $in = 'front';
        $out = 'back';
        $value = '0';
        $value1 = '1';
    }
    ?>

    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-<?php echo esc_attr( $in ) ; ?> {
    width: 100%;
    height: 100%;
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-<?php echo esc_attr( $out ); ?> {
    -webkit-transition: -webkit-transform 1000ms;
    transition :-webkit-transform 1000ms;
    transition: transform 1000ms;
    transition: transform 1000ms, -webkit-transform 1000ms;
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-<?php echo esc_attr( $out); ?> {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    transform: scale(<?php echo esc_attr( $value ); ?>);
    }
    .fl-node-<?php echo esc_attr( $id ); ?> .mkbb-flip-box-inner:hover .mkbb-flip-box-<?php echo esc_attr( $out ); ?> {
    transform: scale(<?php echo esc_attr( $value1 ); ?>);
    }
    <?php
}
// Box
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-flip-box-inner",
    'setting_name' => 'mkbb_box_height_flpb',
    'props' => array(
        'height' => $settings->mkbb_box_height_flpb . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-flip-box-inner",
    'media' => 'medium',
    'setting_name' => 'mkbb_box_height_flpb',
    'props' => array(
        'height' => $settings->mkbb_box_height_flpb_medium . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-flip-box-inner",
    'media' => 'responsive',
    'setting_name' => 'mkbb_box_height_flpb',
    'props' => array(
        'height' => $settings->mkbb_box_height_flpb_responsive . 'px',
    ),
));

// Front
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'enabled' => 'classic' === $settings->mkbb_front_background_flpb,
    'props' => array(
        'background-color' => $settings->mkbb_front_bg_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'enabled' => 'gradient' === $settings->mkbb_front_background_flpb,
    'props' => array(
        'background-image' => FLBuilderColor::gradient($settings->mkbb_front_bg_gradient_flpb),
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'media' => 'default',
    'setting_name' => 'mkbb_front_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_front_content_padding_flpb_top . $settings->mkbb_front_content_padding_flpb_unit,
        'padding-right' => $settings->mkbb_front_content_padding_flpb_right . $settings->mkbb_front_content_padding_flpb_unit,
        'padding-bottom' => $settings->mkbb_front_content_padding_flpb_bottom . $settings->mkbb_front_content_padding_flpb_unit,
        'padding-left' => $settings->mkbb_front_content_padding_flpb_left . $settings->mkbb_front_content_padding_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_front_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_front_content_padding_flpb_top_medium . $settings->mkbb_front_content_padding_flpb_medium_unit,
        'padding-right' => $settings->mkbb_front_content_padding_flpb_right_medium . $settings->mkbb_front_content_padding_flpb_medium_unit,
        'padding-bottom' => $settings->mkbb_front_content_padding_flpb_bottom_medium . $settings->mkbb_front_content_padding_flpb_medium_unit,
        'padding-left' => $settings->mkbb_front_content_padding_flpb_left_medium . $settings->mkbb_front_content_padding_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_front_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_front_content_padding_flpb_top_responsive . $settings->mkbb_front_content_padding_flpb_responsive_unit,
        'padding-right' => $settings->mkbb_front_content_padding_flpb_right_responsive . $settings->mkbb_front_content_padding_flpb_responsive_unit,
        'padding-bottom' => $settings->mkbb_front_content_padding_flpb_bottom_responsive . $settings->mkbb_front_content_padding_flpb_responsive_unit,
        'padding-left' => $settings->mkbb_front_content_padding_flpb_left_responsive . $settings->mkbb_front_content_padding_flpb_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_content_align_flpb',
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_front_content_align_flpb,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_content_align_flpb',
    'media' => 'medium',
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_front_content_align_flpb_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_content_align_flpb',
    'media' => 'responsive',
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_front_content_align_flpb_responsive,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_border_flpb',
    'selector' => ".fl-node-$id .mkbb-front-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-image-style-flpb",
    'setting_name' => 'mkbb_front_image_width_flpb',
    'props' => array(
        'width' => $settings->mkbb_front_image_width_flpb . $settings->mkbb_front_image_width_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-image-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_front_image_width_flpb',
    'props' => array(
        'width' => $settings->mkbb_front_image_width_flpb_medium . $settings->mkbb_front_image_width_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-image-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_front_image_width_flpb',
    'props' => array(
        'width' => $settings->mkbb_front_image_width_flpb_responsive . $settings->mkbb_front_image_width_flpb_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb img",
    'setting_name' => 'mkbb_front_image_spacing_flpb',
    'props' => array(
        'margin-bottom' => $settings->mkbb_front_image_spacing_flpb . $settings->mkbb_front_image_spacing_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb img",
    'media' => 'medium',
    'setting_name' => 'mkbb_front_image_spacing_flpb',
    'props' => array(
        'margin-bottom' => $settings->mkbb_front_image_spacing_flpb_medium . $settings->mkbb_front_image_spacing_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-style-flpb img",
    'media' => 'responsive',
    'setting_name' => 'mkbb_front_image_spacing_flpb',
    'props' => array(
        'margin-bottom' => $settings->mkbb_front_image_spacing_flpb_responsive . $settings->mkbb_front_image_spacing_flpb_responsive_unit,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_image_border_flpb',
    'selector' => ".fl-node-$id .mkbb-front-image-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom . $settings->mkbb_title_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom_medium . $settings->mkbb_title_spacing_bottom_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_title_spacing_bottom_responsive . $settings->mkbb_title_spacing_bottom_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_front_title_text_color_flpb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_title_typography_flpb',
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-front-description-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_front_description_text_color_flpb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_front_description_typography_flpb',
    'selector' => ".fl-node-$id .mkbb-front-description-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-icon-style-flpb",
    'setting_name' => 'mkbb_front_icon_width_flpb',
    'props' => array(
        'font-size' => $settings->mkbb_front_icon_width_flpb . $settings->mkbb_front_icon_width_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-icon-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_front_icon_width_flpb',
    'props' => array(
        'font-size' => $settings->mkbb_front_icon_width_flpb_medium . $settings->mkbb_front_icon_width_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-icon-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_front_icon_width_flpb',
    'props' => array(
        'font-size' => $settings->mkbb_front_icon_width_flpb_responsive . $settings->mkbb_front_icon_width_flpb_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'setting_name' => 'mkbb_front_icon_spacing_flpb',
    'props' => array(
        'margin-top' => $settings->mkbb_front_icon_spacing_flpb . $settings->mkbb_front_icon_spacing_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_front_icon_spacing_flpb',
    'props' => array(
        'margin-top' => $settings->mkbb_front_icon_spacing_flpb_medium . $settings->mkbb_front_icon_spacing_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-front-title-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_front_icon_spacing_flpb',
    'props' => array(
        'margin-top' => $settings->mkbb_front_icon_spacing_flpb_responsive . $settings->mkbb_front_icon_spacing_flpb_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-front-icon-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_front_icon_color_flpb,
    ),
));

// Back
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'enabled' => 'classic' === $settings->mkbb_back_background_flpb,
    'props' => array(
        'background-color' => $settings->mkbb_back_bg_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'enabled' => 'gradient' === $settings->mkbb_back_background_flpb,
    'props' => array(
        'background-image' => FLBuilderColor::gradient($settings->mkbb_back_bg_gradient_flpb),
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'media' => 'default',
    'setting_name' => 'mkbb_back_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_back_content_padding_flpb_top . $settings->mkbb_back_content_padding_flpb_unit,
        'padding-right' => $settings->mkbb_back_content_padding_flpb_right . $settings->mkbb_back_content_padding_flpb_unit,
        'padding-bottom' => $settings->mkbb_back_content_padding_flpb_bottom . $settings->mkbb_back_content_padding_flpb_unit,
        'padding-left' => $settings->mkbb_back_content_padding_flpb_left . $settings->mkbb_back_content_padding_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_back_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_back_content_padding_flpb_top_medium . $settings->mkbb_back_content_padding_flpb_medium_unit,
        'padding-right' => $settings->mkbb_back_content_padding_flpb_right_medium . $settings->mkbb_back_content_padding_flpb_medium_unit,
        'padding-bottom' => $settings->mkbb_back_content_padding_flpb_bottom_medium . $settings->mkbb_back_content_padding_flpb_medium_unit,
        'padding-left' => $settings->mkbb_back_content_padding_flpb_left_medium . $settings->mkbb_back_content_padding_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_back_content_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_back_content_padding_flpb_top_responsive . $settings->mkbb_back_content_padding_flpb_responsive_unit,
        'padding-right' => $settings->mkbb_back_content_padding_flpb_right_responsive . $settings->mkbb_back_content_padding_flpb_responsive_unit,
        'padding-bottom' => $settings->mkbb_back_content_padding_flpb_bottom_responsive . $settings->mkbb_back_content_padding_flpb_responsive_unit,
        'padding-left' => $settings->mkbb_back_content_padding_flpb_left_responsive . $settings->mkbb_back_content_padding_flpb_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_content_align_flpb',
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_back_content_align_flpb,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_content_align_flpb',
    'media' => 'medium',
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_back_content_align_flpb_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_content_align_flpb',
    'media' => 'responsive',
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
    'props' => array(
        'text-align' => $settings->mkbb_back_content_align_flpb_responsive,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_border_flpb',
    'selector' => ".fl-node-$id .mkbb-back-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-title-style-flpb",
    'setting_name' => 'mkbb_back_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_title_spacing_bottom . $settings->mkbb_back_title_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-title-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_back_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_title_spacing_bottom_medium . $settings->mkbb_back_title_spacing_bottom_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-title-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_back_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_title_spacing_bottom_responsive . $settings->mkbb_back_title_spacing_bottom_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-title-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_back_title_text_color_flpb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_title_typography_flpb',
    'selector' => ".fl-node-$id .mkbb-back-title-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-description-style-flpb",
    'setting_name' => 'mkbb_back_description_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_description_spacing_bottom . $settings->mkbb_back_description_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-description-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_back_description_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_description_spacing_bottom_medium . $settings->mkbb_back_description_spacing_bottom_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-description-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_back_description_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->mkbb_back_description_spacing_bottom_responsive . $settings->mkbb_back_description_spacing_bottom_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-description-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_back_description_text_color_flpb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_back_description_typography_flpb',
    'selector' => ".fl-node-$id .mkbb-back-description-style-flpb",
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
    'props' => array(
        'color' => $settings->mkbb_button_text_color_flpb,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
    'props' => array(
        'background-color' => $settings->mkbb_button_background_color_flpb,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_typography_flpb',
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
    'media' => 'default',
    'setting_name' => 'mkbb_button_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_flpb_top . $settings->mkbb_button_padding_flpb_unit,
        'padding-right' => $settings->mkbb_button_padding_flpb_right . $settings->mkbb_button_padding_flpb_unit,
        'padding-bottom' => $settings->mkbb_button_padding_flpb_bottom . $settings->mkbb_button_padding_flpb_unit,
        'padding-left' => $settings->mkbb_button_padding_flpb_left . $settings->mkbb_button_padding_flpb_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
    'media' => 'medium',
    'setting_name' => 'mkbb_button_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_flpb_top_medium . $settings->mkbb_button_padding_flpb_medium_unit,
        'padding-right' => $settings->mkbb_button_padding_flpb_right_medium . $settings->mkbb_button_padding_flpb_medium_unit,
        'padding-bottom' => $settings->mkbb_button_padding_flpb_bottom_medium . $settings->mkbb_button_padding_flpb_medium_unit,
        'padding-left' => $settings->mkbb_button_padding_flpb_left_medium . $settings->mkbb_button_padding_flpb_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
    'media' => 'responsive',
    'setting_name' => 'mkbb_button_padding_flpb',
    'props' => array(
        'padding-top' => $settings->mkbb_button_padding_flpb_top_responsive . $settings->mkbb_button_padding_flpb_responsive_unit,
        'padding-right' => $settings->mkbb_button_padding_flpb_right_responsive . $settings->mkbb_button_padding_flpb_responsive_unit,
        'padding-bottom' => $settings->mkbb_button_padding_flpb_bottom_responsive . $settings->mkbb_button_padding_flpb_responsive_unit,
        'padding-left' => $settings->mkbb_button_padding_flpb_left_responsive . $settings->mkbb_button_padding_flpb_responsive_unit,
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'mkbb_button_border_flpb',
    'selector' => ".fl-node-$id .mkbb-back-button-style-flpb",
));
