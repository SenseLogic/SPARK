<?php // -- IMPORTS

require_once __DIR__ . '/' . 'text.php';

// -- FUNCTIONS

function GetDatabaseTextBySlug(
    string $slug
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Text from TEXT where Slug = ? limit 1' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $text = $statement->fetchObject();
    $text->Id = ( int )( $text->Id );

    return $text;
}

// ~~

function GetTextMap(
    array &$text_array
    )
{
     $text_map = array();

    foreach ( $text_array as  $text )
    {
        $text_map[ $text->Slug ] = $text->Text;
    }

    return $text_map;
}
