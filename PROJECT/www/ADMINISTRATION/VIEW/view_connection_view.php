<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-connection-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="CONNECTION">
            <div class="form-field-name" data-is-column-title data-column-name="BrowserAddress">
                <?php echo htmlspecialchars( GetTextBySlug( 'Browser Address' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="BrowserAddress">
                <input-component class="form-component" result-name="BrowserAddress" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->BrowserAddress ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                <input-component class="form-component" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->DateTime ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="IsFailed">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Failed' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="IsFailed">
                <dropdown-component class="form-component" result-name="IsFailed" result-value="<?php echo htmlspecialchars( GetValueText( $this->Connection->IsFailed ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
            </div>
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
