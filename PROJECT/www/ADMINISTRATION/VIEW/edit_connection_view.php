<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidEditConnectionForm()
    {
        var
            edit_connection_form,
            it_is_valid_edit_connection_form,
            browser_address_field,
            date_time_field,
            is_failed_field,
            attempt_count_field;

        edit_connection_form = document.EditConnectionForm;
        browser_address_field = edit_connection_form.BrowserAddress;
        date_time_field = edit_connection_form.DateTime;
        is_failed_field = edit_connection_form.IsFailed;
        attempt_count_field = edit_connection_form.AttemptCount;

        browser_address_field.RemoveClass( "form-field-error" );
        date_time_field.RemoveClass( "form-field-error" );
        is_failed_field.RemoveClass( "form-field-error" );
        attempt_count_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_connection_form = true;

        if ( browser_address_field.value === "" )
        {
            browser_address_field.AddClass( "form-field-error" );

            it_is_valid_edit_connection_form = false;
        }

        if ( date_time_field.value === "" )
        {
            date_time_field.AddClass( "form-field-error" );

            it_is_valid_edit_connection_form = false;
        }

        if ( !IsBooleanText( is_failed_field.value )
             && !IsBinaryText( is_failed_field.value ) )
        {
            is_failed_field.AddClass( "form-field-error" );

            it_is_valid_edit_connection_form = false;
        }

        if ( !IsIntegerText( attempt_count_field.value ) )
        {
            attempt_count_field.AddClass( "form-field-error" );

            it_is_valid_edit_connection_form = false;
        }

        return it_is_valid_edit_connection_form;
    }
</script>
<div id="edit-connection-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditConnectionForm" onsubmit="return IsValidEditConnectionForm()" action="/admin/connection/edit/<?php echo htmlspecialchars( $this->Connection->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="CONNECTION">
                <div class="form-field-name" data-is-column-title data-column-name="BrowserAddress">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Browser Address' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="BrowserAddress">
                    <input-component class="form-component" result-name="BrowserAddress" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->BrowserAddress ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                    <input-component class="form-component" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->DateTime ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="IsFailed">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Failed' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="IsFailed">
                    <dropdown-component class="form-component" result-name="IsFailed" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->IsFailed ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="AttemptCount">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Attempt Count' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="AttemptCount">
                    <input-component class="form-component" result-name="AttemptCount" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->AttemptCount ) ); ?>"></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/connection' ) ); ?>">
                </a>
                <a class="justify-self-end form-button form-button-large apply-button" onclick="this.SubmitForm()">
                </a>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
