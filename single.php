<!DOCTYPE html>
<html dir="rtl" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
      <?php wp_head(); ?>
      <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>images/favicon.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="https://cdn.rawgit.com/Amine-Smahi/CDN/765d7683/styles-2.css" type="text/css">
      <link rel="prefetch" type="text/css" onload="this.rel='stylesheet'" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   </head>
   <body class="material-template" data-js="open">
      <!-- Loading animation -->
      <div class="preloader">
         <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
         </div>
      </div>
      <!-- /Loading animation -->
      <div id="page" class="page">
         <!-- Header -->
         <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
               <div class="site-title-block mobile-hidden">
                  <div class="site-title"><span> أمين </span> سماحي </div>
               </div>
               <!-- Navigation -->
               <div class="site-nav">
                  <!-- Main menu -->
                  <ul id="nav" class="site-main-menu">
                     <li>
                        <a class="pt-trigger" href="../index.php#contact"> إتصل بي </a>
                     </li>
                     <li>
                        <a class="pt-trigger" href="../index.php#blog"> المدونة </a>
                     </li>
                     <li>
                        <a class="pt-trigger" href="../index.php#portfolio"> المشاريع </a>
                     </li>
                     <li>
                        <a class="pt-trigger" href="../index.php#services"> الخدمات </a>
                     </li>
                     <li>
                        <a class="pt-trigger" href="../index.php#resume"> السيرة الذاتية </a>
                     </li>
                     <li>
                        <a class="pt-trigger" href="../index.php#home"> الرئيسية </a>
                     </li>
                  </ul>
                  <!-- /Main menu -->
               </div>
               <!-- Navigation -->
            </div>
         </header>
         <!-- /Header -->
         <!-- Mobile Header -->
         <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
               <div class="mobile-site-title"> أمين سماحي </div>
            </div>
            <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
            </a>
         </div>
         <!-- /Mobile Header -->
         <ul id="social_side_links">
            <li><a style="background-color: #3c5a96;" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>images/social/fb.png" alt="" /></a></li>
            <li><a style="background-color: #1dadeb;" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>images/social/twitter.png" alt="" /></a></li>
            <li><a style="background-color: #1178b3;" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>images/social/linkedin.png" alt="" /></a></li>
            <li><a style="background-color: #DC4A38;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
               '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>images/social/gplus.png" alt="" /></a></li>
         </ul>
         <div class="popup">
            <form id="contact-form" method="post" action="#">
               <div class="controls">
                  <i id="icon-round" class="fa fa-fw fa fa-envelope"></i>
                  <p class="small-text"> إشترك حتى يصلك كل جديد من مقالات و نصائح و تستفيد من الدورات القادمة في مجال البرمجة و التطوير </p>
                  <div  class="form-group form-group-with-icon">
                     <i class="fa fa-envelope"></i>
                     <label> الإيمايل </label>
                     <input  id="form_email" type="email" name="email" class="form-control" placeholder required="required" data-error="Valid email is required.">
                     <div class="form-control-border"></div>
                     <div class="help-block with-errors"></div>
                  </div>
                  <input style="margin-bottom:8px;" type="submit" class="button btn-send" value=" إرسل الرسالة ">
                  <button name="close"> ربما لاحقا </button>
               </div>
            </form>
         </div>
         <!-- Main Content -->
         <div id="main" class="site-main">
            <!-- Single Page Content -->
            <?php while(have_posts()) : the_post(); ?>
            <div class="single-page-content">
               <div class="content-area">
                  <div class="page-content">
                     <!-- Blog Entry Content -->
                     <div class="blog-post-main-image">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'post-image img-responsive', 'title' => 'Feature image']); ?>
                     </div>
                     <div class="blog-post-content">
                        <h1>
                           <center><?php the_title(); ?></center>
                        </h1>
                        <div class="entry-meta">
                           <span class="date"><i class="fa fa-fw fa-clock-o"></i>  تاريخ صدور المقال <?php
                              $postdate_d = get_the_date('d'); 
                              $postdate_d2 = get_the_date('D');
                              $postdate_m = get_the_date('m');
                              $postdate_y = get_the_date('Y');                                
                              
                              echo single_post_arabic_date($postdate_d,$postdate_d2, $postdate_m, $postdate_y);
                                    ?></span>
                        </div>
                        <div class="container"></div>
                        <p><?php the_content('Read More'); ?></p><br>
                         <p>

<div id="share">
  <!-- facebook -->
  <a class="facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="blank"><i class="fa fa-facebook"></i></a>

  <!-- twitter -->
  <a class="twitter" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="blank"><i class="fa fa-twitter"></i></a>

  <!-- google plus -->
  <a class="googleplus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
               '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="blank"><i class="fa fa-google-plus"></i></a>

  <!-- linkedin -->
  <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="blank"><i class="fa fa-linkedin"></i></a>
</div>
                         </p>
                        <div class="entry-meta entry-tags-share">
                           <ul class="tags">
                              <?php
                                 $posttags = get_the_tags();
                                 if ($posttags) {
                                   foreach($posttags as $tag) {
                                     echo '<li class="en" >'.$tag->name . '</li> '; 
                                   }
                                 }
                                 ?>
                           </ul>
                        </div>
                     </div>
                     <!-- End of Blog Entry Content -->   
                  </div>
               </div>
               <?php $orig_post = $post;
                  global $post;
                  $tags = wp_get_post_tags($post->ID);
                  if ($tags) {
                  $tag_ids = array();
                  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                  $args=array(
                  'tag__in' => $tag_ids,
                  'post__not_in' => array($post->ID),
                  'posts_per_page'=>3, // Number of related posts that will be shown.
                  'caller_get_posts'=>1
                  );
                  $my_query = new wp_query( $args );
                  if( $my_query->have_posts() ) {
                          echo ' <div class="single-page-content">
                                    <div class="content-area">
                                        <div class="page-content">
                                       <h1><center> المزيد من التدوينات </center></h1><br>
                                          <div class="blog-masonry three-columns">';
                  
                  
                  
                  while( $my_query->have_posts() ) {
                  $my_query->the_post(); ?>
               <div class="item">
                  <div class="blog-card">
                     <div class="media-block">
                        <a href="<?php the_permalink(); ?>">
                           <div class="post-image img-responsive">
                              <?php the_post_thumbnail('full'); ?>
                           </div>
                           <div class="mask"></div>
                           <div class="post-date">
                              <span class="day">6</span><span class="month">Dec</span><!--<span class="year">2016</span>-->
                           </div>
                        </a>
                     </div>
                     <div class="post-info">
                        <ul class="category">
                           <li><a href="#">Travel</a></li>
                        </ul>
                        <a href="<?php the_permalink(); ?>">
                           <h4 class="blog-item-title"><?php the_title(); ?></h4>
                        </a>
                     </div>
                  </div>
               </div>
               <?php }     }      }
                  $post = $orig_post;
                  wp_reset_query();?>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      </div>
      </div>
      <!-- End of Single Page Content -->
      </div>
      <!-- /Main Content -->
<div id='fixedban' style='width:100%;margin:auto;text-align:center;float:none;overflow:hidden;display:scroll;position:fixed;bottom:0;z-index:999;-webkit-transform:translateZ(0);'> <div><a id='close-fixedban' onclick='document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;' style='cursor:pointer;'><img alt='close' src='http://1.bp.blogspot.com/-_A83iDM6JYc/VhtxROLILrI/AAAAAAAADK4/aM4ikIA6aqI/s1600/btn_close.gif' style='vertical-align:middle;' title='close button'/></a></div> <div style='text-align:center;display:block;max-width:728px;height:auto;overflow:hidden;margin:auto'> <a href='رابط الموقع هنا' target='_blank' title='Ads Banner'><img alt='Ads banner' src='http://amine-smahi.my-style.in/images/ads_banner.png' style='max-width:100%;height:auto;vertical-align:middle;'/></a> </div> </div>
      <?php get_footer(); ?>