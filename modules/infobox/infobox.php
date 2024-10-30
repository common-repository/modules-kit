<?php

class MKBB_infobox extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Infobox', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/infobox/',
            'url' => MKBB_URL . 'modules/infobox/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_infobox', array(
    // Tab General
    'mkbb_general_tab' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Image
            'mkbb_image' => array(
                'title' => __('Image', 'modules-kit'),
                'fields' => array(
                    // Select Image
                    'mkbb_select_image' => array(
                        'type' => 'photo',
                        'label' => __('Select Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Attribute
                    'mkbb_image_attribute' => array(
                        'type' => 'text',
                        'label' => __('Alt', 'modules-kit'),
                    ),
                )
            ),
            // Section content
            'mkbb-text' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Title
                    'mkbb_title' => array(
                        'type' => 'text',
                        'default' => __('Title', 'modules-kit'),
                        'label' => __('Title', 'modules-kit'),
                    ),
                    // HTML Tag
                    'mkbb_html_tag' => array(
                        'type' => 'select',
                        'label' => __('Title HTML Tag', 'modules-kit'),
                        'default' => 'h2',
                        'options' => array(
                            'h1' => __('H1', 'modules-kit'),
                            'h2' => __('H2', 'modules-kit'),
                            'h3' => __('H3', 'modules-kit'),
                            'h4' => __('H4', 'modules-kit'),
                            'h5' => __('H5', 'modules-kit'),
                            'h6' => __('H6', 'modules-kit'),
                        ),
                    ),
                    // Description
                    'mkbb_description' => array(
                        'type' => 'textarea',
                        'label' => __('Description', 'modules-kit'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'modules-kit'),
                        'placeholder' => __('Add Description', 'modules-kit'),
                        'rows' => '6'
                    ),
                )
            ),
        )
    ),
    // New Tab Style
    'mkbb_style_tab' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section Content
            'mkbb_style_content' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Alignment
                    'mkbb_content_align' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style',
                            'property' => 'text-align',
                        ),
                    ),
                    'mkbb_content_padding' => array(
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
                            'selector' => '.mkbb-content-style',
                            'property' => 'padding',
                        ),
                    ),
                )
            ),
            // Image Section
            'mkbb_style_image' => array(
                'title' => __('Image', 'modules-kit'),
                'fields' => array(
                    // Width
                    'mkbb_image_width' => array(
                        'type' => 'unit',
                        'label' => __('Width', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => '%',
                        'default' => '35',
                        'placeholder' => '',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style img',
                            'property' => 'width',
                        ),
                    ),
                    // Image Spacing
                    'mkbb_image_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Image Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style img',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
            // Section Title
            'mkbb_style_title' => array(
                'title' => __('Title', 'modules-kit'),
                'fields' => array(
                    // Title Spacing
                    'mkbb_title_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-title-style',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Title Color
                    'mkbb_title_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-title-style',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Title typography
                    'mkbb_title_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-title-style',
                        ),
                    ),
                )
            ),
            // Section Description
            'mkbb_style_description' => array(
                'title' => __('Description', 'modules-kit'),
                'fields' => array(
                    // description color
                    'mkbb_description_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'afafaf',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-description-style',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // description color
                    'mkbb_description_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-description-style',
                        ),
                    ),
                )
            ),
        )
    ),
));
