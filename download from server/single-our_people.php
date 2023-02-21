<?php
get_header();
$hero_banner_desktop_image      = get_field('hero_banner_desktop_image');
$hero_banner_mobile_image       = get_field('hero_banner_mobile_image');
$hero_banner_mobile_image       = $hero_banner_mobile_image ? $hero_banner_mobile_image : $hero_banner_desktop_image;
if(empty($hero_banner_desktop_image)){ $image_class="common-banner-desc pos-relative no_banner_image"; }else{ $image_class="common-banner-desc pos-relative";}
//Profile
$lawyer_profile_fname            = get_field('lawyer_profile_fname');
$lawyer_profile_lname            = get_field('lawyer_profile_lname');
$lawyer_profile_degree           = get_field('lawyer_profile_degree');
$lawyer_profile_position         = get_field('lawyer_profile_position');
$lawyer_profile_phone_number     = get_field('lawyer_profile_phone_number');
$lawyer_profile_email            = get_field('lawyer_profile_email');
$lawyer_profile_languages        = get_field('lawyer_profile_languages');
$lawyer_profile_linkedin_link    = get_field('lawyer_profile_linkedin_link');
$lawyer_profile_location         = get_field('lawyer_profile_location'); 
$lawyer_profile_testimonial      = get_field('lawyer_profile_testimonial');
$select_office                   = get_field('select_office');

?>
<div class="people-bio-page site-main-cover">
<section class="common-banner-section">
    <div class="common-banner-main flex">
        <div class="common-banner-text flex flex-vcenter">
            <div class="<?php echo $image_class; ?>">
                <?php if(!empty($lawyer_profile_degree)){ ?>
                    <h1><?php echo get_the_title().', '. $lawyer_profile_degree; ?></h1>
                <?php } else{ ?>
                    <h1><?php echo get_the_title(); ?></h1>
                <?php } if(!empty($lawyer_profile_position || $lawyer_profile_location)){?>
                    <div class="position-location flex">
                        <?php if(!empty($lawyer_profile_position)){ ?>
                            <span><?php echo $lawyer_profile_position; ?></span>
                        <?php } if(!empty($lawyer_profile_location)){ ?>
                            <span><?php echo $lawyer_profile_location; ?></span>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="common-banner-details flex">
                    <?php if(!empty($lawyer_profile_phone_number || $lawyer_profile_email || $lawyer_profile_linkedin_link)){?>
                        <div class="common-banner-dates">
                            <div class="common-banner-dates-item">
                                <?php if(!empty($lawyer_profile_email)){ ?>
                                    <span class="flex"><span class="fa-light fa-envelope banner-icon"></span>
                                    <span class="common-banner-text-right"><a href="mailto:<?php echo $lawyer_profile_email; ?>"><?php echo $lawyer_profile_email; ?></a></span></span>
                                <?php } if(!empty($lawyer_profile_phone_number)){ ?>
                                    <span class="flex"><span class="fa-light fa-phone banner-icon"></span>
                                    <span class="common-banner-text-right"><a href="tel:<?php echo $lawyer_profile_phone_number; ?>"><?php echo $lawyer_profile_phone_number; ?></a></span></span>
                                <?php } if(!empty($lawyer_profile_linkedin_link)){ ?>
                                    <span class="flex"><span class="fa-brands fa-linkedin banner-icon"></span>
                                    <span class="common-banner-text-right"><a href="<?php echo $lawyer_profile_linkedin_link; ?>" target="_blank">Connect</a></span></span>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="common-banner-location">
                        <span class="flex"><span class="fa-light fa-globe banner-icon"></span><span class="common-banner-text-right">Languages</span></span>
                        <ul>
                            <li>English</li>
                            <li>Mandarin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($hero_banner_desktop_image)){ ?>
        <div class="common-banner-image">
            <picture class="object-fit common-banner-thumb">
                    <source srcset="<?php echo $hero_banner_desktop_image['url']; ?>" media="(min-width: 768px)"/>
                    <img src="<?php echo $hero_banner_mobile_image['url']; ?>" alt="<?php echo $hero_banner_desktop_image['alt']; ?>">
            </picture>
        </div>
        <?php } ?>
    </div>
</section>

<section class="bio-people-section pos-relative">
    <div class="container">
        <div class="bio-people-wrap">
            <div class="download-print-main flex">
                <div class="download-print flex">
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-file-arrow-down icon"></span>Download</a></span>
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-print icon"></span>Print</a></span>
                    <span class="download-print-text share-icon"><a href="#"><span class="fa-solid fa-share-square icon"></span>Share</a></span>
                </div>
                <div class="social-share-icons flex flex-vcenter">
                    <span class="share-text">share</span>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63b834083fb0c205"></script>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>                
            </div>
            <div class="bio-people-main flex">
                <div class="bio-people-aside">
                    <div class="bio-people-list pos-relative">
                        <h4>Overview</h4>
                        <div class="bio-people-text">
                            <ul>
                                <li><a href="#">Expertise</a></li>
                                <li><a href="#">Rep Matters</a></li>
                                <li><a href="#">Featured Insights</a></li>
                                <li><a href="#">Speaking Engagements</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Honors & Awards</a></li>
                                <li><a href="#">Activities</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="bio-people-list pos-relative">
                        <h4>New & Press</h4>
                        <div class="bio-people-text">
                            <div class="bio-people-list-main bio-people-expand">
                                <div class="bio-people-expand-content">
                                    <div class="bio-people-news-list">
                                        <span class="optional-text">Aug 27, 2022</span>
                                        <h5><a href="#">Name of Press Release of Publication</a></h5>
                                    </div>
                                    <div class="bio-people-news-list">
                                        <span class="optional-text">Aug 27, 2022</span>
                                        <h5><a href="#">Name of Press Release of Publication</a></h5>
                                    </div>
                                    <div class="bio-people-news-list">
                                        <span class="optional-text">Aug 27, 2022</span>
                                        <h5><a href="#">Name of Press Release of Publication</a></h5>
                                    </div>
                                    <div class="bio-people-news-list">
                                        <span class="optional-text">Aug 27, 2022</span>
                                        <h5><a href="#">Name of Press Release of Publication</a></h5>
                                    </div>
                                 </div>
                                 <div class="expand-btns flex">
                                    <a href="javascript:void(0);" class="button aligncenter btn_show_more">Read More</a>
                                    <a href="javascript:void(0);" class="button aligncenter btn_show_less">Read Less</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bio-people-content">
                    <?php  if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; 
                    endif; 
                    $expertise_heading      = get_field('expertise_heading');
                    $expertise_quote        = get_field('expertise_quote'); ?>
                 
                   <div class="bio-people-expertise">
                        <?php if(!empty($expertise_heading || $expertise_quote)){ ?>
                            <div class="bio-expertise-title">
                                <?php  if(!empty($expertise_heading)){ ?>
                                     <h3><?php echo $expertise_heading; ?></h3>
                                <?php } if(!empty($expertise_quote)){ ?>
                                    <i><?php echo $expertise_quote; ?></i>
                                <?php } ?>
                                </div>
                        <?php }
                        $practice_heading   = get_field('practice_heading',$pageid );
                        $select_practice    = get_field('select_practice',$pageid ); 
                        $industries_heading = get_field('industries_heading',$pageid ); 
                        $select_industries  = get_field('select_industries',$pageid );  ?>
                        <div class="bio-expertise-main flex">
                            <?php if(!empty($select_practice)) : ?> 
                                <div class="bio-expertise-list pos-relative">
                                    <?php if(!empty($practice_heading)){?>
                                        <h4><?php echo $practice_heading; ?></h4>
                                    <?php } ?>
                                    <div class="bio-expertise-desc">
                                        <ul>
                                            <?php foreach( $select_practice as $post ): setup_postdata($post); ?> 
                                                <li><a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></li>
                                            <?php endforeach; wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; 
                            if(!empty($select_industries)) :?>
                                <div class="bio-expertise-list pos-relative">
                                    <?php if(!empty($industries_heading)){?>
                                        <h4><?php echo $industries_heading; ?></h4>
                                    <?php } ?>
                                    <div class="bio-expertise-desc">
                                        <ul>
                                            <?php foreach( $select_industries as $post ): setup_postdata($post); ?> 
                                                <li><a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></li>
                                            <?php endforeach; wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <figure class="breakpoint-thumb pos-relative hide-desktop hide-tablet">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.svg" alt="small-logo">
                    </figure>
                    <?php
                    $honors_awards_icon    = get_field('honors_awards_icon');
                    $honors_awards_heading = get_field('honors_awards_heading');
                    $honor_awards          = get_field('honor_awards');
                    if(!empty($honors_awards_heading || $honor_awards)){ ?>
                    <div class="honor-awards expert-expand">
                        <div class="expert-expand-content">
                            <?php if(!empty($honors_awards_heading )){ ?>
                                <div class="icon-heading flex">
                                    <?php if(!empty($honors_awards_icon )){ ?>
                                        <span><img src="<?php echo $honors_awards_icon['url']; ?>" alt="<?php echo $honors_awards_icon['alt']; ?>"></span>
                                    <?php } ?>
                                    <h3><?php echo $honors_awards_heading; ?></h3>
                                </div>

                            <?php } if(!empty($honor_awards )){ 
                                echo $honor_awards;
                            }?>
                        </div>

                        <div class="expand-btns flex">
                            <a href="javascript:void(0);" class="read-btn hide-desktop hide-tablet aligncenter show_more pos-relative">Read More<span class="fa-solid fa-angle-down angle-icon"></span></a>
                            <a href="javascript:void(0);" class="read-btn hide-desktop hide-tablet aligncenter show_less pos-relative">Read Less<span class="fa-solid fa-angle-up angle-icon"></span></a>
                        </div>
                    </div>
                    <?php } ?>
                    <figure class="breakpoint-thumb pos-relative">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.svg" alt="small-logo">
                    </figure>
                    <?php
                    $education_admission_icon    = get_field('education_admission_icon');
                    $education_admission_heading = get_field('education_admission_heading');
                    $our_people_education       = get_field('our_people_education');
                    if(!empty($education_admission_heading || $our_people_educatiton)){ ?>
                        <div class="education-admissions expert-expand">
                            <div class="expert-expand-content">
                                <?php if(!empty($education_admission_heading )){ ?>
                                    <div class="icon-heading flex">
                                        <?php if(!empty($education_admission_icon )){ ?>
                                            <span><img src="<?php echo $education_admission_icon['url']; ?>" alt="<?php echo $education_admission_icon['alt']; ?>"></span>
                                        <?php } ?>
                                        <h3><?php echo $education_admission_heading; ?></h3>
                                    </div>
                                <?php }if(!empty($our_people_education )){  
                                    echo $our_people_education;
                                } if( have_rows('education_admissions') ):  ?>                     
                                    <div class="education-admissions-main flex">
                                        <?php while ( have_rows('education_admissions') ) : the_row();
                                        $education_admissions_heading     = get_sub_field('education_admissions_heading');
                                        $education_admissions_description = get_sub_field('education_admissions_description');?>
                                            <div class="bio-education-list">
                                                <?php if(!empty($education_admissions_heading )){ ?>
                                                        <h5><?php echo $education_admissions_heading; ?></h5>
                                                <?php } if(!empty($education_admissions_description )){
                                                    echo $education_admissions_description;
                                                }?>
                                                
                                            </div>
                                        <?php endwhile; endif; ?>
                                    </div>
                            </div>
                            <div class="expand-btns flex">
                                <a href="javascript:void(0);" class="read-btn hide-desktop hide-tablet aligncenter show_more pos-relative">Read More<span class="fa-solid fa-angle-down angle-icon"></span></a>
                                <a href="javascript:void(0);" class="read-btn hide-desktop hide-tablet aligncenter show_less pos-relative">Read Less<span class="fa-solid fa-angle-up angle-icon"></span></a>
                            </div>
                        </div>
                    <?php } 
                    $rep_matter_heading    = get_field('rep_matter_heading');
                    if( have_rows('rep_matters') ): ?>
                    <div class="representative-matters">
                        <?php if(!empty($rep_matter_heading)){ ?>
                            <h3><?php echo $rep_matter_heading; ?></h3>
                        <?php } ?>
                        <div class="accordion-main">
                            <?php while ( have_rows('rep_matters') ) : the_row();
                                    $rep_matter_heading        = get_sub_field('rep_matter_heading');
                                    $rep_matter_description    = get_sub_field('rep_matter_description');
                                    if(!empty($rep_matter_heading && $rep_matter_description )){?>
                                    <div class="accordion">
                                        <div class="accordion-header pos-relative"><?php echo $rep_matter_heading; ?><span class="icon fa-light fa-plus"></span></div>
                                        <div class="accordion-content">
                                            <?php echo $rep_matter_description; ?>
                                        </div>
                                    </div>
                            <?php } endwhile; ?>
                            
                        </div>
                    </div>
                    <figure class="breakpoint-thumb pos-relative">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.svg" alt="small-logo">
                    </figure>
                    <?php endif; 
                    
                    $speaking_engagement_icon       = get_field('speaking_engagement_icon');
                    $speaking_engagement_heading    = get_field('speaking_engagement_heading');
                    $select_post                    = get_field('select_post');
                    ?>
                    <div class="events-slider-wrap pos-relative">
                        <div class="events-slider-heading flex pos-relative">
                            <?php if(!empty($speaking_engagement_heading)){ ?>
                                <div class="events-slider-title">
                                    <div class="icon-heading flex">
                                        <span><img src="<?php echo $speaking_engagement_icon['url']; ?>" alt="<?php echo $speaking_engagement_icon['alt']; ?>"></span>
                                        <h3><?php echo $speaking_engagement_heading; ?></h3>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if(!empty($speaking_engagement_description)){ ?>
                            <div class="events_bio_text">
                                <?php echo $speaking_engagement_description; ?>
                            </div>
                        <?php } ?>
                        <div class="events-slider-row grid news-event-slider"><!-- if more then 3 add class news-event-slider -->
                            <?php foreach( $select_post as $post ): setup_postdata($post); 
                                $thumbnail      = get_the_post_thumbnail_url($post->ID);
                                if(empty($thumbnail)){
                                    $thumbnail_obj = get_fied('hero_banner_image_desktop');
                                    $thumbnail     =  $thumbnail['url'];
                                }
                                
                                ?>
                                <div class="events-slide-list">
                                    <?php if(!empty($thumbnail )){?>
                                    <div class="events-slide-image pos-relative">
                                        <figure class="object-fit">
                                            <img src="<?php echo $thumbnail; ?>" alt="speaking-thumb-one">
                                        </figure>
                                    </div>
                                    <?php } ?>
                                    <div class="events-slide-text">
                                        <span class="optional-text small">Aug 27, 2022</span>
                                        <h4><a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h4>
                                        <div class="events-slide-link hide-tablet hide-desktop">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="events-slider-btn hide-mobile">
                            <a href="#" class="button">View All</a>
                        </div>
                        <a href="#" class="hide-desktop hide-tablet events-view-btn">View All<span class="fa-regular fa-arrow-right right-icon"></span></a>
                    </div>
                    <div class="speaking-engagements">
                        <h5>Past Speaking Engagements</h5>
                        <div class="speaking-engagements-main">
                            <div class="speaking-engagements-list flex">
                                <ul>
                                    <li><span>Oct 14, 2016</span>An archived speaking engagment headline can work here on more than one line</li>
                                    <li><span>Feb 12, 2017</span>An archived speaking engagment headline can work here on more than one line</li>
                                    <li><span>Sep 3, 2018</span>An archived speaking engagment headline can work here on more than one line</li>
                                    <li><span>May 6, 2019</span>An archived speaking engagment headline can work here on more than one line</li>
                                    <li><span>Nov 12, 2019</span>An archived speaking engagment headline can work here on more than one line</li>
                                    <li><span>Jun 5, 2020</span>An archived speaking engagment headline can work here on more than one line</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_insight_featured();
get_cta_with_rightside_image();
newsletter();
get_footer(); ?>