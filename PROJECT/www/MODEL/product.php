<?php // -- FUNCTIONS

function GetDatabaseProductArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Slug, Text, Image, Video from PRODUCT' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $product_array = [];

    while (  $product = $statement->fetchObject() )
    {
        $product->Id = ( int )( $product->Id );
        array_push( $product_array, $product );
    }

    return $product_array;
}

// ~~

function GetDatabaseProductById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Slug, Text, Image, Video from PRODUCT where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $product = $statement->fetchObject();
    $product->Id = ( int )( $product->Id );

    return $product;
}

// ~~

function AddDatabaseProduct(
    string $name,
    string $slug,
    string $text,
    string $image,
    string $video
    )
{
     $statement = GetDatabaseStatement( 'insert into PRODUCT ( Name, Slug, Text, Image, Video ) values ( ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $video, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseProduct(
    int $id,
    string $name,
    string $slug,
    string $text,
    string $image,
    string $video
    )
{
     $statement = GetDatabaseStatement( 'update PRODUCT set Name = ?, Slug = ?, Text = ?, Image = ?, Video = ? where Id = ?' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $video, PDO::PARAM_STR );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseProductById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from PRODUCT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
