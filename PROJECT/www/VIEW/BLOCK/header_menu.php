






























<div class="header-menu">
    <div class="header-menu-button" data-view-name="home" onclick="SelectView( this )">
        Home
    </div>
    <div class="header-menu-button" data-view-name="contact" onclick="SelectView( this )">
        Contact
    </div>
</div>
<script>
    // -- STATEMENTS

    AddEventListener(
        "update-view",
        function (
            )
        {
            GetElements( ".header-menu-button" ).Iterate(
                function (
                    element
                    )
                {
                    if ( element.dataset.viewName === ViewName )
                    {
                        element.AddClass( "selected" );
                    }
                    else
                    {
                        element.RemoveClass( "selected" );
                    }
                }
                );
        }
        );
</script>
