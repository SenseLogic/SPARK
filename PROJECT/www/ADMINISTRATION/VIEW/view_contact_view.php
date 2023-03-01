<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-contact-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="CONTACT">
            <div class="form-field-name" data-is-column-title data-column-name="Name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Name">
                <input-component result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Company">
                <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Company">
                <input-component result-class="form-input" result-name="Company" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Email">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Email">
                <input-component result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Phone">
                <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Phone">
                <input-component result-class="form-input" result-name="Phone" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Subject">
                <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Subject">
                <input-component result-class="form-input" result-name="Subject" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Message">
                <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Message">
                <text-input-component result-class="form-textarea" result-name="Message" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Message ) ); ?>" is-readonly></text-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                <input-component result-class="form-input" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" is-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
