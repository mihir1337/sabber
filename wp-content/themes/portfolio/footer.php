<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */
$copyright_text = cs_get_option('copyright_text');
$social_links = cs_get_option('social_links');

?>

<!-- main footer -->
<footer class="yb-main-footer-wrapper">
  <div class="waveHorizontals">
    <div id="waveHorizontal1" class="waveHorizontal" data-uk-img=""
      data-src="<?php echo get_template_directory_uri(); ?>/assets/src/img/bg/wave1.svg"></div>
    <div id="waveHorizontal2" class="waveHorizontal" data-uk-img=""
      data-src="<?php echo get_template_directory_uri(); ?>/assets/src/img/bg/wave2.svg"></div>
    <div id="waveHorizontal3" class="waveHorizontal" data-uk-img=""
      data-src="<?php echo get_template_directory_uri(); ?>/assets/src/img/bg/wave3.svg"></div>
  </div>
  <a href="#body-app" class="uk-visible@s yb-totop yb-inner-link" data-uk-totop=""></a>
  <div class="yb-main-footer">
    <div class="uk-container">
      <div data-uk-grid="" class="uk-child-width-1-2@s">
        <div class="uk-margin-remove uk-text-left@s">
          &copy; <?php echo the_time('Y'); ?> <?php echo $copyright_text; ?>
        </div>
        <?php if(!empty($social_links)) : ?>
        <div class="uk-margin-remove uk-text-right@s">
          <div class="yb-footer-social">
            <?php foreach($social_links as $social_link) : ?>
            <a
              href="<?php echo esc_url($social_link['social_link']); ?>"><?php echo esc_html($social_link['social_link_text']); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer><!-- end main footer -->

<?php wp_footer(); ?>
</body>

</html>