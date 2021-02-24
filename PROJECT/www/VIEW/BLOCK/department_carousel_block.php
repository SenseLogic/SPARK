


















































<div id="department-carousel-block" class="department-carousel-block">
    <div id="department-carousel-block-strip" class="department-carousel-block-strip">
    <?php  for (  $department_index = 0; $department_index <= $this->DepartmentCount; ++$department_index ) { ?>
        <?php  $department = $this->DepartmentArray[ $department_index % $this->DepartmentCount ]; ?>
        <div class="department-carousel-block-slide" style="background-image: url( '<?php echo $department->Image; ?>' )">
            <div class="department-carousel-block-slide-text">
                <?php echo htmlspecialchars( $department->Text ); ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <div id="department-carousel-block-left-arrow" class="department-carousel-block-arrow department-carousel-block-left-arrow">
        &lt;
    </div>
    <div id="department-carousel-block-right-arrow" class="department-carousel-block-arrow department-carousel-block-right-arrow">
        &gt;
    </div>
</div>
<script>
    var department_carousel
        = new CAROUSEL(
              GetElementById( "department-carousel-block" ),
              GetElementById( "department-carousel-block-strip" ),
              0.0,
              6,
              1,
              3.0,
              0.5
              );

    GetElementById( "department-carousel-block-left-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            department_carousel.StopAutomaticAnimation();
            department_carousel.ShowPriorSlide();
        }
        );

    GetElementById( "department-carousel-block-right-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            department_carousel.StopAutomaticAnimation();
            department_carousel.ShowNextSlide();
        }
        );

    department_carousel.StartAutomaticAnimation();
</script>
