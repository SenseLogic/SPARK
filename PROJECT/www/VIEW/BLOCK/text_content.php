<?php if (  $block->Title !== '' ) { ?>
    <h3 class="block-title">
        <?php echo $this->GetProcessedText( $block->Title ); ?>
    </h3>
<?php } ?>
<?php if ( $block->Text !== '' ) { ?>
    <div class="block-text">
        <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
    </div>
<?php } ?>
