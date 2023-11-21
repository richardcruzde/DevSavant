<?php 
$id =  $block['id'];
$base_url = get_stylesheet_directory_uri();
$align_class = !empty($block['align']) ? 'align' . $block['align'] : '';
$height_desktop = get_field('height_desktop') ? get_field('height_desktop') : '';  
$height_table = get_field('height_table') ? get_field('height_table') : '';  
$height_mobile = get_field('height_mobile') ? get_field('height_mobile') : '';  

?>

<div class="separated-element <?php echo $align_class;  ?> <?php echo $class_space_padding; ?>" id="<?php echo $id; ?>" data-section="separated_element">

</div>


<style>
    <?php if($height_desktop != '') : ?>
        #<?php echo $id; ?>.separated-element{
            padding-top: <?php echo $height_desktop.'px'; ?>;
        }
    <?php endif; ?>
    <?php if($height_table != '') : ?>
        @media(max-width: 992px){
            #<?php echo $id; ?>.separated-element{
                padding-top: <?php echo $height_table.'px'; ?>;
            }
        }
    <?php endif; ?>
    <?php if($height_mobile != '') : ?>
        @media(max-width: 768px){
            #<?php echo $id; ?>.separated-element{
                padding-top: <?php echo $height_mobile.'px'; ?>;
            }
        }
    <?php endif; ?>
</style>