<?php get_header(); ?>


      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Single Page Content -->
        <div class="single-page-content">
          <div class="content-area">
            <div class="page-content">
              <!-- Blog Entry Content -->
              <div class="blog-post-main-image">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'post-image img-responsive', 'title' => 'Feature image']); ?>
              </div>

              <div class="blog-post-content">
                   <center>
                    <font class="en" style="width:62%;font-size:100px;font-weight: 900;text-shadow:1px 3px 1px black;"><br>404</font>
                    <br><br>
                    <h2 style="width:70%;text-shadow:0px 1px 0px black;"><b>آسف لم نجد ما تبحث عنه</b></h2>
                    </center>    
                </div>
              </div>
            </div>
          </div>
</div>
<?php get_footer(); ?>