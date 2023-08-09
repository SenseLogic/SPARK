<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-text-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="TEXT"><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Slug';
                 $field_title = 'Slug';
                 $field_value = $this->Text->Slug;
                require __DIR__ . '/' . 'BLOCK/text_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Slug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Slug">
                <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Text->Slug ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Text';
                 $field_title = 'Text';
                 $field_value = $this->Text->Text;
                require __DIR__ . '/' . 'BLOCK/text_text_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Text">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Text">
                <multilingual-text-input-component class="form-component" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Text->Text ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/text' ) ); ?>">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
