<?php 
$about_img = cs_get_option('about_img');
$about_text = cs_get_option('about_text');
$personal_infos = cs_get_option('personal_infos');
$services = cs_get_option('services');
?>

<!-- about section -->
<section id="about" class="yb-section">
    <div class="yb-my-profile">
        <div class="uk-container">
            <div class="uk-grid-collapse uk-child-width-expand@m" data-uk-grid="">
                <div>
                    <div class="yb-my-profile-img uk-background-cover uk-background-norepeat uk-background-top-center"
                        data-src="<?php echo wp_get_attachment_image_src($about_img, 'full')[0]; ?>" data-uk-img=""
                        data-uk-lightbox="">
                        <a href="https://www.youtube.com/watch?v=uQBL7pSAXR8" class="yb-my-intro">
                            <span data-uk-icon="icon: play; ratio: 2"></span>
                            <span class="yb-my-intro-text">Introduction</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="yb-my-profile-desc">
                        <div class="yb-section-point-wrapper">
                            <div class="yb-section-point right">
                                <sup>02</sup>
                                <span>About</span>
                            </div>
                        </div>
                        <div class="yb-my-profile-desc-top">
                            <h2 class="yb-section-title">Hello There!</h2>
                            <p>
                                <?php echo $about_text; ?>
                            </p>
                        </div>
                        <?php if(!empty($personal_infos)) : ?>
                        <div class="yb-my-profile-desc-bottom yb-bg-soft">
                            <ul class="yb-my-profile-desc-info uk-list">
                                <?php foreach($personal_infos as $personal_info) : ?>
                                <li>
                                    <span><?php echo esc_html($personal_info['info_title']); ?></span> :
                                    <?php echo esc_html($personal_info['info_details']); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($services)) : ?>
    <div class="yb-border-top yb-border-bottom ">
        <div class="uk-container">
            <div data-uk-grid=""
                class="yb-box-services uk-child-width-1-4@l uk-child-width-1-2 uk-text-center uk-grid-divider">
                <?php foreach($services as $service) : ?>
                <div>
                    <div class="yb-box-service">
                        <span><img src="<?php echo wp_get_attachment_image_src($service['service_icon'], 'full')[0]; ?>"
                                alt=""></span>
                        <h5><?php echo esc_html($service['service_title']); ?></h5>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section><!-- end about section -->