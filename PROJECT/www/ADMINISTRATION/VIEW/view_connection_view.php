<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-connection-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="CONNECTION"><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'BrowserAddress';
                 $field_title = 'Browser Address';
                 $field_value = $this->Connection->BrowserAddress;
                require __DIR__ . '/' . 'BLOCK/connection_browser_address_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="BrowserAddress">
                <?php echo htmlspecialchars( GetTextBySlug( 'Browser Address' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="BrowserAddress">
                <input-component class="form-component" result-name="BrowserAddress" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->BrowserAddress ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'DateTime';
                 $field_title = 'Date Time';
                 $field_value = $this->Connection->DateTime;
                require __DIR__ . '/' . 'BLOCK/connection_date_time_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                <input-component class="form-component" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->DateTime ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'IsFailed';
                 $field_title = 'Is Failed';
                 $field_value = $this->Connection->IsFailed;
                require __DIR__ . '/' . 'BLOCK/connection_is_failed_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="IsFailed">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Failed' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="IsFailed">
                <dropdown-component class="form-component" result-name="IsFailed" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->IsFailed ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'AttemptCount';
                 $field_title = 'Attempt Count';
                 $field_value = $this->Connection->AttemptCount;
                require __DIR__ . '/' . 'BLOCK/connection_attempt_count_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="AttemptCount">
                <?php echo htmlspecialchars( GetTextBySlug( 'Attempt Count' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="AttemptCount">
                <input-component class="form-component" result-name="AttemptCount" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->AttemptCount ) ); ?>" is-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/connection' ) ); ?>">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
