

























































<div id="<?php echo  $block->Id; ?>" class="y-translation-opacity-transition block appearing-block text-and-video video-side-<?php echo $block->VideoSide; ?>">
    <div class="text-and-video-text">
        <?php require __DIR__ . '/' . str_replace( '-', '_', $block->ContentSlug ) . '_content.php'; ?>
    </div>
    <div class="text-and-video-video" style="padding-top: <?php echo $block->MinimumHeight; ?>; background: url( '<?php echo $block->VideoPath; ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->VideoHorizontalPosition; ?> <?php echo $block->VideoVerticalPosition; ?> / cover, url( '<?php echo GetPreloadVideoPath( $block->VideoPath ); ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->VideoHorizontalPosition; ?> <?php echo $block->VideoVerticalPosition; ?> / cover">
    </div>
</div>
