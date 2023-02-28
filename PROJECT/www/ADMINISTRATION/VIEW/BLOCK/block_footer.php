<script>
    // -- VARIABLES

    var
        ColumnTitleElementArray,
        ColumnValueElementArray,
        TypeSlugColumnValueElement;

    // -- FUNCTIONS

    function HandleTypeSlugColumnValueChangeEvent(
        )
    {
        var
            block_has_text_type,
            column_index,
            column_is_hidden,
            column_title_element,
            column_value_element;

        block_has_text_type = ( TypeSlugColumnValueElement.value === 'text' );

        for ( column_index = 0;
              column_index < ColumnTitleElementArray.length;
              ++column_index )
        {
            column_title_element = ColumnTitleElementArray[ column_index ];
            column_value_element = ColumnValueElementArray[ column_index ];

            column_name = column_title_element.dataset.columnName;

            if ( block_has_text_type )
            {
                column_is_hidden = ( column_name.startsWith( "Image" ) );
            }

            column_title_element.ToggleClass( "is-hidden", column_is_hidden );
            column_value_element.ToggleClass( "is-hidden", column_is_hidden );
        }
    }

    // -- STATEMENTS

    ColumnTitleElementArray = GetElements( "[data-is-column-title]" );
    ColumnValueElementArray = GetElements( "[data-is-column-value]" );

    TypeSlugColumnValueElement = GetElement( "[data-is-column-value][data-column-name=\"TypeSlug\"]" );
    TypeSlugColumnValueElement.onchange = HandleTypeSlugColumnValueChangeEvent;

    HandleTypeSlugColumnValueChangeEvent();
</script>
