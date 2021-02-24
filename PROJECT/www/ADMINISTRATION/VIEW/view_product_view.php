<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Slug :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Product->Slug ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Name :
            </div>
            <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Product->Name ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Text :
            </div>
            <div>
                    <textarea class="form-textarea" name="Text" readonly><?php echo htmlspecialchars( $this->Product->Text ); ?></textarea>
            </div>
            <div class="form-field-name">
                Image :
            </div>
            <div>
                <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Product->Image ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Product->Image ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                Video :
            </div>
            <div>
                <input class="form-input" name="Video" type="text" value="<?php echo htmlspecialchars( $this->Product->Video ); ?>" readonly/>
                <div class="form-upload-container">
                    <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Product->Video ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                </div>
            </div>
            <div class="form-field-name">
                Department Slug :
            </div>
            <div>
                    <input class="form-input" name="DepartmentSlug" type="text" value="<?php echo htmlspecialchars( $this->Product->DepartmentSlug ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
