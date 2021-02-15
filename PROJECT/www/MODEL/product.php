<?php // -- FUNCTIONS

function GetDatabaseProductArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Name, Text, Image, Video, CategorySlug from PRODUCT' );

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
     $statement = GetDatabaseStatement( 'select Id, Slug, Name, Text, Image, Video, CategorySlug from PRODUCT where Id = ? limit 1' );
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
    string $slug,
    string $name,
    string $text,
    string $image,
    string $video,
    string $category_slug
    )
{
     $statement = GetDatabaseStatement( 'insert into PRODUCT ( Slug, Name, Text, Image, Video, CategorySlug ) values ( ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $video, PDO::PARAM_STR );
    $statement->bindParam( 6, $category_slug, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseProduct(
    int $id,
    string $slug,
    string $name,
    string $text,
    string $image,
    string $video,
    string $category_slug
    )
{
     $statement = GetDatabaseStatement( 'update PRODUCT set Slug = ?, Name = ?, Text = ?, Image = ?, Video = ?, CategorySlug = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $video, PDO::PARAM_STR );
    $statement->bindParam( 6, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 7, $id, PDO::PARAM_INT );

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
