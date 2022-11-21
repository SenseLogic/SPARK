<?php // -- FUNCTIONS

function GetDatabaseImageBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `TypeSlug`, `Number`, `LanguageCodeArray`, `Title`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` from `IMAGE_BLOCK` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $image_block_array = [];

    while (  $image_block = $statement->fetchObject() )
    {
        $image_block->Number = ( float )( $image_block->Number );
        $image_block->LanguageCodeArray = json_decode( $image_block->LanguageCodeArray );
        array_push( $image_block_array, $image_block );
    }

    return $image_block_array;
}

// ~~

function GetDatabaseImageBlockById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `TypeSlug`, `Number`, `LanguageCodeArray`, `Title`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` from `IMAGE_BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $image_block = $statement->fetchObject();
    $image_block->Number = ( float )( $image_block->Number );
    $image_block->LanguageCodeArray = json_decode( $image_block->LanguageCodeArray );

    return $image_block;
}

// ~~

function AddDatabaseImageBlock(
    string $id,
    string $page_id,
    string $type_slug,
    float $number,
    array $language_code_array,
    string $title,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'insert into `IMAGE_BLOCK` ( `Id`, `PageId`, `TypeSlug`, `Number`, `LanguageCodeArray`, `Title`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 5, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 10, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseImageBlock(
    string $id,
    string $page_id,
    string $type_slug,
    float $number,
    array $language_code_array,
    string $title,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'replace into `IMAGE_BLOCK` ( `Id`, `PageId`, `TypeSlug`, `Number`, `LanguageCodeArray`, `Title`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 5, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 10, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseImageBlock(
    string $id,
    string $page_id,
    string $type_slug,
    float $number,
    array $language_code_array,
    string $title,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'update `IMAGE_BLOCK` set `PageId` = ?, `TypeSlug` = ?, `Number` = ?, `LanguageCodeArray` = ?, `Title` = ?, `ImagePath` = ?, `ImageVerticalPosition` = ?, `ImageHorizontalPosition` = ?, `VideoPath` = ? where Id = ?' );
    $statement->bindParam( 1, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 4, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 5, $title, PDO::PARAM_STR );
    $statement->bindParam( 6, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 10, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseImageBlockById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `IMAGE_BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
