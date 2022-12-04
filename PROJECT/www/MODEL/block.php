<?php // -- FUNCTIONS

function GetDatabaseBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `CategorySlug`, `TypeSlug`, `Number`, `LanguageCodeArray` from `BLOCK` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_array = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Number = ( float )( $block->Number );
        $block->LanguageCodeArray = json_decode( $block->LanguageCodeArray );
        array_push( $block_array, $block );
    }

    return $block_array;
}

// ~~

function GetDatabaseBlockById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `CategorySlug`, `TypeSlug`, `Number`, `LanguageCodeArray` from `BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block = $statement->fetchObject();
    $block->Number = ( float )( $block->Number );
    $block->LanguageCodeArray = json_decode( $block->LanguageCodeArray );

    return $block;
}

// ~~

function AddDatabaseBlock(
    string $id,
    string $page_id,
    string $category_slug,
    string $type_slug,
    float $number,
    array $language_code_array
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK` ( `Id`, `PageId`, `CategorySlug`, `TypeSlug`, `Number`, `LanguageCodeArray` ) values ( ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 6, $language_code_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlock(
    string $id,
    string $page_id,
    string $category_slug,
    string $type_slug,
    float $number,
    array $language_code_array
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK` ( `Id`, `PageId`, `CategorySlug`, `TypeSlug`, `Number`, `LanguageCodeArray` ) values ( ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 6, $language_code_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlock(
    string $id,
    string $page_id,
    string $category_slug,
    string $type_slug,
    float $number,
    array $language_code_array
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK` set `PageId` = ?, `CategorySlug` = ?, `TypeSlug` = ?, `Number` = ?, `LanguageCodeArray` = ? where Id = ?' );
    $statement->bindParam( 1, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 2, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 5, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 6, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function GetBlockArrayByCategorySlugMap(
    array &$block_array
    )
{
     $block_array_by_category_slug_map = [];

    foreach ( $block_array as  $block )
    {
        if ( !isset( $block_array_by_category_slug_map[ $block->CategorySlug ] ) )
        {
            $block_array_by_category_slug_map[ $block->CategorySlug ] = [ $block ];
        }
        else
        {
            array_push( $block_array_by_category_slug_map[ $block->CategorySlug ], $block );
        }
    }

    return $block_array_by_category_slug_map;
}

// ~~

function GetBlockArrayByCategorySlug(
    array &$block_array,
    string $category_slug
    )
{
     $block_array_by_category_slug = [];

    foreach ( $block_array as  $block )
    {
        if ( $block->CategorySlug === $category_slug )
        {
            array_push( $block_array_by_category_slug, $block );
        }
    }

    return $block_array_by_category_slug;
}

// ~~

function GetBlockByCategorySlugMap(
    array &$block_array
    )
{
     $block_by_category_slug_map = [];

    foreach ( $block_array as  $block )
    {
        $block_by_category_slug_map[ $block->CategorySlug ] = $block;
    }

    return $block_by_category_slug_map;
}

// ~~

function GetBlockByCategorySlug(
    array &$block_by_category_slug_map,
    string $category_slug
    )
{
    if ( isset( $block_by_category_slug_map[ $category_slug ] ) )
    {
        return $block_by_category_slug_map[ $category_slug ];
    }
    else
    {
        return null;
    }
}

// ~~

function GetBlockArrayByTypeSlugMap(
    array &$block_array
    )
{
     $block_array_by_type_slug_map = [];

    foreach ( $block_array as  $block )
    {
        if ( !isset( $block_array_by_type_slug_map[ $block->TypeSlug ] ) )
        {
            $block_array_by_type_slug_map[ $block->TypeSlug ] = [ $block ];
        }
        else
        {
            array_push( $block_array_by_type_slug_map[ $block->TypeSlug ], $block );
        }
    }

    return $block_array_by_type_slug_map;
}

// ~~

function GetBlockArrayByTypeSlug(
    array &$block_array,
    string $type_slug
    )
{
     $block_array_by_type_slug = [];

    foreach ( $block_array as  $block )
    {
        if ( $block->TypeSlug === $type_slug )
        {
            array_push( $block_array_by_type_slug, $block );
        }
    }

    return $block_array_by_type_slug;
}

// ~~

function GetBlockByTypeSlugMap(
    array &$block_array
    )
{
     $block_by_type_slug_map = [];

    foreach ( $block_array as  $block )
    {
        $block_by_type_slug_map[ $block->TypeSlug ] = $block;
    }

    return $block_by_type_slug_map;
}

// ~~

function GetBlockByTypeSlug(
    array &$block_by_type_slug_map,
    string $type_slug
    )
{
    if ( isset( $block_by_type_slug_map[ $type_slug ] ) )
    {
        return $block_by_type_slug_map[ $type_slug ];
    }
    else
    {
        return null;
    }
}