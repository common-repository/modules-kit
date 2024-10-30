<?php

class MKBB_Testimonial extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Testimonial', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/testimonial/',
            'url' => MKBB_URL . 'modules/testimonial/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.		
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Testimonial', array(
    // Tab General
    'mkbb_general_tab' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Content
            'mkbb_testimonial' => array(
                'title' => __('Testimonial', 'modules-kit'),
                'fields' => array(
                    // Description
                    'mkbb_content' => array(
                        'type' => 'textarea',
                        'label' => __('Content', 'modules-kit'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'modules-kit'),
                        'placeholder' => __('Add Description', 'modules-kit'),
                        'rows' => '6',
                    ),
                    // Select Image
                    'mkbb_select_image' => array(
                        'type' => 'photo',
                        'label' => __('Select Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Name
                    'mkbb_name' => array(
                        'type' => 'text',
                        'default' => __('Add Name', 'modules-kit'),
                        'label' => __('Name', 'modules-kit'),
                    ),
                    // Designation
                    'mkbb_designation' => array(
                        'type' => 'text',
                        'default' => __('Add designation', 'modules-kit'),
                        'label' => __('Designation', 'modules-kit'),
                    ),
                    // Link
                    'mkbb_link' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                )
            ),
        )
    ),
    // Tab Style
    'mkbb_style_tab' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section box
            'mkbb_style_box' => array(
                'title' => __('Box', 'modules-kit'),
                'fields' => array(
                    // Content alignment
                    'mkbb_box_content_align_tm' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-testimonial',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content padding
                    'mkbb_box_content_padding_tm' => array(
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
                            'selector' => '.mkbb-box-style-testimonial',
                            'property' => 'padding',
                        ),
                    ),
                    // Background color
                    'mkbb_box_background_color_tm' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'default' => 'F7F7F7',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-testimonial',
                            'property' => 'background-color'
                        ),
                    ),
                )
            ),
            // Section Image
            'mkbb_style_Image' => array(
                'title' => __('Image', 'modules-kit'),
                'fields' => array(
                    // Image size
                    'mkbb_image_size_tm' => array(
                        'type' => 'text',
                        'label' => __('Image Size', 'modules-kit'),
                        'placeholder' => '60',
                        'description' => 'px',
                        'maxlength' => '3',
                        'size' => '4',
                    ),
                    // Image border			
                    'mkbb_image_border_tm' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-image-style-testimonial',
                        ),
                    ),
                )
            ),
            // Section Content
            'mkbb_style_content' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // content Color
                    'mkbb_content_text_color_tm' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-testimonial',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // content typography
                    'mkbb_content_typography_tm' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-testimonial',
                        ),
                    ),
                )
            ),
            // Section Name
            'mkbb_style_name' => array(
                'title' => __('Name', 'modules-kit'),
                'fields' => array(
                    // Name Color
                    'mkbb_name_text_color_tm' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-name-style-testimonial',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Name typography
                    'mkbb_name_typography_tm' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-name-style-testimonial',
                        ),
                    ),
                )
            ),
            // Section Designation
            'mkbb_style_designation' => array(
                'title' => __('Designtion', 'modules-kit'),
                'fields' => array(
                    // Name Color
                    'mkbb_designation_text_color_tm' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-designation-style-testimonial',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // designation typography
                    'mkbb_designation_typography_tm' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-designation-style-testimonial',
                        ),
                    ),
                )
            ),
        )
    )
));
