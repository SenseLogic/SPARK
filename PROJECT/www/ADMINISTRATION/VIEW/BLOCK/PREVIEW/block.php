<div class="form-container">
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
    </div>
    <div class="form-field-value">
        <dropdown-component class="form-component" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText(  $block->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
    </div>
    <div class="form-field-value">
        <input-component class="form-component" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>" is-readonly></input-component>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
    </div>
    <div class="form-field-value">
        <multilingual-text-input-component class="form-component" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $block->Text ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
    </div>
    <div class="form-field-value">
        <multilingual-image-path-input-component class="form-component" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImagePath ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-image-path-input-component>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
    </div>
    <div class="form-field-value">
        <multilingual-video-path-input-component class="form-component" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $block->VideoPath ) ); ?>" is-readonly error-video-path="/static/video/admin/missing_video.mp4" upload-api-url="/admin/upload/video" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-video-path-input-component>
    </div>
</div>
