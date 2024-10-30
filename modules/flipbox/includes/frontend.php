<!--HTML of Module Flipbox-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <div class="mkbb-flip-box">
        <div class="mkbb-flip-box-inner">
            <div class="mkbb-flip-box-front">
                <div class="mkbb-front-style-flpb"><?php if ($settings->mkbb_graphic_element_flpb == 'image') { ?>
                    <div>
                        <img src="<?php echo esc_url($settings->mkbb_imagefield_flpb_src); ?>" class="mkbb-front-image-style-flpb" />
                    </div><?php
                    }
                    if ($settings->mkbb_graphic_element_flpb == 'icon') {
                        ?>
                        <span class="mkbb-front-icon-style-flpb">
                            <i class="<?php echo esc_attr($settings->mkbb_iconfield_flpb); ?>"></i>
                        </span><?php }
                    ?>
                    <div class="mkbb-front-title-style-flpb"><?php echo esc_attr($settings->mkbb_front_title_flpb); ?></div>
                    <div class="mkbb-front-description-style-flpb"><?php echo esc_attr($settings->mkbb_front_description_flpb); ?></div>
                </div>
            </div>

            <div class="mkbb-flip-box-back">
                <div class="mkbb-back-style-flpb">
                    <div class="mkbb-back-title-style-flpb"><?php echo esc_attr($settings->mkbb_back_title_flpb); ?> </div>
                    <div class="mkbb-back-description-style-flpb"><?php echo esc_attr($settings->mkbb_back_description_flpb); ?></div>
                    <div>
                        <a href="<?php echo esc_url($settings->mkbb_back_button_link_flpb); ?>" target="<?php echo esc_attr($settings->mkbb_back_button_link_flpb_target); ?>">
                            <span class="mkbb-back-button-style-flpb"><?php echo esc_attr($settings->mkbb_back_button_text_flpb); ?></span>
                        </a>
                    </div>
                </div>	
            </div>
        </div>	
    </div>
</div>