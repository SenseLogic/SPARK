<div>
    <?php foreach ( $this->ProductArray as  $product ) { ?>
        <div>
            <h2><?php echo htmlspecialchars( $product->Name ); ?></h2>
            <p><?php echo htmlspecialchars( $product->Text ); ?></p>
            <div>
                <img src="<?php echo $product->Image; ?>"/>
            </div>
            <div>
                <video src="<?php echo $product->Video; ?>" autoplay loop>
                </video>
            </div>
        </div>
    <?php } ?>
</div>
