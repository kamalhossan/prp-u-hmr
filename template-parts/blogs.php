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
                <a href="<?php echo the_permalink();?>">
                  <div class="grid_content">
                    <div class="post_thumbs">
                      <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                    <div class="meta">
                        <?php 
                          $categories = get_the_category();
                          if ( ! empty( $categories ) ) {
                           ?> <span class='category'> <?php echo esc_html( $categories[0]->name );	?></span> <?php
                          }
                        ?>
                      <h2><?php the_title();?></h2>
                    </div>
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