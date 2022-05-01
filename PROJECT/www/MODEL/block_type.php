<?php // -- FUNCTIONS

function GetDatabaseBlockTypeArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_TYPE`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_type_array = [];

    while (  $block_type = $statement->fetchObject() )
    {
        $block_type->Id = ( int )( $block_type->Id );
        array_push( $block_type_array, $block_type );
    }

    return $block_type_array;
}

// ~~

function GetDatabaseBlockTypeBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_TYPE`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_type_by_slug_map = [];

    while (  $block_type = $statement->fetchObject() )
    {
        $block_type->Id = ( int )( $block_type->Id );
        $block_type_by_slug_map[ $block_type->Slug ] = $block_type;
    }

    return $block_type_by_slug_map;
}

// ~~

function GetDatabaseBlockTypeById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_TYPE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_type = $statement->fetchObject();
    $block_type->Id = ( int )( $block_type->Id );

    return $block_type;
}

// ~~

function AddDatabaseBlockType(
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK_TYPE` ( `Slug`, `Name` ) values ( ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlockType(
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK_TYPE` ( `Slug`, `Name` ) values ( ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlockType(
    int $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK_TYPE` set `Slug` = ?, `Name` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockTypeById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK_TYPE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
