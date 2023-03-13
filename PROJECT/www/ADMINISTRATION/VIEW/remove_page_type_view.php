<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="remove-page-type-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/page-type/remove/<?php echo htmlspecialchars( $this->PageType->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="PAGE_TYPE">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Name">
                    <input-component result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Name ) ); ?>" is-readonly></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/page-type' ) ); ?>">
                </a>
                <a class="justify-self-end form-button-large form-button form-button-large remove-button" type="this.SubmitForm()">
                </a>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
