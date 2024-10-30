<?php

class MKBB_Call_to_Action extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Call to action', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/call-to-action/',
            'url' => MKBB_URL . 'modules/call-to-action/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'icon' => 'icon.svg',
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Call_to_Action', array(
    // Tab General
    'mkbb_general_tab' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Content
            'mkbb_content' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Title
                    'mkbb_title' => array(
                        'type' => 'text',
                        'default' => __('This is heading', 'modules-kit'),
                        'label' => __('Title', 'modules-kit'),
                    ),
                    // Title Tag
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
                        'rows' => '6',
                    ),
                    // Button Text
                    'mkbb_button_text' => array(
                        'type' => 'text',
                        'default' => __('Click Here', 'modules-kit'),
                        'label' => __('Button Text', 'modules-kit'),
                    ),
                    // Link
                    'mkbb_link' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                )
            )
        )
    ),
    // Tab Style
    'mkbb_style_tab' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section Box
            'mkbb_box_style' => array(
                'title' => __('Box', 'modules-kit'),
                'fields' => array(
                    // Alignment
                    'mkbb_box_content_align' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content Padding
                    'mkbb_box_content_padding' => array(
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
                            'selector' => '.mkbb-box-style',
                            'property' => 'padding',
                        ),
                    ),
                    // Box color
                    'mkbb_box_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => 'F7F7F7',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style',
                            'property' => 'background-color'
                        ),
                    ),
                ),
            ),
            // Section Title
            'mkbb_content_style' => array(
                'title' => __('Title', 'modules-kit'),
                'fields' => array(
                    // Title Spacing
                    'mkbb_title_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '20',
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
            // Section description
            'mkbb_style_description' => array(
                'title' => __('Description', 'modules-kit'),
                'fields' => array(
                    // Sapcing
                    'mkbb_description_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-description-style',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // description color
                    'mkbb_description_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
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
            // Section Button
            'mkbb_button_style' => array(
                'title' => __('Button', 'modules-kit'),
                'fields' => array(
                    // Button Text color			
                    'mkbb_button_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '55595C',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-cta',
                            'property' => 'color'
                        ),
                    ),
                    // Button color
                    'mkbb_button_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-cta',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-space',
                        ),
                    ),
                    // Button padding
                    'mkbb_button_padding' => array(
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
                            'selector' => '.mkbb-button-style-cta',
                            'property' => 'padding',
                        ),
                    ),
                    // Border
                    'mkbb_button_border' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-cta',
                        ),
                    ),
                )
            ),
        )
    ),
));
