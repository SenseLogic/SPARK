<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-page-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/page/remove/<?php echo htmlspecialchars( $this->Page->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component result-class="form-input" result-name="Slug" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>" result-readonly></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div>
                    <input-component result-class="form-input" result-name="Route" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" result-readonly></input-component>
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
                    <input-component result-class="form-input" result-name="Number" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>" result-readonly></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input-component result-class="form-input" result-name="LanguageCodeArray" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" result-readonly></input-component>
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
                    <multilingual-input-component result-class="form-multilingual-input-container" result-class="form-textarea" result-name="Title" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component result-class="form-multilingual-input-container" result-class="form-textarea" result-name="Heading" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component result-class="form-multilingual-textarea-container" result-class="form-textarea" result-name="Teaser" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->Teaser ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <image-path-input-component container-class="form-upload-container" result-class="form-input" result-name="ImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImagePath ) ); ?>" result-readonly image-class="form-upload-image" image-error-code="this.src='/static/image/admin/missing_image.svg'"></image-path-input-component>
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
                    <video-path-input-component container-class="form-upload-container" result-class="form-input" result-name="VideoPath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->VideoPath ) ); ?>" result-readonly video-class="form-upload-video" video-error-code="this.src='/static/video/admin/missing_video.mp4'"></video-path-input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component result-class="form-multilingual-input-container" result-class="form-textarea" result-name="MetaTitle" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component result-class="form-multilingual-textarea-container" result-class="form-textarea" result-name="MetaDescription" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->MetaDescription ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                </div>
                <div>
                    <image-path-input-component container-class="form-upload-container" result-class="form-input" result-name="MetaImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaImagePath ) ); ?>" result-readonly image-class="form-upload-image" image-error-code="this.src='/static/image/admin/missing_image.svg'"></image-path-input-component>
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
