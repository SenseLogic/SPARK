


















































<div id="category-carousel" class="category-carousel">
    <div id="category-carousel-strip" class="category-carousel-strip">
    <?php  for (  $category_index = 0; $category_index <= $this->CategoryCount; ++$category_index ) { ?>
        <?php  $category = $this->CategoryArray[ $category_index % $this->CategoryCount ]; ?>
        <div class="category-carousel-slide" style="background-image: url( '/upload/image/<?php echo $category->Image; ?>' )">
            <div class="category-carousel-slide-text">
                <?php echo htmlspecialchars( $category->Text ); ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <div id="category-carousel-left-arrow" class="category-carousel-arrow category-carousel-left-arrow">
        &lt;
    </div>
    <div id="category-carousel-right-arrow" class="category-carousel-arrow category-carousel-right-arrow">
        &gt;
    </div>
</div>
<script>
    var category_carousel
        = new CAROUSEL(
              GetElementById( "category-carousel" ),
              GetElementById( "category-carousel-strip" ),
              0.0,
              6,
              1,
              3.0,
              0.5
              );

    GetElementById( "category-carousel-left-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            category_carousel.StopAutomaticAnimation();
            category_carousel.ShowPriorSlide();
        }
        );

    GetElementById( "category-carousel-right-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            category_carousel.StopAutomaticAnimation();
            category_carousel.ShowNextSlide();
        }
        );

    category_carousel.StartAutomaticAnimation();
</script>
