<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-page-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="PAGE">
            <div class="form-field-name" data-is-column-title data-column-name="Slug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Slug">
                <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Route">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Route">
                <input-component result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                <select class="form-select" name="TypeSlug" readonly>
                    <?php  $page_type_array = $this->PageTypeArray; ?>
                    <?php foreach ( $page_type_array as  $page_type ) { ?>
                        <option value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>"<?php if ( $this->Page->TypeSlug === $page_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page_type->Title ) ); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Number">
                <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Number">
                <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                <input-list-component container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" is-readonly value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                <select class="form-select" name="IsActive" readonly>
                    <option value="0"<?php if ( $this->Page->IsActive === '0' ) echo ' selected'; ?>>False</option>
                    <option value="1"<?php if ( $this->Page->IsActive === '1' ) echo ' selected'; ?>>True</option>
                </select>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Title">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Title">
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Heading">
                <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Heading">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Teaser ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg"></image-path-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
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
            <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
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
            <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->VideoPath ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4"></video-path-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaDescription ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="MetaImagePath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaImagePath">
                <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="MetaImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg"></image-path-input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
