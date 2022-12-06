



















<div class="y-translation-opacity-transition block appearing-block image" style="padding-top: <?php echo  $block->MinimumHeight; ?>; background: url( '<?php echo $block->ImagePath; ?>' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover, url( '<?php echo $block->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover">
    <?php require __DIR__ . '/' . str_replace( '-', '_', $block->ContentSlug ) . '_content.php'; ?>
</div>
