<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-contact-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Name" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Company" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Email" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Phone" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Subject" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
            </div>
            <div>
                <textarea-component result-class="form-textarea" result-name="Message" result-readonly><?php echo htmlspecialchars( $this->Contact->Message ); ?></textarea-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="DateTime" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" result-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
