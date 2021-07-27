








































<div class="narrow-padded-container article">
    <div class="article-title">
        <?php echo htmlspecialchars(  $article->Name ); ?>
    </div>
    <div class="article-text">
        <?php echo htmlspecialchars( $article->Text ); ?>
    </div>
    <div>
        <img class="article-image" src="<?php echo $article->ImagePath; ?>"/>
    </div>
    <div>
        <video class="article-video" src="<?php echo $article->VideoPath; ?>" autoplay loop>
        </video>
    </div>
</div>
