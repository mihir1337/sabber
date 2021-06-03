<?php 
$image = cs_get_option('image');
$mail = cs_get_option('mail');
$number = cs_get_option('number');
$address = cs_get_option('address');
$contact_shortcode = cs_get_option('contact_shortcode');
?>
<!-- contact section -->
<section class="yb-section yb-border-top" id="contact">
  <div class="yb-section-point-wrapper">
    <div class="uk-container">
      <div class="yb-section-point ">
        <sup>06</sup>
        <span>Contact</span>
      </div>
    </div>
  </div>
  <div class="uk-container">
    <div data-uk-grid="" class=" uk-grid-divider">
      <div class="yb-section-padding yb-contact-left uk-width-3-4@m">
        <div>
          <h2 class="yb-section-title uk-heading-line ">
            <span>Get in touch</span>
          </h2>
          <p class="uk-text-bold">Feel free to contact me</p>
          <?php echo do_shortcode($contact_shortcode); ?>
        </div>
      </div>
      <div class=" uk-width-1-4@m yb-section-padding yb-contact-right">
        <p class="uk-margin-medium-bottom uk-visible@m">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\src\img\empty.png"
            data-src="<?php echo wp_get_attachment_image_src($image, 'full')[0]; ?>" width="500" height="500"
            data-uk-img="" alt="" class="uk-border-circle">
        </p>
        <ul class="uk-list uk-list-divider uk-text-small yb-contact-mini">
          <li class="uk-flex uk-flex-middle">
            <span data-uk-icon="mail" class="uk-flex-none uk-text-primary "></span>
            <span><?php echo $mail; ?></span>
          </li>
          <li class="uk-flex uk-flex-middle">
            <span data-uk-icon="phone" class="uk-flex-none uk-text-primary"></span>
            <span> <?php echo $number; ?></span>
          </li>
          <li class="uk-flex uk-flex-middle">
            <span data-uk-icon="location" class="uk-flex-none uk-text-primary "></span>
            <span><?php echo $address; ?></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>