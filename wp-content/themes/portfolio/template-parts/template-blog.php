 <!-- blog section -->
 <!-- <section class="yb-section yb-section-padding" id="blog">
     <div class="yb-section-point-wrapper">
         <div class="uk-container">
             <div class="yb-section-point">
                 <sup>05</sup>
                 <span>Blog</span>
             </div>
         </div>
     </div>
     <div class="uk-container">
         <h2 class="yb-section-title uk-heading-line"><span>Latest News</span></h2>
         
         <div data-uk-grid="" class="blog uk-grid-medium yb-margin-top-1 yb-margin-bottom-2">
             <?php
                $args = array( 
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                $featured_query = new WP_Query( $args ); 
                while ( $featured_query->have_posts() ) : $featured_query->the_post();
            ?>
             <div class="uk-width-1-3@m uk-width-1-2@s single-blog">
                 <a href="<?php the_permalink(); ?>">
                     <div class="yb-blog-item uk-background-cover"
                         data-src="<?php the_post_thumbnail_url(); ?>"
                         data-uk-img="">
                         <div class="uk-overlay uk-position-cover"> </div>
                         <div class="uk-overlay uk-position-top blog-meta">
                            <?php 
                                $categories = get_categories();
                                foreach ($categories as $category) {
                                    echo '<span class="uk-badge">'.$category->name.' </span>';
                                }
                            ?>
                         </div>
                         <div class="uk-overlay uk-position-bottom">
                             <h5 class="yb-blog-item-title uk-text-truncate"><?php the_title() ?></h5>
                             <div class="yb-blog-item-meta">
                                 <div>
                                     <span><?php the_time('j F, Y') ?></span>
                                 </div>
                                 <div>
                                     <span data-uk-icon="comment"></span> <?php echo get_comments_number(); ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
             <?php endwhile; wp_reset_postdata(); ?>
         </div>

         <h5 class="uk-heading-line uk-text-right uk-text-bold">
             <a href="<?php echo site_url() ?>/blog" class="uk-link-heading">See More
                 <span data-uk-icon="icon:arrow-right; ratio: 2"></span>
             </a>
         </h5>
     </div>
 </section> -->
 
 <!-- end blog section -->