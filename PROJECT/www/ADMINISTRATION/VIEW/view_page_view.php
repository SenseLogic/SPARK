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
                <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ); ?>"></dropdown-component>
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
                <input-list-component container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" is-readonly value-container-class="form-value-container" value-class="form-input form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                <dropdown-component result-class="form-select" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->IsActive ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetJsonText( [ 0, 1 ] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( [ 'False', 'True' ] ) ); ?>"></dropdown-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Title">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Title">
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Heading">
                <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Heading">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Teaser ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
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
                <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageVerticalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ); ?>"></dropdown-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageHorizontalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ); ?>"></dropdown-component>
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
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaDescription ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
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
