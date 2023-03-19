<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="remove-contact-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/contact/remove/<?php echo htmlspecialchars( $this->Contact->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="CONTACT">
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Name">
                    <input-component class="form-component" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Company">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Company">
                    <input-component class="form-component" result-name="Company" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Email">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Email">
                    <input-component class="form-component" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Phone">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Phone">
                    <input-component class="form-component" result-name="Phone" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Subject">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Subject">
                    <input-component class="form-component" result-name="Subject" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Message">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Message">
                    <text-input-component class="form-component" result-name="Message" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Message ) ); ?>" is-readonly></text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                    <input-component class="form-component" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" is-readonly></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/contact' ) ); ?>">
                </a>
                <a class="justify-self-end form-button-large form-button form-button-large remove-button" onclick="this.SubmitForm()">
                </a>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
