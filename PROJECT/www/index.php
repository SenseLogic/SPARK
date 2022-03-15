<?php // -- IMPORTS

require_once __DIR__ . '/' . 'FRAMEWORK/error.php';
require_once __DIR__ . '/' . 'FRAMEWORK/global.php';
require_once __DIR__ . '/' . 'FRAMEWORK/random.php';
require_once __DIR__ . '/' . 'FRAMEWORK/text.php';
require_once __DIR__ . '/' . 'FRAMEWORK/path.php';
require_once __DIR__ . '/' . 'FRAMEWORK/file.php';
require_once __DIR__ . '/' . 'FRAMEWORK/time.php';
require_once __DIR__ . '/' . 'FRAMEWORK/request.php';
require_once __DIR__ . '/' . 'FRAMEWORK/session.php';
require_once __DIR__ . '/' . 'FRAMEWORK/language.php';
require_once __DIR__ . '/' . 'FRAMEWORK/database.php';
require_once __DIR__ . '/' . 'FRAMEWORK/captcha.php';
require_once __DIR__ . '/' . 'FRAMEWORK/mail.php';
require_once __DIR__ . '/' . 'FRAMEWORK/user.php';

// -- CONSTANTS

define( 'DefaultLanguageCode', 'en' );
define( 'LanguageCodeArray', [ 'en', 'fr' ] );

if ( GetServerName() === 'localhost' )
{
    define( 'DatabaseHost', 'localhost' );
    define( 'DatabaseName', 'spark-project' );
    define( 'DatabaseUserName', 'root' );
    define( 'DatabasePassword', '' );
    define( 'VersionTimestamp', GetVersionTimestamp( 1 ) );
}
else
{
    define( 'DatabaseHost', 'localhost' );
    define( 'DatabaseName', '???' );
    define( 'DatabaseUserName', '???' );
    define( 'DatabasePassword', '???' );
    define( 'VersionTimestamp', GetVersionTimestamp( 600 ) );
}

DefineLineTag( '! ', '<div class="paragraph title-1">', '</div>' );
DefineLineTag( '!! ', '<div class="paragraph title-2">', '</div>' );
DefineLineTag( '!!! ', '<div class="paragraph title-3">', '</div>' );
DefineLineTag( '!!!! ', '<div class="paragraph title-4">', '</div>' );
DefineLineTag( '- ', '<div class="paragraph dash-1">', '</div>' );
DefineLineTag( '  - ', '<div class="paragraph dash-2">', '</div>' );
DefineLineTag( '    - ', '<div class="paragraph dash-3">', '</div>' );
DefineLineTag( '      - ', '<div class="paragraph dash-4">', '</div>' );
DefineLineTag( '* ', '<div class="paragraph bullet-1">', '</div>' );
DefineLineTag( '  * ', '<div class="paragraph bullet-2">', '</div>' );
DefineLineTag( '    * ', '<div class="paragraph bullet-3">', '</div>' );
DefineLineTag( '      * ', '<div class="paragraph bullet-4">', '</div>' );
DefineLineTag( '', '<div class="paragraph">', '</div>' );

DefineDualTag( '**', '<b>', '</b>' );
DefineDualTag( '%%', '<i>', '</i>' );
DefineDualTag( '__', '<u>', '</u>' );
DefineDualTag( '^^', '<sup>', '</sup>' );
DefineDualTag( ',,', '<sub>', '</sub>' );

DefineTag( '§', '<br>' );
DefineTag( '[[[', '<table>' );
DefineTag( ']]]', '</table>' );
DefineTag( '[[', '<tr><td>' );
DefineTag( '||', '</td><td>' );
DefineTag( ']]', '</td></tr>' );

DefineOpenTag( 'div' );
DefineOpenTag( 'span' );
DefineAttributeTag( 'route', 'data-route' );
DefineOpenTag( 'a' );
DefineAttributeTag( 'href' );
DefineOpenTag( 'img' );
DefineAttributeTag( 'src' );
DefineColorTag( 'red' );
DefineColorTag( 'green', '#0F0' );
DefineStyleTag( 'color' );
DefineStyleTag( 'size', 'font-size' );
DefineStyleTag( 'weight', 'font-weight' );

// -- FUNCTIONS

function Route(
    string $path
    )
{
     $path_value_array = GetPathValueArray( $path );
     $language_code = ExtractLanguageCode( $path_value_array, LanguageCodeArray, '' );

    if ( $language_code === '' )
    {
        $language_code = GetBrowserLanguageCode( LanguageCodeArray, DefaultLanguageCode );
    }

     $path_value_count = count( $path_value_array );
     $it_is_get_request = IsGetRequest();
     $it_is_post_request = IsPostRequest();
     $it_is_put_request = IsPutRequest();
     $it_is_delete_request = IsDeleteRequest();
     $user_is_connected = FindSessionValue( 'UserIsConnected', false );

    if ( $path_value_count >= 1
         && $path_value_array[ 0 ] === 'admin' )
    {
        DefineText( 'en', 'English' );
        DefineText( 'fr', 'French' );

        if ( $path_value_count === 1
             || !$user_is_connected )
        {
            if ( $it_is_get_request )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/connect_user_controller.php';
            }
            else if ( $it_is_post_request )
            {
                 $path = '/admin/text';

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_connect_user_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'image' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_image_controller.php';
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'video' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_video_controller.php';
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'file' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_file_controller.php';
        }
        else if ( $it_is_get_request
                  && $path_value_count === 2
                  && $path_value_array[ 1 ] === 'disconnect' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/disconnect_user_controller.php';
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'text' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_texts_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Text' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view' )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit' )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Text' ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_text_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'block' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_blocks_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_block_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'ArticleSlug' )
                      && HasPostValue( 'Number' )
                      && HasPostValue( 'Title' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'ImagePath' )
                      && HasPostValue( 'VideoPath' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_block_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view' )
            {
                 $block_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_block_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit' )
            {
                 $block_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_block_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'ArticleSlug' )
                      && HasPostValue( 'Number' )
                      && HasPostValue( 'Title' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'ImagePath' )
                      && HasPostValue( 'VideoPath' ) )
            {
                 $block_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_block_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $block_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_block_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $block_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_block_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'article' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_articles_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'ImagePath' )
                      && HasPostValue( 'VideoPath' )
                      && HasPostValue( 'NextArticleId' )
                      && HasPostValue( 'Priority' )
                      && HasPostValue( 'IsActive' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view' )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit' )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'ImagePath' )
                      && HasPostValue( 'VideoPath' )
                      && HasPostValue( 'NextArticleId' )
                      && HasPostValue( 'Priority' )
                      && HasPostValue( 'IsActive' ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_article_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'contact' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_contacts_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Company' )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Phone' )
                      && HasPostValue( 'Subject' )
                      && HasPostValue( 'Message' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view' )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit' )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Company' )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Phone' )
                      && HasPostValue( 'Subject' )
                      && HasPostValue( 'Message' )
                      && HasPostValue( 'DateTime' ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_contact_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'user' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_users_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Pseudonym' )
                      && HasPostValue( 'Password' )
                      && HasPostValue( 'Role' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view' )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit' )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Pseudonym' )
                      && HasPostValue( 'Password' )
                      && HasPostValue( 'Role' ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove' )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_user_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
        }
    }
    else
    {
        if ( $it_is_get_request )
        {
            if ( $path_value_count === 1
                 && $path_value_array[ 0 ] === 'captcha' )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/get_captcha_image_controller.php';
            }
            else if ( $path_value_count >= 1
                      && ( $path_value_array[ 0 ] === 'home'
                           || $path_value_array[ 0 ] === 'article'
                           || $path_value_array[ 0 ] === 'contact'
                           || $path_value_array[ 0 ] === 'legal-notice' ) )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/show_base_controller.php';
            }
            else if ( $path_value_count == 0 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/show_base_controller.php';
            }
            else
            {
                SetStatus( 404 );
            }
        }
        else if ( $it_is_post_request )
        {
            if ( $path_value_count === 1
                 && $path_value_array[ 0 ] === 'contact'
                 && HasPostValue( 'Name' )
                 && HasPostValue( 'Company' )
                 && HasPostValue( 'Email' )
                 && HasPostValue( 'Phone' )
                 && HasPostValue( 'Subject' )
                 && HasPostValue( 'Message' )
                 && HasPostValue( 'Captcha' ) )
            {
                 $name = GetPostValue( 'Name' );
                 $company = GetPostValue( 'Company' );
                 $email = GetPostValue( 'Email' );
                 $phone = GetPostValue( 'Phone' );
                 $subject = GetPostValue( 'Subject' );
                 $message = GetPostValue( 'Message' );
                 $captcha = GetPostValue( 'Captcha' );

                require_once __DIR__ . '/' . 'CONTROLLER/add_contact_controller.php';
            }
            else
            {
                SetStatus( 404 );
            }
        }
    }
}

// -- STATEMENTS

ShowErrors();
// PrintRequest();
Route( GetPath() );
