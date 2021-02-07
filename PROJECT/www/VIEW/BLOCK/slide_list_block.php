




<div class="carousel">
    <?php foreach ( $this->SlideArray as  $slide ) { ?>
        <div class="height-100vh slide-list-carousel-strip-6-1 slide-list-carousel-strip-perpetual-animation-6-1-3000-500 strip">
            <div class="height-100vh slide-list-carousel-slide">
                <div>
                    <img class="object-fit-cover" src="/upload/image/<?php echo $slide->Image; ?>"/>
                </div>
                <?php if ( $slide->Video !== '' ) { ?>
                    <div>
                        <video class="object-fit-cover" src="/upload/video/<?php echo $slide->Video; ?>" autoplay loop>
                        </video>
                    </div>
                <?php } ?>
                <div class="display-flex justify-content-center align-items-center">
                    <h1><?php echo htmlspecialchars( $slide->Text ); ?></h1>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
