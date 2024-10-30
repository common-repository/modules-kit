<?php

class MKBB_Pull_quotes extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Pull Quotes', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/pull-quotes/',
            'url' => MKBB_URL . 'modules/pull-quotes/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Pull_quotes', array(
    // Tab General
    'mkbb_general_tab_pq' => array(
        'title' => __('Content', 'modules-kit'),
        'sections' => array(
            // Section Pull Quotes
            'mkbb_pullquotes' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Skin
                    'mkbb_skin_pq' => array(
                        'type' => 'select',
                        'label' => __('Skin', 'modules-kit'),
                        'default' => 'border',
                        'options' => array(
                            'border' => __('Border', 'modules-kit'),
                            'quotation' => __('Quotation', 'modules-kit'),
                            'clean' => __('Clean', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'border' => array(
                                'sections' => array('mkbb_border_style_pq'),
                            ),
                            'quotation' => array(
                                'fields' => array('mkbb_icon_pq'),
                                'default' => '',
                                'sections' => array('mkbb_quotation_style_pq'),
                            )
                        )
                    ),
                    // Select Icon
                    'mkbb_icon_pq' => array(
                        'type' => 'icon',
                        'label' => __('Select Icon', 'modules-kit'),
                        'show_remove' => true
                    ),
                    // Content
                    'mkbb_content_pq' => array(
                        'type' => 'textarea',
                        'label' => __('Content', 'modules-kit'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'modules-kit'),
                        'placeholder' => __('Add Description', 'modules-kit'),
                        'rows' => '7s',
                    ),
                    // Author
                    'mkbb_name_pq' => array(
                        'type' => 'text',
                        'default' => __('Author name', 'modules-kit'),
                        'label' => __('Author', 'modules-kit'),
                    ),
                )
            )
        )
    ),
    // Tab Style
    'mkbb_style_tab_pq' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section box
            'mkbb_style_box_pq' => array(
                'title' => __('Box', 'modules-kit'),
                'fields' => array(
                    // Content alignment
                    'mkbb_box_content_align_pq' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'responsive' => true,
                        'default' => 'left',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content padding
                    'mkbb_box_content_padding_pq' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'modules-kit'),
                        'default' => '10',
                        'responsive' => true,
                        'default_unit' => 'px',
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
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'padding',
                        ),
                    ),
                    // Background color
                    'mkbb_box_background_color_pq' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => 'F5F5F5',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'background-color'
                        ),
                    ),
                )
            ),
            // Section content
            'mkbb_content_style_pq' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Text Color
                    'mkbb_content_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'default' => 'rgb(122, 122, 122)',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-pullquotes',
                            'property' => 'color'
                        ),
                    ),
                    // content typography
                    'mkbb_content_typography_pq' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-pullquotes',
                        ),
                    ),
                    // Spacing
                    'mkbb_content_spacing_pq' => array(
                        'type' => 'unit',
                        'label' => __('Gap', 'modules-kit'),
                        'responsive' => true,
                        'units' => array('px', '%'),
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-pullquotes',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
            'mkbb_author_style_pq' => array(
                'title' => __('Author', 'modules-kit'),
                'fields' => array(
                    // Text Color
                    'mkbb_author_text_color_pq' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'default' => 'rgb(122, 122, 122)',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-author-style-pullquotes',
                            'property' => 'color'
                        ),
                    ),
                    // typography
                    'mkbb_author_typography_pq' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-author-style-pullquotes',
                        ),
                    ),
                )
            ),
            'mkbb_border_style_pq' => array(
                'title' => __('border', 'modules-kit'),
                'fields' => array(
                    // Text Color
                    'mkbb_border_color_pq' => array(
                        'type' => 'color',
                        'label' => __('border Color', 'modules-kit'),
                        'default' => 'black',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'border-color'
                        ),
                    ),
                    // Border Width
                    'mkbb_border_width_pq' => array(
                        'type' => 'unit',
                        'label' => __('Width', 'modules-kit'),
                        'responsive' => true,
                        'units' => array('px'),
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'border-left-width',
                        ),
                    ),
                    // Boreder gap
                    'mkbb_border_gap_pq' => array(
                        'type' => 'unit',
                        'label' => __('Gap', 'modules-kit'),
                        'responsive' => true,
                        'units' => array('px', '%'),
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pullquotes',
                            'property' => 'padding-left',
                        ),
                    ),
                )
            ),
            'mkbb_quotation_style_pq' => array(
                'title' => __('quotation', 'modules-kit'),
                'fields' => array(
                    // Text Color
                    'mkbb_quotation_color_pq' => array(
                        'type' => 'color',
                        'label' => __('Quotation Color', 'modules-kit'),
                        'default' => '7A7A7A',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-quotation-style-pullquotes',
                            'property' => 'color'
                        ),
                    ),
                    // Quote Size
                    'mkbb_quotation_width_pq' => array(
                        'type' => 'unit',
                        'label' => __('Size', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default' => '60',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-quotation-style-pullquotes i',
                            'property' => 'font-size',
                        ),
                    ),
                    // Quote Spacing
                    'mkbb_quotation_gap_pq' => array(
                        'type' => 'unit',
                        'label' => __('Gap', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-quotation-style-pullquotes i',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            )
        )
    )
));
