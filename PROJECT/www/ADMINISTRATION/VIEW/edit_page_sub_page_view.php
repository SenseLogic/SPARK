<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditPageSubPageForm()
    {
        var
            edit_page_sub_page_form,
            it_is_valid_edit_page_sub_page_form,
            page_id_field,
            sub_page_id_field,
            number_field;

        edit_page_sub_page_form = document.EditPageSubPageForm;
        page_id_field = edit_page_sub_page_form.PageId;
        sub_page_id_field = edit_page_sub_page_form.SubPageId;
        number_field = edit_page_sub_page_form.Number;

        page_id_field.RemoveClass( "form-field-error" );
        sub_page_id_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_page_sub_page_form = true;

        if ( page_id_field.value === "" )
        {
            page_id_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_sub_page_form = false;
        }

        if ( sub_page_id_field.value === "" )
        {
            sub_page_id_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_sub_page_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_sub_page_form = false;
        }

        return it_is_valid_edit_page_sub_page_form;
    }
</script>
<div id="edit-page-sub-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditPageSubPageForm" onsubmit="return IsValidEditPageSubPageForm()" action="/admin/page-sub-page/edit/<?php echo htmlspecialchars( $this->PageSubPage->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="PageId">
                        <?php  $page_array = GetPageArray(); ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $this->PageSubPage->PageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( $page->Id ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Page Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="SubPageId">
                        <?php  $page_array = GetPageArray(); ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $this->PageSubPage->SubPageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( $page->Id ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->Number ) ); ?>"/>
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
