<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/article_model.php';
require_once __DIR__ . '/' . '../MODEL/text_model.php';

// -- TYPES

class SHOW_BASE_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        string $view_route
        )
    {
        parent::__construct( $language_code );
        $this->ViewRoute = $view_route;
        $this->ViewName = GetViewName( $view_route );
        $this->SectionName = GetSectionName( $view_route );

        $this->ArticleArray = GetDatabaseArticleArray();
        $this->ArticleCount = count( $this->ArticleArray );

        $this->Captcha = GetCaptchaText( 6 );
        $this->Session->Captcha = $this->Captcha;
        $this->Session->Store();

        require_once __DIR__ . '/' . '../VIEW/show_base_view.php';
    }

    // -- INQUIRIES

    function GetProcessedText(
        string $text
        )
    {
        return ReplaceText(
            [],
            [],
            GetProcessedText( $this->GetTranslatedText( $text ) )
            );
    }
}

// -- STATEMENTS

 $show_base_controller = new SHOW_BASE_CONTROLLER(  $language_code,  $view_route );
