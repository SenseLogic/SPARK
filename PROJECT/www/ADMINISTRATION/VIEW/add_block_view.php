<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddBlockForm()
    {
        var
            add_block_form,
            it_is_valid_add_block_form,
            slug_field,
            article_slug_field,
            number_field,
            title_field,
            text_field,
            image_path_field,
            video_path_field;

        it_is_valid_add_block_form = true;

        add_block_form = document.AddBlockForm;
        slug_field = add_block_form.Slug;
        article_slug_field = add_block_form.ArticleSlug;
        number_field = add_block_form.Number;
        title_field = add_block_form.Title;
        text_field = add_block_form.Text;
        image_path_field = add_block_form.ImagePath;
        video_path_field = add_block_form.VideoPath;

        if ( slug_field.value !== "" )
        {
            slug_field.RemoveClass( "form-field-error" );
        }
        else
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( article_slug_field.value !== "" )
        {
            article_slug_field.RemoveClass( "form-field-error" );
        }
        else
        {
            article_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( number_field.value !== "" )
        {
            number_field.RemoveClass( "form-field-error" );
        }
        else
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        return it_is_valid_add_block_form;
    }
</script>
<div id="add-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddBlockForm" onsubmit="return IsValidAddBlockForm()" action="/admin/block/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Article Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ArticleSlug" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Title' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Title" type="text" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetText( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetText( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
