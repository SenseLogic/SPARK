<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-block-sub-block-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/block-sub-block/remove/<?php echo htmlspecialchars( $this->BlockSubBlock->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Block Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="BlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->BlockSlug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Sub Block Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="SubBlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->SubBlockSlug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->Number ) ); ?>" readonly/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
