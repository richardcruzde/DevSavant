<?php 
$id = $block['id'];
$contact_us_block = !empty(get_field('contact_us_block')) ? get_field('contact_us_block') : '';  

$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$base_url = get_stylesheet_directory_uri();

?>
<?php if(!empty($contact_us_block )): 
    $title_block = !empty($contact_us_block['title_block']) ? $contact_us_block['title_block'] : '';
    $id_form = !empty($contact_us_block['id_form']) ? $contact_us_block['id_form'] : '';
    $background_image = !empty($contact_us_block['background_image']) ? 'background-image: url('.$contact_us_block['background_image'].');' : '';
    $image_block = !empty($contact_us_block['image_block']) ? $contact_us_block['image_block'] : [];
    $max_width_image = !empty($contact_us_block['max_width_image']) ? 'max-width:'.$contact_us_block['max_width_image'].'px;' : '';
 
    
    $remove_space_top_mobile = !empty($contact_us_block['remove_space_top']) ? $contact_us_block['remove_space_top'] : '1';
    $paddint_bottom_mobile = !empty($contact_us_block['paddint_bottom_mobile']) ? $contact_us_block['paddint_bottom_mobile'] : '1';

    $class_top = '';
    if($remove_space_top_mobile == '2'){
        $class_top = 'space-mobile-bt-2';

    }
    $class_bottom = '';

    if($paddint_bottom_mobile == '2'){
        $class_bottom = 'space-mobile-bb-2';

    }
    ?>
    <section id="<?php echo $id;  ?>" class="contact-us-prefooter  <?php echo $class_top; ?> <?php echo $class_bottom; ?> full-row-dev <?php echo $align_class; ?>" style="<?php echo $background_image; ?>" >
       <div class="container">
           <div class="row">
                <div class="col-md-5 figure-content-pr">
                    <?php if(!empty($image_block)): ?>
                        <figure class="" style="<?php echo $max_width_image; ?>">
                            <img src="<?php echo $image_block['url'];  ?>" alt="<?php echo $image_block['alt'];  ?>" title="<?php echo $image_block['utitlerl'];  ?>">
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="col-md-7 col-form-order">
                    <div class="inner-form">
                        <?php if($title_block  != ''): ?>
                            <h2><?php echo $title_block;  ?></h2>
                        <?php endif;  ?>
                        <div class="content-form-contact-us">
                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice" theme="gravity-theme"]') ?>
                        </div>
                    </div>
                    
                </div>
           </div>
      </div>
    </section>
   
<?php endif; ?>