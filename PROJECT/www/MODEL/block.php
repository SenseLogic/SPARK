<?php // -- FUNCTIONS

function GetDatabaseBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `PageId`, `CategorySlug`, `TypeSlug`, `ContentSlug`, `Number`, `LanguageCodeArray`, `MinimumHeight`, `Title`, `TitleArray`, `Teaser`, `TeaserArray`, `Text`, `TextArray`, `Route`, `RouteArray`, `ImageSide`, `ImageLegend`, `ImageLegendArray`, `ImagePath`, `ImagePathArray`, `ImageVerticalPosition`, `ImageVerticalPositionArray`, `ImageHorizontalPosition`, `ImageHorizontalPositionArray`, `VideoPath`, `VideoPathArray` from `BLOCK` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_array = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Number = ( float )( $block->Number );
        $block->LanguageCodeArray = json_decode( $block->LanguageCodeArray );
        $block->TitleArray = json_decode( $block->TitleArray );
        $block->TeaserArray = json_decode( $block->TeaserArray );
        $block->TextArray = json_decode( $block->TextArray );
        $block->RouteArray = json_decode( $block->RouteArray );
        $block->ImageLegendArray = json_decode( $block->ImageLegendArray );
        $block->ImagePathArray = json_decode( $block->ImagePathArray );
        $block->ImageVerticalPositionArray = json_decode( $block->ImageVerticalPositionArray );
        $block->ImageHorizontalPositionArray = json_decode( $block->ImageHorizontalPositionArray );
        $block->VideoPathArray = json_decode( $block->VideoPathArray );
        array_push( $block_array, $block );
    }

    return $block_array;
}

// ~~

function GetDatabaseBlockById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `PageId`, `CategorySlug`, `TypeSlug`, `ContentSlug`, `Number`, `LanguageCodeArray`, `MinimumHeight`, `Title`, `TitleArray`, `Teaser`, `TeaserArray`, `Text`, `TextArray`, `Route`, `RouteArray`, `ImageSide`, `ImageLegend`, `ImageLegendArray`, `ImagePath`, `ImagePathArray`, `ImageVerticalPosition`, `ImageVerticalPositionArray`, `ImageHorizontalPosition`, `ImageHorizontalPositionArray`, `VideoPath`, `VideoPathArray` from `BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block = $statement->fetchObject();
    $block->Number = ( float )( $block->Number );
    $block->LanguageCodeArray = json_decode( $block->LanguageCodeArray );
    $block->TitleArray = json_decode( $block->TitleArray );
    $block->TeaserArray = json_decode( $block->TeaserArray );
    $block->TextArray = json_decode( $block->TextArray );
    $block->RouteArray = json_decode( $block->RouteArray );
    $block->ImageLegendArray = json_decode( $block->ImageLegendArray );
    $block->ImagePathArray = json_decode( $block->ImagePathArray );
    $block->ImageVerticalPositionArray = json_decode( $block->ImageVerticalPositionArray );
    $block->ImageHorizontalPositionArray = json_decode( $block->ImageHorizontalPositionArray );
    $block->VideoPathArray = json_decode( $block->VideoPathArray );

    return $block;
}

// ~~

function AddDatabaseBlock(
    string $id,
    string $slug,
    string $page_id,
    string $category_slug,
    string $type_slug,
    string $content_slug,
    float $number,
    array $language_code_array,
    string $minimum_height,
    string $title,
    array $title_array,
    string $teaser,
    array $teaser_array,
    string $text,
    array $text_array,
    string $route,
    array $route_array,
    string $image_side,
    string $image_legend,
    array $image_legend_array,
    string $image_path,
    array $image_path_array,
    string $image_vertical_position,
    array $image_vertical_position_array,
    string $image_horizontal_position,
    array $image_horizontal_position_array,
    string $video_path,
    array $video_path_array
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK` ( `Id`, `Slug`, `PageId`, `CategorySlug`, `TypeSlug`, `ContentSlug`, `Number`, `LanguageCodeArray`, `MinimumHeight`, `Title`, `TitleArray`, `Teaser`, `TeaserArray`, `Text`, `TextArray`, `Route`, `RouteArray`, `ImageSide`, `ImageLegend`, `ImageLegendArray`, `ImagePath`, `ImagePathArray`, `ImageVerticalPosition`, `ImageVerticalPositionArray`, `ImageHorizontalPosition`, `ImageHorizontalPositionArray`, `VideoPath`, `VideoPathArray` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 4, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 6, $content_slug, PDO::PARAM_STR );
    $statement->bindParam( 7, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 8, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 9, $minimum_height, PDO::PARAM_STR );
    $statement->bindParam( 10, $title, PDO::PARAM_STR );
    $title_array = json_encode( $title_array );
    $statement->bindParam( 11, $title_array, PDO::PARAM_STR );
    $statement->bindParam( 12, $teaser, PDO::PARAM_STR );
    $teaser_array = json_encode( $teaser_array );
    $statement->bindParam( 13, $teaser_array, PDO::PARAM_STR );
    $statement->bindParam( 14, $text, PDO::PARAM_STR );
    $text_array = json_encode( $text_array );
    $statement->bindParam( 15, $text_array, PDO::PARAM_STR );
    $statement->bindParam( 16, $route, PDO::PARAM_STR );
    $route_array = json_encode( $route_array );
    $statement->bindParam( 17, $route_array, PDO::PARAM_STR );
    $statement->bindParam( 18, $image_side, PDO::PARAM_STR );
    $statement->bindParam( 19, $image_legend, PDO::PARAM_STR );
    $image_legend_array = json_encode( $image_legend_array );
    $statement->bindParam( 20, $image_legend_array, PDO::PARAM_STR );
    $statement->bindParam( 21, $image_path, PDO::PARAM_STR );
    $image_path_array = json_encode( $image_path_array );
    $statement->bindParam( 22, $image_path_array, PDO::PARAM_STR );
    $statement->bindParam( 23, $image_vertical_position, PDO::PARAM_STR );
    $image_vertical_position_array = json_encode( $image_vertical_position_array );
    $statement->bindParam( 24, $image_vertical_position_array, PDO::PARAM_STR );
    $statement->bindParam( 25, $image_horizontal_position, PDO::PARAM_STR );
    $image_horizontal_position_array = json_encode( $image_horizontal_position_array );
    $statement->bindParam( 26, $image_horizontal_position_array, PDO::PARAM_STR );
    $statement->bindParam( 27, $video_path, PDO::PARAM_STR );
    $video_path_array = json_encode( $video_path_array );
    $statement->bindParam( 28, $video_path_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlock(
    string $id,
    string $slug,
    string $page_id,
    string $category_slug,
    string $type_slug,
    string $content_slug,
    float $number,
    array $language_code_array,
    string $minimum_height,
    string $title,
    array $title_array,
    string $teaser,
    array $teaser_array,
    string $text,
    array $text_array,
    string $route,
    array $route_array,
    string $image_side,
    string $image_legend,
    array $image_legend_array,
    string $image_path,
    array $image_path_array,
    string $image_vertical_position,
    array $image_vertical_position_array,
    string $image_horizontal_position,
    array $image_horizontal_position_array,
    string $video_path,
    array $video_path_array
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK` ( `Id`, `Slug`, `PageId`, `CategorySlug`, `TypeSlug`, `ContentSlug`, `Number`, `LanguageCodeArray`, `MinimumHeight`, `Title`, `TitleArray`, `Teaser`, `TeaserArray`, `Text`, `TextArray`, `Route`, `RouteArray`, `ImageSide`, `ImageLegend`, `ImageLegendArray`, `ImagePath`, `ImagePathArray`, `ImageVerticalPosition`, `ImageVerticalPositionArray`, `ImageHorizontalPosition`, `ImageHorizontalPositionArray`, `VideoPath`, `VideoPathArray` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 4, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 6, $content_slug, PDO::PARAM_STR );
    $statement->bindParam( 7, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 8, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 9, $minimum_height, PDO::PARAM_STR );
    $statement->bindParam( 10, $title, PDO::PARAM_STR );
    $title_array = json_encode( $title_array );
    $statement->bindParam( 11, $title_array, PDO::PARAM_STR );
    $statement->bindParam( 12, $teaser, PDO::PARAM_STR );
    $teaser_array = json_encode( $teaser_array );
    $statement->bindParam( 13, $teaser_array, PDO::PARAM_STR );
    $statement->bindParam( 14, $text, PDO::PARAM_STR );
    $text_array = json_encode( $text_array );
    $statement->bindParam( 15, $text_array, PDO::PARAM_STR );
    $statement->bindParam( 16, $route, PDO::PARAM_STR );
    $route_array = json_encode( $route_array );
    $statement->bindParam( 17, $route_array, PDO::PARAM_STR );
    $statement->bindParam( 18, $image_side, PDO::PARAM_STR );
    $statement->bindParam( 19, $image_legend, PDO::PARAM_STR );
    $image_legend_array = json_encode( $image_legend_array );
    $statement->bindParam( 20, $image_legend_array, PDO::PARAM_STR );
    $statement->bindParam( 21, $image_path, PDO::PARAM_STR );
    $image_path_array = json_encode( $image_path_array );
    $statement->bindParam( 22, $image_path_array, PDO::PARAM_STR );
    $statement->bindParam( 23, $image_vertical_position, PDO::PARAM_STR );
    $image_vertical_position_array = json_encode( $image_vertical_position_array );
    $statement->bindParam( 24, $image_vertical_position_array, PDO::PARAM_STR );
    $statement->bindParam( 25, $image_horizontal_position, PDO::PARAM_STR );
    $image_horizontal_position_array = json_encode( $image_horizontal_position_array );
    $statement->bindParam( 26, $image_horizontal_position_array, PDO::PARAM_STR );
    $statement->bindParam( 27, $video_path, PDO::PARAM_STR );
    $video_path_array = json_encode( $video_path_array );
    $statement->bindParam( 28, $video_path_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlock(
    string $id,
    string $slug,
    string $page_id,
    string $category_slug,
    string $type_slug,
    string $content_slug,
    float $number,
    array $language_code_array,
    string $minimum_height,
    string $title,
    array $title_array,
    string $teaser,
    array $teaser_array,
    string $text,
    array $text_array,
    string $route,
    array $route_array,
    string $image_side,
    string $image_legend,
    array $image_legend_array,
    string $image_path,
    array $image_path_array,
    string $image_vertical_position,
    array $image_vertical_position_array,
    string $image_horizontal_position,
    array $image_horizontal_position_array,
    string $video_path,
    array $video_path_array
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK` set `Slug` = ?, `PageId` = ?, `CategorySlug` = ?, `TypeSlug` = ?, `ContentSlug` = ?, `Number` = ?, `LanguageCodeArray` = ?, `MinimumHeight` = ?, `Title` = ?, `TitleArray` = ?, `Teaser` = ?, `TeaserArray` = ?, `Text` = ?, `TextArray` = ?, `Route` = ?, `RouteArray` = ?, `ImageSide` = ?, `ImageLegend` = ?, `ImageLegendArray` = ?, `ImagePath` = ?, `ImagePathArray` = ?, `ImageVerticalPosition` = ?, `ImageVerticalPositionArray` = ?, `ImageHorizontalPosition` = ?, `ImageHorizontalPositionArray` = ?, `VideoPath` = ?, `VideoPathArray` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $category_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $content_slug, PDO::PARAM_STR );
    $statement->bindParam( 6, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 7, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 8, $minimum_height, PDO::PARAM_STR );
    $statement->bindParam( 9, $title, PDO::PARAM_STR );
    $title_array = json_encode( $title_array );
    $statement->bindParam( 10, $title_array, PDO::PARAM_STR );
    $statement->bindParam( 11, $teaser, PDO::PARAM_STR );
    $teaser_array = json_encode( $teaser_array );
    $statement->bindParam( 12, $teaser_array, PDO::PARAM_STR );
    $statement->bindParam( 13, $text, PDO::PARAM_STR );
    $text_array = json_encode( $text_array );
    $statement->bindParam( 14, $text_array, PDO::PARAM_STR );
    $statement->bindParam( 15, $route, PDO::PARAM_STR );
    $route_array = json_encode( $route_array );
    $statement->bindParam( 16, $route_array, PDO::PARAM_STR );
    $statement->bindParam( 17, $image_side, PDO::PARAM_STR );
    $statement->bindParam( 18, $image_legend, PDO::PARAM_STR );
    $image_legend_array = json_encode( $image_legend_array );
    $statement->bindParam( 19, $image_legend_array, PDO::PARAM_STR );
    $statement->bindParam( 20, $image_path, PDO::PARAM_STR );
    $image_path_array = json_encode( $image_path_array );
    $statement->bindParam( 21, $image_path_array, PDO::PARAM_STR );
    $statement->bindParam( 22, $image_vertical_position, PDO::PARAM_STR );
    $image_vertical_position_array = json_encode( $image_vertical_position_array );
    $statement->bindParam( 23, $image_vertical_position_array, PDO::PARAM_STR );
    $statement->bindParam( 24, $image_horizontal_position, PDO::PARAM_STR );
    $image_horizontal_position_array = json_encode( $image_horizontal_position_array );
    $statement->bindParam( 25, $image_horizontal_position_array, PDO::PARAM_STR );
    $statement->bindParam( 26, $video_path, PDO::PARAM_STR );
    $video_path_array = json_encode( $video_path_array );
    $statement->bindParam( 27, $video_path_array, PDO::PARAM_STR );
    $statement->bindParam( 28, $id, PDO::PARAM_STR );

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

function GetBlockArrayByPageIdMap(
    array &$block_array
    )
{
     $block_array_by_page_id_map = [];

    foreach ( $block_array as  $block )
    {
        if ( !isset( $block_array_by_page_id_map[ $block->PageId ] ) )
        {
            $block_array_by_page_id_map[ $block->PageId ] = [ $block ];
        }
        else
        {
            array_push( $block_array_by_page_id_map[ $block->PageId ], $block );
        }
    }

    return $block_array_by_page_id_map;
}

// ~~

function GetBlockArrayByPageId(
    array &$block_array,
    string $page_id
    )
{
     $block_array_by_page_id = [];

    foreach ( $block_array as  $block )
    {
        if ( $block->PageId === $page_id )
        {
            array_push( $block_array_by_page_id, $block );
        }
    }

    return $block_array_by_page_id;
}

// ~~

function GetBlockByPageIdMap(
    array &$block_array
    )
{
     $block_by_page_id_map = [];

    foreach ( $block_array as  $block )
    {
        $block_by_page_id_map[ $block->PageId ] = $block;
    }

    return $block_by_page_id_map;
}

// ~~

function GetBlockByPageId(
    array &$block_by_page_id_map,
    string $page_id
    )
{
    if ( isset( $block_by_page_id_map[ $page_id ] ) )
    {
        return $block_by_page_id_map[ $page_id ];
    }
    else
    {
        return null;
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
