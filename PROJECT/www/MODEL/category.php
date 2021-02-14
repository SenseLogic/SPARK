<?php // -- FUNCTIONS

function GetDatabaseCategoryArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Slug, Text, Image, Number from CATEGORY order by Number asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $category_array = [];

    while (  $category = $statement->fetchObject() )
    {
        $category->Id = ( int )( $category->Id );
        $category->Number = ( int )( $category->Number );
        array_push( $category_array, $category );
    }

    return $category_array;
}

// ~~

function GetDatabaseCategoryById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Slug, Text, Image, Number from CATEGORY where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $category = $statement->fetchObject();
    $category->Id = ( int )( $category->Id );
    $category->Number = ( int )( $category->Number );

    return $category;
}

// ~~

function AddDatabaseCategory(
    string $name,
    string $slug,
    string $text,
    string $image,
    int $number
    )
{
     $statement = GetDatabaseStatement( 'insert into CATEGORY ( Name, Slug, Text, Image, Number ) values ( ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseCategory(
    int $id,
    string $name,
    string $slug,
    string $text,
    string $image,
    int $number
    )
{
     $statement = GetDatabaseStatement( 'update CATEGORY set Name = ?, Slug = ?, Text = ?, Image = ?, Number = ? where Id = ?' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_INT );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseCategoryById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from CATEGORY where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
