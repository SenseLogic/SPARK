<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<script>
    // -- VARIABLES

    var
        ViewName = "<?php echo $this->ViewName; ?>";

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

    function SetViewName(
        view_name
        )
    {
        window.SetScrollTop( 0 );
        ViewName = view_name;
        SetRoute( "/" + ViewName + "/" );
        UpdateView();
    }

    // ~~

    function SelectView(
        element
        )
    {
        SetViewName( element.dataset.viewName );
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'BLOCK/header_menu_block.php'; ?>
    <?php require __DIR__ . '/' . 'show_home_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_products_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_product_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_contact_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_terms_view.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/footer_menu_block.php'; ?>
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
                        element.RemoveClass( "display-none" );
                    }
                    else
                    {
                        element.AddClass( "display-none" );
                    }
                }
                );
        }
        );

    InitializeView()
    UpdateView();
    window.AddEventListener( "resize", UpdateView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
