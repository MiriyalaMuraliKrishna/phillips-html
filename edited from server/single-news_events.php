<?php
get_header();

$hero_banner_desktop_image    = get_field('hero_banner_desktop_image');
$hero_banner_mobile_image     = get_field('hero_banner_mobile_image');
$hero_banner_mobile_image     = $hero_banner_mobile_image ? $hero_banner_mobile_image : $hero_banner_desktop_image;
$hero_banner_heading          = get_field('hero_banner_heading');
$hero_banner_heading          = $hero_banner_heading ? $hero_banner_heading : get_the_title();
$hero_banner_description      = get_field('hero_banner_description');
$hero_banner_button_text      = get_field('hero_banner_button_text');
$hero_banner_button_link      = get_field('hero_banner_button_link');

$presenters_select_team      = get_field('presenters_select_team');

$practices_default_form_heading      = get_field('practices_default_form_heading');
$practices_default_form_description      = get_field('practices_default_form_description');
$practices_default_form_id      = get_field('practices_default_form_id');
if (has_term(2, 'event_categories')) {
    $event_date = get_field('event_date');
    $event_time = get_field('event_time');
    $event_location_name = get_field('event_location_name');
    $event_address = get_field('event_address');
}
?>
<div class="news-default-page site-main-cover">
<section class="common-banner-section">
    <div class="common-banner-main flex">
    <?php if(!empty($hero_banner_heading || $hero_banner_description)){ ?>
        <div class="common-banner-text flex flex-vcenter">
            <div class="common-banner-desc pos-relative">
                <?php if(!empty($hero_banner_heading)){ ?>
                    <h1><?php echo $hero_banner_heading; ?></h1>
                <?php } if(!empty($hero_banner_description)){ 
                    echo $hero_banner_description;
                }
                ?>
                <?php if (has_term(2, 'event_categories')) { ?>
                    <?php if(!empty($event_date || $event_time || $event_location_name || $event_address)){ ?>
                    <div class="common-banner-details flex">
                        <div class="common-banner-dates">
                        <?php if(!empty($event_date)){ ?>
                            <div class="common-banner-dates-item">
                                <span><span class="fa-light fa-calendar banner-icon"></span><?php echo $event_date; ?></span>
                            </div>
                        <?php } ?>
                        <?php if(!empty($event_time)){ ?>
                            <div class="common-banner-dates-item">
                                <span><span class="fa-light fa-clock banner-icon"></span><?php echo $event_time; ?></span>
                            </div>
                        <?php } ?>
                        </div>
                        <?php if(!empty($event_location_name || $event_address)){ ?>
                        <div class="common-banner-location flex">
                            <span class="fa-thin fa-location-dot banner-icon"></span>
                            <span class="location-text"><?php echo $event_location_name; ?> <?php echo $event_address; ?></span>
                        </div>
                        <?php } ?>
                    </div>
                <?php }} ?>
            </div>
        </div>
    <?php } if(!empty($hero_banner_desktop_image)){ ?>
        <div class="common-banner-image">
            <picture class="object-fit common-banner-thumb">
                <source srcset="<?php echo $hero_banner_desktop_image['url']; ?>" media="(min-width: 768px)"/>
                <img src="<?php echo $hero_banner_mobile_image['url']; ?>" alt="<?php echo $hero_banner_mobile_image['alt']; ?>">
            </picture>
        </div>
    <?php } ?>
    </div>
</section>

<section class="news-events-default-section">
    <div class="container">
        <div class="news-events-default-wrap">
            <div class="download-print-main flex">
                <div class="download-print flex">
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-file-arrow-down icon"></span>Download</a></span>
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-print icon"></span>Print</a></span>
                    <span class="download-print-text share-icon"><a href="#"><span class="fa-solid fa-share-square icon"></span>Share</a></span>
                </div>
                <div class="social-share-icons flex flex-vcenter">
                    <span class="share-text">share</span>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63eb921cc7627364"></script> 
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_kzwk"></div>
                </div>
            </div>
            <div class="news-events-default-main flex">
                <div class="news-events-default-content">
                    <?php
                        while ( have_posts() ) {
                            the_post(); 
                            the_content();
                        } 
                    ?>
                </div>
                <div class="news-events-default-image">
                <?php if( $presenters_select_team ):
                    $presenters_heading = get_field('presenters_heading');
                ?>
                <?php if(!empty($presenters_heading )){  ?>
                    <h4><?php echo $presenters_heading; ?></h4>
                <?php } ?>
                    <div class="news-events-presenters-main presenters-slider">
                    <?php foreach( $presenters_select_team as $post ):setup_postdata($post);
                           $thumbnail = get_field('lawyer_profile_image');
                           if(empty($thumbnail)){ $no_image_class="buffalo-team-item flex flex-center no_image"; }else{ $no_image_class="buffalo-team-item flex flex-center"; }
                           $lawyer_profile_fname   = get_field('lawyer_profile_fname');
                            $lawyer_profile_lname   = get_field('lawyer_profile_lname');
                            if(!empty($lawyer_profile_fname && $lawyer_profile_lname)){
                                $first_last_name = $lawyer_profile_fname." ".$lawyer_profile_lname;
                                } else {
                                $first_last_name = get_the_title();
                            }
                            $lawyer_profile_position_frontend   = get_field('lawyer_profile_position_frontend');
                            $lawyer_profile_email   = get_field('lawyer_profile_email');
                            $lawyer_profile_phone_number   = get_field('lawyer_profile_phone_number');
                            $select_office   = get_field('select_office');
                    ?>
                        <div class="news-event-presenters-list">
                        <?php if(!empty($thumbnail)){ ?>
                            <div class="news-event-presenters-img">
                                <figure class="presenters-thumb flex">
                                    <img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>">
                                </figure>
                            </div>
                        <?php } ?>
                            <div class="news-event-presenters-desc">
                                <h6><?php echo $first_last_name; ?></h6>
                                <?php if(!empty($lawyer_profile_position_frontend)){ ?>
                                    <span><?php echo $lawyer_profile_position_frontend; ?></span>
                                <?php } ?>
                                <ul class="news-event-presenters-media">
                                <?php if($select_office){ ?>
                                    <li>
                                        <span class="fa-light fa-location-dot"></span><?php foreach( $select_office as $post ):setup_postdata($post); ?><?php the_title(); ?><?php endforeach; wp_reset_postdata(); ?>
                                    </li>
                                <?php } ?>
                                <?php if(!empty($lawyer_profile_email)){ ?>
                                    <li>
                                        <a href="mailto:<?php echo $lawyer_profile_email; ?>"><span class="fa-light fa-envelope"></span><?php echo $lawyer_profile_email; ?></a>
                                    </li>
                                <?php } ?>
                                <?php if(!empty($lawyer_profile_phone_number)){ ?>
                                    <li>
                                        <a href="tel:<?php echo $lawyer_profile_phone_number; ?>"><span class="fa-light fa-phone"></span><?php echo $lawyer_profile_phone_number; ?></a>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($practices_default_form_id)){ ?>
                    <div class="we-help">
                    <?php if(!empty($practices_default_form_heading)){ ?>
                        <h5><?php echo $practices_default_form_heading; ?></h5>
                    <?php } ?>
                    <?php if(!empty($practices_default_form_description)){ ?>
                        <p><?php echo $practices_default_form_description; ?></p>
                    <?php } ?>
                        <div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container">
                            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => $practices_default_form_id ) ); ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('image_slides') ): ?>
<section class="careers-slider-section">
    <div class="careers-slider-wrap">
        <div class="careers-slider-main careers-slick-slider">
        <?php  while ( have_rows('image_slides') ) : the_row();
        $slider_image     = get_sub_field('slider_image');
        $slider_image_m     = get_sub_field('slider_image_mobile');
        $slider_image_mobile = $slider_image_m ? $slider_image_m : $slider_image;
        $slider_caption = get_sub_field('slider_caption');
        if(!empty($slider_image)){ ?>
            <div class="careers-slick-slide">
                <div class="careers-slider-list pos-relative">
                <?php if(!empty($slider_image)){ ?>
                    <picture class="careers-slider-thumb flex">
                        <source srcset="<?php echo $slider_image['url']; ?>" media="(min-width:768px)">
                        <img src="<?php echo $slider_image_mobile['url']; ?>" alt="<?php echo $slider_image['url']; ?>">
                    </picture>
                <?php } ?>
                <?php if(!empty($slider_caption)){ ?>
                    <div class="careers-slider-caption">
                        <span><?php echo $slider_caption; ?></span>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php 
echo get_news_event();
cta_with_bg_image();
newsletter();
get_footer(); ?>