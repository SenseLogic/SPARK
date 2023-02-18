<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-block-type-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/block-type/remove/<?php echo htmlspecialchars( $this->BlockType->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->BlockType->Slug ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Name" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->BlockType->Name ) ); ?>" readonly_></input-component>
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
