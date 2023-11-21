<?php 
$id = $block['id'];
$counter_square = !empty(get_field('counter_square')) ? get_field('counter_square') : '';  

$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$base_url = get_stylesheet_directory_uri();

?>
<?php if(!empty($counter_square )): 
    $title_block = !empty($counter_square['title_block']) ? $counter_square['title_block'] : '';
    $content_block = !empty($counter_square['content_block']) ? $counter_square['content_block'] : '';
    $square_list = !empty($counter_square['square_list']) ? $counter_square['square_list'] : [];
    $background_image = !empty($counter_square['background_image']) ? 'background-image: url('.$counter_square['background_image'].');' : '';

 
    ?>
    <section id="<?php echo $id;  ?>" class="counter-square full-row-dev <?php echo $align_class; ?>" style="<?php echo $background_image; ?>" >
       <div class="container">
            <div class="main-title">
                <?php if($title_block  != ''): ?>
                    <h2><?php echo $title_block;  ?></h2>
                <?php endif;  ?>
                <?php echo $content_block;  ?>
            </div>
            <div class="list-counter-data">
                 <div class="row">
                    <?php foreach($square_list as $item): 
                        $item_counter_after = !empty($item['item_counter']) ? $item['item_counter'] : '';
                        $number_item = !empty($item['number_item']) ? $item['number_item'] : '0';
                        $item_counter_before = !empty($item['item_counter_before']) ? $item['item_counter_before'] : '';
                        $detail_counter = !empty($item['detail_counter']) ? $item['detail_counter'] : [];
                        
                        ?>
                        <div class="col-md-4">
                            <div class="box-counter-inf">
                                <div class="inner-scuare-counter">
                                    <div class="col-number-information">
                                        <span class="inf-number-after"><?php echo $item_counter_after; ?></span>
                                        <span class="inf-number count" counter-data="<?php echo $number_item; ?>"><?php echo 0; ?></span>
                                        <span class="inf-number-before"><?php echo $item_counter_before; ?></span>
                                    </div>

                                    <div class="col-detail-information">
                                       
                                            <?php echo $detail_counter; ?>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>  
                </div>   

            </div>
      </div>
    </section>
   
<?php endif; ?>