






























































<div class="y-translation-opacity-transition block appearing-block text-and-image image-side-<?php echo  $block->ImageSide; ?>">
    <div class="text-and-image-text">
        <div class="block-title">
            <?php echo $this->GetProcessedText( $block->Title ); ?>
        </div>
        <div class="block-text">
            <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
        </div>
    </div>
    <div class="text-and-image-image" style="padding-top: <?php echo $block->MinimumHeight; ?>; background: url( '<?php echo $block->ImagePath; ?>' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover, url( '<?php echo $block->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover">
    </div>
</div>
