


































































































































































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
        <div class="header-menu-icon-button header-menu-open-button" onclick="ShowHeaderMenu()">
        </div>
    </div>
    <div class="header-menu-mobile-button-container">
        <div class="header-menu-mobile-button" data-route="home" onclick="HideHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="header-menu-mobile-button" data-route="contact" onclick="HideHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-mobile-button" data-route="contact" onclick="HideHeaderMenu(); SelectView( this )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="header-menu-icon-button header-menu-close-button" onclick="HideHeaderMenu()">
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    function ShowHeaderMenu(
        button_element
        )
    {
        GetElementById( "header-menu" ).AddClass( "is-open" );
    }

    // ~~

    function HideHeaderMenu(
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
