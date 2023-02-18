<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-block-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/block/remove/<?php echo htmlspecialchars( $this->Block->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Block->Slug ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="PageId" readonly>
                        <?php  $page_array = $this->PageArray; ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $this->Block->PageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page->Title ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="CategorySlug" readonly>
                        <?php  $block_category_array = $this->BlockCategoryArray; ?>
                        <?php foreach ( $block_category_array as  $block_category ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>"<?php if ( $this->Block->CategorySlug === $block_category->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_category->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ContentSlug" readonly>
                        <?php  $block_content_array = $this->BlockContentArray; ?>
                        <?php foreach ( $block_content_array as  $block_content ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>"<?php if ( $this->Block->ContentSlug === $block_content->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_content->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="TypeSlug" readonly>
                        <?php  $block_type_array = $this->BlockTypeArray; ?>
                        <?php foreach ( $block_type_array as  $block_type ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>"<?php if ( $this->Block->TypeSlug === $block_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_type->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Number" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Block->Number ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="LanguageCodeArray" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Block->LanguageCodeArray ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="MinimumHeight" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Block->MinimumHeight ) ); ?>" readonly_></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component class_="form-input" name_="Title" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Block->Title ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component class_="form-textarea" name_="Text" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Block->Text ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" readonly/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageVerticalPosition" readonly>
                        <option value="top"<?php if ( $this->Block->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                        <option value="10%"<?php if ( $this->Block->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Block->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Block->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Block->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Block->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Block->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Block->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Block->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Block->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="bottom"<?php if ( $this->Block->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageHorizontalPosition" readonly>
                        <option value="left"<?php if ( $this->Block->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="10%"<?php if ( $this->Block->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Block->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Block->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Block->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Block->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Block->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Block->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Block->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Block->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="right"<?php if ( $this->Block->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageSide" readonly>
                        <option value="left"<?php if ( $this->Block->ImageSide === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="right"<?php if ( $this->Block->ImageSide === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Block->VideoPath ); ?>" readonly/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Block->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                    </div>
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
