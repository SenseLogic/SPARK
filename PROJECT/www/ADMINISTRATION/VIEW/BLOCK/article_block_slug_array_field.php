<?php if (  $field_mode === 'add' || $field_mode === 'edit' ) { ?>
    <div class="form-field-name">
        <?php echo htmlspecialchars(  $field_title ); ?> :
    </div>
    <input class="form-input" name="<?php echo htmlspecialchars(  $field_name ); ?>" type="text" value="<?php echo htmlspecialchars( GetValueText(  $field_value ) ); ?>"/>
<?php } else if ( $field_mode === 'remove' || $field_mode === 'view' || $field_mode === 'card' ) { ?>
    <div class="form-field-name">
        <?php echo htmlspecialchars( $field_title ); ?> :
    </div>
    <input class="form-input" name="<?php echo htmlspecialchars( $field_name ); ?>" type="text" value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" readonly/>
<?php } else if ( $field_mode === 'cell' ) { ?>
    <?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>
<?php } ?>
<script>
    function BuildArticleBlockSlugArrayField(
        form_element
        )
    {
    }
</script>
