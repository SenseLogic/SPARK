<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-text-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Slug :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Text->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Text :
            </div>
            <div>
                    <input class="form-input" name="Text" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Text->Text ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
