<?php
     $page_slug_array = [];

    foreach (  $page_array as  $page_ )
    {
        array_push( $page_slug_array, $page_->Slug );
    }

     $page_slug_count = count(  $page_slug_array );
     $page_slug_index = array_search(  $page->Slug, $page_slug_array );

     $prior_page_slug_index = ( $page_slug_index + $page_slug_count - 1 ) % $page_slug_count;
     $next_page_slug_index = ( $page_slug_index + 1 ) % $page_slug_count;

     $prior_page = $this->PageBySlugMap[ $page_slug_array[ $prior_page_slug_index ] ];
     $next_page = $this->PageBySlugMap[ $page_slug_array[ $next_page_slug_index ] ];
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
