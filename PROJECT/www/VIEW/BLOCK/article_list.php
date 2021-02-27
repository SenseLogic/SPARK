<div>
    <?php foreach ( $this->ArticleArray as  $article ) { ?>
        <div>
            <h2><?php echo htmlspecialchars( $article->Name ); ?></h2>
            <p><?php echo htmlspecialchars( $article->Text ); ?></p>
            <div>
                <img src="<?php echo $article->Image; ?>"/>
            </div>
            <div>
                <video src="<?php echo $article->Video; ?>" autoplay loop>
                </video>
            </div>
        </div>
    <?php } ?>
</div>
