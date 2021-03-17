

<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        ViewRoute = "<?php echo $this->ViewRoute; ?>",
        ViewName = "<?php echo $this->ViewName; ?>",
        SectionName = "<?php echo $this->SectionName; ?>";

    // -- FUNCTIONS

    function InitializeView(
        )
    {
        EmitEvent( "initialize-view" );
    }

    // ~~

    function UpdateView(
        )
    {
        EmitEvent( "update-view" );
    }

    // ~~

    function SetViewRoute(
        view_route
        )
    {
        window.SetScrollTop( 0 );
        ViewRoute = view_route;
        ViewName = GetViewName( view_route );
        SectionName = GetSectionName( view_route );
        SetRoute( "/<?php echo $this->LanguageCode; ?>/" + view_route );
        UpdateView();
    }

    // ~~

    function SelectView(
        element
        )
    {
        SetViewRoute( element.dataset.viewRoute );
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
                    if ( element.dataset.viewName === ViewName )
                    {
                        element.RemoveClass( "display-hidden" );
                    }
                    else
                    {
                        element.AddClass( "display-hidden" );
                    }
                }
                );
        }
        );

    InitializeView()
    UpdateView();
    window.AddEventListener( "resize", UpdateView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
