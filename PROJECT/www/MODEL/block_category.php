<?php // -- FUNCTIONS

function GetDatabaseBlockCategoryArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CATEGORY`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_category_array = [];

    while (  $block_category = $statement->fetchObject() )
    {
        $block_category->Id = ( int )( $block_category->Id );
        array_push( $block_category_array, $block_category );
    }

    return $block_category_array;
}

// ~~

function GetDatabaseBlockCategoryBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CATEGORY`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_category_by_slug_map = [];

    while (  $block_category = $statement->fetchObject() )
    {
        $block_category->Id = ( int )( $block_category->Id );
        $block_category_by_slug_map[ $block_category->Slug ] = $block_category;
    }

    return $block_category_by_slug_map;
}

// ~~

function GetDatabaseBlockCategoryById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CATEGORY` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_category = $statement->fetchObject();
    $block_category->Id = ( int )( $block_category->Id );

    return $block_category;
}

// ~~

function AddDatabaseBlockCategory(
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK_CATEGORY` ( `Slug`, `Name` ) values ( ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlockCategory(
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK_CATEGORY` ( `Slug`, `Name` ) values ( ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlockCategory(
    int $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK_CATEGORY` set `Slug` = ?, `Name` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockCategoryById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK_CATEGORY` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
