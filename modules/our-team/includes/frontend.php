<!--HTML of Widget Our Team-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <?php $icons = $settings->mkbb_social_icons; ?>
    <div class="mkbb-content-style-ot">
        <?php 
        if ($settings->mkbb_select_image_ot == '') { ?>
            <img src="<?php echo esc_url(MKBB_URL . 'assets/images/default.png'); ?>" class="mkbb-image-style-ot" />
            <?php
        } else {
            ?>
            <img src="<?php echo esc_url($settings->mkbb_select_image_ot_src); ?>" class="mkbb-image-style-ot" />
        <?php } ?>
        <<?php echo esc_attr($settings->mkbb_html_tag_ot); ?> class="mkbb-name-style-ot"><?php echo esc_attr($settings->mkbb_name_ot); ?></<?php echo esc_attr($settings->mkbb_html_tag_ot); ?>>
        <div class="mkbb-designation-style-ot"><?php echo esc_attr($settings->mkbb_designation_ot); ?></div>
        <?php if ($settings->mkbb_show_post === 'mkbb_show_social_share') {
            ?>
            <div>
                <?php
                foreach ($icons as $icon) { ?>
                    <a href="<?php echo esc_attr($icon->mkbb_social_link_ot); ?> " class="mkbb-social-link-style-ot" target="<?php echo esc_attr($icon->mkbb_social_link_ot_target); ?>" ><i class="<?php echo esc_attr($icon->mkbb_social_icon_ot); ?>"></i></span></a>		
                    <?php
                }
                ?>
            </div>	
            <?php
        }
        ?>
    </div>
</div>