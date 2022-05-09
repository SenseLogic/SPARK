

































<div class="page-heading" style="background: linear-gradient( 90deg, rgba( 0, 0, 0, 0.1 ) 0%, rgba( 0, 0, 0, 0.1 ) 100% ), url( '<?php echo  $page->ImagePath; ?>' ) no-repeat center center / cover, url( '<?php echo $page->ImagePath; ?>.preload.jpg' ) no-repeat center center / cover">
    <div class="page-heading-title">
        <?php echo $this->GetProcessedText(  $page->Title ); ?>
    </div>
    <div class="page-heading-text">
        <?php echo $this->GetProcessedText( $page->Text ); ?>
    </div>
    <?php require __DIR__ . '/' . 'scroll_down_reminder.php'; ?>
</div>
