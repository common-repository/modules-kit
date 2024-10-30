<!--Html of Widget Progress Bar-->

<div class="fl-node-<?php echo esc_attr($id); ?>">
    <div class="mkbb-box-style-pb"><?php if ($settings->mkbb_title_pb !== '') { ?>
        <div class="mkbb-title-pb"><?php echo esc_attr($settings->mkbb_title_pb); ?></div><?php }
?>
        <div class="mkbb-progress-pb">
            <div class="mkbb-progress-bar">
                <span class="mkbb-inner-text-pb"><?php echo esc_attr($settings->mkbb_inner_text_pb); ?></span>
                <?php if ($settings->mkbb_show_percentage_pb !== 'mkbb_hide_per') { ?>
                    <span class="mkbb-percent-pb"><?php echo esc_attr($settings->mkbb_percentage_pb); ?>%</span>
                <?php } ?>
            </div>
        </div>
    </div>
</div>