<?php 
$clients = cs_get_option('clients');
$counters = cs_get_option('counters');
?>
<!-- portfolio section -->
  <section class="yb-section  uk-overflow-hidden" id="portfolio">
      <div class="yb-section-point-wrapper">
          <div class="uk-container">
              <div class="yb-section-point">
                  <sup>04</sup>
                  <span>Portfolio</span>
              </div>
          </div>
      </div>
      <div class="uk-container ">
          <div data-uk-grid="" class="uk-grid-divider">
              <div class="uk-width-1-4@s uk-visible@s uk-margin-large-bottom yb-section-padding-top"
                  id="portfolio-nav-wrapper">
                  <div data-uk-sticky="bottom: #portfolio-nav-wrapper; offset: 100; media: 650">
                      <ul class="yb-nav-left uk-tab-left uk-tab"
                          data-uk-scrollspy-nav="closest: li; scroll: false; offset: 120">
                          <li class="uk-active">
                              <a href="#myworks" class="yb-inner-link" data-offset="120">
                                  <span data-uk-icon="minus"></span>
                                  My Works
                              </a>
                          </li>
                          <li>
                              <a href="#pricing" class="yb-inner-link" data-offset="120">
                                  <span data-uk-icon="minus"></span>
                                  Pricing
                              </a>
                          </li>
                          <li>
                              <a href="#testi" class="yb-inner-link" data-offset="120">
                                  <span data-uk-icon="minus"></span>
                                  Testimonial
                              </a>
                          </li>
                          <li>
                              <a href="#client" class="yb-inner-link" data-offset="120">
                                  <span data-uk-icon="minus"></span>
                                  Clients
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="uk-width-expand@s yb-section-padding-top">
                  <div>
                      <h2 class="yb-section-title uk-heading-line " id="myworks"><span>My Works</span></h2>
                      <div data-uk-filter="target: .js-filter" class="yb-margin-top-1 yb-margin-bottom-1">

                          <ul class="yb-nav-filter uk-subnav uk-subnav-pill ">
                              <li><a data-uk-filter-control="">All</a></li>
                              <?php 
                                    $pargs = array (
                                        'post_type' => 'portfolio',
                                        'post_per_page' => -1,
                                        'post_status' => 'publish',
                                        'order' => 'ASC',
                                    );

                                    $pfolio = new WP_query($pargs);
                                    if ($pfolio->have_posts()) {
                                        $cats= get_terms('portfolio_categories');
                                        if(!empty($cats) && !is_wp_error( $cats )){
                                        
                                        foreach($cats as $cat){
                                            echo '<li><a data-uk-filter-control=".'.$cat->slug.'">'.$cat->name.'</a></li>';
                                        }
                                    }
                                ?>
                          </ul>

                          <ul class="js-filter uk-child-width-1-2  uk-grid-small  " data-uk-grid=""
                              data-uk-lightbox="animation: fade;  toggle: .yb-lightbox">
                            <?php
                                while($pfolio->have_posts()) : $pfolio->the_post(); 
                                $idd = get_the_ID();
                                if(get_post_meta($idd, 'portfolio_options', true)){
                                    $portfolio_options = get_post_meta($idd, 'portfolio_options', true);
                                }else {
                                    $portfolio_options = array();
                                }
                                $portfolio_cats = get_the_terms( $idd, 'portfolio_categories' );
                                                
                                if (!empty($portfolio_cats) && !is_wp_error($portfolio_cats)) {
                            
                                $portfolio_catlist = array();
                            
                                foreach ( $portfolio_cats as $portfolio_cat ) {
                                    $portfolio_catlist[] = $portfolio_cat->slug;
                                }

                                $port_cats = join( " ", $portfolio_catlist );

                                } else {
                                $port_cats = '';
                                }
                            
                            ?>
                              <li class="<?php echo esc_html($port_cats); ?>">
                                  <div class="yb-work-item uk-transition-toggle">
                                      <div class="yb-work-item-img-wrap">
                                          <div class="yb-work-item-img">
                                              <img src="<?php echo get_template_directory_uri(); ?>\assets\src\img\empty.png"
                                                  width="383" height="574"
                                                  data-src="<?php the_post_thumbnail_url('large'); ?>"
                                                  class="uk-transition-scale-up uk-transition-opaque" alt=""
                                                  data-uk-img="">
                                          </div>
                                          <div
                                              class="yb-work-item-overlay uk-transition-fade uk-position-cover uk-position-small uk-overlay  uk-flex uk-flex-center uk-flex-middle">
                                              <div>
                                                  <a href="<?php the_post_thumbnail_url(); ?>"
                                                      class="yb-lightbox uk-transition-slide-left"
                                                      data-caption="Caption Title Web">
                                                      <span data-uk-icon="icon:plus; ratio:1.2"></span>
                                                  </a>
                                                  <a href="<?php echo $portfolio_options['portfolio_link']; ?>"
                                                      class="uk-transition-slide-right show-portfolio">
                                                      <span data-uk-icon="icon:link; ratio:1.2"></span>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="<?php echo $portfolio_options['portfolio_link']; ?>" class="show-portfolio">
                                          <div class="yb-work-item-title">
                                              <h5><?php the_title(); ?></h5>
                                              <span><?php the_tags( '', ', ', '' ); ?></span>
                                          </div>
                                      </a>
                                  </div>
                              </li>
                              <?php
                                endwhile;
                                    wp_reset_postdata();
                                }
                                else {
                                    echo __('Post not Found', 'devfive');
                                }
                            ?>
                          </ul>

                          <div id="show-portofolio-details" class="uk-modal-full" data-uk-modal="">
                              <div class="uk-modal-dialog ">
                                  <button class="uk-modal-close-full uk-close-large" type="button"
                                      data-uk-close=""></button>
                                  <div id="portofolio-details" data-uk-height-viewport=""
                                      class="uk-animation-toggle uk-overflow-hidden">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="pricing">
                      <h2 class="yb-section-title uk-heading-line "><span>Pricing</span></h2>
                      <div class="yb-margin-top-1 yb-margin-bottom-2">
                          <div data-uk-grid=""
                              class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-1 uk-grid-medium">
                              <?php
                                global $post;
                                $args = array( 'posts_per_page' => 3, 'post_type'=> 'pricing', 'orderby' => 'menu_order', 'order' => 'ASC' );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) : setup_postdata($post); 
                                $idd = get_the_ID();
                                $pricing_options = get_post_meta($idd, 'pricing_options', true);
                            ?>
                              <div>
                                  <div class="yb-pricing-item">
                                      <div class="uk-card">
                                          <div class="uk-card-header">
                                              <h4><?php the_title(); ?></h4>
                                              <div class="yb-pricing-item-price">
                                                  <strong>$ <?php echo $pricing_options['pricing_price']; ?></strong>
                                                  <span>/h</span>
                                              </div>
                                          </div>
                                          <div class="uk-card-body">
                                              <small class="uk-text-muted">Details:</small>
                                              <ul class="uk-list  uk-list-divider uk-text-small">
                                                  <?php the_content(); ?>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php endforeach; wp_reset_query(); ?>
                          </div>
                      </div>
                  </div>
                  <div>
                      <h2 class="yb-section-title uk-heading-line " id="testi"><span>Testimonial</span></h2>
                      <div data-uk-slider="">
                          <div class="yb-margin-top-1 yb-margin-bottom-2">
                              <div data-uk-grid="" class="uk-grid-small">
                                  <div class="uk-width-expand">
                                      <div class="uk-slider-container">
                                          <ul class="yb-slider-items uk-slider-items uk-child-width-1-1">
                                          <?php
                                                global $post;
                                                $args = array( 'posts_per_page' => -1, 'post_type'=> 'testimonial', 'orderby' => 'menu_order', 'order' => 'ASC' );
                                                $myposts = get_posts( $args );
                                                foreach( $myposts as $post ) : setup_postdata($post); 
                                                $idd = get_the_ID();
                                                $testimonial_options = get_post_meta($idd, 'testimonial_options', true);
                                            ?>
                                              <li>
                                                  <div class="yb-testi-item">
                                                      <div class="yb-testi-item-desc">
                                                          <?php the_content(); ?>
                                                      </div>
                                                      <div class="yb-testi-item-img">
                                                          <div data-uk-grid="" class="uk-flex-middle uk-grid-small">
                                                              <div>
                                                                  <img src="<?php echo get_template_directory_uri(); ?>\assets\src\img\empty.png"
                                                                      width="300" height="300"
                                                                      data-src="<?php the_post_thumbnail_url(); ?>"
                                                                      alt="" data-uk-img="">
                                                              </div>
                                                              <div class="uk-text-bold uk-text-small">
                                                                  <span><?php the_title(); ?></span>
                                                                  <span data-uk-icon="minus"></span>
                                                                  <span><?php echo $testimonial_options['testimonial_authore']; ?></span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li>
                                              <?php endforeach; wp_reset_query(); ?>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="uk-width-auto">
                                      <div class="yb-testi-nav">
                                          <a href="#" data-uk-slider-item="next">
                                              <span data-uk-icon="arrow-right"></span>
                                          </a>
                                          <a href="#" data-uk-slider-item="previous">
                                              <span data-uk-icon="arrow-left"></span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php if(!empty($clients)) : ?>
                  <div>
                      <h2 class="yb-section-title uk-heading-line " id="client"><span>Clients</span></h2>
                      <div class="yb-margin-top-1 yb-margin-bottom-2">
                          <div data-uk-grid="" class="uk-child-width-1-6@m uk-child-width-1-3">
                            <?php foreach($clients as $client) : ?>
                            <div>
                                <div class="yb-client-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>\assets\src\img\empty.png"
                                        width="300" height="300"
                                        data-src="<?php echo wp_get_attachment_image_src($client['client_img'], 'full')[0]; ?>"
                                        alt="" class="uk-border-rounded" data-uk-img="">
                                </div>
                            </div>
                            <?php endforeach; ?>
                          </div>
                      </div>
                  </div>
                  <?php endif; ?>
              </div>
          </div>
      </div>
    <?php if(!empty($counters)) : ?>
      <div class="yb-border-top yb-border-bottom">
          <div class="uk-container">
              <div data-uk-grid="" class="yb-box-services uk-child-width-1-4@l uk-child-width-1-2 uk-text-center uk-grid-divider">
                <?php foreach($counters as $counter) : ?>
                  <div>
                      <div class="yb-box-fact">
                          <div class="yb-box-fact-count uk-h3"><?php echo $counter['counter_count']; ?></div>
                          <span class="yb-box-fact-desc "><?php echo $counter['counter_title']; ?></span>
                      </div>
                  </div>
                <?php endforeach; ?>
              </div>
          </div>
      </div>
    <?php endif; ?>
  </section><!-- end portfolio section -->