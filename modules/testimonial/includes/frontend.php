<!--HTML of Widget Testimonial--> 

<div class="fl-node-<?php echo esc_attr($id); ?>">

    <div class="mkbb-box-style-testimonial">
        <p class="mkbb-content-style-testimonial"><?php echo esc_attr($settings->mkbb_content); ?></p>

        <a href="<?php echo esc_url($settings->mkbb_link); ?>" target="<?php echo esc_attr($settings->mkbb_link_target); ?>" class="mkbb_link_testimonail">
            <?php if ($settings->mkbb_select_image == '') {
                ?>
                <img src="<?php echo esc_url(MKBB_URL . 'assets/images/default.png'); ?>" class="mkbb-image-style-testimonial" />
                <?php
            } else {
                ?>
                <img src = "<?php echo esc_url($settings->mkbb_select_image_src) ?>" class="mkbb-image-style-testimonial" />
            <?php } ?>
            <div class="mkbb-link-testimonial">
                <div class="mkbb-name-style-testimonial"><?php echo esc_attr($settings->mkbb_name); ?></div>
                <div class="mkbb-designation-style-testimonial"><?php echo esc_attr($settings->mkbb_designation); ?></div>
            </div>
        </a>
    </div>
</div>