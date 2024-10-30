<!--Html of module dual-button-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <div class="mkbb-dual-button-box">
        <div class="mkbb-dual-button">
            <div class="mkbb-button-horizontal mkbb-button-one">
                <a href="<?php echo esc_url($settings->mkbb_link); ?>" target="<?php echo esc_attr($settings->mkbb_link_target) ?>" class="mkbb-button-one-a"> 
                    <span class="mkbb-button-one-text"><?php echo esc_attr($settings->mkbb_button_text); ?></span>
                </a>
            </div>
            <?php if ($settings->mkbb_connect_element == 'icon') { ?>
                <span class="mkbb-button-connector mkbb-button-connector-icon"><i class="<?php echo esc_attr($settings->mkbb_connector_icon); ?>"></i></span>
            <?php } ?>
            <?php if ($settings->mkbb_connect_element == 'text') { ?>
                <span class="mkbb-button-connector mkbb-button-connector-text"><?php echo esc_attr($settings->mkbb_connector_text); ?></span>
            <?php } ?>
            <div class="mkbb-button-horizontal mkbb-button-two"> 
                <a href="<?php echo esc_url($settings->mkbb_link_2); ?>" target="<?php echo esc_attr($settings->mkbb_link_2_target) ?>" class="mkbb-button-two-a">
                    <span class="mkbb-button-two-text"><?php echo esc_attr($settings->mkbb_button_text_2); ?></span>
                </a>
            </div>
        </div>
    </div>	
</div>