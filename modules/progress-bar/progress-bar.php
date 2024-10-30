<?php

class MKBB_Progress_Bar extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Progress Bar', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/progress-bar/',
            'url' => MKBB_URL . 'modules/progress-bar/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Progress_Bar', array(
    // Tab General
    'mkbb_general_tab_pb' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Image
            'mkbb_progress_bar_pb' => array(
                'title' => __('Progress Bar', 'modules-kit'),
                'fields' => array(
                    // Title
                    'mkbb_title_pb' => array(
                        'type' => 'text',
                        'default' => __('My Skill', 'modules-kit'),
                        'label' => __('My Skill', 'modules-kit'),
                    ),
                    // Percentage
                    'mkbb_percentage_pb' => array(
                        'type' => 'unit',
                        'label' => __('Percentage', 'modules-kit'),
                        'description' => '%',
                        'default' => '50',
                        'slider' => true,
                    ),
                    // Display Percentage
                    'mkbb_show_percentage_pb' => array(
                        'type' => 'button-group',
                        'label' => __('Display Percentage', 'modules-kit'),
                        'default' => 'mkbb_show_per',
                        'options' => array(
                            'mkbb_show_per' => __('Show', 'modules-kit'),
                            'mkbb_hide_per' => __('Hide', 'modules-kit'),
                        ),
                    ),
                    // Inner Text
                    'mkbb_inner_text_pb' => array(
                        'type' => 'text',
                        'label' => __('Inner Text', 'modules-kit'),
                        'default' => __('Web Designer', 'modules-kit'),
                    ),
                )
            )
        ),
    ),
    // New Tab Style
    'mkbb_style_tab' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section Content
            'mkbb_style_content_pb' => array(
                'title' => __('Progress Bar', 'modules-kit'),
                'fields' => array(
                    // progress Color
                    'mkbb_progress_color_pb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-progress-bar',
                            'property' => 'background-color'),
                        'connections' => array('color'),
                    ),
                    // progress bg-Color
                    'mkbb_progress_bg_color_pb' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-progress-pb',
                            'property' => 'background-color'),
                        'connections' => array('color'),
                    ),
                    // height
                    'mkbb_height_pb' => array(
                        'type' => 'unit',
                        'label' => __('Height', 'modules-kit'),
                        'units' => array('px'),
                        'slider' => true,
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-progress-pb',
                                    'property' => 'line-height',),
                                array(
                                    'selector' => '.mkbb-progress-pb',
                                    'property' => 'height',),
                            ),
                        ),
                    ),
                    // Border Radius
                    'mkbb_border_radius_pb' => array(
                        'type' => 'unit',
                        'label' => __('Border Radius', 'modules-kit'),
                        'units' => array('px'),
                        'slider' => true,
                        'responsive' => true,
                        'default_unit' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-progress-pb',
                            'property' => 'border-radius',
                        ),
                    ),
                )
            ),
            // Inner Text Section
            'mkbb_inner_text_style_pb' => array(
                'title' => __('Inner Text', 'modules-kit'),
                'fields' => array(
                    // Inner Text Color
                    'mkbb_inner_text_color_pb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-percent-pb',
                                    'property' => 'color',),
                                array(
                                    'selector' => '.mkbb-inner-text-pb',
                                    'property' => 'color',),
                            ),
                        ),
                        'connections' => array('color'),
                    ),
                    // Inner Text typography
                    'mkbb_inner_text_typography_pb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-percent-pb',
                                    'property' => 'color',),
                                array(
                                    'selector' => '.mkbb-inner-text-pb',
                                    'property' => 'color',),
                            ),
                        ),
                    ),
                )
            ),
            // Title Style
            'mkbb_sstyle_title_pb' => array(
                'title' => __('Title Style', 'modules-kit'),
                'fields' => array(
                    // Title color
                    'mkbb_title_color_pb' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-title-pb',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // name typography
                    'mkbb_title_typography_pb' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-title-pb',
                        ),
                    ),
                )
            ),
        )
    )
));
