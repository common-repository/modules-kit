<?php

class MKBB_Our_Team extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Our Team', 'modules-kit'),
            'description' => __('An example for coding new modules.', 'modules-kit'),
            'category' => __('Modules Kit', 'modules-kit'),
            'dir' => MKBB_DIR . 'modules/our-team/',
            'url' => MKBB_URL . 'modules/our-team/',
            'icon' => 'icon.svg',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('MKBB_Our_Team', array(
    // Tab General
    'mkbb_general_tab_ot' => array(
        'title' => __('General', 'modules-kit'),
        'sections' => array(
            // Section Image
            'mkbb_content_ot' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Select Image
                    'mkbb_select_image_ot' => array(
                        'type' => 'photo',
                        'label' => __('Select Image', 'modules-kit'),
                        'show_remove' => true,
                    ),
                    // Title
                    'mkbb_name_ot' => array(
                        'type' => 'text',
                        'default' => __('Name', 'modules-kit'),
                        'label' => __('Name', 'modules-kit'),
                    ),
                    // HTML Tag
                    'mkbb_html_tag_ot' => array(
                        'type' => 'select',
                        'label' => __('Name HTML Tag', 'modules-kit'),
                        'default' => 'h5',
                        'options' => array(
                            'h1' => __('H1', 'modules-kit'),
                            'h2' => __('H2', 'modules-kit'),
                            'h3' => __('H3', 'modules-kit'),
                            'h4' => __('H4', 'modules-kit'),
                            'h5' => __('H5', 'modules-kit'),
                            'h6' => __('H6', 'modules-kit'),
                        ),
                    ),
                    // Designation
                    'mkbb_designation_ot' => array(
                        'type' => 'text',
                        'default' => __('Designation', 'modules-kit'),
                        'label' => __('Designation', 'modules-kit'),
                    ),
                    'mkbb_show_post' => array(
                        'type' => 'button-group',
                        'label' => __('Title', 'modules-kit'),
                        'default' => 'mkbb_show_social_share',
                        'options' => array(
                            'mkbb_show_social_share' => __('Show', 'modules-kit'),
                            'mkbb_hide_social_share' => __('Hide', 'modules-kit'),
                        ),
                        'toggle' => array(
                            'mkbb_show_social_share' => array(
                                'fields' => array('mkbb_social_icons'),
                                'sections' => array('general_style_social_share_icon')
                            ),
                        )
                    ),
                    // Social Share
                    'mkbb_social_icons' => array(
                        'type' => 'form',
                        'label' => __('Social Share', 'modules-kit'),
                        'form' => 'mkbb_form_social_share_ot',
                        'preview_text' => 'social_share_type',
                        'multiple' => true
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
            'mkbb_style_content_ot' => array(
                'title' => __('Content', 'modules-kit'),
                'fields' => array(
                    // Alignment
                    'mkbb_content_align_ot' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'modules-kit'),
                        'default' => 'center',
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-ot',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content Padding
                    'mkbb_content_padding_ot' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'modules-kit'),
                        'slider' => true,
                        'responsive' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-ot',
                            'property' => 'padding',
                        ),
                    ),
                    // content bg-Color
                    'mkbb_content_bg_color_ot' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-ot',
                            'property' => 'background-color'),
                        'connections' => array('color'),
                    ),
                )
            ),
            // Image Section
            'mkbb_style_image_ot' => array(
                'title' => __('Image', 'modules-kit'),
                'fields' => array(
                    // Image size
                    'mkbb_image_size_ot' => array(
                        'type' => 'unit',
                        'label' => __('Size', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '200',
                        'preview' => array(
                            'type' => 'css',
                            'rules' => array(
                                array(
                                    'selector' => '.mkbb-image-style-ot',
                                    'property' => 'width',),
                                array(
                                    'selector' => '.mkbb-image-style-ot',
                                    'property' => 'height',),
                            ),
                        ),
                    ),
                    // Image Spacing
                    'mkbb_image_spacing_ot' => array(
                        'type' => 'unit',
                        'label' => __('Image Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '15',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-content-style-ot img',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Image border
                    'mkbb_image_border_ot' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-image-style-ot ',
                        ),
                    ),
                )
            ),
            // Section name
            'mkbb_style_name_ot' => array(
                'title' => __('Name', 'modules-kit'),
                'fields' => array(
                    // name Spacing
                    'mkbb_name_spacing_ot' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '18',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-name-style-ot',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // name Color
                    'mkbb_name_text_color_ot' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-name-style-ot',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // name typography
                    'mkbb_name_typography_ot' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-name-style-ot',
                        ),
                    ),
                )
            ),
            // Section Designation
            'mkbb_style_designation_ot' => array(
                'title' => __('Designation', 'modules-kit'),
                'fields' => array(
                    // Designation Spacing
                    'mkbb_designation_spacing_ot' => array(
                        'type' => 'unit',
                        'responsive' => true,
                        'label' => __('Spacing', 'modules-kit'),
                        'units' => array('px', '%'),
                        'default_unit' => 'px',
                        'default' => '0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-designation-style-ot',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Designation color
                    'mkbb_designation_text_color_ot' => array(
                        'type' => 'color',
                        'label' => __('Color', 'modules-kit'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'default' => 'afafaf',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-designation-style-ot',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // designation color
                    'mkbb_designation_typography_ot' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-designation-style-ot',
                        ),
                    ),
                )
            ),
            // Section Social Share
            'general_style_social_share_icon' => array(
                'title' => 'Social Share',
                'fields' => array(
                    // Icon Size
                    'mkbb_social_icon_line_height' => array(
                        'type' => 'unit',
                        'label' => __('Icon Size', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '20',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot',
                            'property' => 'font-size',
                        ),
                    ),
                    // Icon Spacing
                    'mkbb_social_icon_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing between element', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '0',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot:not(:last-child)',
                            'property' => 'margin-right',
                        ),
                    ),
                    // Icon padding
                    'mkbb_social_icon_padding' => array(
                        'type' => 'unit',
                        'label' => __('Icon Padding', 'modules-kit'),
                        'units' => array('px'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '10',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot',
                            'property' => 'padding',
                        ),
                    ),
                    // icon border
                    'mkbb_social_border_ot' => array(
                        'type' => 'border',
                        'label' => __('Border', 'modules-kit'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot',
                        ),
                    ),
                    // icon color
                    'mkbb_social_icon_color_ot' => array(
                        'type' => 'color',
                        'label' => __('Icon-Color', 'modules-kit'),
                        'default' => 'FFFFFF',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // icon bg-color
                    'mkbb_social_icon_bg_color_ot' => array(
                        'type' => 'color',
                        'label' => __('Background-Color', 'modules-kit'),
                        'default' => 'C2CBD2',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.mkbb-social-link-style-ot',
                            'property' => 'background-color'),
                        'connections' => array('color'),
                    ),
                )
            )
        )
    ),
));


FLBuilder::register_settings_form('mkbb_form_social_share_ot', array(
    'title' => __('Add Social Icon/Image', 'modules-kit'),
    'tabs' => array(
        'form_general' => array(
            'title' => __('General', 'modules-kit'),
            'sections' => array(
                'general' => array(
                    'title' => '',
                    'fields' => array(
                        // Select type
                        'social_share_type' => array(
                            'type' => 'select',
                            'label' => __('Social Share Type', 'modules-kit'),
                            'default' => 'facebook',
                            'options' => array(
                                'facebook' => __('Facebook', 'modules-kit'),
                                'twitter' => __('Twitter', 'modules-kit'),
                                'google' => __('Google', 'modules-kit'),
                                'pinterest' => __('Pinterest', 'modules-kit'),
                                'linkedin' => __('LinkedIn', 'modules-kit'),
                                'digg' => __('Digg', 'modules-kit'),
                                'blogger' => __('Blogger', 'modules-kit'),
                                'reddit' => __('Reddit', 'modules-kit'),
                                'stumbleupon' => __('StumbleUpon', 'modules-kit'),
                                'tumblr' => __('Tumblr', 'modules-kit'),
                                'myspace' => __('Myspace', 'modules-kit'),
                            )
                        ),
                        // Select icon
                        'mkbb_social_icon_ot' => array(
                            'type' => 'icon',
                            'label' => __('Icon', 'modules-kit'),
                            'show_remove' => true
                        ),
                        // Enter link
                        'mkbb_social_link_ot' => array(
                            'type' => 'link',
                            'label' => __('Link', 'modules-kit'),
                            'show_target' => true,
                        ),
                    )
                )
            )
        ),
    )
));
