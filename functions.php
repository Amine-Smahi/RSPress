<?php 

function ArabicDate() {
    $months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    $your_date = date('y-m-d'); // The Current Date
    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) { $ar_month = $ar; }
    }

    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D'); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
    $current_date = $ar_day.' '.date('d').'  '.$ar_month.'  '.date('Y');
    $arabic_date = str_replace($standard , $eastern_arabic_symbols , $current_date);

    return $arabic_date;
}
function ArabicDate2() {
    $months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    $your_date = date('y-m-d'); // The Current Date
    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) { $ar_month = $ar; }
    }

    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D'); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("٠","١","٢","٣","٤","٥","٦","٧","٨","٩");
    $current_date = '<span class="day"> '.date('d').' </span><span class="month"> '.$ar_month.'  </span>';
    $arabic_date = str_replace($standard , $eastern_arabic_symbols , $current_date);

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