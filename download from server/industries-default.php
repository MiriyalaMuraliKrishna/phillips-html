<?php
/*Template Name: Industries Default
*/
get_header();
?>

<?php
    $industries_default_sidebar_cta_pre_heading      = get_field('industries_default_sidebar_cta_pre_heading');
    $industries_default_sidebar_cta_heading      = get_field('industries_default_sidebar_cta_heading');
    $industries_default_sidebar_cta_button_text      = get_field('industries_default_sidebar_cta_button_text');
    $industries_default_sidebar_cta_button_link      = get_field('industries_default_sidebar_cta_button_link');

    $industries_default_sidebar_badges_heading      = get_field('industries_default_sidebar_badges_heading');
    $industries_default_badges_heading      = get_field('industries_default_badges_heading');

    $practices_default_continued_content      = get_field('practices_default_continued_content');

    $practices_default_form_heading      = get_field('practices_default_form_heading');
    $practices_default_form_description      = get_field('practices_default_form_description');
    $practices_default_form_id      = get_field('practices_default_form_id');

    $sub_topics_heading            = get_field('sub_topics_heading');
    $sub_topics_description        = get_field('sub_topics_description');
    $sub_topics_topic_image        = get_field('sub_topics_topic_image');
    $sub_topics_topic_image_mobile = get_field('sub_topics_topic_image_mobile');
    $sub_topics_topic_image_mobile = $sub_topics_topic_image_mobile ? $sub_topics_topic_image_mobile : $sub_topics_topic_image;

    $faqs_image_desktop = get_field('faqs_image_desktop');
    $faqs_image_mobile  = get_field('faqs_image_mobile');
    $faqs_image_mobile  = $faqs_image_mobile ? $faqs_image_mobile  : $faqs_image_desktop;
    $faq_heading        = get_field('faq_heading');
    $faq_description    = get_field('faq_description');
    $faqs_button_text   = get_field('faqs_button_text');
    $faqs_button_link   = get_field('faqs_button_link');

    $practices_default_matters_content      = get_field('practices_default_matters_content');

    $select_team_members = get_posts(array(
        'post_type' => 'our_people',
        'numberposts' => -1,
        'meta_query' => array(
            array(
                'key' => 'select_related_industry',
                'value' => '"' . get_the_ID() . '"',
                'compare' => 'LIKE'
            )
        )
    ));

    $featured_insight_background_image        = get_field('practices_default_featured_insights_background_image');
    $featured_insight_background_image_mobile = get_field('practices_default_featured_insights_background_image_mobile');
    $featured_insight_background_image_mobile = $featured_insight_background_image_mobile ? $featured_insight_background_image_mobile : $featured_insight_background_image;
    $featured_insight_select_post = get_posts(array(
        'post_type' => 'post',
        'numberposts' => 3,
        'meta_query' => array(
            array(
                'key' => 'select_related_industry',
                'value' => '"' . get_the_ID() . '"',
                'compare' => 'LIKE'
            )
        )
    ));
if(!empty($featured_insight_select_post)){
    $left_insight_id = $featured_insight_select_post[0]->ID; 
    $featured_insight_thumbnail = get_the_post_thumbnail_url($left_insight_id,'');
    if(empty($featured_insight_thumbnail)){
        $default_thumbnail = get_field('insight_hero_banner_image_desktop','category_13');
        $featured_insight_thumbnail         = $default_thumbnail['url'];
    }
}
?>

<div class="industries-default-page site-main-cover">
<?php echo get_defult_banner(); ?>
<?php if( have_rows('practices_default_anchors') ):?>
<div class="common-banner-list">
    <div class="container">
        <div class="banner-dropdown hide-tablet hide-desktop">
            <span>Jump To Section</span>
        </div>
        <ul class="common-banner-item flex">
        <?php while ( have_rows('practices_default_anchors') ) : the_row();
        $practices_default_anchor_name     = get_sub_field('practices_default_anchor_name');
        $practices_default_anchor_hash_tag = get_sub_field('practices_default_anchor_hash_tag');
        if(!empty($practices_default_anchor_name &&  $practices_default_anchor_hash_tag)){ ?>
            <li><a href="<?php echo $practices_default_anchor_hash_tag; ?>"><?php echo $practices_default_anchor_name; ?></a></li>
        <?php } endwhile; ?>
        </ul>
    </div>
</div>
<?php endif; ?>

<section class="short-headline-section pos-relative">
    <div class="container">
        <div class="short-headline-wrap">
            <div class="download-print-main flex">
                <div class="download-print flex">
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-file-arrow-down icon"></span>Download</a></span>
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-print icon"></span>Print</a></span>
                    <span class="download-print-text share-icon"><a href="#"><span class="fa-solid fa-share-square icon"></span>Share</a></span>
                </div>
                <div class="social-share-icons flex flex-vcenter">
                    <span class="share-text">share</span>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63eb921cc7627364"></script> 
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_kzwk"></div>
                </div>
            </div>
            <div class="short-headline-main flex">
                <div class="short-headline-heading">
                    <div class="short-headline-title">
                    <?php if(!empty($industries_default_sidebar_cta_pre_heading)){ ?>
                        <span class="optional-text"><?php echo $industries_default_sidebar_cta_pre_heading; ?></span>
                    <?php } ?>
                    <?php if(!empty($industries_default_sidebar_cta_heading)){ ?>
                        <h4><?php echo $industries_default_sidebar_cta_heading; ?></h4>
                    <?php } ?>
                    <?php if(!empty($industries_default_sidebar_cta_button_text && $industries_default_sidebar_cta_button_link)){ ?>
                        <a href="<?php echo $industries_default_sidebar_cta_button_link; ?>" class="button"><?php echo $industries_default_sidebar_cta_button_text; ?></a>
                    <?php } ?>
                    </div>
                <?php if( have_rows('industries_default_sidebar_badges') ): ?>
                    <div class="short-headline-logo">
                    <?php if(!empty($industries_default_sidebar_badges_heading)){ ?>
                        <span class="optional-text aligncenter"><?php echo $industries_default_sidebar_badges_heading; ?></span>
                    <?php } ?>
                        <div class="short-logo-lists flex">
                        <?php while ( have_rows('industries_default_sidebar_badges') ) : the_row();
                            $industries_default_sidebar_badge = get_sub_field('industries_default_sidebar_badge');
                        if(!empty($industries_default_sidebar_badge)){ ?>
                            <div class="short-logo-list aligncenter">
                                <figure class="object-fit">
                                    <img src="<?php echo $industries_default_sidebar_badge['url']; ?>" alt="<?php echo $industries_default_sidebar_badge['alt']; ?>">
                                </figure>
                            </div>
                        <?php } endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            
                <div class="short-headline-content">
                    <?php
                        while ( have_posts() ) {
                            the_post(); 
                            the_content();
                        } 
                    ?>
                    <?php echo $practices_default_continued_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logo-slider-section">
    <div class="container">
        <div class="logo-slider-wrap">
        <?php if(!empty($industries_default_badges_heading)){ ?>
            <h5><?php echo $industries_default_badges_heading; ?></h5>
        <?php } ?>
        <?php if( have_rows('industries_default_badges') ): ?>
            <div class="logo-slider-main flex">
            <?php while ( have_rows('industries_default_badges') ) : the_row();
                $industries_default_badge = get_sub_field('industries_default_badge');
            if(!empty($industries_default_badge)){ ?>
                <div class="logo-slider-item flex">
                    <figure class="logo-slider-thumb">
                        <img src="<?php echo $industries_default_badge['url']; ?>" alt="<?php echo $industries_default_badge['alt']; ?>">
                    </figure>
                </div>
            <?php } endwhile; ?>
            </div>
        <?php endif; ?>
            <?php if(!empty($practices_default_form_id)){ ?>
            <div class="how-help-main flex">
                <div class="how-help-text">
                    <?php if(!empty($practices_default_form_heading)){ ?>
                        <h2><?php echo $practices_default_form_heading; ?></h2>
                    <?php } ?>
                    <?php if(!empty($practices_default_form_description)){ ?>
                        <p><?php echo $practices_default_form_description; ?></p>
                    <?php } ?>
                </div>
                <div class="how-help-frm">
                    <div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container">
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => $practices_default_form_id ) ); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php if(!empty($featured_insight_select_post)){ ?>
<section class="insight-featured-section pos-relative" id="featured-insights">
<picture class="object-fit insight-banner-bg background-bg">
<source srcset="<?php echo $featured_insight_background_image['url']; ?>" media="(min-width:768px)">
<img src="<?php echo $featured_insight_background_image_mobile['url']; ?>" alt="<?php echo $featured_insight_background_image['alt']; ?>">
</picture>  
<div class="container">
    <div class="insight-featured-wrap">
        <div class="insight-featured-main flex">
            <div class="insight-featured-big pos-relative">
                <?php if(!empty($featured_insight_thumbnail )){  ?>
                    <figure class="object-fit insight-featured-image pos-relative">
                        <img src="<?php echo $featured_insight_thumbnail; ?>" alt="feature-insight">
                    </figure>
                <?php } ?>
                <div class="insight-featured-content">
                    <div class="insight-featured-text flex">
                        <span class="optional-text">Featured Insight</span>
                        <h3><a href="<?php echo get_the_permalink($featured_insight_select_post[0]->ID); ?>"><?php echo get_the_title($featured_insight_select_post[0]->ID); ?></a></h3>
                        <a href="<?php echo get_the_permalink($featured_insight_select_post[0]->ID); ?>" class="button btn-transparent">Read More</a>
                    </div>
                </div>
            </div>
            <div class="insight-featured-sm">
                <div class="insight-featured-list flex">
                    <div class="insight-featured-item">
                        <span class="optional-text">Featured Insight</span>
                        <h4><a href="<?php echo get_the_permalink($featured_insight_select_post[1]->ID); ?>"><?php echo get_the_title($featured_insight_select_post[1]->ID); ?></a></h4>
                        <hr>
                        <a class="insight-arrow" href="<?php echo get_the_permalink($featured_insight_select_post[1]->ID); ?>"><span class="fa-light fa-arrow-right-long"></span></a>
                    </div>
                    <div class="insight-featured-item">
                        <span class="optional-text">Featured Insight</span>
                        <h4><a href="<?php echo get_the_permalink($featured_insight_select_post[2]->ID); ?>"><?php echo get_the_title($featured_insight_select_post[2]->ID); ?></a></h4>
                        <hr>
                        <a class="insight-arrow" href="<?php echo get_the_permalink($featured_insight_select_post[2]->ID); ?>"><span class="fa-light fa-arrow-right-long"></span></a>
                    </div>
                    <div class="insight-featured-btn">
                        <a href="<?php echo get_category_link(13); ?>" class="button btn-transparent">View More Insights</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php } ?>

<section class="product-liability-section" id="product-liability">
    <div class="container">
        <div class="product-liability-wrap">
            <div class="product-liability-main">
            <?php if( have_rows('practices_default_product_liability_contents') ):
                $practices_default_product_liability_heading = get_field('practices_default_product_liability_heading');
                $practices_default_product_liability_description = get_field('practices_default_product_liability_description');
            ?>
            <?php if(!empty($practices_default_product_liability_heading)){ ?>
                <h4><?php echo $practices_default_product_liability_heading; ?></h4>
            <?php } ?>
                <?php echo $practices_default_product_liability_description; ?>
            <?php  while ( have_rows('practices_default_product_liability_contents') ) : the_row();
                    $practices_default_product_liability_content_heading = get_sub_field('practices_default_product_liability_content_heading');
                    $practices_default_product_liability_content_description = get_sub_field('practices_default_product_liability_content_description');
            ?>
            <?php if(!empty($practices_default_product_liability_content_heading || $practices_default_product_liability_content_description)){ ?>
            <?php if(!empty($practices_default_product_liability_content_heading)){ ?>
                <h4><?php echo $practices_default_product_liability_content_heading; ?></h4>
            <?php } ?>
                <div class="product-liability-matters flex">
                    <div class="product-liability-text">
                        <?php echo $practices_default_product_liability_content_description; ?>
                    </div>
                </div>
            <?php } endwhile; ?>
            <?php endif; ?>
                <figure class="breakpoint-thumb pos-relative">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/small-logo.svg" alt="small-logo">
                </figure>
            <?php if( have_rows('practices_default_matters_content') ):
                $practices_default_business_heading = get_field('practices_default_business_heading');
                $practices_default_business_description = get_field('practices_default_business_description');
            ?>
            <?php if(!empty($practices_default_business_heading)){ ?>
                <h4><?php echo $practices_default_business_heading; ?></h4>
            <?php } ?>
                <?php echo $practices_default_business_description; ?>
            <?php  while ( have_rows('practices_default_matters_content') ) : the_row();
                    $practices_default_business_inner_heading = get_sub_field('practices_default_business_inner_heading');
                    $practices_default_business_inner_description = get_sub_field('practices_default_business_inner_description');
            ?>
            <?php if(!empty($practices_default_business_inner_heading || $practices_default_business_inner_description)){ ?>
            <?php if(!empty($practices_default_business_inner_heading)){ ?>
                <h4><?php echo $practices_default_business_inner_heading; ?></h4>
            <?php } ?>
            <?php if(!empty($practices_default_business_inner_description)){ ?>
                <div class="product-liability-matters fullwidth-horizontal flex">
                    <div class="product-liability-text">
                        <?php echo $practices_default_business_inner_description; ?>
                    </div>
                </div>
            <?php } ?>
            <?php } endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('topics') ):
    if(empty($sub_topics_topic_image )){
        $topics_img_cls = "no_image";
    } else {
        $topics_img_cls = "";
    }
?>
<section class="sub-topic-section pos-relative" id="topics">
    <div class="container">
        <div class="sub-topic-wrap">
            <?php if(!empty($sub_topics_heading || $sub_topics_description )){ ?>
                <div class="sub-topic-heading aligncenter">
                    <?php if(!empty($sub_topics_heading)){?>
                        <h3><?php echo $sub_topics_heading; ?></h3>
                        <hr class="small aligncenter">
                    <?php } if(!empty($sub_topics_description)){
                        echo $sub_topics_description;
                    } ?>                    
                </div>
            <?php } ?>
            <div class="sub-topic-main flex <?php echo $topics_img_cls; ?>">
                <div class="sub-topic-content">
                    <div class="accordion-main">
                        <?php  while ( have_rows('topics') ) : the_row();
                                $topic_heading     = get_sub_field('topic_heading');
                                $topic_description = get_sub_field('topic_description');
                                $topic_button_text = get_sub_field('topic_button_text');
                                $topic_button_link = get_sub_field('topic_button_link');
                                if(!empty($topic_heading &&  $topic_description)){?>
                                <div class="accordion">
                                    <?php if(!empty($topic_heading)){?>
                                        <div class="accordion-header pos-relative"><?php echo $topic_heading; ?><span class="icon fa-light fa-plus"></span></div>
                                    <?php } if(!empty($topic_description)){?>
                                        <div class="accordion-content">
                                            <?php echo $topic_description; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                        <?php } endwhile;  wp_reset_postdata();?>
                    </div>
                </div>
                <?php if(!empty($sub_topics_topic_image )){  ?>
                <div class="sub-topic-image">
                    <picture class="sub-topic-thumb pos-relative flex">
                        <source srcset="<?php echo $sub_topics_topic_image['url']; ?>" media="(min-width: 768px)"/>
                        <img src="<?php echo $sub_topics_topic_image_mobile['url']; ?>" alt="<?php echo $sub_topics_topic_image['alt']; ?>">
                    </picture>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( $select_team_members ):
    $practices_default_team_heading = "Meet Our ".get_the_title()." Team";
    $practices_default_team_button_text = get_field('practices_default_team_button_text');
    $practices_default_team_button_link = get_field('practices_default_team_button_link');
?>
<section class="buffalo-team-section pos-relative" id="team">
<div class="container">
    <div class="buffalo-team-wrap">
        <div class="buffalo-team-heading aligncenter">
            <?php if(!empty($practices_default_team_heading )){  ?>
                <h2><?php echo $practices_default_team_heading; ?></h2>
                <hr class="small aligncenter">
            <?php } ?>
        </div>
        <div class="buffalo-team-slider flex">
            <div class="buffalo-team-main">
                <div class="buffalo-team buffalo-slider-for">
                    <?php foreach( $select_team_members as $post ):setup_postdata($post);
                           $thumbnail = get_the_post_thumbnail_url($post->ID,'');
                           if(empty($thumbnail)){ $no_image_class="buffalo-team-item flex flex-center no_image"; }else{ $no_image_class="buffalo-team-item flex flex-center"; }
                           $lawyer_profile_fname   = get_field('lawyer_profile_fname');
                            $lawyer_profile_lname   = get_field('lawyer_profile_lname');
                            if(!empty($lawyer_profile_fname && $lawyer_profile_lname)){
                                $first_last_name = $lawyer_profile_fname." ".$lawyer_profile_lname;
                                } else {
                                $first_last_name = get_the_title();
                            }
                            $lawyer_profile_position_frontend   = get_field('lawyer_profile_position_frontend');
                    ?>
                        <div class="buffalo-for-slide">
                            <div class="<?php echo $no_image_class; ?>">
                                <?php if(!empty($thumbnail)){ ?>
                                    <div class="buffalo-sm-image flex">
                                        <img src="<?php echo $thumbnail; ?>" alt="team-member">
                                    </div>
                                <?php } ?>
                                <div class="buffalo-text">
                                    <span class="optional-text"><?php echo $first_last_name; ?></span>
                                <?php if(!empty($lawyer_profile_position_frontend)){ ?>
                                    <span><?php echo $lawyer_profile_position_frontend; ?></span>
                                <?php } ?>
                                </div>                
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <?php if(!empty($practices_default_team_button_text && $practices_default_team_button_link )){  ?>
                    <div class="buffalo-team-btn">
                        <a href="<?php echo $practices_default_team_button_link; ?>" class="button"><?php echo $practices_default_team_button_text; ?></a>
                    </div>
                <?php } ?>
            </div>
            
            <div class="buffalo-team-content buffalo-slider-nav">
            <?php foreach( $select_team_members as $post ):setup_postdata($post);
                $thumbnail = get_field('lawyer_profile_image');
                if(empty($thumbnail)){
                    $no_thumb_cls = "no_thumb";
                } else {
                    $no_thumb_cls = "";
                }
                $lawyer_profile_fname   = get_field('lawyer_profile_fname');
                $lawyer_profile_lname   = get_field('lawyer_profile_lname');
                if(!empty($lawyer_profile_fname && $lawyer_profile_lname)){
                    $first_last_name = $lawyer_profile_fname." ".$lawyer_profile_lname;
                    } else {
                    $first_last_name = get_the_title();
                }
                $lawyer_profile_position_frontend   = get_field('lawyer_profile_position_frontend');
                $lawyer_profile_testimonial   = get_field('lawyer_profile_testimonial');
                ?>
                    <div class="buffalo-nav-slide">
                        <div  class="buffalo-team-list flex <?php echo $no_thumb_cls; ?>">
                            <?php if(!empty($thumbnail)){ ?>
                                <div class="buffalo-team-image">
                                <figure class="object-fit">
                                    <img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>">
                                </figure>
                                </div>
                            <?php } ?>
                            <div class="buffalo-team-text flex">
                                <div class="buffalo-team-inner">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial-quote@2x.png" alt="testimonial-quote">
                                    <p><?php echo $lawyer_profile_testimonial; ?></p>
                                    <div class="buffalo-team-name">
                                        <span class="optional-text"><?php echo $first_last_name; ?></span>
                                        <?php if(!empty($lawyer_profile_position_frontend)){ ?>
                                            <span class="buffalo-team-position"><?php echo $lawyer_profile_position_frontend; ?></span>
                                        <?php } ?>
                                    </div>
                                    <a href="<?php echo get_the_permalink(); ?>" class="button btn-transparent">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <?php if(!empty($practices_default_team_button_text && $practices_default_team_button_link )){  ?>
            <a href="<?php echo $practices_default_team_button_link; ?>" class="hide-desktop hide-tablet buffalo-view-btn"><?php echo $practices_default_team_button_text; ?><span class="fa-regular fa-arrow-right right-icon"></span></a>
            <?php } ?>
        </div>
    </div>
</div>
</section>
<?php endif; ?>

<?php
$micro_cta_panel_image         = get_field('micro_cta_panel_image');
$micro_cta_panel_image_mobile  = get_field('micro_cta_panel_image_mobile');
$micro_cta_panel_image_mobile  = $micro_cta_panel_image_mobile ? $micro_cta_panel_image_mobile  : $micro_cta_panel_image;
$micro_cta_panel_sub_heading   = get_field('micro_cta_panel_sub_heading');
$micro_cta_panel_heading       = get_field('micro_cta_panel_heading');
$micro_cta_panel_button_text   = get_field('micro_cta_panel_button_text');
$micro_cta_panel_button_link   = get_field('micro_cta_panel_button_link');
?>

<?php if(!empty($micro_cta_panel_image)){ ?>
<section class="micro-cta-section pos-relative">
    <div class="container">
        <div class="micro-cta-wrap">
            <div class="micro-cta-main pos-relative">
                <div class="micro-cta-image pos-relative">
                    <picture class="micro-cta-thumb object-fit">
                        <source srcset="<?php echo $micro_cta_panel_image['url']; ?>" media="(min-width: 768px)">
                        <img src="<?php echo $micro_cta_panel_image_mobile['url']; ?>" alt="<?php echo $micro_cta_panel_image['alt']; ?>">
                    </picture>
                </div>
                <?php if(!empty($micro_cta_panel_sub_heading || $micro_cta_panel_heading)){ ?>
                <div class="micro-cta-text">
                <?php if(!empty($micro_cta_panel_sub_heading)){ ?>
                    <span class="micro-cta-optional optional-text"><?php echo $micro_cta_panel_sub_heading; ?></span>
                <?php } ?>
                <?php if(!empty($micro_cta_panel_sub_heading)){ ?>
                    <h3><?php echo $micro_cta_panel_sub_heading; ?></h3>
                <?php } ?>
                <?php if(!empty($micro_cta_panel_button_text && $micro_cta_panel_button_link)){ ?>
                    <a href="<?php echo $micro_cta_panel_button_link; ?>" class="button"><?php echo $micro_cta_panel_button_text; ?></a>
                <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php if( have_rows('faqs') ): ?>
<section class="faq-section" id="faqs">
    <div class="faq-wrap">
        <div class="faq-main flex pos-relative">
            <?php  if(!empty($faqs_image_desktop)){?>
                <div class="faq-image">
                    <picture class="object-fit faq-thumb">
                        <source srcset="<?php echo $faqs_image_desktop['url']; ?>" media="(min-width: 768px)"/>
                        <img src="<?php echo $faqs_image_mobile['url']; ?>" alt="<?php echo $faqs_image_desktop['alt']; ?>">
                    </picture>
                </div>
            <?php } ?>
            <div class="faq-content pos-relative">
               <?php if(!empty($faq_heading || $faq_description)){ ?>
                    <div class="faq-title">
                        <?php if(!empty($faq_heading)){?>
                            <h2><?php echo $faq_heading; ?></h2>
                        <?php } if(!empty($faq_description)){
                            echo $faq_description;
                        } ?>
                    </div>
                <?php }  if( have_rows('faqs') ): ?>
                        <div class="accordion-main">
                            <?php  while ( have_rows('faqs') ) : the_row();
                                    $faq_question = get_sub_field('faq_question');
                                    $faq_answer   = get_sub_field('faq_answer');
                                    if(!empty($faq_question &&  $faq_answer)){?>
                                        <div class="accordion">
                                            <div class="accordion-header pos-relative"><?php echo $faq_question; ?><span class="icon fa-light fa-plus"></span></div>
                                            <div class="accordion-content">
                                                <?php echo $faq_answer; ?>
                                            </div>
                                        </div>
                                    <?php }
                            endwhile; ?>
                        </div>
                <?php endif;  if(!empty($faqs_button_text && $faqs_button_link)){ ?>
                    <div class="faq-btn">
                        <a href="<?php echo $faqs_button_link; ?>" class="button btn-transparent"><?php echo $faqs_button_text; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php echo cta_with_bg_image(); ?>

<?php echo newsletter(); ?>

<?php get_footer();