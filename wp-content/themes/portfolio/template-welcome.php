<?php 
/*
Template Name: Homepage
*/

get_header();
?>

<!-- main section -->
<main class="yb-main-content">
  <?php get_template_part('template-parts/template-about'); ?>
  <?php get_template_part('template-parts/template-resume'); ?>
  <?php get_template_part('template-parts/template-portfolio'); ?>
  <?php get_template_part('template-parts/template-blog'); ?>
  <?php get_template_part('template-parts/template-contact'); ?>
</main> <!-- end main section -->

<?php get_footer();