


































<div id="home/#article-list" class="narrow-padded-container article-list">
    <?php foreach ( $this->ArticleArray as  $article ) { ?>
        <div class="article-list-button" onclick="ShowView( 'article/<?php echo $article->Id; ?>/<?php echo $article->Slug; ?>' )">
            <?php echo $article->Name; ?>
        </div>
    <?php } ?>
</div>
