<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-contact-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/contact/remove/<?php echo htmlspecialchars( $this->Contact->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Name" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Company" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Email" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Phone" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Subject" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
                </div>
                <div>
                    <textarea-component class_="form-textarea" name_="Message" readonly_><?php echo htmlspecialchars( $this->Contact->Message ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="DateTime" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" readonly_></input-component>
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
