<script src="/static/script/vista_base.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_text.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_element.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_animation.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_request.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_storage.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_sortable_grid.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_multilingual_input.js?v=<?php echo VersionTimestamp; ?>"></script>
<script>
    // -- FUNCTIONS

    function HandleImagePathInputChangeEvent(
        path_element
        )
    {
        path_element.nextElementSibling.firstElementChild.src = path_element.value;
    }

    // ~~

    function HandleVideoPathInputChangeEvent(
        path_element
        )
    {
        path_element.nextElementSibling.firstElementChild.src = path_element.value;
    }

    // ~~

    async function HandleImageFileInputChangeEvent(
        file_element
        )
    {
        var
            file_element,
            request,
            form_data;

        if ( file_element.files.length > 0 )
        {
            form_data = new FormData();
            form_data.append( "file", file_element.files[ 0 ] );
            request = await SendRequest( "/admin/upload/image", "POST", form_data );

            if ( request.status === 201 )
            {
                file_path = GetJsonObject( request.response );
                file_element.parentElement.previousElementSibling.src = file_path;
                file_element.parentElement.parentElement.previousElementSibling.value = file_path;
            }
        }
    }

    // ~~

    async function HandleVideoFileInputChangeEvent(
        file_element
        )
    {
        var
            file_element,
            request,
            form_data;

        if ( file_element.files.length > 0 )
        {
            form_data = new FormData();
            form_data.append( "file", file_element.files[ 0 ] );
            request = await SendRequest( "/admin/upload/video", "POST", form_data );

            if ( request.status === 201 )
            {
                file_path = GetJsonObject( request.response );
                file_element.parentElement.previousElementSibling.src = file_path;
                file_element.parentElement.parentElement.previousElementSibling.value = file_path;
            }
        }
    }

    // -- STATEMENTS

    DelayCall( InitializeSortableGridColumns );
    DelayCall( InitializeMultilingualTexts );
</script>
