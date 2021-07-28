
























































<div id="article-carousel" class="article-carousel">
    <div id="article-carousel-strip" class="article-carousel-strip">
    <?php for (  $article_index = 0; $article_index <= $this->ArticleCount; ++$article_index ) { ?>
        <?php  $article = $this->ArticleArray[ $article_index % $this->ArticleCount ]; ?>
        <div class="article-carousel-slide" style="background-image: url( '<?php echo $article->ImagePath; ?>' )" onclick="ShowView( 'article/<?php echo $article->Id; ?>/<?php echo $article->Slug; ?>' )">
            <div class="article-carousel-slide-text">
                <?php echo htmlspecialchars( $article->Text ); ?>
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
              <?php echo $this->ArticleCount + 1; ?>,
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
