<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-type-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Title ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
