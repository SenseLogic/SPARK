<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-text-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Text->Slug ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
            </div>
            <div>
                <textarea-component class_="form-textarea" name_="Text" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Text->Text ); ?></textarea-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
