<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../FRAMEWORK/basil.php';
require_once __DIR__ . '/' . '../../FRAMEWORK/sql.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';
require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class GENERATE_SITEMAP_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'administrator' ) )
        {
            $this->Title = 'Update sitemap';

            AddParentRoute();

            require __DIR__ . '/' . '../VIEW/BLOCK/page_header.php';

            EchoText( '<div class="page-section form-section">' );
            EchoText( '    <div class="color-black" style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%">' );
            EchoStyledLine( 'Generating sitemap...', 'font-size: 1.5rem', 'color-blue', '        ' );

             $modification_date = GetCurrentDate();
             $page_array = GetDatabasePageArray();
             $url_array = [];

            foreach ( $page_array as  $page )
            {
                foreach ( $page->LanguageCodeArray as  $language_code )
                {
                    array_push(
                        $url_array,
                        "<url>\n  <loc>https://www.spark-project.com/"
                        . $language_code
                        . '/'
                        . $page->Route
                        . "</loc>\n  <lastmod>"
                        . $modification_date
                        . "</lastmod>\n</url>\n"
                        );
                }
            }

            SortArrayByAscendingNaturalValue( $url_array );

             $sitemap_file_path = 'sitemap.xml';
             $sitemap_file_text
                = "<\?xml version=\"1.0\" encoding=\"UTF-8\"\?>\n"
                  . "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n"
                  . JoinArray( $url_array, '' )
                  . "</urlset>\n";

            EchoLine( 'Writing sitemap file : <a class="color-blue" href="/' . $sitemap_file_path . '" download>' . $sitemap_file_path . '</a>' );
            WriteTextFile( $sitemap_file_path, $sitemap_file_text );

            EchoText( '    </div>' );
            EchoText( '<div>' );

            require __DIR__ . '/' . '../VIEW/BLOCK/page_footer.php';
        }
    }
}

// -- STATEMENTS

ShowErrors();

 $generate_sitemap_controller = new GENERATE_SITEMAP_CONTROLLER(  $language_code );
