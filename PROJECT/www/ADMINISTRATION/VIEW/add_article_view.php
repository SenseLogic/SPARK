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
            priority_field,
            is_active_field;

        add_article_form = document.AddArticleForm;
        slug_field = add_article_form.Slug;
        name_field = add_article_form.Name;
        text_field = add_article_form.Text;
        image_path_field = add_article_form.ImagePath;
        video_path_field = add_article_form.VideoPath;
        next_article_id_field = add_article_form.NextArticleId;
        priority_field = add_article_form.Priority;
        is_active_field = add_article_form.IsActive;

        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );
        next_article_id_field.RemoveClass( "form-field-error" );
        priority_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );

        it_is_valid_add_article_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( !IsNaturalText( next_article_id_field.value ) )
        {
            next_article_id_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( priority_field.value === "" )
        {
            priority_field.AddClass( "form-field-error" );

            it_is_valid_add_article_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
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
                <?php
                     $field_name = 'Slug';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'Name';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Name" type="text" value="<?php echo $field_value; ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetText( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <?php
                     $field_name = 'Text';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo $field_value; ?></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetText( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
                </div>
                <?php
                     $field_name = 'ImagePath';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo $field_value; ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo $field_value; ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <?php
                     $field_name = 'VideoPath';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo $field_value; ?>" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo $field_value; ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <?php
                     $field_name = 'NextArticleId';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Next Article Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="NextArticleId">
                        <?php  $article_array = GetDatabaseArticleArray(); ?>
                        <?php foreach ( $article_array as  $article ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $article->Id ) ); ?>"<?php if ( GetValueText( $article->Id ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $article->Name ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'Priority';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'high';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Priority' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="Priority">
                        <option value="low"<?php if ( $field_value === 'low' ) echo ' selected'; ?>>Low importance</option>
                        <option value="high"<?php if ( $field_value === 'high' ) echo ' selected'; ?>>High importance</option>
                    </select>
                </div>
                <?php
                     $field_name = 'IsActive';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '1';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $field_value === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $field_value === '1' ) echo ' selected'; ?>>True</option>
                    </select>
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
