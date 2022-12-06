

































<div class="page-heading" style="background: linear-gradient( rgba( 0, 0, 0, 0.1 ), rgba( 0, 0, 0, 0.1 ) ), url( '<?php echo  $page->ImagePath; ?>' ) no-repeat <?php echo $page->ImageHorizontalPosition; ?> <?php echo $page->ImageVerticalPosition; ?> / cover, url( '<?php echo $page->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $page->ImageHorizontalPosition; ?> <?php echo $page->ImageVerticalPosition; ?> / cover">
    <?php if ( $page->Title !== '' ) { ?>
        <div class="page-heading-title">
            <?php echo $this->GetProcessedText( $page->Title ); ?>
        </div>
    <?php } ?>
    <?php if ( $page->Teaser !== '' ) { ?>
        <div class="page-heading-teaser">
            <?php echo $this->GetProcessedText( $page->Teaser ); ?>
        </div>
    <?php } ?>
    <?php require __DIR__ . '/' . 'scroll_down_reminder.php'; ?>
</div>
