


































<div class="header-menu">
    <div class="header-menu-button" data-route="home" onclick="SelectView( this )">
        <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
    </div>
    <div class="header-menu-button" data-route="contact" onclick="SelectView( this )">
        <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
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
