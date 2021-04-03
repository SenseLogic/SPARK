













































































































<div id="header-menu" class="header-menu">
    <div class="header-menu-button-container">
        <div class="header-menu-button" data-route="home" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="header-menu-button" data-route="contact" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
    </div>
    <div class="header-menu-open-button" onclick="HandleHeaderMenuOpenButtonClickEvent( this )">
    </div>
</div>
<script>
    // -- FUNCTIONS

    function HandleHeaderMenuOpenButtonClickEvent(
        button_element
        )
    {
        GetElementById( "header-menu" ).ToggleClass( "is-open" );
    }

    // -- STATEMENTS

    HandleScrollEvent( 1, ".header-menu", "is-scrolled" );

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
                    element.ToggleClass( "is-selected", element.dataset.viewName === ViewName );
                }
                );
        }
        );
</script>
