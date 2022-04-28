<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddArticleBlockForm()
    {
        var
            add_article_block_form,
            it_is_valid_add_article_block_form,
            article_slug_field,
            block_slug_field;

        add_article_block_form = document.AddArticleBlockForm;
        article_slug_field = add_article_block_form.ArticleSlug;
        block_slug_field = add_article_block_form.BlockSlug;

        article_slug_field.RemoveClass( "form-field-error" );
        block_slug_field.RemoveClass( "form-field-error" );

        it_is_valid_add_article_block_form = true;

        if ( article_slug_field.value === "" )
        {
            article_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_article_block_form = false;
        }

        if ( block_slug_field.value === "" )
        {
            block_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_article_block_form = false;
        }

        return it_is_valid_add_article_block_form;
    }
</script>
<div id="add-article-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddArticleBlockForm" onsubmit="return IsValidAddArticleBlockForm()" action="/admin/article-block/add" method="post">
            <div class="form-container">
                <?php
                     $field_name = 'ArticleSlug';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Article Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ArticleSlug">
                        <?php  $article_array = GetDatabaseArticleArray(); ?>
                        <?php foreach ( $article_array as  $article ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $article->Slug ) ); ?>"<?php if ( GetValueText( $article->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $article->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'BlockSlug';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Block Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="BlockSlug">
                        <?php  $block_array = GetDatabaseBlockArray(); ?>
                        <?php foreach ( $block_array as  $block ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>"<?php if ( GetValueText( $block->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $block->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
