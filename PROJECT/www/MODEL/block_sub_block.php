<?php // -- FUNCTIONS

function GetDatabaseBlockSubBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `BlockSlug`, `SubBlockSlug`, `Number` from `BLOCK_SUB_BLOCK` order by `BlockSlug` asc, `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_sub_block_array = [];

    while (  $block_sub_block = $statement->fetchObject() )
    {
        $block_sub_block->Id = ( int )( $block_sub_block->Id );
        $block_sub_block->Number = ( float )( $block_sub_block->Number );
        array_push( $block_sub_block_array, $block_sub_block );
    }

    return $block_sub_block_array;
}

// ~~

function GetDatabaseBlockSubBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `BlockSlug`, `SubBlockSlug`, `Number` from `BLOCK_SUB_BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_sub_block = $statement->fetchObject();
    $block_sub_block->Id = ( int )( $block_sub_block->Id );
    $block_sub_block->Number = ( float )( $block_sub_block->Number );

    return $block_sub_block;
}

// ~~

function AddDatabaseBlockSubBlock(
    string $block_slug,
    string $sub_block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK_SUB_BLOCK` ( `BlockSlug`, `SubBlockSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlockSubBlock(
    string $block_slug,
    string $sub_block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK_SUB_BLOCK` ( `BlockSlug`, `SubBlockSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlockSubBlock(
    int $id,
    string $block_slug,
    string $sub_block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK_SUB_BLOCK` set `BlockSlug` = ?, `SubBlockSlug` = ?, `Number` = ? where Id = ?' );
    $statement->bindParam( 1, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockSubBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK_SUB_BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
