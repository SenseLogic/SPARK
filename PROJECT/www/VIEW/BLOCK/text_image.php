








<div class="y-translation-opacity-transition block appearing-block text-image">
    <div class="block-column block-text-column">
        <div class="block-title">
            <?php echo $this->GetProcessedText(  $block->Title ); ?>
        </div>
        <div class="block-text">
            <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
        </div>
    </div>
    <div class="block-column block-image-column" style="background: url( '<?php echo $block->ImagePath; ?>' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover, url( '<?php echo $block->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $block->ImageHorizontalPosition; ?> <?php echo $block->ImageVerticalPosition; ?> / cover">
    </div>
</div>
