<?php // -- FUNCTIONS

function GetValue(
    $value,
    $default_value = ''
    )
{
    if ( is_null( $value ) )
    {
        return $default_value;
    }
    else
    {
        return $value;
    }
}

// ~~

function HasProperty(
    object &$object_,
    string $property_name
    )
{
    return property_exists( $object_, $property_name );
}

// ~~

function EchoText(
    string $text
    )
{
    echo $text;
    flush();
}

// ~~

function EchoLine(
    string $line = ''
    )
{
    EchoText( '<div>' . $line . "</div>\n" );
}

// ~~

function EchoStyledLine(
    string $line = '',
    string $style = '',
    string $classes = '',
    string $indentation = ''
    )
{
    EchoText( $indentation . '<div class="' . $classes . '" style="' . $style . '">' . $line . "</div>\n" );
}
