<script>
    // -- VARIABLES

    function UpdateFieldVisibility(
        )
    {
        var
            column_index,
            column_is_hidden,
            column_title_element,
            column_title_element_array,
            column_value,
            column_value_element,
            column_value_element_array,
            row_element,
            row_element_array,
            type_slug_value,
            type_slug_value_element,
            type_slug_value_element_array;

        row_element_array = GetElements( "[data-is-row]" );

        for ( row_element of row_element_array )
        {
            column_title_element_array = row_element.GetElements( "[data-is-column-title]" );
            column_value_element_array = row_element.GetElements( "[data-is-column-value]" );

            type_slug_value = "";

            for ( column_value_element of column_value_element_array )
            {
                if ( column_value_element.dataset.columnName === "TypeSlug" )
                {
                    type_slug_value = column_value_element.GetFirstChildElement().value;

                    if ( !column_value_element.IsWatched )
                    {
                        column_value_element.AddEventListener( "value-changed", UpdateFieldVisibility );
                        column_value_element.IsWatched = true;
                    }

                    break;
                }
            }

            if ( column_title_element_array.length === column_value_element_array.length )
            {
                for ( column_index = 0;
                      column_index < column_title_element_array.length;
                      ++column_index )
                {
                    column_title_element = column_title_element_array[ column_index ];
                    column_value_element = column_value_element_array[ column_index ];
                    column_value = column_value_element.GetFirstChildElement().value;

                    column_name = column_title_element.dataset.columnName;
                    column_is_hidden = false;

                    if ( type_slug_value === "text" )
                    {
                        column_is_hidden = ( column_name.startsWith( "Image" ) );
                    }

                    column_title_element.ToggleClass( "is-hidden", column_is_hidden );
                    column_value_element.ToggleClass( "is-hidden", column_is_hidden );
                }
            }
        }
    }

    // -- STATEMENTS

    UpdateFieldVisibility();
</script>
