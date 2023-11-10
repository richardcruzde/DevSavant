<?php 
$id = $block['id'];
$list_logo_block = !empty(get_field('list_logo_block')) ? get_field('list_logo_block') : '';  

$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$base_url = get_stylesheet_directory_uri();

?>
<?php if(!empty($list_logo_block )): 
    $title_block = !empty($list_logo_block['title_block']) ? $list_logo_block['title_block'] : '';
    $list_images = !empty($list_logo_block['list_images']) ? $list_logo_block['list_images'] : [];
    $background_image = !empty($list_logo_block['background_image']) ? 'background-image: url('.$list_logo_block['background_image'].');' : '';

 
    ?>
    <section id="<?php echo $id;  ?>" class="logo_list <?php echo $align_class; ?>" style="<?php echo $background_image; ?>" >
        <div class="container">
            <?php if($title_block != ''): ?>
                <h2><?php echo $title_block;  ?></h2>
            <?php endif; ?>
        </div>
        <div class="container container-full">
            <div class="list-logo ">
                <div class="slider-logo">
                    <?php foreach($list_images  as $item): 
                        $image_item = !empty($item['image_item']) ? $item['image_item'] : [];
                        $max_width = !empty($item['max_width']) ? 'max-width: '.$item['max_width'].'px;' : '';
                        
                    ?>
                        <?php if(!empty($image_item)): ?>
                            <div class="">
                                <figure class="figure-slider-logo">
                                    <img src="<?php echo $image_item['url']; ?>" alt="<?php echo $image_item['alt']; ?>" title="<?php echo $image_item['title']; ?>" style="<?php echo $max_width; ?>">
                                </figure>
                            </div>  
                        <?php endif;  ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        setTimeout(() => {
          
        }, 100);

    </script>
<?php endif; ?>