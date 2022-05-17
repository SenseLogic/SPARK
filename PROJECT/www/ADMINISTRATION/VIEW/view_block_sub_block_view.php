<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-block-sub-block-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="BlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->BlockSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Block Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="SubBlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->SubBlockSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->Number ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
