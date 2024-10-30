<!--HTML of Widget Pricing Table-->

<div class="fl-node-<?php echo esc_attr($id); ?>">

    <?php
    $links = $settings->mkbb_feature_pt;

    if ($settings->mkbb_currency_symbol_pt == 'custom') {
        $currency = $settings->mkbb_custom_symbol_pt;
    } else {
        $currency = $settings->mkbb_currency_symbol_pt;
    }
    ?>
    <div class="mkbb-box-style-pt">

        <div class="mkbb-header-style-pt">
            <div class="mkbb-header-title-style-pt"><?php echo esc_attr($settings->mkbb_title_pt); ?></div>
            <div class="mkbb-header-description-style-pt"><?php echo esc_attr($settings->mkbb_description_pt); ?></div>
        </div>

        <div class="mkbb-pricing-style-pt"><?php if ($settings->mkbb_sale_pt == 'mkbb_show_sale') { ?><span class="mkbb-original-price-style-pt"><?php echo esc_attr($currency) . esc_attr($settings->mkbb_original_price); ?></span><?php
            }

            if ($settings->mkbb_currency_position_pt == 'mkbb_currency_left') {
                ?><span class="mkbb-price-style-pt mkbb-currency-style-pt"><sup><?php echo esc_attr($currency); ?></sup></span><?php } ?>

            <span class="mkbb-price-style-pt"><?php echo esc_attr($settings->mkbb_price_pt); ?></span><?php if ($settings->mkbb_currency_position_pt == 'mkbb_currency_right') { ?><span class="mkbb-price-style-pt mkbb-currency-style-pt"><sup><?php echo esc_attr($currency); ?></sup></span><?php
            }

            if ($settings->mkbb_period_position_pt == 'mkbb_period_Beside') {
                ?><span class="mkbb-period-style-pt"><?php echo esc_attr($settings->mkbb_period_pt); ?></span><?php
                }

                if ($settings->mkbb_period_position_pt == 'mkbb_period_Below') {
                    ?><div class="mkbb-period-style-pt"><?php echo esc_attr($settings->mkbb_period_pt); ?></div><?php } ?>	

        </div>  

        <ul class="mkbb-features-style-pt"><?php foreach ($links as $link) { ?>
                <li class="mkbb-divider-style-pt">
                    <div>
                        <i class="<?php echo esc_attr($link->mkbb_list_item_icon_pt); ?>"></i>
                        <span><?php echo esc_attr($link->mkbb_list_item_pt); ?></span>
                    </div>
                </li><?php }
                ?>
        </ul>

        <div class="mkbb-button-style-pt-css">
            <a href="<?php echo esc_url($settings->mkbb_button_link_pt); ?>" target="<?php echo esc_attr($settings->mkbb_button_link_pt_target) ?>">
                <span class="mkbb-button-style-pt"><?php echo esc_attr($settings->mkbb_button_text_pt); ?></span>
            </a>
        </div>
        <?php
        if ($settings->mkbb_ribbon_pt == 'mkbb_show_ribbon') {
            if ($settings->mkbb_ribbon_position_pt == 'mkbb_ribbon_right') {
                ?>
                <div class="mkbb-ribbon-style-right-div-pt"><?php
        }
        if ($settings->mkbb_ribbon_position_pt == 'mkbb_ribbon_left') {
            ?>
                    <div class="mkbb-ribbon-style-left-div-pt"><?php }
            ?>
                    <div class="mkbb-ribbon-style-pt mkbb-ribbon-text-style-pt "><?php echo esc_attr($settings->mkbb_ribbon_text_pt); ?></div>
                </div><?php }
        ?>

        </div>
    </div>
