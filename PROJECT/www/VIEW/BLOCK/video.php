



















<div id="<?php echo  $block->Id; ?>" class="y-translation-opacity-transition block appearing-block video" style="padding-top: <?php echo $block->MinimumHeight; ?>; background: url( '<?php echo $block->VideoPath; ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->VideoHorizontalPosition; ?> <?php echo $block->VideoVerticalPosition; ?> / cover, url( '<?php echo GetPreloadVideoPath( $block->VideoPath ); ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->VideoHorizontalPosition; ?> <?php echo $block->VideoVerticalPosition; ?> / cover">
    <?php require __DIR__ . '/' . str_replace( '-', '_', $block->ContentSlug ) . '_content.php'; ?>
</div>
