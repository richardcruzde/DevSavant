<?php 
$id = $block['id'];
$tabs_services_content = !empty(get_field('tabs_services_content')) ? get_field('tabs_services_content') : '';  

$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$base_url = get_stylesheet_directory_uri();

?>
<?php if(!empty($tabs_services_content )): 
    $title_block = !empty($tabs_services_content['title_block']) ? $tabs_services_content['title_block'] : '';
    $content_block = !empty($tabs_services_content['content_block']) ? $tabs_services_content['content_block'] : '';
    $tab_list = !empty($tabs_services_content['tab_list']) ? $tabs_services_content['tab_list'] : [];
    $background_image = !empty($tabs_services_content['background_image']) ? 'background-image: url('.$tabs_services_content['background_image'].');' : '';

 
    ?>
    <section id="<?php echo $id;  ?>" class="tabs-services full-row-dev <?php echo $align_class; ?>" style="<?php echo $background_image; ?>" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-mobile-tb">
                    <div class="list-tabs-content">
                        <?php 
                        $count_item = 0;   
                            foreach($tab_list as $item): 
                                $name_content_box = !empty($item['name_content_box']) ? $item['name_content_box'] : '';
                                $content_tabs_box = !empty($item['content_tabs_box']) ? $item['content_tabs_box'] : '';
                                $image_tabs_box = !empty($item['image_tabs_box']) ? $item['image_tabs_box'] : '';
                                $class_tabs = '';
                                if($count_item == '0'):
                                    $class_tabs = 'active-item-tabs';
                                endif;
                            ?>
                                <div class="item-tabs-content <?php echo $class_tabs; ?>" id-data-tabs='data-item-<?php echo $count_item; ?>'>
                                    <div class="content-right">
                                        <?php if($name_content_box != ''): ?>
                                            <div class="icon-row-title">

                                                <h3>
                                                    <?php if(!empty($button_box)): ?>
                                                        <a href="<?php echo $button_box['url']; ?>" target="<?php echo $button_box['target']; ?>"  title="<?php echo $button_box['title']; ?>" ><?php echo $name_content_box; ?></a>
                                                    <?php else: ?> 
                                                        <?php echo $name_content_box; ?>
                                                    <?php endif; ?>
                                                </h3>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo $content_tabs_box;  ?>
                                    </div>
                                   <?php if(!empty($image_tabs_box)): ?>             
                                        <figure class="person-box">
                                            <img src="<?php echo $image_tabs_box['url']; ?>" alt="<?php echo $image_tabs_box['alt']; ?>" title="<?php echo $image_tabs_box['title']; ?>">
                                        </figure>
                                    <?php endif; ?>
                                </div>
                            <?php $count_item++; ?>
                            <?php endforeach; ?>
                    </div>    
                </div>
                <div class="col-md-6 order-mobile-ta">
                    <div class="inner-list-tabs">
                        <?php if($title_block != ''): ?>
                            <h2><?php echo $title_block; ?></h2>
                        <?php endif; ?>
                        <?php echo $content_block; ?>
                        <div class="ul-list-items">
                            <?php 
                             $count_item = 0;   
                            foreach($tab_list as $item): 
                                    $title_box = !empty($item['title_box']) ? $item['title_box'] : '';
                                    $button_box = !empty($item['button_box']) ? $item['button_box'] : [];
                                    $class_tabs = '';
                                    if($count_item == '0'):
                                        $class_tabs = 'active-item-data';
                                    endif;
                                ?>
                                    <div class="li-item-data click-event-rt <?php echo $class_tabs; ?>" item-data-id="<?php echo $count_item;  ?>">
                                        <div class="icon-row-title">
                                            <h3><?php echo $title_box;  ?></h3>
                                        </div>
                                        <div class="link">
                                            <?php if(!empty($button_box)): ?>
                                                <a href="<?php echo $button_box['url']; ?>" target="<?php echo $button_box['target']; ?>" class="button"  title="<?php echo $button_box['title']; ?>" >See more </a>
                                            <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                <?php $count_item++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <script>
        jQuery('#<?php echo $id; ?> .click-event-rt').click(function(){
             var id_item = jQuery(this).attr('item-data-id');
             jQuery('#<?php echo $id; ?> .click-event-rt').removeClass('active-item-data');
             jQuery(this).addClass('active-item-data');
             jQuery('#<?php echo $id; ?> .item-tabs-content').removeClass('active-item-tabs');
             jQuery('#<?php echo $id; ?> div[id-data-tabs="data-item-'+id_item+'"]').addClass('active-item-tabs');
        });
        jQuery('#<?php echo $id; ?> .click-event-rt').hover(function(){
             var id_item = jQuery(this).attr('item-data-id');
             jQuery('#<?php echo $id; ?> .click-event-rt').removeClass('active-item-data');
             jQuery(this).addClass('active-item-data');
             jQuery('#<?php echo $id; ?> .item-tabs-content').removeClass('active-item-tabs');
             jQuery('#<?php echo $id; ?> div[id-data-tabs="data-item-'+id_item+'"]').addClass('active-item-tabs');
        });
    </script>
<?php endif; ?>