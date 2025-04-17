













































































<div id="loader-page" class="loader-page">
    <div class="loader-page-panel loader-page-final-panel">
        <div class="loader-page-logo loader-page-final-logo">
        </div>
    </div>
    <div class="loader-page-panel loader-page-initial-panel">
        <div class="loader-page-logo loader-page-initial-logo">
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    function HideLoader()
    {
        GetElementById( "loader-page" ).AnimateStyles(
            {
                "--progress": [ ".", "100%" ]
            },
            [ 0.0, 0.5 ]
            );

        DelayCall(
            function()
            {
                GetElement( "body" ).AddClass( "is-appearing" );
                EmitEvent( "reveal-view" );
            },
            1
            );

        DelayCall(
            function()
            {
                GetElementById( "loader-page" ).AddClass( "is-hidden" );
            },
            2
            );

        DelayCall(
            function()
            {
                GetElement( "body" ).RemoveClass( "is-appearing" );
            },
            4
            );
    }

    GetElementById( "loader-page" ).AnimateStyles(
        {
            "--progress": [ "0%", "0%", "100%" ]
        },
        [ 0.0, 1.0, 10.0 ]
    );

    DelayCall( HideLoader );
</script>
