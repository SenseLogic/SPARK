


































































































































































<div id="header-menu" class="header-menu">
    <div class="header-menu-button-container">
        <div class="header-menu-button" data-route="home" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" style="margin-left:auto" data-route="contact" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" data-route="contact" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" style="margin-right:auto" data-route="contact" onclick="SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-icon-button header-menu-open-button" onclick="OpenHeaderMenu()">
        </div>
    </div>
    <div class="header-menu-mobile-button-container">
        <div class="header-menu-mobile-button" data-route="home" onclick="CloseHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="header-menu-mobile-button" data-route="contact" onclick="CloseHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-mobile-button" data-route="contact" onclick="CloseHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-icon-button header-menu-close-button" onclick="CloseHeaderMenu()">
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    function OpenHeaderMenu(
        button_element
        )
    {
        GetElementById( "header-menu" ).AddClass( "is-open" );
    }

    // ~~

    function CloseHeaderMenu(
        button_element
        )
    {
        GetElementById( "header-menu" ).RemoveClass( "is-open" );
    }

    // -- STATEMENTS

    HandleScrollEvent( GetViewportHeight() - 48, ".header-menu", "is-scrolled" );

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
