<div class="csk_blogs_section">
        <div class="row">
          <div class="grid_layout">
        <?php
              // adding features categorys post query here
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              query_posts('post_type=post&post_status=publish&posts_per_page=3&order=DESC&paged='. $paged);
              if(have_posts()) :
                while (have_posts()) : the_post();
              ?>
                <div class="grid_column">
                  <a href="<?php echo the_permalink(); ?>">
                    <div class="content">
                      <div class="post_thumbs">
                        <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                      </div>
                      <div class="grid_post_meta">
                        <h1>testing from ftp</h1>
                      </div>
                      <h2 class="grid_post_title">
                        <a href="<?php echo the_permalink(); ?>"> <?php the_title(); ?></a>
                      </h2>
                    </div>
                  </a>
                </div>  
      <?php
      endwhile;
      endif;
      wp_reset_query();
     ?>
   </div>  
  </div>    
</div>
<?php