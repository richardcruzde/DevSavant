<?php

//remove_action('genesis_header','genesis_do_header');
//add_action('genesis_header','injectHeader');
add_action('genesis_header_right','therapetic_header_right');

function therapetic_header_right() { 
/*     $menu_item = !empty(get_field( 'menu_item', 'option' )) ? get_field( 'menu_item', 'option' )  : [];
    $phone = !empty($menu_item['phone']) ? $menu_item['phone'] : [];
    $email = !empty($menu_item['email']) ? $menu_item['email'] : [];
    $get_started = !empty($menu_item['get_started']) ? $menu_item['get_started'] : [];
    $button_type = !empty($menu_item['button_type']) ? $menu_item['button_type'] : [];
    $modal_info = !empty($menu_item['modal_info']) ? $menu_item['modal_info'] : []; */


    $footer = !empty(get_field( 'footer_block', 'option' )) ? get_field( 'footer_block', 'option' )  : [];
    $social_networks = !empty($footer['social_networks']) ? $footer['social_networks'] : [];
	?>
    
     <div class="menu-movil">
        <span class="icon-menu event-click-open" >
            <i class="icon-line"></i>
        </span>
        <div class="menu-list-content">
            <div class="menu-red-social-content">
                 <p>Calle Saavedra Fajardo, Num 7 Local Puerta D1 </p>
                 <?php if(!empty($social_networks )): ?>
                     <ul class="social-link-menu">
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
            </div>
            <div class="menu-main-content">
                <?php 
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                    )
                );
                ?>
            </div>
           
        </div>
    </div>

	<?php
}