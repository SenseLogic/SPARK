































<div class="page-heading" style="background: url( '<?php echo  $page->ImagePath; ?>' ) no-repeat center center / cover, url( '<?php echo $page->ImagePath; ?>.preload.jpg' ) no-repeat center center / cover">
    <div class="page-heading-title">
        <?php echo $this->GetProcessedText(  $page->Title ); ?>
    </div>
    <div class="page-heading-text">
        <?php echo $this->GetProcessedText( $page->Text ); ?>
    </div>
    <?php require __DIR__ . '/' . 'scroll_down_reminder.php'; ?>
</div>
