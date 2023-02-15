<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-text-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/text/remove/<?php echo htmlspecialchars( $this->Text->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Text->Slug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $this->Text->Text, $language_code ) ); ?></textarea>
                        <?php } ?>
                    </div>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
