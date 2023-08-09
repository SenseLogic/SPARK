<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="remove-page-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/page/remove/<?php echo htmlspecialchars( $this->Page->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="PAGE">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Route">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Route">
                    <input-component class="form-component" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                    <dropdown-component class="form-component" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Number">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Number">
                    <input-component class="form-component" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                    <dropdown-list-component class="form-component" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'en', 'fr', 'de', 'ja' ,'ru' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'English', 'French', 'German', 'Japanese', 'Russian' ] ) ) ); ?>"></dropdown-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                    <dropdown-component class="form-component" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->IsActive ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Title">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Title">
                    <multilingual-input-component class="form-component" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Heading">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Heading">
                    <multilingual-text-input-component class="form-component" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                    <multilingual-text-input-component class="form-component" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Teaser ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                    <image-path-input-component class="form-component" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImagePath ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file"></image-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                    <dropdown-component class="form-component" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageVerticalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                    <dropdown-component class="form-component" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageHorizontalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                    <video-path-input-component class="form-component" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->VideoPath ) ); ?>" is-readonly error-video-path="/static/video/admin/missing_video.mp4" upload-api-url="/admin/upload/video" delete-api-url="/admin/delete/file"></video-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                    <multilingual-input-component class="form-component" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                    <multilingual-text-input-component class="form-component" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaDescription ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubRouteArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Route Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubRouteArray">
                    <input-list-component class="form-component" result-name="MetaSubRouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubRouteArray ) ); ?>" is-readonly></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubTitleArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Title Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubTitleArray">
                    <multilingual-input-list-component class="form-component" result-name="MetaSubTitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubTitleArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubDescriptionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Description Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubDescriptionArray">
                    <multilingual-text-input-list-component class="form-component" result-name="MetaSubDescriptionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubDescriptionArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/page' ) ); ?>">
                </a>
                <a class="justify-self-end form-button-large form-button form-button-large remove-button" onclick="this.SubmitForm()">
                </a>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
