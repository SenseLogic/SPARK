<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-language-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/language/remove/<?php echo htmlspecialchars( $this->Language->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Code' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Code" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Language->Code ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Language->Number ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="form-translation form-input" name="Text" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->Language->Text, $language_code ) ) ); ?>" readonly/>
                        <?php } ?>
                    </div>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
