<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddArticleForm()
    {
        var
            add_article_form,
            it_is_valid_add_article_form,
            slug_field,
            name_field,
            text_field,
            image_path_field,
            video_path_field,
            next_article_id_field,
            block_slug_array_field,
            priority_field,
            is_active_field;

        it_is_valid_add_article_form = true;

        add_article_form = document.AddArticleForm;

        if ( slug_field.value !== "" )
        {
            slug_field.RemoveClass( "form-field-error" );
        }
        else
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( name_field.value !== "" )
        {
            name_field.RemoveClass( "form-field-error" );
        }
        else
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( next_article_id_field.value !== "" )
        {
            next_article_id_field.RemoveClass( "form-field-error" );
        }
        else
        {
            next_article_id_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( priority_field.value !== "" )
        {
            priority_field.RemoveClass( "form-field-error" );
        }
        else
        {
            priority_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( is_active_field.value !== "" )
        {
            is_active_field.RemoveClass( "form-field-error" );
        }
        else
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        return it_is_valid_add_article_form;
    }
</script>
<div id="add-article-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddArticleForm" onsubmit="return IsValidAddArticleForm()" action="/admin/article/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Name" type="text" hidden/>
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
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Next Article Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="NextArticleId">
                        <?php  $article_array = GetDatabaseArticleArray(); ?>
                        <?php foreach ( $article_array as  $article ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $article->Id ) ); ?>"><?php echo htmlspecialchars( $article->Name ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php  $field_mode = 'add'; ?>
                <?php  $field_name = 'BlockSlugArray'; ?>
                <?php  $field_title = 'Block Slug Array'; ?>
                <?php  $field_value = '[]'; ?>
                <?php require __DIR__ . '/' . 'BLOCK/article_block_slug_array_field.php'; ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Priority' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="Priority">
                        <option value="low">Low importance</option>
                        <option value="high" selected>High importance</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0">False</option>
                        <option value="1" selected>True</option>
                    </select>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
    <?php  $object_mode = 'add'; ?>
    <?php  $object_value = Article; ?>
    <?php require __DIR__ . '/' . 'BLOCK/article_object.php'; ?>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
