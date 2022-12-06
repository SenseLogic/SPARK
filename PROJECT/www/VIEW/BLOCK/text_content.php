<?php if (  $block->Title !== '' ) { ?>
    <div class="block-title">
        <?php echo $this->GetProcessedText( $block->Title ); ?>
    </div>
<?php } ?>
<?php if ( $block->Text !== '' ) { ?>
    <div class="block-text">
        <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
    </div>
<?php } ?>
