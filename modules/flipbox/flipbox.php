<?php

class MKBB_Flipbox extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Flipbox', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/flipbox/',
            'url' => MKBB_URL . 'modules/flipbox/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'icon' => 'icon.svg',
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Flipbox', array(
    // Tab Content
    'mkbb_content_tab_flpb' => array(
        'title' => __('Content', 'modules-kit'),
        'sections' => array(
            // Section Front Content
            'mkbb_front_content_flpb' => array(
                'title' => __('Front', 'modules-kit'),
                'fields' => array(
                    // Graphic Element
                    'mkbb_graphic_element_flpb' => array(
                        'type' => 'select',
                        'label' => __('Graphic Element', 'modules-kit'),
                        'default' => 'none',
                        'options' => array(
                            'none' => __('None', 'modules-kit'),
                            'image' => __('Image', 'modules-kit'),
                            'icon' => __('Icon', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'none' => array(),
                            'image' => array(
                                'fields' => array('mkbb_imagefield_flpb'),
                                'sections' => array('mkbb_front_style_image_flpb'),
                            ),
                            'icon' => array(
                                'fields' => array('mkbb_iconfield_flpb'),
                                'sections' => array('mkbb_front_style_icon_flpb'),
                            )
                        )
                    ),
                    // Image Field
                    'mkbb_imagefield_flpb' => array(
                        'type' => 'photo',
                        'label' => __('Select Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Icon Field
                    'mkbb_iconfield_flpb' => array(
                        'type' => 'icon',
                        'label' => __('Select Icon', 'modules-kit'),
                        'show_remove' => true
                    ),
                    // Title
                    'mkbb_front_title_flpb' => array(
                        'type' => 'text',
                        'default' => __('This is Heading', 'modules-kit'),
                        'label' => __('Title ', 'modules-kit'),
                    ),
                    // Description
                    'mkbb_front_description_flpb' => array(
                        'type' => 'textarea',
                        'label' => __('Description', 'modules-kit'),
                        'default' => __('Flip Box is a very eye-catching element that can fit anywhere on any website and it helps in displaying information to the user.', 'modules-kit'),
                        'placeholder' => __('Add Description', 'modules-kit'),
                        'rows' => '6',
                    ),
                    'mkbb_front_background_flpb' => array(
                        'type' => 'button-group',
                        'label' => __('Background Type', 'modules-kit'),
                        'default' => 'classic',
                        'options' => array(
                            'none' => __('None', 'modules-kit'),
                            'classic' => __('Classic', 'modules-kit'),
                            'gradient' => __('Gradient', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'classic' => array(
                                'fields' => array('mkbb_front_bg_color', 'mkbb_front_bg_imagefield_flpb', 'mkbb_front_bg_image_position_flpb', 'mkbb_front_bg_image_attachment_flpb', 'mkbb_front_bg_image_Repeat_flpb', 'mkbb_front_bg_image_Size_flpb'),
                            ),
                            'gradient' => array(
                                'fields' => array('mkbb_front_bg_gradient_flpb'),
                            )
                        )
                    ),
                    // Front background Color
                    'mkbb_front_bg_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => 'ffffff',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb',
                            'property' => 'background-color'),
                    ),
                    // Front Background Image Field
                    'mkbb_front_bg_imagefield_flpb' => array(
                        'type' => 'photo',
                        'label' => __('Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Position
                    'mkbb_front_bg_image_position_flpb' => array(
                        'type' => 'select',
                        'label' => __('Position', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'center center' => __('Center Center', 'modules-kit'),
                            'center left' => __('Center Left', 'modules-kit'),
                            'center right' => __('Center Right', 'modules-kit'),
                            'top center' => __('Top Center', 'modules-kit'),
                            'top left' => __('Top Left', 'modules-kit'),
                            'top right' => __('Top Right', 'modules-kit'),
                            'bottom center' => __('Bottom Center', 'modules-kit'),
                            'bottom left' => __('Bottom Left', 'modules-kit'),
                            'bottom right' => __('Bottom Right', 'modules-kit'),
                        ),
                    ),
                    // Attachment
                    'mkbb_front_bg_image_attachment_flpb' => array(
                        'type' => 'select',
                        'label' => __('Attachment', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'scroll' => __('Scroll', 'modules-kit'),
                            'fixed' => __('Fixed', 'modules-kit'),
                        ),
                    ),
                    // Repeat
                    'mkbb_front_bg_image_Repeat_flpb' => array(
                        'type' => 'select',
                        'label' => __('Repeat', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'repeat' => __('Repeat', 'modules-kit'),
                            'no-repeat' => __('No-Repeat', 'modules-kit'),
                            'repeat-x' => __('Repeat-X', 'modules-kit'),
                            'repeat-y' => __('Repeat-Y', 'modules-kit'),
                        ),
                    ),
                    // Size
                    'mkbb_front_bg_image_Size_flpb' => array(
                        'type' => 'select',
                        'label' => __('Size', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'auto' => __('Auto', 'modules-kit'),
                            'cover' => __('Cover', 'modules-kit'),
                            'contain' => __('Contain', 'modules-kit'),
                        ),
                    ),
                    // front Gradient Background color
                    'mkbb_front_bg_gradient_flpb' => array(
                        'type' => 'gradient',
                        'label' => __('Background Gradient', 'modules-kit'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb',
                            'property' => 'background-image',
                        ),
                    ),
                )
            ),
            // Back Content
            'mkbb_back_content_flpb' => array(
                'title' => __('Back', 'modules-kit'),
                'fields' => array(
                    // Title
                    'mkbb_back_title_flpb' => array(
                        'type' => 'text',
                        'default' => __('This is Heading', 'modules-kit'),
                        'label' => __('Title ', 'modules-kit'),
                    ),
                    // Description
                    'mkbb_back_description_flpb' => array(
                        'type' => 'textarea',
                        'label' => __('Description', 'modules-kit'),
                        'default' => __('Flip Box is a very eye-catching element that can fit anywhere on any website and it helps in displaying information to the user.', 'modules-kit'),
                        'placeholder' => __('Add Description', 'modules-kit'),
                        'rows' => '6',
                    ),
                    // Button Text
                    'mkbb_back_button_text_flpb' => array(
                        'type' => 'text',
                        'default' => __('Click Here', 'modules-kit'),
                        'label' => __('Button Text', 'modules-kit'),
                    ),
                    // Link
                    'mkbb_back_button_link_flpb' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                    'mkbb_back_background_flpb' => array(
                        'type' => 'button-group',
                        'label' => __('Background Type', 'modules-kit'),
                        'default' => 'classic',
                        'options' => array(
                            'none' => __('None', 'modules-kit'),
                            'classic' => __('Classic', 'modules-kit'),
                            'gradient' => __('Gradient', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'classic' => array(
                                'fields' => array('mkbb_back_bg_color', 'mkbb_back_bg_imagefield_flpb', 'mkbb_back_bg_image_position_flpb', 'mkbb_back_bg_image_attachment_flpb', 'mkbb_back_bg_image_Repeat_flpb', 'mkbb_back_bg_image_Repeat_flpb', 'mkbb_back_bg_image_Size_flpb'),
                            ),
                            'gradient' => array(
                                'fields' => array('mkbb_back_bg_gradient_flpb'),
                            )
                        )
                    ),
                    // Back background Color
                    'mkbb_back_bg_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => 'ffffff',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-style-flpb',
                            'property' => 'background-color'),
                    ),
                    // Back Background Image Field
                    'mkbb_back_bg_imagefield_flpb' => array(
                        'type' => 'photo',
                        'label' => __('Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Position
                    'mkbb_back_bg_image_position_flpb' => array(
                        'type' => 'select',
                        'label' => __('Position', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'center center' => __('Center Center', 'modules-kit'),
                            'center left' => __('Center Left', 'modules-kit'),
                            'center right' => __('Center Right', 'modules-kit'),
                            'top center' => __('Top Center', 'modules-kit'),
                            'top left' => __('Top Left', 'modules-kit'),
                            'top right' => __('Top Right', 'modules-kit'),
                            'bottom center' => __('Bottom Center', 'modules-kit'),
                            'bottom left' => __('Bottom Left', 'modules-kit'),
                            'bottom right' => __('Bottom Right', 'modules-kit'),
                        ),
                    ),
                    // Attachment
                    'mkbb_back_bg_image_attachment_flpb' => array(
                        'type' => 'select',
                        'label' => __('Attachment', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'scroll' => __('Scroll', 'modules-kit'),
                            'fixed' => __('Fixed', 'modules-kit'),
                        ),
                    ),
                    // Repeat
                    'mkbb_back_bg_image_Repeat_flpb' => array(
                        'type' => 'select',
                        'label' => __('Repeat', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'repeat' => __('Repeat', 'modules-kit'),
                            'no-repeat' => __('No-Repeat', 'modules-kit'),
                            'repeat-x' => __('Repeat-X', 'modules-kit'),
                            'repeat-y' => __('Repeat-Y', 'modules-kit'),
                        ),
                    ),
                    // Size
                    'mkbb_back_bg_image_Size_flpb' => array(
                        'type' => 'select',
                        'label' => __('Size', 'modules-kit'),
                        'default' => 'default',
                        'options' => array(
                            'default' => __('Default', 'modules-kit'),
                            'auto' => __('Auto', 'modules-kit'),
                            'cover' => __('Cover', 'modules-kit'),
                            'contain' => __('Contain', 'modules-kit'),
                        ),
                    ),
                    // back Gradient Background color
                    'mkbb_back_bg_gradient_flpb' => array(
                        'type' => 'gradient',
                        'label' => __('Background Gradient', 'modules-kit'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-style-flpb',
                            'property' => 'background-image',
                        ),
                    ),
                )
            ),
            // Section Setting
            'mkbb_setting_flpb' => array(
                'title' => __('Settings', 'modules-kit'),
                'fields' => array(
                    // Height 
                    'mkbb_box_height_flpb' => array(
                        'type' => 'unit',
                        'label' => __('Height', 'modules-kit'),
                        'responsive' => true,
                        'units' => array('px'),
                        'default' => '280',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-flip-box-inner',
                            'property' => 'height',
                        ),
                    ),
                    'mkbb_box_transform_style_flpb' => array(
                        'type' => 'select',
                        'label' => __('Flip Effect', 'modules-kit'),
                        'default' => 'flip',
                        'options' => array(
                            'flip' => __('Flip', 'modules-kit'),
                            'slide' => __('Slide', 'modules-kit'),
                            'zoom in' => __('Zoom In', 'modules-kit'),
                            'zoom out' => __('Zoom Out', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'none' => array(),
                            'flip' => array(
                                'fields' => array('mkbb_box_flip_style_flpb'),
                            ),
                            'slide' => array(
                                'fields' => array('mkbb_box_flip_style_flpb'),
                            )
                        )
                    ),
                    'mkbb_box_flip_style_flpb' => array(
                        'type' => 'select',
                        'label' => __('Flip Direction', 'modules-kit'),
                        'default' => 'left',
                        'options' => array(
                            'left' => __('Left', 'modules-kit'),
                            'right' => __('Right', 'modules-kit'),
                            'up' => __('Up', 'modules-kit'),
                            'down' => __('Down', 'modules-kit'),
                        ),
                    ),
                )
            )
        ),
    ),
    // Tab Front Style
    'mkbb_front_style_tab_flpb' => array(
        'title' => __('Front Style', 'modules-kit'),
        'sections' => array(
            // Section Box
            'mkbb_box_style' => array(
                'title' => __('Front Content', 'modules-kit'),
                'fields' => array(
                    // Content Padding
                    'mkbb_front_content_padding_flpb' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'modules-kit'),
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb',
                            'property' => 'padding',
                        ),
                    ),
                    // Alignment
                    'mkbb_front_content_align_flpb' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb',
                            'property' => 'text-align',
                        ),
                    ),
                    // Border
                    'mkbb_front_border_flpb' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb',
                        ),
                    ),
                ),
            ),
            // Image Section
            'mkbb_front_style_image_flpb' => array(
                'title' => __('Image', 'modules-kit'),
                'fields' => array(
                    // Width
                    'mkbb_front_image_width_flpb' => array(
                        'type' => 'unit',
                        'label' => __('Width', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => '%',
                        'default' => '35',
                        'placeholder' => '',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-image-style-flpb',
                            'property' => 'width',
                        ),
                    ),
                    // Image Spacing
                    'mkbb_front_image_spacing_flpb' => array(
                        'type' => 'unit',
                        'label' => __('Image Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-style-flpb img',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Border
                    'mkbb_front_image_border_flpb' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-image-style-flpb',
                        ),
                    ),
                )
            ),
            // Icon Section
            'mkbb_front_style_icon_flpb' => array(
                'title' => __('Icon', 'modules-kit'),
                'fields' => array(
                    // Size
                    'mkbb_front_icon_width_flpb' => array(
                        'type' => 'unit',
                        'label' => __('Size', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '35',
                        'placeholder' => '',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-icon-style-flpb',
                            'property' => 'font-size',
                        ),
                    ),
                    // Icon Spacing
                    'mkbb_front_icon_spacing_flpb' => array(
                        'type' => 'unit',
                        'label' => __('Icon Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-title-style-flpb',
                            'property' => 'margin-top',
                        ),
                    ),
                    // Icon Color
                    'mkbb_front_icon_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-icon-style-flpb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                )
            ),
            // Section Title
            'mkbb_front_title_style_flpb' => array(
                'title' => __('Title', 'modules-kit'),
                'fields' => array(
                    // Title Spacing
                    'mkbb_title_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-title-style-flpb',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Title Color
                    'mkbb_front_title_text_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-title-style-flpb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Title typography
                    'mkbb_front_title_typography_flpb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-title-style-flpb',
                        ),
                    ),
                )
            ),
            // Section Description
            'mkbb_front_style_description_flpb' => array(
                'title' => __('Description', 'modules-kit'),
                'fields' => array(
                    // description color
                    'mkbb_front_description_text_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-description-style-flpb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // description color
                    'mkbb_front_description_typography_flpb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-front-description-style-flpb',
                        ),
                    ),
                )
            ),
        )
    ),
    // Tab Back Style
    'mkbb_back_style_tab_flpb' => array(
        'title' => __('Back Style', 'modules-kit'),
        'sections' => array(
            // Section Box
            'mkbb_back_box_style' => array(
                'title' => __('Back Content', 'modules-kit'),
                'fields' => array(
                    // Content Padding
                    'mkbb_back_content_padding_flpb' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'modules-kit'),
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-style-flpb',
                            'property' => 'padding',
                        ),
                    ),
                    // Alignment
                    'mkbb_back_content_align_flpb' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-style-flpb',
                            'property' => 'text-align',
                        ),
                    ),
                    // Border
                    'mkbb_back_border_flpb' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-style-flpb',
                        ),
                    ),
                ),
            ),
            // Section Title
            'mkbb_back_title_style_flpb' => array(
                'title' => __('Title', 'modules-kit'),
                'fields' => array(
                    // Title Spacing
                    'mkbb_back_title_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-title-style-flpb',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Title Color
                    'mkbb_back_title_text_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '000000',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-title-style-flpb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Title typography
                    'mkbb_back_title_typography_flpb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-title-style-flpb',
                        ),
                    ),
                )
            ),
            // Section Description
            'mkbb_back_style_description_flpb' => array(
                'title' => __('Description', 'modules-kit'),
                'fields' => array(
                    // Description Spacing
                    'mkbb_back_description_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '20',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-description-style-flpb',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // description color
                    'mkbb_back_description_text_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '000000',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-description-style-flpb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // description color
                    'mkbb_back_description_typography_flpb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-description-style-flpb',
                        ),
                    ),
                )
            ),
            // Section Button
            'mkbb_back_button_style_flpb' => array(
                'title' => __('Button', 'modules-kit'),
                'fields' => array(
                    // Button Text color			
                    'mkbb_button_text_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '000000',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-button-style-flpb',
                            'property' => 'color'
                        ),
                    ),
                    // Button color
                    'mkbb_button_background_color_flpb' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'FFFFFF',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-button-style-flpb',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_typography_flpb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-button-style-flpb',
                        ),
                    ),
                    // Button padding
                    'mkbb_button_padding_flpb' => array(
                        'type' => 'dimension',
                        'label' => __('Button Text Padding', 'modules-kit'),
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-button-style-flpb',
                            'property' => 'padding',
                        ),
                    ),
                    // Border
                    'mkbb_button_border_flpb' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-back-button-style-flpb',
                        ),
                    ),
                )
            ),
        )
    ),
));





