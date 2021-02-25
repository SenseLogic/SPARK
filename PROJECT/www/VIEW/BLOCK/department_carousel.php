


















































<div id="department-carousel" class="department-carousel">
    <div id="department-carousel-strip" class="department-carousel-strip">
    <?php  for (  $department_index = 0; $department_index <= $this->DepartmentCount; ++$department_index ) { ?>
        <?php  $department = $this->DepartmentArray[ $department_index % $this->DepartmentCount ]; ?>
        <div class="department-carousel-slide" style="background-image: url( '<?php echo $department->Image; ?>' )">
            <div class="department-carousel-slide-text">
                <?php echo htmlspecialchars( $department->Text ); ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <div id="department-carousel-left-arrow" class="department-carousel-arrow department-carousel-left-arrow">
        &lt;
    </div>
    <div id="department-carousel-right-arrow" class="department-carousel-arrow department-carousel-right-arrow">
        &gt;
    </div>
</div>
<script>
    var department_carousel
        = new CAROUSEL(
              GetElementById( "department-carousel" ),
              GetElementById( "department-carousel-strip" ),
              0.0,
              6,
              1,
              3.0,
              0.5
              );

    GetElementById( "department-carousel-left-arrow" ).AddEventListener(
        "click",
        function (
            )
        {
            department_carousel.StopAutomaticAnimation();
            department_carousel.ShowPriorSlide();
        }
        );

    GetElementById( "department-carousel-right-arrow" ).AddEventListener(
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
