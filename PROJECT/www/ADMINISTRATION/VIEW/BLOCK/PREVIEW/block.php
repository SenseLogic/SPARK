<div class="form-container">
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
    </div>
    <div>
        <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( GetElementPropertyByKey( $this->BlockTypeBySlugMap,  $block->TypeSlug, 'Name', '' ) ) ); ?>" readonly/>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
    </div>
    <div>
        <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>" readonly/>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
    </div>
    <div>
        <div>
            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $block->Text, $language_code ) ); ?></textarea>
            <?php } ?>
        </div>
    </div>
    <div class="form-field-name">
        <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
    </div>
    <div>
        <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $block->ImagePath ); ?>" readonly/>
        <div class="form-upload-container">
            <img class="form-upload-image" src="<?php echo htmlspecialchars( $block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
        </div>
    </div>
</div>
