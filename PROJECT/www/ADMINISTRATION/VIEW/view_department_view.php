<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Slug :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Department->Slug ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Name :
            </div>
            <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Department->Name ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Text :
            </div>
            <div>
                    <textarea class="form-textarea" name="Text" readonly><?php echo htmlspecialchars( $this->Department->Text ); ?></textarea>
            </div>
            <div class="form-field-name">
                Image :
            </div>
            <div>
                <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Department->Image ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Department->Image ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                Number :
            </div>
            <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( $this->Department->Number ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
