<?php 
$educations = cs_get_option('educations');
$experiences = cs_get_option('experiences');
$awards = cs_get_option('awards');
$skills = cs_get_option('skills');
$soft_skills = cs_get_option('soft_skills');
$lang_skills = cs_get_option('lang_skills');
$cta_bg = cs_get_option('cta_bg');
$download_btn = cs_get_option('download_btn');
$download_link = cs_get_option('download_link');
$hire_btn = cs_get_option('hire_btn');
$hire_link = cs_get_option('hire_link');
?>

<!-- resume section -->
<section class="yb-section " id="resume">
    <div class="yb-section-point-wrapper">
        <div class="uk-container">
            <div class="yb-section-point">
                <sup>03</sup>
                <span>Resume</span>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div data-uk-grid="" class="uk-grid-divider">
            <div class="uk-width-1-4@s uk-visible@s uk-margin-large-bottom yb-section-padding-top "
                id="resume-nav-wrapper">
                <div data-uk-sticky="bottom: #resume-nav-wrapper; offset: 100; media: 650">
                    <ul class="yb-nav-left uk-tab-left uk-tab"
                        data-uk-scrollspy-nav="closest: li; scroll: false; offset: 120">
                        <?php if(!empty($educations)) : ?>
                        <li class="uk-active">
                            <a href="#education" class="yb-inner-link" data-offset="120">
                                <span data-uk-icon="minus"></span>
                                Education
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty($experiences)) : ?>
                        <li>
                            <a href="#experience" class="yb-inner-link" data-offset="120">
                                <span data-uk-icon="minus"></span>
                                Experience
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty($skills)) : ?>
                        <li>
                            <a href="#skills" class="yb-inner-link" data-offset="120">
                                <span data-uk-icon="minus"></span>
                                Skills
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty($awards)) : ?>
                        <li>
                            <a href="#awwwards" class="yb-inner-link" data-offset="120">
                                <span data-uk-icon="minus"></span>
                                Awards
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="uk-width-expand@s yb-section-padding-top">
                <?php if(!empty($educations)) : ?>
                <div>
                    <h2 class="yb-section-title uk-heading-line" id="education">
                        <span>Education</span>
                    </h2>
                    <div class="yb-resume-list">
                        <ul class="uk-list uk-list-large uk-list-divider">
                        <?php foreach($educations as $education) : ?>
                            <li>
                                <div class="yb-resume-item">
                                    <div class="yb-resume-item-date">
                                        <div class="yb-resume-item-date-icon"> <span data-uk-icon="calendar"></span>
                                        </div>
                                        <div class="yb-resume-item-date-text"><span><?php echo esc_html($education['education_date']); ?></span></div>
                                    </div>
                                    <h4 class="yb-section-title"><?php echo esc_html($education['education_degree']); ?></h4>
                                    <strong><?php echo esc_html($education['education_name']); ?></strong>
                                    <div class="uk-text-small">
                                        <p><?php echo esc_html($education['education_text']); ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($experiences)) : ?>
                <div>
                    <h2 class="yb-section-title  uk-heading-line " id="experience">
                        <span>Experience</span>
                    </h2>
                    <div class="yb-resume-list">
                        <ul class="uk-list uk-list-large uk-list-divider">
                        <?php foreach($experiences as $experience) : ?>
                            <li>
                                <div class="yb-resume-item">
                                    <div class="yb-resume-item-date">
                                        <div class="yb-resume-item-date-icon"> <span data-uk-icon="calendar"></span>
                                        </div>
                                        <div class="yb-resume-item-date-text"><span><?php echo esc_html($experience['experience_date']); ?></span></div>
                                    </div>
                                    <h4 class="yb-section-title"><?php echo esc_html($experience['experience_title']); ?></h4>
                                    <strong><?php echo esc_html($experience['experience_name']); ?></strong>
                                    <div class="uk-text-small">
                                        <p><?php echo esc_html($experience['experience_text']); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(!empty($skills)) : ?>
                <div>
                    <h2 class="yb-section-title  uk-heading-line " id="skills">
                        <span>Skills</span>
                    </h2>
                    <div class="yb-margin-top-1 yb-margin-bottom-2">                  
                        <div id="skills" class="uk-grid-collapse  uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center"
                            data-uk-grid="">
                            <?php foreach($skills as $skill) : ?>
                            <div class="yb-bg-soft">
                                <div class="yb-box-circle">
                                    <div class="circle-progress " data-value="<?php echo esc_attr($skill['skill_value']); ?>">
                                        <strong><?php echo esc_html($skill['skill_number']); ?><i>%</i></strong>
                                    </div>
                                    <h5 class="yb-box-circle-title"><?php echo esc_html($skill['skill_title']); ?></h5>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>

                        <div data-uk-grid="" class="uk-child-width-1-2">
                        <?php if(!empty($soft_skills)) : ?>
                            <div>
                                <h4 class="yb-section-title">Soft Skills</h4>
                                <ul class="uk-list uk-list-large  uk-list-divider">
                                <?php foreach($soft_skills as $soft_skill) : ?>
                                    <li>
                                        <div class="yb-resume-skill-item">
                                            <h5>
                                                <?php echo esc_html($soft_skill['soft_skill_title']); ?> <small
                                                    class="uk-float-right uk-text-bold uk-visible@s"><?php echo esc_html($soft_skill['soft_skill_number']); ?></small>
                                            </h5>
                                            <progress class="uk-progress" value="<?php echo esc_attr($soft_skill['soft_skill_number']); ?>" max="100"></progress>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($lang_skills)) : ?>
                            <div>
                                <h4 class="yb-section-title">Language </h4>
                                <ul class="uk-list uk-list-large uk-list-divider">
                                <?php foreach($lang_skills as $lang_skill) : ?>
                                    <li>
                                        <div class="yb-resume-skill-item">
                                            <h5>
                                                <?php echo esc_html($lang_skill['lang_skill_title']); ?> <small
                                                    class="uk-float-right uk-text-bold uk-visible@s"><?php echo esc_html($lang_skill['lang_skill_number']); ?>%</small>
                                            </h5>
                                            <progress class="uk-progress" value="<?php echo esc_attr($lang_skill['lang_skill_number']); ?>" max="100"></progress>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($awards)) : ?>
                <div>
                    <h2 class="yb-section-title  uk-heading-line " id="awwwards">
                        <span>Awards</span>
                    </h2>
                    <div class="yb-resume-list">
                        <ul class="uk-list uk-list-large uk-list-divider">
                        <?php foreach($awards as $award) : ?>
                            <li>
                                <div class="yb-resume-item">
                                    <div class="yb-resume-item-date">
                                        <div class="yb-resume-item-date-icon"> <span data-uk-icon="calendar"></span>
                                        </div>
                                        <div class="yb-resume-item-date-text"><span><?php echo esc_html($award['award_date']); ?></span></div>
                                    </div>
                                    <h4 class="yb-section-title"><?php echo esc_html($award['award_title']); ?></h4>
                                    <strong><?php echo esc_html($award['award_name']); ?></strong>
                                    <div class="uk-text-small">
                                        <p><?php echo esc_html($award['award_text']); ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="yb-section yb-section-padding uk-background-cover uk-background-fixed " data-uk-parallax="bgy: -200"
        data-src="<?php echo wp_get_attachment_image_src($cta_bg, 'full')[0]; ?>" data-uk-img="">
        <div class="yb-overlay-primary uk-position-cover"></div>
        <div class="uk-container uk-text-center uk-position-relative">
            <div data-uk-grid="" class="uk-grid-small  uk-flex-center">
                <div>
                    <a href="<?php echo $download_link; ?>" class=" yb-btn uk-button uk-button-primary uk-button-large"><?php echo $download_btn; ?></a>
                </div>
                <div>
                    <a href="<?php echo $hire_link; ?>" class="yb-inner-link yb-btn uk-button uk-button-danger  uk-button-large">
                        <?php echo $hire_btn; ?></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- end resume section -->