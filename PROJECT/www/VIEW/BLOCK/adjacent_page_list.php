<?php
     $page_id_array = [];

    foreach (  $page_array as  $page_ )
    {
        array_push( $page_id_array, $page_->Id );
    }

     $page_id_count = count(  $page_id_array );
     $page_id_index = array_search(  $page->Id, $page_id_array );

     $prior_page_id_index = ( $page_id_index + $page_id_count - 1 ) % $page_id_count;
     $next_page_id_index = ( $page_id_index + 1 ) % $page_id_count;

     $prior_page = $this->PageByIdMap[ $page_id_array[ $prior_page_id_index ] ];
     $next_page = $this->PageByIdMap[ $page_id_array[ $next_page_id_index ] ];
?>























<div class="adjacent-page-list">
    <div class="zoomed-button adjacent-page-list-button" style="background: url( '<?php echo  $prior_page->ImagePath; ?>' ) no-repeat <?php echo $prior_page->ImageHorizontalPosition; ?> <?php echo $prior_page->ImageVerticalPosition; ?> / cover, url( '<?php echo $prior_page->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $prior_page->ImageHorizontalPosition; ?> <?php echo $prior_page->ImageVerticalPosition; ?> / cover" onclick="ShowView( '<?php echo $prior_page->Route; ?>' )">
        <div class="adjacent-page-list-button-title">
            <?php echo $this->GetProcessedText( $prior_page->Title ); ?>
        </div>
    </div>
    <div class="zoomed-button adjacent-page-list-button" style="background: url( '<?php echo  $next_page->ImagePath; ?>' ) no-repeat <?php echo $next_page->ImageHorizontalPosition; ?> <?php echo $next_page->ImageVerticalPosition; ?> / cover, url( '<?php echo $next_page->ImagePath; ?>.preload.jpg' ) no-repeat <?php echo $next_page->ImageHorizontalPosition; ?> <?php echo $next_page->ImageVerticalPosition; ?> / cover" onclick="ShowView( '<?php echo $next_page->Route; ?>' )">
        <div class="adjacent-page-list-button-title">
            <?php echo $this->GetProcessedText( $next_page->Title ); ?>
        </div>
    </div>
</div>
