<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-contact-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Company" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Phone" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Subject" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
            </div>
            <div>
                <text-input-component result-class="form-textarea" result-name="Message" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Message ) ); ?>" result-readonly></text-input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>" result-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
