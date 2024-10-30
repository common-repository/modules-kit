<?php

class MKBB_Pricing_Table extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Pricing Table', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/pricing-table/',
            'url' => MKBB_URL . 'modules/pricing-table/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
        ));
    }

}

FLBuilder::register_module('MKBB_Pricing_Table', array(
    // Tab Content
    'mkbb_content_tab_pt' => array(
        'title' => __('Content', 'modules-kit'),
        'sections' => array(
            // Section Header
            'mkbb_header_pt' => array(
                'title' => __('Header', 'modules-kit'),
                'fields' => array(
                    // Title
                    'mkbb_title_pt' => array(
                        'type' => 'text',
                        'default' => __('Enter Your Title', 'modules-kit'),
                        'label' => __('Title', 'modules-kit'),
                    ),
                    // Description
                    'mkbb_description_pt' => array(
                        'type' => 'text',
                        'default' => __('Enter your Description', 'modules-kit'),
                        'label' => __('Description', 'modules-kit'),
                    ),
                )
            ),
            // Section Pricing
            'mkbb_pricing_pt' => array(
                'title' => __('Pricing', 'modules-kit'),
                'fields' => array(
                    // Currency Symbol
                    'mkbb_currency_symbol_pt' => array(
                        'type' => 'select',
                        'label' => __('Currency Symbol', 'modules-kit'),
                        'default' => '$',
                        'options' => array(
                            '' => __('None', 'modules-kit'),
                            '$' => __('$ Dollar', 'modules-kit'),
                            '€' => __('€ Euro', 'modules-kit'),
                            '฿' => __('฿ Baht', 'modules-kit'),
                            '₣' => __('₣ Franc', 'modules-kit'),
                            'ƒ' => __('ƒ Guilder', 'modules-kit'),
                            'kr' => __('kr Krona', 'modules-kit'),
                            '₤' => __('₤ Lira', 'modules-kit'),
                            '₧' => __('₧ Peseta', 'modules-kit'),
                            '₱' => __('₱ Peso', 'modules-kit'),
                            '£' => __('£ Pound Sterling', 'modules-kit'),
                            'R$' => __('R$ Real', 'modules-kit'),
                            '₽' => __('₽ Ruble', 'modules-kit'),
                            '₨' => __('₨ Rupee', 'modules-kit'),
                            '₹' => __('₹ Rupee (Indian)', 'modules-kit'),
                            '₪' => __('₪ Shekel', 'modules-kit'),
                            '¥' => __('¥ Yen/Yuan', 'modules-kit'),
                            '₩' => __('₩ Won', 'modules-kit'),
                            'custom' => __('Custom', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'custom' => array(
                                'fields' => array('mkbb_custom_symbol_pt'),
                            ),
                        )
                    ),
                    // Custom Symbol
                    'mkbb_custom_symbol_pt' => array(
                        'type' => 'text',
                        'label' => __('Custom Symbol', 'modules-kit'),
                    ),
                    // Prices
                    'mkbb_price_pt' => array(
                        'type' => 'text',
                        'default' => '24.08',
                        'size' => '6',
                        'label' => __('Price', 'modules-kit'),
                    ),
                    // Show & Hide Button
                    'mkbb_sale_pt' => array(
                        'type' => 'button-group',
                        'label' => __('Sale', 'modules-kit'),
                        'default' => 'mkbb_hide_sale',
                        'options' => array(
                            'mkbb_show_sale' => __('Show', 'modules-kit'),
                            'mkbb_hide_sale' => __('Hide', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'mkbb_show_sale' => array(
                                'fields' => array('mkbb_original_price', 'mkbb_original_price_color_pt', 'mkbb_original_price_typography_pt'),
                            ),
                        )
                    ),
                    // Original Price
                    'mkbb_original_price' => array(
                        'type' => 'text',
                        'default' => '30.00',
                        'size' => '6',
                        'label' => __('Original Price', 'modules-kit'),
                    ),
                    // Original Period
                    'mkbb_period_pt' => array(
                        'type' => 'text',
                        'default' => __('Monthly', 'modules-kit'),
                        'label' => __('Period', 'modules-kit'),
                    ),
                )
            ),
            // Section Features
            'mkbb_features_pt' => array(
                'title' => __('Features', 'modules-kit'),
                'fields' => array(
                    'mkbb_feature_pt' => array(
                        'type' => 'form',
                        'label' => __('List Item', 'modules-kit'),
                        'form' => 'mkbb_form_list_items',
                        'preview_text' => 'mkbb_list_item_pt',
                        'multiple' => true
                    ),
                )
            ),
            // Section Footer
            'mkbb_footer_pt' => array(
                'title' => __('Footer', 'modules-kit'),
                'fields' => array(
                    // Button Text
                    'mkbb_button_text_pt' => array(
                        'type' => 'text',
                        'default' => __('Click Here', 'modules-kit'),
                        'label' => __('Button Text', 'modules-kit'),
                    ),
                    // Enter link
                    'mkbb_button_link_pt' => array(
                        'type' => 'link',
                        'label' => __('Link', 'modules-kit'),
                        'show_target' => true,
                    ),
                )
            ),
            // Section Ribbon
            'mkbb_ribbon' => array(
                'title' => __('Ribbon', 'modules-kit'),
                'fields' => array(
                    // Show & Hide Ribbon
                    'mkbb_ribbon_pt' => array(
                        'type' => 'button-group',
                        'label' => __('Show Ribbon', 'modules-kit'),
                        'default' => 'mkbb_show_ribbon',
                        'options' => array(
                            'mkbb_show_ribbon' => __('Yes', 'modules-kit'),
                            'mkbb_hide_ribbon' => __('No', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'mkbb_show_ribbon' => array(
                                'fields' => array('mkbb_ribbon_text_pt', 'mkbb_ribbon_position_pt', 'mkbb_pricing_table_ribbon_styles_pt'),
                            ),
                        )
                    ),
                    // Ribbon Text
                    'mkbb_ribbon_text_pt' => array(
                        'type' => 'text',
                        'default' => __('Popular', 'modules-kit'),
                        'label' => __('Title', 'modules-kit'),
                    ),
                    // Ribbon Position
                    'mkbb_ribbon_position_pt' => array(
                        'type' => 'button-group',
                        'label' => __('Position', 'modules-kit'),
                        'default' => 'mkbb_ribbon_right',
                        'options' => array(
                            'mkbb_ribbon_left' => __('|<-', 'modules-kit'),
                            'mkbb_ribbon_right' => __('->|', 'modules-kit'),
                        ),
                    ),
                )
            ),
        )
    ),
    //New Tab Style
    'mkbb_style_tab_pt' => array(
        'title' => __('Style', 'modules-kit'),
        'sections' => array(
            // Section Border
            'mkbb_box_style_pt' => array(
                'title' => __('Box', 'modules-kit'),
                'fields' => array(
                    // Border
                    'mkbb_box_border_pt' => array(
                        'type' => 'border',
                        'label' => __('Box Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-box-style-pt',
                        ),
                    ),
                )
            ),
            // Section Header
            'mkbb_style_header_pt' => array(
                'title' => __('Header', 'modules-kit'),
                'fields' => array(
                    // Header background Color
                    'mkbb_header_background_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => '000000',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-header-style-pt',
                            'property' => 'background-color',
                        ),
                    ),
                    // Header padding
                    'mkbb_header_padding_pt' => array(
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
                            'selector' => '.mkbb-header-style-pt',
                            'property' => 'padding',
                        ),
                    ),
                    // Title Color
                    'mkbb_header_title_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Title Color', 'modules-kit'),
                        'default' => 'FFFFFF',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-header-title-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Title typography
                    'mkbb_header_title_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Title Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-header-title-style-pt',
                        ),
                    ),
                    // Description Color
                    'mkbb_header_description_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Description Color', 'modules-kit'),
                        'default' => 'FFFFFF',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-header-description-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Description typography
                    'mkbb_header_description_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Description Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-header-description-style-pt',
                        ),
                    ),
                )
            ),
            // Section Pricing
            'mkbb_style_pricing_pt' => array(
                'title' => __('Pricing', 'modules-kit'),
                'fields' => array(
                    // Pricing background Color
                    'mkbb_pricing_background_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => 'F7F7F7',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-pricing-style-pt',
                            'property' => 'background-color',
                        ),
                    ),
                    // Pricing Padding
                    'mkbb_pricing_padding_pt' => array(
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
                            'selector' => '.mkbb-pricing-style-pt',
                            'property' => 'padding',
                        ),
                    ),
                    // Pricing Color
                    'mkbb_pricing_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Price Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-price-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Pricing typography
                    'mkbb_header_price_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Price Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-price-style-pt',
                        ),
                    ),
                    // Currency Size
                    'mkbb_currency_size_pt' => array(
                        'type' => 'unit',
                        'label' => __('Currency Size', 'modules-kit'),
                        'units' => array('px'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-currency-style-pt',
                            'property' => 'font-size',
                        ),
                    ),
                    // Currency Position
                    'mkbb_currency_position_pt' => array(
                        'type' => 'button-group',
                        'label' => __('Currency Position', 'modules-kit'),
                        'default' => 'mkbb_currency_right',
                        'options' => array(
                            'mkbb_currency_left' => __('|<-', 'modules-kit'),
                            'mkbb_currency_right' => __('->|', 'modules-kit'),
                        ),
                    ),
                    // Spacing 
                    'mkbb_period_spacing_pt' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-period-style-pt',
                            'property' => 'margin-top',
                        ),
                    ),
                )
            ),
            // Section Original Price & Period
            'mkbb_style_original_price_period_pt' => array(
                'title' => __('Original Price & Period', 'modules-kit'),
                'fields' => array(
                    // Original Price Color
                    'mkbb_original_price_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Original Price Color', 'modules-kit'),
                        'default' => '999999',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-original-price-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Original Price typography
                    'mkbb_original_price_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Original Price Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-original-price-style-pt',
                        ),
                    ),
                    // Period Color
                    'mkbb_period_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Period Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-period-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Period typography
                    'mkbb_period_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Period Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-period-style-pt',
                        ),
                    ),
                    // Period Position
                    'mkbb_period_position_pt' => array(
                        'type' => 'select',
                        'label' => __('Period Position', 'modules-kit'),
                        'default' => 'mkbb_period_Below',
                        'options' => array(
                            'mkbb_period_Below' => __('Below', 'modules-kit'),
                            'mkbb_period_Beside' => __('Beside', 'modules-kit'),
                        ),
                    ),
                )
            ),
            // Section Features
            'mkbb_style_features_pt' => array(
                'title' => __('Features', 'modules-kit'),
                'fields' => array(
                    // Feature  Color
                    'mkbb_features_background_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'EFF2F2',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-features-style-pt',
                            'property' => 'background-color',
                        ),
                    ),
                    // Features padding
                    'mkbb_features_padding_pt' => array(
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
                            'selector' => '.mkbb-features-style-pt',
                            'property' => 'padding',
                        ),
                    ),
                    // Features Color
                    'mkbb_features_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-features-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Features typography
                    'mkbb_features_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Feature Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-features-style-pt',
                        ),
                    ),
                    // Divider
                    'mkbb_divider_pt' => array(
                        'type' => 'button-group',
                        'label' => __('Divider', 'modules-kit'),
                        'default' => 'mkbb_divider_show',
                        'options' => array(
                            'mkbb_divider_show' => __('Show', 'modules-kit'),
                            'mkbb_divider_hide' => __('Hide', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'mkbb_divider_show' => array(
                                'fields' => array('mkbb_divider_border_pt', 'mkbb_divider_color_pt', 'mkbb_divider_weight_pt'),
                            ),
                        ),
                    ),
                    // Divider Style
                    'mkbb_divider_border_pt' => array(
                        'type' => 'select',
                        'label' => __('Style', 'modules-kit'),
                        'default' => 'solid',
                        'options' => array(
                            'solid' => __('Solid', 'modules-kit'),
                            'double' => __('Double', 'modules-kit'),
                            'dotted' => __('Dotted', 'modules-kit'),
                            'dashed' => __('Dashed', 'modules-kit'),
                        ),
                    ),
                    // Divider Color
                    'mkbb_divider_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Divider Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-divider-style-pt',
                            'property' => 'border-top-color',
                        ),
                    ),
                    // Divider Weight 
                    'mkbb_divider_weight_pt' => array(
                        'type' => 'unit',
                        'label' => __('Weight', 'modules-kit'),
                        'units' => array('px'),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-divider-style-pt:not(:first-child)',
                            'property' => 'border-top-width',
                        ),
                    ),
                    // Divider gap
                    'mkbb_divider_gap_pt' => array(
                        'type' => 'unit',
                        'label' => __('Gap', 'modules-kit'),
                        'units' => array('px'),
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-divider-style-pt:not(:first-child)',
                                    'property' => 'padding-top',),
                                array(
                                    'selector' => '.mkbb-divider-style-pt:not(:last-child)',
                                    'property' => 'margin-bottom',),
                            ),
                        ),
                    ),
                )
            ),
            // Section Button
            'mkbb_footer_style_pt' => array(
                'title' => __('Footer', 'modules-kit'),
                'fields' => array(
                    // Background color
                    'mkbb_footer_background_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'default' => '000000',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-pt-css',
                            'property' => 'background-color'
                        ),
                    ),
                    // Footer padding
                    'mkbb_footer_padding_pt' => array(
                        'type' => 'dimension',
                        'label' => __('Footer Padding', 'modules-kit'),
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
                            'selector' => '.mkbb-button-style-pt-css',
                            'property' => 'padding',
                        ),
                    ),
                    // Button Text color			
                    'mkbb_button_text_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => '000000',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-pt',
                            'property' => 'color'
                        ),
                    ),
                    // Button color
                    'mkbb_button_background_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Button Background Color', 'modules-kit'),
                        'default' => 'FFFFFF',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-pt',
                            'property' => 'background-color'
                        ),
                    ),
                    // Button typography			
                    'mkbb_button_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-pt',
                        ),
                    ),
                    // Button padding
                    'mkbb_button_padding_pt' => array(
                        'type' => 'dimension',
                        'label' => __('Text Padding', 'modules-kit'),
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
                            'selector' => '.mkbb-button-style-pt',
                            'property' => 'padding',
                        ),
                    ),
                    // Button Border
                    'mkbb_button_border_pt' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-button-style-pt',
                        ),
                    ),
                )
            ),
            // Section Ribbbon
            'mkbb_ribbon_style_pt' => array(
                'title' => __('Ribbon', 'modules-kit'),
                'fields' => array(
                    // ribbon bg color
                    'mkbb_ribbon_bg_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Background color', 'modules-kit'),
                        'default' => 'FFFFFF',
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-ribbon-text-style-pt',
                            'property' => 'background-color',
                        ),
                    ),
                    // Ribbon Distance 
                    'mkbb_ribbon_distance_pt' => array(
                        'type' => 'unit',
                        'label' => __('Distance', 'modules-kit'),
                        'responsive' => true,
                        'units' => array('px'),
                        'default' => '35',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-ribbon-style-pt',
                            'property' => 'margin-top',
                        ),
                    ),
                    // ribbon color
                    'mkbb_ribbon_text_color_pt' => array(
                        'type' => 'color',
                        'label' => __('Text color', 'modules-kit'),
                        'default' => '000000',
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-ribbon-text-style-pt',
                            'property' => 'color',
                        ),
                    ),
                    // Ribbon typography
                    'mkbb_ribbon_typography_pt' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-ribbon-text-style-pt',
                        ),
                    ),
                    // Border
                    'mkbb_ribbon_border_pt' => array(
                        'type' => 'border',
                        'label' => __('Ribbon Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-ribbon-style-pt',
                        ),
                    ),
                )
            ),
        )
    )
));

FLBuilder::register_settings_form('mkbb_form_list_items', array(
    'title' => __('Add List Items', 'modules-kit'),
    'tabs' => array(
        'form_general' => array(
            'title' => __('General', 'modules-kit'),
            'sections' => array(
                'general' => array(
                    'title' => '',
                    'fields' => array(
                        // Original Period
                        'mkbb_list_item_pt' => array(
                            'type' => 'text',
                            'default' => __('List Item', 'modules-kit'),
                            'label' => __('Text', 'modules-kit'),
                        ),
                        // Select icon
                        'mkbb_list_item_icon_pt' => array(
                            'type' => 'icon',
                            'label' => __('Icon', 'modules-kit'),
                            'show_remove' => true
                        ),
                    )
                )
            )
        ),
    )
));
