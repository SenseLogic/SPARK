<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="remove-block-category-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/block-category/remove/<?php echo htmlspecialchars( $this->BlockCategory->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="BLOCK_CATEGORY">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Slug ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Name">
                    <input-component class="form-component" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Name ) ); ?>" is-readonly></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/block-category' ) ); ?>">
                </a>
                <a class="justify-self-end form-button-large form-button form-button-large remove-button" onclick="this.SubmitForm()">
                </a>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
