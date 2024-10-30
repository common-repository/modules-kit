<!--Html of module call-to-action-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <div class="mkbb-box-style">
        <<?php echo esc_attr($settings->mkbb_html_tag); ?> class="mkbb-title-style"><?php echo esc_attr($settings->mkbb_title); ?></<?php echo esc_attr($settings->mkbb_html_tag); ?>>
        <p class="mkbb-description-style"><?php echo esc_attr($settings->mkbb_description); ?></p>
        <div class="mkbb-button-space">
            <a href="<?php echo esc_url($settings->mkbb_link); ?>" target="<?php echo esc_attr($settings->mkbb_link_target) ?>" class="mkbb-button-style-cta-a">
                <span class="mkbb-button-style-cta"><?php echo esc_attr($settings->mkbb_button_text); ?></span>
            </a>
        </div>
        </p> 
    </div>	
</div>