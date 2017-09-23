<?php 

function single_post_arabic_date($postdate_d,$postdate_d2,$postdate_m,$postdate_y) {
    $months = array("01" => "يناير", "02" => "فبراير", "03" => "مارس", "04" => "أبريل", "05" => "مايو", "06" => "يونيو", "07" => "يوليو", "08" => "أغسطس", "09" => "سبتمبر", "10" => "أكتوبر", "11" => "نوفمبر", "12" => "ديسمبر");


       $ar_month =months[$postdate_m]; 


    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = $postdate_d2;
    $ar_day = str_replace($find, $replace, $ar_day_format);

    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
    $post_date = $ar_day.' '.$postdate_d.' '.$ar_month.' '.$postdate_y;
    $arabic_date = str_replace($standard , $eastern_arabic_symbols , $post_date);

    return $arabic_date;
}
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head', 'wp_generator'); // remove wordpress version

    remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
    remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

    remove_action('wp_head', 'index_rel_link'); // remove link to index page
    remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
    remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );
// removes oembed discorvery link
remove_action('wp_head','wp_oembed_add_discovery_links', 10 );
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
function remove_yoast_license_nag_from_admin_page() {
    echo
    '<style>
		div.error {
			display: none;
		}
	</style>';
}

add_action('admin_head', 'remove_yoast_license_nag_from_admin_page');
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
return "ar_dz";
}
//Adds thumbnail to post
add_theme_support('post-thumbnails'); 

//Adds Menus
add_theme_support('menus'); 

//Register right sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));
?>