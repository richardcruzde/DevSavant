<?php 
$content = get_the_content();
if( $content ):
    ?>
    <div class="page-block-content entry-content">
            <?php echo apply_filters( 'the_content', $content); ?>
</div>

    <?php
endif;


?>