<?php 
// only put footer functions here

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'dev_footer' );


function dev_footer() {
    $base_url = get_stylesheet_directory_uri();
    
  
    $footer = !empty(get_field( 'footer_block', 'option' )) ? get_field( 'footer_block', 'option' )  : [];


    ?>
    <?php  if(!empty($footer)): 
        $logo_footer = !empty($footer['logo_footer']) ? $footer['logo_footer'] : [];
        $content_footer = !empty($footer['content_footer']) ? $footer['content_footer'] : '';
        $social_networks = !empty($footer['social_networks']) ? $footer['social_networks'] : [];
        $copyright_block = !empty($footer['copyright_block']) ? $footer['copyright_block'] : '';
   
        ?>
       <div class="footer-content">
            <div class="container">
                <?php if(!empty($logo_footer)): ?>   
                    <figure class="logo-footer">
                        <img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>"   title="<?php echo $logo_footer['alt']; ?>" >
                    </figure>
                <?php endif; ?>
                <?php if($content_footer  != ''): ?>
                    <div class="content-detail">
                        <?php echo $content_footer;  ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($social_networks )): ?>
                     <ul class="social-link-list">
                        <?php foreach($social_networks  as $item ): 
                            
                            $icon_social = !empty($item['icon_social']) ? $item['icon_social'] : '';
                            $link_footer = !empty($item['link_footer']) ? $item['link_footer'] : [];
                            
                            $url_data = '';
                            $url_data_target = '';
                            $url_data_title = '';
                            if(!empty($link_footer)){
                                $url_data = $link_footer['url'];
                                $url_data_target = $link_footer['target'];
                                $url_data_title = $link_footer['title'];
                            }
                            ?>
                            <li>
                                <a href="<?php echo $url_data; ?>"  title="<?php echo $url_data_title; ?>" target="<?php echo $url_data_target;  ?>"><i class="<?php echo $icon_social; ?>"></i></a>
                            </li>
                        <?php endforeach; ?>
                     </ul>   
                <?php endif; ?>     
                
                <div class="list-nav-menu">
                    <div class="row">
                        <div class="col-md-3">
                            <?php if(wp_get_nav_menu_name( 'menu-1-footer' )): ?>
                                <?php  
                                    wp_nav_menu( array( 
                                        'theme_location' => 'menu-1-footer', 
                                        'container' => '',
                                        'menu_class' => 'footer-menu' ) ); 
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if(wp_get_nav_menu_name( 'menu-2-footer' )): ?>
                                <?php  
                                    wp_nav_menu( array( 
                                        'theme_location' => 'menu-2-footer', 
                                        'container' => '',
                                        'menu_class' => 'footer-menu' ) ); 
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if(wp_get_nav_menu_name( 'menu-3-footer' )): ?>
                                <?php  
                                    wp_nav_menu( array( 
                                        'theme_location' => 'menu-3-footer', 
                                        'container' => '',
                                        'menu_class' => 'footer-menu' ) ); 
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if(wp_get_nav_menu_name( 'menu-4-footer' )): ?>
                                <?php  
                                    wp_nav_menu( array( 
                                        'theme_location' => 'menu-4-footer', 
                                        'container' => '',
                                        'menu_class' => 'footer-menu' ) ); 
                                ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-detail-inf-copy">
                            <?php echo $copyright_block; ?>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        
    <?php
    endif;
?>


    
<?php 
}

