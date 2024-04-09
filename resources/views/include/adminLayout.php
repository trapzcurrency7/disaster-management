<?php echo View::make('include/sidebar'); ?>

<div class="home-section">
    <?= isset($template)? View::make($template):'' ?>
</div>