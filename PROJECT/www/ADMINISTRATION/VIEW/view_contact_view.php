<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-contact-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="CONTACT"><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Name';
                 $field_title = 'Name';
                 $field_value = $this->Contact->Name;
                require __DIR__ . '/' . 'BLOCK/contact_name_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Name">
                <input-component result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Company';
                 $field_title = 'Company';
                 $field_value = $this->Contact->Company;
                require __DIR__ . '/' . 'BLOCK/contact_company_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Company">
                <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Company">
                <input-component result-class="form-input" result-name="Company" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Email';
                 $field_title = 'Email';
                 $field_value = $this->Contact->Email;
                require __DIR__ . '/' . 'BLOCK/contact_email_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Email">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Email">
                <input-component result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Phone';
                 $field_title = 'Phone';
                 $field_value = $this->Contact->Phone;
                require __DIR__ . '/' . 'BLOCK/contact_phone_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Phone">
                <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Phone">
                <input-component result-class="form-input" result-name="Phone" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Subject';
                 $field_title = 'Subject';
                 $field_value = $this->Contact->Subject;
                require __DIR__ . '/' . 'BLOCK/contact_subject_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Subject">
                <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Subject">
                <input-component result-class="form-input" result-name="Subject" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Message';
                 $field_title = 'Message';
                 $field_value = $this->Contact->Message;
                require __DIR__ . '/' . 'BLOCK/contact_message_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Message">
                <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Message">
                <text-input-component result-class="form-textarea" result-name="Message" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Message ) ); ?>" is-readonly></text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'DateTime';
                 $field_title = 'Date Time';
                 $field_value = $this->Contact->DateTime;
                require __DIR__ . '/' . 'BLOCK/contact_date_time_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DateTime">
                <input-component result-class="form-input" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" is-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/contact' ) ); ?>">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
