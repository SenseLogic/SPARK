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
             $target_file_name = GetSuffixedFilePath( $source_file_name, '_' . GetCurrentDateTimeSuffix() );
             $target_file_path = GetBaseFolderName() . '/upload/image/' . $target_file_name;

            if ( MoveUploadedFile( $source_file_path, $target_file_path ) )
            {
                if ( HasSuffix( $target_file_path, '.jpg' )
                     || HasSuffix( $target_file_path, '.jpeg' ) )
                {
                     $image = ReadJpegImage( $target_file_path );

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
