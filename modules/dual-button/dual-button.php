<?php

class MKBB_Dual_Button extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Dual Button', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/dual-button/',
            'url' => MKBB_URL . 'modules/dual-button/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'icon' => 'icon.svg',
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Dual_Button', array(
    // Tab General
    'mkbb_general_tab' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Button 1
            'mkbb_button_1' => array(
                'title' => __('Button 1', 'modules-kit'),
                'fields' => array(
                    // Button Text
                    'mkbb_button_text' => array(
                        'type' => 'text',
                        'default' => __('Buttton One', 'modules-kit'),
                        'label' => __('Button Text', 'modules-kit'),
                    ),
                    // Link
                    'mkbb_link' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                )
            ),
            // Section Button 2
            'mkbb_button_2' => array(
                'title' => __('Button 2', 'modules-kit'),
                'fields' => array(
                    // Button Text
                    'mkbb_button_text_2' => array(
                        'type' => 'text',
                        'default' => __('Buttton Two', 'modules-kit'),
                        'label' => __('Button Text', 'modules-kit'),
                    ),
                    // Link
                    'mkbb_link_2' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                )
            ),
            // Section Connector
            'mkbb_button_connector' => array(
                'title' => __('Connector', 'modules-kit'),
                'fields' => array(
                    // Connect Element
                    'mkbb_connect_element' => array(
                        'type' => 'select',
                        'label' => __('Connect Element', 'modules-kit'),
                        'default' => 'text',
                        'options' => array(
                            'text' => __('Text', 'modules-kit'),
                            'icon' => __('Icon', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'text' => array(
                                'fields' => array('mkbb_connector_text', 'mkbb_connect_text_color', 'mkbb_button_connector_typography'),
                            ),
                            'icon' => array(
                                'fields' => array('mkbb_connector_icon', 'mkbb_connect_icon_color', 'mkbb_connect_icon_size'),
                            )
                        )
                    ),
                    // Icon Field
                    'mkbb_connector_icon' => array(
                        'type' => 'icon',
                        'label' => __('Select Icon', 'modules-kit'),
                        'show_remove' => true
                    ),
                    // Text field
                    'mkbb_connector_text' => array(
                        'type' => 'text',
                        'default' => __('OR', 'modules-kit'),
                        'label' => __('Text', 'modules-kit'),
                    ),
                )
            )
        )
    ),
    // Tab Style
    'mkbb_style_tab' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section Button 
            'mkbb_button_style' => array(
                'title' => __('Button', 'modules-kit'),
                'fields' => array(
                    // button height
                    'mkbb_button_height' => array(
                        'type' => 'unit',
                        'label' => __('button height', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '50',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-dual-button',
                            'property' => 'min-height',
                        ),
                    ),
                    // Button Border
                    'mkbb_button_border' => array(
                        'type' => 'border',
                        'label' => __('Button Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-dual-button',
                        ),
                    ),
                ),
            ),
            // Section Button One
            'mkbb_button_one_style' => array(
                'title' => __('Button One', 'modules-kit'),
                'fields' => array(
                    // Button Text color			
                    'mkbb_button_one_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'ffffff',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-one-a',
                            'property' => 'color'
                        ),
                    ),
                    // Button Text hover color			
                    'mkbb_button_one_text_hover' => array(
                        'type' => 'color',
                        'label' => __('Text Hover Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'ffffff',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-one-a:hover',
                            'property' => 'color'
                        ),
                    ),
                    // Button color
                    'mkbb_button_one_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '686868',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-one-a',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button background color
                    'mkbb_button_one_background_hover' => array(
                        'type' => 'color',
                        'label' => __('Background Hover Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '1A6AF0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-one-a:hover',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_one_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-one-text',
                        ),
                    ),
                ),
            ),
            // Section Button two
            'mkbb_button_two_style' => array(
                'title' => __('Button Two', 'modules-kit'),
                'fields' => array(
                    // Button Text color			
                    'mkbb_button_two_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'ffffff',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-two-a',
                            'property' => 'color'
                        ),
                    ),
                    // Button Text hover color			
                    'mkbb_button_two_text_hover' => array(
                        'type' => 'color',
                        'label' => __('Text Hover Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'ffffff',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-two-a:hover',
                            'property' => 'color'
                        ),
                    ),
                    // Button color
                    'mkbb_button_two_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '0a0a0a',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-two-a',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button background color
                    'mkbb_button_two_background_hover' => array(
                        'type' => 'color',
                        'label' => __('Background Hover Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '1A6AF0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-two-a:hover',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_two_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-two-text',
                        ),
                    ),
                ),
            ),
            // Section Connector
            'mkbb_button_connector' => array(
                'title' => __('Connector', 'modules-kit'),
                'fields' => array(
                    // connector size
                    'mkbb_button_connector_size' => array(
                        'type' => 'unit',
                        'label' => __('Size', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '36',
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-button-connector',
                                    'property' => 'height'
                                ),
                                array(
                                    'selector' => '.mkbb-button-connector',
                                    'property' => 'width'
                                ),
                                array(
                                    'selector' => '.mkbb-button-connector',
                                    'property' => 'line-height'
                                ),
                            )
                        ),
                    ),
                    // connector radius
                    'mkbb_button_connector_radius' => array(
                        'type' => 'unit',
                        'label' => __('Radius', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '50',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector',
                            'property' => 'border-radius'
                        ),
                    ),
                    // Button connector text color			
                    'mkbb_connect_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '1A6AF0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector-text',
                            'property' => 'color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_connector_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector-text',
                        ),
                    ),
                    // connector icon size
                    'mkbb_connect_icon_size' => array(
                        'type' => 'unit',
                        'label' => __('Icon Size', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector-icon',
                            'property' => 'font-size'
                        ),
                    ),
                    // Button connector icon color			
                    'mkbb_connect_icon_color' => array(
                        'type' => 'color',
                        'label' => __('Icon Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '1A6AF0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector-icon i',
                            'property' => 'color'
                        ),
                    ),
                    // Button background color			
                    'mkbb_connect_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'ffffff',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-connector',
                            'property' => 'background-color'
                        ),
                    ),
                ),
            ),
        )
    ),
));
