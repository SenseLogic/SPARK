










































































































































<div id="loader-page" class="loader-page">
    <div class="loader-page-slider">
    </div>
    <div id="loader-page-logo" class="loader-page-logo">
        <div class="loader-page-logo-upper-slider">
            <div class="loader-page-logo-background">
            </div>
        </div>
        <div class="loader-page-logo-lower-slider">
            <div class="loader-page-logo-background">
            </div>
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    function HideLoader(
        )
    {
        GetElementById( "loader-page-logo" ).AnimateStyles(
            {
                "--progress" : [ ".", "100%" ]
            },
            [ 0.0, 0.5 ]
            );

        DelayCall(
            function (
                )
            {
                GetElement( "body" ).AddClass( "is-appearing" );
            },
            1
            );

        DelayCall(
            function (
                )
            {
                GetElementById( "loader-page" ).AddClass( "is-hidden" );
            },
            2
            );

        DelayCall(
            function (
                )
            {
                GetElement( "body" ).RemoveClass( "is-appearing" );
            },
            4
            );
    }

    // -- STATEMENTS

    GetElementById( "loader-page-logo" ).AnimateStyles(
        {
            "--progress" : [ "0%", "0%", "100%" ]
        },
        [ 0.0, 1.0, 2.0 ]
        );

    DelayCall( HideLoader );
</script>
