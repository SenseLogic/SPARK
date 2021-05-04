

<?php foreach ( $this->ArticleArray as  $article ) { ?>
    <div class="display-none! extended-container view" data-view-name="article/<?php echo $article->Id; ?>/<?php echo $article->Slug; ?>">
        <?php require __DIR__ . '/' . 'BLOCK/article.php'; ?>
    </div>
<?php } ?>
