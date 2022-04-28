<?php // -- FUNCTIONS

function GetDatabaseArticleArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name`, `Text`, `ImagePath`, `VideoPath`, `NextArticleId`, `Priority`, `IsActive` from `ARTICLE`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article_array = [];

    while (  $article = $statement->fetchObject() )
    {
        $article->Id = ( int )( $article->Id );
        $article->NextArticleId = ( int )( $article->NextArticleId );
        array_push( $article_array, $article );
    }

    return $article_array;
}

// ~~

function GetDatabaseArticleById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name`, `Text`, `ImagePath`, `VideoPath`, `NextArticleId`, `Priority`, `IsActive` from `ARTICLE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article = $statement->fetchObject();
    $article->Id = ( int )( $article->Id );
    $article->NextArticleId = ( int )( $article->NextArticleId );

    return $article;
}

// ~~

function AddDatabaseArticle(
    string $slug,
    string $name,
    string $text,
    string $image_path,
    string $video_path,
    int $next_article_id,
    string $priority,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'insert into `ARTICLE` ( `Slug`, `Name`, `Text`, `ImagePath`, `VideoPath`, `NextArticleId`, `Priority`, `IsActive` ) values ( ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 5, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $next_article_id, PDO::PARAM_INT );
    $statement->bindParam( 7, $priority, PDO::PARAM_STR );
    $statement->bindParam( 8, $is_active, PDO::PARAM_BOOL );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseArticle(
    string $slug,
    string $name,
    string $text,
    string $image_path,
    string $video_path,
    int $next_article_id,
    string $priority,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'replace into `ARTICLE` ( `Slug`, `Name`, `Text`, `ImagePath`, `VideoPath`, `NextArticleId`, `Priority`, `IsActive` ) values ( ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 5, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $next_article_id, PDO::PARAM_INT );
    $statement->bindParam( 7, $priority, PDO::PARAM_STR );
    $statement->bindParam( 8, $is_active, PDO::PARAM_BOOL );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseArticle(
    int $id,
    string $slug,
    string $name,
    string $text,
    string $image_path,
    string $video_path,
    int $next_article_id,
    string $priority,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'update `ARTICLE` set `Slug` = ?, `Name` = ?, `Text` = ?, `ImagePath` = ?, `VideoPath` = ?, `NextArticleId` = ?, `Priority` = ?, `IsActive` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 5, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $next_article_id, PDO::PARAM_INT );
    $statement->bindParam( 7, $priority, PDO::PARAM_STR );
    $statement->bindParam( 8, $is_active, PDO::PARAM_BOOL );
    $statement->bindParam( 9, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseArticleById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `ARTICLE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
