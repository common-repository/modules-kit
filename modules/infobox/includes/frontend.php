<!--Html of Widget Infobox-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <div class="mkbb-content-style">
        <?php if ($settings->mkbb_select_image_src == '') {
            ?>
            <div class="abcdefg">
                <img src="<?php echo esc_url(MKBB_URL . 'assets/images/default.png'); ?>" class="mkbb-image-style" alt="<?php echo esc_attr($settings->mkbb_image_attribute); ?>" />
            </div>
            <?php
        } else {
            ?>
            <div>
                <img src="<?php echo esc_url($settings->mkbb_select_image_src); ?>" class="mkbb-image-style" alt="<?php echo esc_attr($settings->mkbb_image_attribute); ?>" />
            </div>
        <?php } ?>
        <<?php echo esc_attr($settings->mkbb_html_tag); ?> class="mkbb-title-style"><?php echo esc_attr($settings->mkbb_title); ?></<?php echo esc_attr($settings->mkbb_html_tag); ?>>
        <p class="mkbb-description-style"><?php echo esc_attr($settings->mkbb_description); ?></p>
    </div>
</div>