<?php 
function th_year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'th_year_shortcode');
?>