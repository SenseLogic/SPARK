<?php // -- FUNCTIONS

function GetDatabaseArticleBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `ArticleSlug`, `BlockSlug` from `ARTICLE_BLOCK`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article_block_array = [];

    while (  $article_block = $statement->fetchObject() )
    {
        $article_block->Id = ( int )( $article_block->Id );
        array_push( $article_block_array, $article_block );
    }

    return $article_block_array;
}

// ~~

function GetDatabaseArticleBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `ArticleSlug`, `BlockSlug` from `ARTICLE_BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article_block = $statement->fetchObject();
    $article_block->Id = ( int )( $article_block->Id );

    return $article_block;
}

// ~~

function AddDatabaseArticleBlock(
    string $article_slug,
    string $block_slug
    )
{
     $statement = GetDatabaseStatement( 'insert into `ARTICLE_BLOCK` ( `ArticleSlug`, `BlockSlug` ) values ( ?, ? )' );
    $statement->bindParam( 1, $article_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseArticleBlock(
    string $article_slug,
    string $block_slug
    )
{
     $statement = GetDatabaseStatement( 'replace into `ARTICLE_BLOCK` ( `ArticleSlug`, `BlockSlug` ) values ( ?, ? )' );
    $statement->bindParam( 1, $article_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseArticleBlock(
    int $id,
    string $article_slug,
    string $block_slug
    )
{
     $statement = GetDatabaseStatement( 'update `ARTICLE_BLOCK` set `ArticleSlug` = ?, `BlockSlug` = ? where Id = ?' );
    $statement->bindParam( 1, $article_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseArticleBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `ARTICLE_BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
