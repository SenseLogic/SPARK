<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Route" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div>
                <select class="form-select" name="TypeSlug" readonly>
                    <?php  $page_type_array = $this->PageTypeArray; ?>
                    <?php foreach ( $page_type_array as  $page_type ) { ?>
                        <option value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>"<?php if ( $this->Page->TypeSlug === $page_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page_type->Title ) ); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Number" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="LanguageCodeArray" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
            </div>
            <div>
                <select class="form-select" name="IsActive" readonly>
                    <option value="0"<?php if ( $this->Page->IsActive === '0' ) echo ' selected'; ?>>False</option>
                    <option value="1"<?php if ( $this->Page->IsActive === '1' ) echo ' selected'; ?>>True</option>
                </select>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Title" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Heading" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
            </div>
            <div>
                <textarea-component class_="form-textarea" name_="Teaser" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->Teaser ); ?></textarea-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
            </div>
            <div>
                <select class="form-select" name="ImageVerticalPosition" readonly>
                    <option value="top"<?php if ( $this->Page->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                    <option value="10%"<?php if ( $this->Page->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                    <option value="20%"<?php if ( $this->Page->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                    <option value="30%"<?php if ( $this->Page->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                    <option value="40%"<?php if ( $this->Page->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                    <option value="center"<?php if ( $this->Page->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                    <option value="60%"<?php if ( $this->Page->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                    <option value="70%"<?php if ( $this->Page->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                    <option value="80%"<?php if ( $this->Page->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                    <option value="90%"<?php if ( $this->Page->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                    <option value="bottom"<?php if ( $this->Page->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                </select>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
            </div>
            <div>
                <select class="form-select" name="ImageHorizontalPosition" readonly>
                    <option value="left"<?php if ( $this->Page->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                    <option value="10%"<?php if ( $this->Page->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                    <option value="20%"<?php if ( $this->Page->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                    <option value="30%"<?php if ( $this->Page->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                    <option value="40%"<?php if ( $this->Page->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                    <option value="center"<?php if ( $this->Page->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                    <option value="60%"<?php if ( $this->Page->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                    <option value="70%"<?php if ( $this->Page->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                    <option value="80%"<?php if ( $this->Page->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                    <option value="90%"<?php if ( $this->Page->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                    <option value="right"<?php if ( $this->Page->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                </select>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Page->VideoPath ); ?>" readonly/>
                <div class="form-upload-container">
                    <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Page->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="MetaTitle" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
            </div>
            <div>
                <textarea-component class_="form-textarea" name_="MetaDescription" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->MetaDescription ); ?></textarea-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="MetaImagePath" type="text" value="<?php echo htmlspecialchars( $this->Page->MetaImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Page->MetaImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
