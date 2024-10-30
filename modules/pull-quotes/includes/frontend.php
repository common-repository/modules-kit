<!--HTML of Widget Pull Quotes-->

<div class="fl-node-<?php echo esc_attr($id); ?>">

    <div class="mkbb-box-style-pullquotes">
        <?php
        if ($settings->mkbb_skin_pq == 'quotation') {
            ?><span class="mkbb-quotation-style-pullquotes"><i class="<?php echo esc_attr($settings->mkbb_icon_pq); ?>" ></i></span><?php
        }
        ?>
        <p class="mkbb-content-style-pullquotes"><?php echo esc_attr($settings->mkbb_content_pq); ?></p>
        <div class="mkbb-author-style-pullquotes"><?php echo esc_attr($settings->mkbb_name_pq); ?></div>
    </div>
</div>