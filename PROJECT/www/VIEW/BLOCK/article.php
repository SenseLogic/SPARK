




























<div class="article">
    <div class="article-title">
        <?php echo htmlspecialchars(  $article->Name ); ?>
    </div>
    <div class="article-text">
        <?php echo htmlspecialchars( $article->Text ); ?></p>
    </div>
    <div>
        <img class="article-image" src="<?php echo $article->Image; ?>"/>
    </div>
    <div>
        <video class="article-video" src="<?php echo $article->Video; ?>" autoplay loop>
        </video>
    </div>
</div>
