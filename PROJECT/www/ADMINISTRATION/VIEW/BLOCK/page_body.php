<script src="/static/script/vista_base.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_browser.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_math.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_text.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_element.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_animation.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_data.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_component.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_breakpoint.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_form.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_request.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_storage.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_scroll.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_uuid.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_viewport.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_sortable_grid.js?v=<?php echo VersionTimestamp; ?>"></script>
<script src="/static/script/vista_sortable_table.js?v=<?php echo VersionTimestamp; ?>"></script>
<script>
    // -- FUNCTIONS

    function ShowView(
        route
        )
    {
        if ( route.startsWith( "//" ) )
        {
            OpenUrl( route.substring( 1 ) );
        }
        else if ( route.startsWith( "/" )
                  || route.startsWith( "http:" )
                  || route.startsWith( "https:" )
                  || route.startsWith( "mailto:" ) )
        {
            OpenUrl( route );
        }
        else
        {
            SetUrl( "/" + route );
        }
    }

    // -- STATEMENTS

    DelayCall( InitializeSortableTableColumns );
</script>
