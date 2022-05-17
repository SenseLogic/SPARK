<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditBlockSubBlockForm()
    {
        var
            edit_block_sub_block_form,
            it_is_valid_edit_block_sub_block_form,
            block_slug_field,
            sub_block_slug_field,
            number_field;

        edit_block_sub_block_form = document.EditBlockSubBlockForm;
        block_slug_field = edit_block_sub_block_form.BlockSlug;
        sub_block_slug_field = edit_block_sub_block_form.SubBlockSlug;
        number_field = edit_block_sub_block_form.Number;

        block_slug_field.RemoveClass( "form-field-error" );
        sub_block_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_sub_block_form = true;

        if ( block_slug_field.value === "" )
        {
            block_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_sub_block_form = false;
        }

        if ( sub_block_slug_field.value === "" )
        {
            sub_block_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_sub_block_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_sub_block_form = false;
        }

        return it_is_valid_edit_block_sub_block_form;
    }
</script>
<div id="edit-block-sub-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditBlockSubBlockForm" onsubmit="return IsValidEditBlockSubBlockForm()" action="/admin/block-sub-block/edit/<?php echo htmlspecialchars( $this->BlockSubBlock->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="BlockSlug">
                        <?php  $block_array = GetDatabaseBlockArray(); ?>
                        <?php foreach ( $block_array as  $block ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>"<?php if ( $this->BlockSubBlock->BlockSlug === $block->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( $block->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Block Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="SubBlockSlug">
                        <?php  $block_array = GetDatabaseBlockArray(); ?>
                        <?php foreach ( $block_array as  $block ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>"<?php if ( $this->BlockSubBlock->SubBlockSlug === $block->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( $block->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockSubBlock->Number ) ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
