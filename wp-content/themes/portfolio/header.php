<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */
$firstname = cs_get_option('firstname');
$lasttname = cs_get_option('lasttname');
$favicon = cs_get_option('favicon');
$social_icons = cs_get_option('social_icons');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#05182c">
  <link rel="shortcut icon" href="<?php echo wp_get_attachment_image_src($favicon, 'full')[0]; ?>">

  <!-- css -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap">
  <?php wp_head(); ?>
</head>

<body id="body-app" <?php body_class(); ?>>
  <!-- page loader -->
  <div id="pageloader" class="yb-pageloader-wrapper">
    <div class="uk-position-center  uk-text-center">
      <div data-uk-spinner=""></div>
    </div>
  </div><!-- end page loader -->
  <!-- main header -->
  <header class="yb-main-header" id="main-header">

    <!-- home section -->
    <div class="yb-full-height " id="home">
      <section class="yb-profile-desc">
        <div class="yb-section-point-wrapper" data-uk-parallax="opacity: 1, 0;">
          <div class="uk-container">
            <div class="yb-section-point">
              <sup>01</sup>
              <span>welcome</span>
            </div>
          </div>
        </div>
        <div class="yb-graphics">
          <div class="yb-graphic-1" data-uk-parallax="blur: 0,30;"></div>
          <div class="yb-graphic-2" data-uk-parallax="blur: 0,30;"></div>
        </div>
        <div class="uk-container uk-text-center yb-profile-desc-wrap uk-position-relative">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\src\img\x1.png" alt="" width="60">
          <h1 class="uk-text-bold"><span><?php echo $firstname; ?></span> <span><?php echo $lasttname; ?></span></h1>
          <div class="uk-text-bold yb-myjob">
            Im a <span id="typed" class="typed"></span>
          </div>
        </div>
      </section>
    </div><!-- end home section -->

    <!-- main menu -->
    <nav class="yb-main-menu " id="main-menu">
      <div class="uk-container" data-uk-navbar="">
        <div class="uk-navbar-left">
          <a class="yb-logo uk-navbar-item uk-logo"
            href="<?php echo site_url('/'); ?>"><span><?php echo $firstname; ?></span></a>
        </div>
        <div class="uk-navbar-right uk-hidden@m">
          <a class="uk-navbar-toggle" href="#" id="btn-menu-toggle">
            <span data-uk-navbar-toggle-icon="" class="yb-icon-menu"></span>
            <span data-uk-icon="close" class="yb-icon-close"></span>
          </a>
        </div>
        <div class="yb-menu-toggle-wrapper" id="menucollapse">
          <div class="uk-navbar-center">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'menu',
                    'items_wrap'    => '<ul class="uk-navbar-nav" data-uk-scrollspy-nav="closest: li; scroll: false; offset: 79 ">%3$s</ul>',
                    'container_id'   => '',
                    'walker'         => new MainMenu_Walker()
                ) );
						?>

            
          </div>
          <?php if(!empty($social_icons)) : ?>
          <div class="uk-navbar-right">
            <ul class="uk-navbar-nav yb-social-icons">
              <?php foreach($social_icons as $social_icon) : ?>
              <li>
                <a href="<?php echo esc_url($social_icon['social_link']); ?>">
                  <span class="uk-icon " data-uk-icon="icon: <?php echo esc_attr($social_icon['social_icon']); ?>"></span>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>                      
        </div>
      </div>
    </nav><!-- end main menu -->
  </header><!-- end main header -->