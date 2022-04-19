    </body>
    <?php foreach ( $this->ImagePathArray as  $image_path ) { ?>
        <link rel="preload" href="<?php echo $image_path; ?>.preload.jpg" as="image"/>
    <?php } ?>
</html>
