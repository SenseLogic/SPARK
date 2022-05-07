<?php
     $article_count = count(  $article_array );
?>

























































<div id="article-carousel" class="article-carousel">
    <div id="article-carousel-strip" class="article-carousel-strip">
        <?php for (  $article_index = 0; $article_index <= $article_count; ++$article_index ) { ?>
            <?php  $article = $article_array[ $article_index % $article_count ]; ?>
            <div class="article-carousel-slide" style="background-image: linear-gradient( 90deg, rgba( 0, 0, 0, 0.1 ) 0%, rgba( 0, 0, 0, 0.1 ) 100% ), url( '<?php echo $article->ImagePath; ?>' ), url( '<?php echo $article->ImagePath; ?>.preload.jpg' )" onclick="ShowView( '<?php echo $article->Route; ?>' )">
                <div class="article-carousel-slide-text">
                    <?php echo $this->GetTranslatedText( $article->Text ); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <div id="article-carousel-left-arrow" class="article-carousel-arrow article-carousel-left-arrow">
        &lt;
    </div>
    <div id="article-carousel-right-arrow" class="article-carousel-arrow article-carousel-right-arrow">
        &gt;
    </div>
    <?php require __DIR__ . '/' . 'scroll_down_reminder.php'; ?>
</div>
<script>
    var article_carousel
        = new CAROUSEL(
              GetElementById( "article-carousel" ),
              GetElementById( "article-carousel-strip" ),
              0.0,
              <?php echo $article_count + 1; ?>,
              1,
              3.0,
              0.5
              );

    GetElementById( "article-carousel-left-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            article_carousel.StopAutomaticAnimation();
            article_carousel.ShowPriorSlide();
        }
        );

    GetElementById( "article-carousel-right-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            article_carousel.StopAutomaticAnimation();
            article_carousel.ShowNextSlide();
        }
        );

    article_carousel.StartAutomaticAnimation();
</script>
