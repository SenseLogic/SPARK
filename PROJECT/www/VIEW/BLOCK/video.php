



































<div id="<?php echo  $block->Id; ?>" class="y-translation-opacity-transition block appearing-block video" style="padding-top: <?php echo $block->MinimumHeight; ?>; background: url( '<?php echo $block->ImagePath; ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover, url( '<?php echo GetPreloadImagePath( $block->ImagePath ); ?>?v=<?php echo VersionTimestamp; ?>' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover">
    <?php if ( $block->VideoPath !== '' ) { ?>
        <video class="autoplay-video video-video" data-video-path="<?php echo $block->VideoPath; ?>|<?php echo $block->VideoPath; ?>.medium.mp4@max-width:65em|<?php echo $block->VideoPath; ?>.small.mp4@max-width:35em" muted playsinline loop poster="<?php echo $block->ImagePath; ?>.small.jpg?v=<?php echo VersionTimestamp; ?>"></video>
    <?php } ?>
</div>
