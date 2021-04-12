

<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        Route = "<?php echo $this->Route; ?>",
        ViewName = "<?php echo $this->ViewName; ?>",
        SectionName = "<?php echo $this->SectionName; ?>";

    // -- FUNCTIONS

    function InitializeView(
        )
    {
        EmitEvent( "initialize-view" );
    }

    // ~~

    function ShowRoute(
        route
        )
    {
        if ( IsString( route ) )
        {
            Route = route;
            ViewName = GetRouteViewName( route );
            SectionName = GetRouteSectionName( route );
            SetRoute( "/<?php echo $this->LanguageCode; ?>/" + route );
        }

        EmitEvent( "update-view" );

        if ( SectionName === "" )
        {
            window.SetScrollTop( 0 );
        }
        else
        {
            window.SetScrollTop( GetElementById( Route ) );
        }
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'BLOCK/header_menu.php'; ?>
    <?php require __DIR__ . '/' . 'show_home_view.php'; ?>
    <?php require __DIR__ . '/' . 'add_contact_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_legal_notice_view.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/footer_menu.php'; ?>
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
                    element.ToggleClass( "display-hidden", element.dataset.viewName !== ViewName );
                }
                );
        }
        );

    InitializeView()
    ShowRoute();
    window.AddEventListener( "resize", ShowRoute );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
