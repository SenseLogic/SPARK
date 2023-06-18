<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../FRAMEWORK/image.php';

// -- TYPES

class UPLOAD_IMAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( HasUploadedFile( 'File' ) )
        {
             $source_file_path = GetUploadedFilePath( 'File' );
             $source_file_name = GetValidFileName( GetUploadedFileName( 'File' ));
             $target_file_name = GetValidFileName( GetSuffixedFilePath( $source_file_name, '_' . GetCurrentDateTimeSuffix() ) );

            if ( HasSuffix( $target_file_name, '.jpeg' ) )
            {
                $target_file_name = ReplaceSuffix( $target_file_name, '.jpeg', '.jpg' );
            }
            else if ( HasSuffix( $target_file_name, '.JPEG' ) )
            {
                $target_file_name = ReplaceSuffix( $target_file_name, '.JPEG', '.jpg' );
            }
            else if ( HasSuffix( $target_file_name, '.JPG' ) )
            {
                $target_file_name = ReplaceSuffix( $target_file_name, '.JPG', '.jpg' );
            }
            else if ( HasSuffix( $target_file_name, '.PNG' ) )
            {
                $target_file_name = ReplaceSuffix( $target_file_name, '.PNG', '.png' );
            }

             $media_folder_path = GetBaseFolderName() . '/media/image/';
             $media_file_path = $media_folder_path . $target_file_name;

            CreateFolder( $media_folder_path );

            if ( MoveUploadedFile( $source_file_path, $media_file_path ) )
            {
                 $target_folder_path = GetBaseFolderName() . '/upload/image/';
                 $target_file_path = $target_folder_path . $target_file_name;

                CreateFolder( $target_folder_path );

                if ( HasSuffix( $target_file_path, '.jpg' ) )
                {
                     $image = ReadJpegImage( $media_file_path );

                     $default_image = CreateLimitedImage( $image, 2073600 );
                    WriteJpegImage( $default_image, $target_file_path, 70 );
                    ReleaseImage( $default_image );

                     $medium_image = CreateLimitedImage( $image, 921600 );
                    WriteJpegImage( $medium_image, $target_file_path . ".medium.jpg", 70 );
                    ReleaseImage( $medium_image );

                     $small_image = CreateLimitedImage( $image, 230400 );
                    WriteJpegImage( $small_image, $target_file_path . ".small.jpg", 70 );
                    ReleaseImage( $small_image );

                     $preload_image = CreateLimitedImage( $image, 147456 );
                    WriteJpegImage( $preload_image, $target_file_path . ".preload.jpg", 50 );
                    ReleaseImage( $preload_image );

                    ReleaseImage( $image );
                }
                else if ( HasSuffix( $target_file_path, '.png' ) )
                {
                     $image = ReadPngImage( $media_file_path );

                    EnableImageTransparency( $image );

                    if ( IsOpaqueImage( $image ) )
                    {
                         $target_file_name = ReplaceSuffix( $target_file_name, '.png', '.jpg' );
                         $target_file_path = ReplaceSuffix( $target_file_path, '.png', '.jpg' );

                         $default_image = CreateLimitedImage( $image, 2073600 );
                        WriteJpegImage( $default_image, $target_file_path, 70 );
                        ReleaseImage( $default_image );

                         $medium_image = CreateLimitedImage( $image, 921600 );
                        WriteJpegImage( $medium_image, $target_file_path . ".medium.jpg", 70 );
                        ReleaseImage( $medium_image );

                         $small_image = CreateLimitedImage( $image, 230400 );
                        WriteJpegImage( $small_image, $target_file_path . ".small.jpg", 70 );
                        ReleaseImage( $small_image );

                         $preload_image = CreateLimitedImage( $image, 147456 );
                        WriteJpegImage( $preload_image, $target_file_path . ".preload.jpg", 50 );
                        ReleaseImage( $preload_image );
                    }
                    else
                    {
                         $default_image = CreateLimitedImage( $image, 2073600, true );
                        WritePngImage( $default_image, $target_file_path );
                        ReleaseImage( $default_image );

                         $medium_image = CreateLimitedImage( $image, 921600, true );
                        WritePngImage( $medium_image, $target_file_path . ".medium.png" );
                        ReleaseImage( $medium_image );

                         $small_image = CreateLimitedImage( $image, 230400, true );
                        WritePngImage( $small_image, $target_file_path . ".small.png" );
                        ReleaseImage( $small_image );

                         $preload_image = CreateLimitedImage( $image, 147456, true );
                        WritePngImage( $preload_image, $target_file_path . ".preload.png" );
                        ReleaseImage( $preload_image );
                    }

                    ReleaseImage( $image );
                }
                else
                {
                    MoveFile( $media_file_path, $target_file_path );
                }

                SetStatus( 201 );
                SetJsonResponse( '/upload/image/' . $target_file_name );
            }
            else
            {
                SetStatus( 400 );
            }
        }
    }
}

// -- STATEMENTS

 $upload_image_controller = new UPLOAD_IMAGE_CONTROLLER(  $language_code );
