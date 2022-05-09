








<div class="block appearing-block y-translation-opacity-transition text-image-block">
    <div class="block-column block-text-column">
        <div class="block-title">
            <?php echo $this->GetProcessedText(  $block->Title ); ?>
        </div>
        <div class="block-text">
            <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
        </div>
    </div>
    <div class="block-column block-image-column" style="background-image: url( '<?php echo $block->ImagePath; ?>' ), url( '<?php echo $block->ImagePath; ?>.preload.jpg' )">
    </div>
</div>
