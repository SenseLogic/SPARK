<div>
    <?php foreach ( $this->ProductArray as  $product ) { ?>
        <div>
            <h2><?php echo htmlspecialchars( $product->Name ); ?></h2>
            <p><?php echo htmlspecialchars( $product->Text ); ?></p>
            <div>
                <img src="/upload/image/<?php echo $product->Image; ?>"/>
            </div>
            <div>
                <video src="/upload/video/<?php echo $product->Video; ?>" autoplay loop>
                </video>
            </div>
        </div>
    <?php } ?>
</div>
