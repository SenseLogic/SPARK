<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditSlideForm()
    {
        var
            edit_slide_form,
            it_is_valid_edit_slide_form,
            text_field,
            image_field,
            video_field,
            has_video_field,
            number_field;

        it_is_valid_edit_slide_form = true;

        edit_slide_form = document.EditSlideForm;
        text_field = edit_slide_form.Text;
        image_field = edit_slide_form.Image;
        video_field = edit_slide_form.Video;
        has_video_field = edit_slide_form.HasVideo;
        number_field = edit_slide_form.Number;

        if ( text_field.value !== "" )
        {
            text_field.classList.remove( "form-field-error" );
        }
        else
        {
            text_field.classList.add( "form-field-error" );

            it_is_valid_edit_slide_form = false;
        }

        if ( image_field.value !== "" )
        {
            image_field.classList.remove( "form-field-error" );
        }
        else
        {
            image_field.classList.add( "form-field-error" );

            it_is_valid_edit_slide_form = false;
        }

        if ( video_field.value !== "" )
        {
            video_field.classList.remove( "form-field-error" );
        }
        else
        {
            video_field.classList.add( "form-field-error" );

            it_is_valid_edit_slide_form = false;
        }

        if ( has_video_field.value !== "" )
        {
            has_video_field.classList.remove( "form-field-error" );
        }
        else
        {
            has_video_field.classList.add( "form-field-error" );

            it_is_valid_edit_slide_form = false;
        }

        if ( number_field.value !== "" )
        {
            number_field.classList.remove( "form-field-error" );
        }
        else
        {
            number_field.classList.add( "form-field-error" );

            it_is_valid_edit_slide_form = false;
        }

        return it_is_valid_edit_slide_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="EditSlideForm" onsubmit="return IsValidEditSlideForm()" action="/admin/slide/edit/<?php echo htmlspecialchars( $this->Slide->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Text :
                </div>
                <div>
                    <textarea class="form-textarea" name="Text"><?php echo htmlspecialchars( $this->Slide->Text ); ?></textarea>
                </div>
                <div class="form-field-name">
                    Image :
                </div>
                <div>
                    <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Slide->Image ); ?>" oninput="HandleImageNameInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="/upload/image/<?php echo htmlspecialchars( $this->Slide->Image ); ?>" onerror="this.src='/upload/image/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/icon/admin/upload_icon.svg"/><input id="file" class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                    </div>
                </div>
                <div class="form-field-name">
                    Video :
                </div>
                <div>
                    <input class="form-input" name="Video" type="text" value="<?php echo htmlspecialchars( $this->Slide->Video ); ?>" oninput="HandleVideoNameInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="/upload/video/<?php echo htmlspecialchars( $this->Slide->Video ); ?>" type="video/mp4" onerror="this.src='/upload/video/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/icon/admin/upload_icon.svg"/><input id="file" class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                    </div>
                </div>
                <div class="form-field-name">
                    Has Video :
                </div>
                <div>
                    <input class="form-input" name="HasVideo" type="text" value="<?php echo htmlspecialchars( $this->Slide->HasVideo ); ?>"/>
                </div>
                <div class="form-field-name">
                    Number :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( $this->Slide->Number ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/slide">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
