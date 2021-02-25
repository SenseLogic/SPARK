<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Name :
            </div>
            <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Contact->Name ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Company :
            </div>
            <div>
                    <input class="form-input" name="Company" type="text" value="<?php echo htmlspecialchars( $this->Contact->Company ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Email :
            </div>
            <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( $this->Contact->Email ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Phone :
            </div>
            <div>
                    <input class="form-input" name="Phone" type="text" value="<?php echo htmlspecialchars( $this->Contact->Phone ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Subject :
            </div>
            <div>
                    <input class="form-input" name="Subject" type="text" value="<?php echo htmlspecialchars( $this->Contact->Subject ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Message :
            </div>
            <div>
                    <textarea class="form-textarea" name="Message" readonly><?php echo htmlspecialchars( $this->Contact->Message ); ?></textarea>
            </div>
            <div class="form-field-name">
                Date Time :
            </div>
            <div>
                    <input class="form-input" name="DateTime" type="text" value="<?php echo htmlspecialchars( $this->Contact->DateTime ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
