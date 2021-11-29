

















































































































































<div id="header-menu" class="header-menu">
    <div class="large-padded-container header-menu-button-container">
        <div class="scaled-button header-menu-button" data-view-name="home" onclick="ShowView( 'home' )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="margin-left-auto! scaled-button header-menu-button header-menu-desktop-button" data-view-name="home" onclick="ShowView( 'home/#article-list' )">
            <?php echo $this->GetText( 'HeaderMenuArticleListButton' ); ?>
        </div>
        <div class="margin-right-auto! scaled-button header-menu-button header-menu-desktop-button" data-view-name="legal-notice" onclick="ShowView( 'legal-notice' )">
            <?php echo $this->GetText( 'HeaderMenuLegalNoticeButton' ); ?>
        </div>
        <div class="scaled-button header-menu-button header-menu-desktop-button" data-view-name="contact" onclick="ShowView( 'contact' )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <?php if ( $this->LanguageCode === 'en' ) { ?>
            <div class="scaled-button header-menu-button" onclick="SetLanguageCode( 'fr' )">
                <?php echo $this->GetText( 'HeaderMenuFrenchButton' ); ?>
            </div>
        <?php } else { ?>
            <div class="scaled-button header-menu-button" onclick="SetLanguageCode( 'en' )">
                <?php echo $this->GetText( 'HeaderMenuEnglishButton' ); ?>
            </div>
        <?php } ?>
        <div class="margin-left-auto! scaled-button header-menu-icon-button header-menu-open-button" onclick="OpenHeaderMenu()">
        </div>
    </div>
    <div class="header-menu-mobile-button-container">
        <div class="scaled-button header-menu-mobile-button" data-view-name="home" onclick="CloseHeaderMenu(); ShowView( 'home' )">
            <?php echo $this->GetText( 'HeaderMenuHomeButton' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="home" onclick="CloseHeaderMenu(); ShowView( 'home/#article-list' )">
            <?php echo $this->GetText( 'HeaderMenuArticleListButton' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="legal-notice" onclick="CloseHeaderMenu(); ShowView( 'legal-notice' )">
            <?php echo $this->GetText( 'HeaderMenuLegalNoticeButton' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="contact" onclick="CloseHeaderMenu(); ShowView( 'contact' )">
            <?php echo $this->GetText( 'HeaderMenuContactButton' ); ?>
        </div>
        <div class="scaled-button header-menu-icon-button header-menu-close-button" onclick="CloseHeaderMenu()">
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    function OpenHeaderMenu(
        )
    {
        GetElementById( "header-menu" ).AddClass( "is-open" );
        SetScrollTop( 0 );
    }

    // ~~

    function CloseHeaderMenu(
        )
    {
        GetElementById( "header-menu" ).RemoveClass( "is-open" );
    }

    // -- STATEMENTS

    AddEventListener(
        "update-view",
        function (
            )
        {
            GetElements( ".header-menu-button, .header-menu-mobile-button" ).Iterate(
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
