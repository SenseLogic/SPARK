<?php // -- FUNCTIONS

function GetDatabaseBlockCategoryArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CATEGORY`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
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
        $block_category_by_slug_map[ $block_category->Slug ] = $block_category;
    }

    return $block_category_by_slug_map;
}

// ~~

function GetDatabaseBlockCategoryById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CATEGORY` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseBlockCategory(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK_CATEGORY` ( `Id`, `Slug`, `Name` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlockCategory(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK_CATEGORY` ( `Id`, `Slug`, `Name` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlockCategory(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK_CATEGORY` set `Slug` = ?, `Name` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockCategoryById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK_CATEGORY` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
