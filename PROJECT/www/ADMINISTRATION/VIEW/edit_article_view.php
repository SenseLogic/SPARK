<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditArticleForm()
    {
        var
            edit_article_form,
            it_is_valid_edit_article_form,
            slug_field,
            name_field,
            text_field,
            image_path_field,
            video_path_field,
            next_article_id_field,
            priority_field,
            is_active_field;

        edit_article_form = document.EditArticleForm;
        slug_field = edit_article_form.Slug;
        name_field = edit_article_form.Name;
        text_field = edit_article_form.Text;
        image_path_field = edit_article_form.ImagePath;
        video_path_field = edit_article_form.VideoPath;
        next_article_id_field = edit_article_form.NextArticleId;
        priority_field = edit_article_form.Priority;
        is_active_field = edit_article_form.IsActive;

        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );
        next_article_id_field.RemoveClass( "form-field-error" );
        priority_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_article_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( !IsNaturalText( next_article_id_field.value ) )
        {
            next_article_id_field.AddClass( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( priority_field.value === "" )
        {
            priority_field.AddClass( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        return it_is_valid_edit_article_form;
    }
</script>
<div id="edit-article-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditArticleForm" onsubmit="return IsValidEditArticleForm()" action="/admin/article/edit/<?php echo htmlspecialchars( $this->Article->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Slug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Name ) ); ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo htmlspecialchars( $this->Article->Text ); ?></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Next Article Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="NextArticleId">
                        <?php  $article_array = GetDatabaseArticleArray(); ?>
                        <?php foreach ( $article_array as  $article ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $article->Id ) ); ?>"<?php if ( $this->Article->NextArticleId === $article->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( $article->Name ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Priority' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="Priority">
                        <option value="low"<?php if ( $this->Article->Priority === 'low' ) echo ' selected'; ?>>Low importance</option>
                        <option value="high"<?php if ( $this->Article->Priority === 'high' ) echo ' selected'; ?>>High importance</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $this->Article->IsActive === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $this->Article->IsActive === '1' ) echo ' selected'; ?>>True</option>
                    </select>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
