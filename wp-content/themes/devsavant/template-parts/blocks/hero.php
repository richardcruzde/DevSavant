<?php 
$id = $block['id'];
$hero_block = !empty(get_field('hero_block')) ? get_field('hero_block') : '';  

$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$base_url = get_stylesheet_directory_uri();

?>
<?php if(!empty($hero_block )): 
    
    $title_block = !empty($hero_block['title_block']) ? $hero_block['title_block'] : '';
    $content_hero = !empty($hero_block['content_hero']) ? $hero_block['content_hero'] : '';
    $button_hero = !empty($hero_block['button_hero']) ? $hero_block['button_hero'] : '';
    $background_image = !empty($hero_block['background_image']) ? 'background-image: url('.$hero_block['background_image'].');' : '';
    $image_hero = !empty($hero_block['image_hero']) ? $hero_block['image_hero'] : [];
    $curved_image = !empty($hero_block['curved_image']) ? 'background-image: url('.$hero_block['curved_image'].');'  : '';
    $curved_image_mobile = !empty($hero_block['curved_image_mobile']) ? 'background-image: url('.$hero_block['curved_image_mobile'].')!important;'  : '';
    
    ?>
    <section id="<?php echo $id;  ?>" class="hero-page full-row-dev <?php echo $align_class; ?>" style="<?php echo $background_image; ?>">
        <div class="curve-img-hero" style="<?php echo $curved_image; ?>">
        </div>
        
        <div class="container">
            <div class="inner-detail-hero">
                <?php  if($title_block){  ?>
                    <h1><?php echo $title_block;  ?></h1>
                <?php } ?>
                <?php echo $content_hero; ?>
                <?php if(!empty( $button_hero )): ?>
                    <a href="<?php echo $button_hero['url'];  ?>" target="<?php echo $button_hero['target'];  ?>"  title="<?php echo $button_hero['title'];  ?>" class="button"><?php echo $button_hero['title'];  ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($image_hero)): ?>
            <div class="img-person-col">
                <img src="<?php echo $image_hero['url']; ?>" alt="<?php echo $image_hero['alt']; ?>" title="<?php echo $image_hero['title']; ?>">
            </div>
        <?php endif; ?>
    </section>
    <style>
        @media(max-width: 768px){
            .hero-page#<?php echo $id;  ?>{
                <?php echo $curved_image_mobile; ?>
            }
        }
    </style>
<?php endif; ?>