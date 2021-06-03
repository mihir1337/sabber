<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>

  <!-- main section -->
  <!-- <main class="yb-main-content">
    <section>
      <div class="yb-section-point-wrapper">
        <div class="uk-container">
          <div class="yb-section-point">
            <span>Blog</span>
          </div>
        </div>
      </div>
      <div class="uk-container">
        <div data-uk-grid="" class="uk-grid-divider">
          <div class="uk-width-3-4@m yb-section-padding">
            <h1 class="yb-section-title uk-heading-line"><span>Latest Articles</span></h1>
            <div data-uk-grid="" class="blog uk-grid-medium uk-child-width-1-2@s uk-margin-medium-top">
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
            <div class="uk-margin-bottom uk-margin-large-top">
              <ul class="yb-paggination uk-pagination uk-flex-center">
                <li>
                  <a href="#"><span data-uk-pagination-previous=""></span></a>
                </li>
                <li class="uk-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="uk-disabled"><span>. . .</span></li>
                <li><a href="#">24</a></li>
                <li>
                  <a href="#"><span data-uk-pagination-next=""></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="uk-width-1-4@m yb-section-padding">
            
          </div>
        </div>
      </div>
    </section>
  </main>  -->
  
  <!-- end main section -->

<?php
get_footer();
