

















<div class="y-translation-opacity-transition block block-text-column appearing-block text" style="min-height: <?php echo  $block->MinimumHeight; ?>">
    <div class="block-title">
        <?php echo $this->GetProcessedText( $block->Title ); ?>
    </div>
    <div class="block-text">
        <?php echo $this->GetProcessedMultilineText( $block->Text ); ?>
    </div>
</div>
