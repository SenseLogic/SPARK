<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-block-category-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/block-category/remove/<?php echo htmlspecialchars( $this->BlockCategory->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Slug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Name ) ); ?>" readonly/>
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
