

<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        ViewName,
        SectionName;

    // -- FUNCTIONS

    function InitializeView(
        )
    {
        EmitEvent( "initialize-view" );
    }

    // ~~

    function ShowView(
        route
        )
    {
        if ( route !== undefined )
        {
            SetRoute( "/<?php echo $this->LanguageCode; ?>/" + route );
            TrackRoute();
        }

        ViewName = GetRoute( "/<?php echo $this->LanguageCode; ?>/", "/" );
        SectionName = GetHash();

        if ( ViewName === "" )
        {
            ViewName = "home";
        }

        EmitEvent( "update-view" );

        if ( SectionName === "" )
        {
            SetScrollTop( 0 );
        }
        else
        {
            SetScrollTop( GetElementById( ViewName + "/" + SectionName ), "auto" );
        }
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'BLOCK/header_menu.php'; ?>
    <?php require __DIR__ . '/' . 'show_home_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_contact_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_legal_notice_view.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/footer_menu.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/scroll_top_button.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/cookie_consent_banner.php'; ?>
</div>
<script>
    // -- STATEMENTS

    AddEventListener(
        "update-view",
        function (
            )
        {
            GetElements( ".view" ).Iterate(
                function (
                    element
                    )
                {
                    element.ToggleClass( "display-none!", element.dataset.viewName !== ViewName );
                }
                );
        }
        );

    InitializeView();
    ShowView();
    HandleResizeEvent( ShowView );
    HandleRouteEvent( ShowView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
