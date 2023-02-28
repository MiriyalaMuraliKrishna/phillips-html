<?php
/*Template Name: Orphan Landing Template
*/
get_header();
get_common_banner();
$orphan_landing_logo_heading = get_field('orphan_landing_logo_heading');
?>
<section class="orphan-landing-section pos-relative">
    <div class="container">
        <div class="orphan-landing-wrap">
            <div class="download-print-main flex">
                <div class="download-print flex">
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-file-arrow-down icon"></span>Download</a></span>
                    <span class="download-print-text"><a href="#"><span class="fa-solid fa-print icon"></span>Print</a></span>
                </div>
            </div>
            <?php if( have_rows('orphan_landing_logos') ): ?>
                <div class="logo-slider-section">
                    <div class="logo-slider-wrap">
                        <?php if(!empty($orphan_landing_logo_heading)){ ?>
                            <h5><?php echo $orphan_landing_logo_heading; ?></h5>
                        <?php } ?>
                        <div class="logo-slider-main flex">
                            <?php  while ( have_rows('orphan_landing_logos') ) : the_row();
                                $orphan_landing_logo = get_sub_field('orphan_landing_logo');
                                if(!empty($orphan_landing_logo)){?>
                                    <div class="logo-slider-item flex">
                                        <figure class="logo-slider-thumb">
                                            <img src="<?php echo $orphan_landing_logo['url'];  ?>" alt="<?php echo $orphan_landing_logo['alt'];  ?>">
                                        </figure>
                                    </div>
                                <?php } 
                            endwhile; ?>
                            
                        </div>
                    </div>
                </div>
           <?php endif;
           $orphan_landing_intro = get_field('orphan_landing_intro'); ?>
            <div class="orphan-landing-main flex">
                <div class="orphan-landing-content">
                    <?php if(!empty($orphan_landing_intro)) {
                        echo $orphan_landing_intro;
                    }?>
                    
                   
                </div>
                <?php 
                $request_call_heading     = get_field('request_call_heading');
                $request_call_description = get_field('request_call_description');
                $request_call_form_id     = get_field('request_call_form_id');
                if(!empty($request_call_form_id )){  ?>
                <div class="orphan-landing-form">
                    <div class="orphan-landing-inner">
                        <?php if(!empty($request_call_heading )){  ?>
                            <h4><?php echo $request_call_heading; ?></h4>
                        <?php } if(!empty($request_call_description )){ 
                            echo $request_call_description;
                        } echo do_shortcode($request_call_form_id);?>
                    </div>

                </div>
                <?php } ?>

            </div>

        </div>

    </div>
</section>
<?php
$our_people_heading     = get_field('our_people_heading');
$select_people          = get_field('select_people');
$our_people_button_text = get_field('our_people_button_text');
$our_people_button_link = get_field('our_people_button_link');
if(empty($featured_insight_select_post )){
    $args = array(
        'numberposts' => -1,
        'post_type'   => 'our_people',
        'post_status' => 'publish',
        'orderby'    => 'menu_order',
	    'order' => 'DESC'
        
    );
    $select_people = get_posts( $args );
}
if( $select_people ):?>
<section class="buffalo-team-section pos-relative">
<div class="container">
    <div class="buffalo-team-wrap">
        <div class="buffalo-team-heading aligncenter">
            <?php if(!empty($our_people_heading )){  ?>
                <h2><?php echo $our_people_heading; ?></h2>
                <hr class="small aligncenter">
            <?php } ?>
        </div>
        <div class="buffalo-team-slider flex">
            <div class="buffalo-team-main">
                <div class="buffalo-team buffalo-slider-for">
                    <?php foreach( $select_people as $post ):setup_postdata($post);
                           $thumbnail = get_the_post_thumbnail_url($post->ID,'');
                           if(empty($thumbnail)){ $no_image_class = "buffalo-team-item flex flex-center no_image"; }else{ $no_image_class ="buffalo-team-item flex flex-center"; }
                    ?>
                        <div class="buffalo-for-slide">
                            <div class="<?php echo $no_image_class; ?>">
                                <?php if(!empty($thumbnail)){ ?>
                                    <div class="buffalo-sm-image flex">
                                        <img src="<?php echo $thumbnail; ?>" alt="team-member">
                                    </div>
                                <?php } ?>
                                <div class="buffalo-text">
                                    <span class="optional-text"><?php echo get_the_title(); ?></span>
                                    <span><a href="#">Title/Position</a> | Team leader</span>
                                </div>                
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <?php if(!empty($our_people_button_text && $our_people_button_link )){  ?>
                    <div class="buffalo-team-btn">
                        <a href="<?php echo $our_people_button_link; ?>" class="button"><?php echo $our_people_button_text; ?></a>
                    </div>
                <?php } ?>
            </div>
            
            <div class="buffalo-team-content buffalo-slider-nav">
                <?php foreach( $select_people as $post ):setup_postdata($post);?>
                    <div class="buffalo-nav-slide">
                        <div  class="buffalo-team-list flex">
                            <div class="buffalo-team-image">
                                <figure class="object-fit">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-big@2x.jpg" alt="team-big">
                                </figure>
                            </div>
                            <div class="buffalo-team-text flex">
                                <div class="buffalo-team-inner">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial-quote@2x.png" alt="testimonial-quote">
                                    <p>Far far away, behind the mountains, far from the countries Vokalia-Consonantia, there live the blind separated they live right at the coast of the Semantics.”</p>
                                    <div class="buffalo-team-name">
                                        <span class="optional-text"><?php echo get_the_title(); ?></span>
                                        <span class="buffalo-team-position">Title/Position | Team Leader</span>
                                    </div>
                                    <a href="<?php echo get_the_permalink(); ?>" class="button btn-transparent">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <a href="#" class="hide-desktop hide-tablet buffalo-view-btn">Meet The Team<span class="fa-regular fa-arrow-right right-icon"></span></a>
        </div>
    </div>
</div>
</section>
<?php
endif;
get_insight_featured(); 
get_news_event();
$sub_topics_heading            = get_field('sub_topics_heading');
$sub_topics_description        = get_field('sub_topics_description');
$sub_topics_topic_image        = get_field('sub_topics_topic_image');
$sub_topics_topic_image_mobile = get_field('sub_topics_topic_image_mobile');
$sub_topics_topic_image_mobile = $sub_topics_topic_image_mobile ? $sub_topics_topic_image_mobile : $sub_topics_topic_image;
if( have_rows('topics') ):?>
<section class="sub-topic-section pos-relative">
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
            <div class="sub-topic-main flex">
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
<?php 
endif;
$micro_cta_panel_image         = get_field('micro_cta_panel_image');
$micro_cta_panel_image_mobile  = get_field('micro_cta_panel_image_mobile');
$micro_cta_panel_image_mobile  = $micro_cta_panel_image_mobile ? $micro_cta_panel_image_mobile  : $micro_cta_panel_image;
$micro_cta_panel_sub_heading   = get_field('micro_cta_panel_sub_heading');
$micro_cta_panel_heading       = get_field('micro_cta_panel_heading');
$micro_cta_panel_button_text   = get_field('micro_cta_panel_button_text');
$micro_cta_panel_button_link   = get_field('micro_cta_panel_button_link');
if(!empty($micro_cta_panel_sub_heading || $micro_cta_panel_heading)){?>
<section class="micro-cta-section">
    <div class="container">
        <div class="micro-cta-wrap">
            <div class="micro-cta-main pos-relative">
                <?php  if(!empty($micro_cta_panel_image)){?>
                    <div class="micro-cta-image pos-relative">
                        <picture class="micro-cta-thumb object-fit">
                            <source srcset="<?php echo $micro_cta_panel_image['url']; ?>" media="(min-width: 768px)">
                            <img src="<?php echo $micro_cta_panel_image_mobile['url']; ?>" alt="<?php echo $micro_cta_panel_image_mobile['alt']; ?>">
                        </picture>
                    </div>
                <?php } if(!empty($micro_cta_panel_sub_heading || $micro_cta_panel_heading )){ ?>
                    <div class="micro-cta-text">
                        <?php  if(!empty($micro_cta_panel_sub_heading)){?>
                            <span class="micro-cta-optional optional-text"><?php echo $micro_cta_panel_sub_heading; ?></span>
                        <?php }  if(!empty($micro_cta_panel_heading)){?>
                            <h3><?php echo $micro_cta_panel_heading; ?></h3>
                        <?php } if(!empty($micro_cta_panel_button_text || $micro_cta_panel_button_link )){ ?>
                            <a href="<?php echo $micro_cta_panel_button_link; ?>" class="button"><?php echo $micro_cta_panel_button_text; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php 
}
$faqs_image_desktop = get_field('faqs_image_desktop');
$faqs_image_mobile  = get_field('faqs_image_mobile');
$faqs_image_mobile  = $faqs_image_mobile ? $faqs_image_mobile  : $faqs_image_desktop;
$faq_heading        = get_field('faq_heading');
$faq_description    = get_field('faq_description');
$faqs_button_text   = get_field('faqs_button_text');
$faqs_button_link   = get_field('faqs_button_link');?>
<section class="faq-section">
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
<?php 
$cta_panel_desktop_background_image = get_field('cta_panel_desktop_background_image');
$cta_panel_sub_heading              = get_field('cta_panel_sub_heading');
$cta_panel_heading                  = get_field('cta_panel_heading');
$cta_panel_description              = get_field('cta_panel_description');
$cta_panel_button_text              = get_field('cta_panel_button_text');
$cta_panel_button_link              = get_field('cta_panel_button_link');
?>
<section class="cta-panel-section">
<div class="container">
    <div class="cta-panel-main pos-relative">
        <?php  if(!empty($cta_panel_desktop_background_image)){?>
                <div class="cta-panel-image background-bg">
                    <figure class="cta-panel-thumb object-fit">
                        <img src="<?php echo $cta_panel_desktop_background_image['url']; ?>" alt="<?php echo $cta_panel_desktop_background_image['alt']; ?>">
                    </figure>
                </div>
        <?php } if(!empty($cta_panel_heading || $cta_panel_description)){ ?>
                <div class="cta-panel-content">
                    <div class="cta-panel-inner">
                        <div class="cta-panel-text">
                            <?php if(!empty($cta_panel_sub_heading )){  ?>
                                <span class="optional-text cta-optional-text"><?php echo $cta_panel_sub_heading; ?></span>
                            <?php } if(!empty($cta_panel_heading && $cta_panel_button_link)){  ?>
                                <h3><a href="<?php echo $cta_panel_button_link; ?>"><?php echo $cta_panel_heading; ?></a></h3>
                            <?php }else{?>
                                <h3><?php echo $cta_panel_heading; ?></h3>
                            <?php } if(!empty($cta_panel_description )){ 
                                echo $cta_panel_description;
                            } if(!empty($cta_panel_button_text &&  $cta_panel_button_link )){  ?>
                                <a href="<?php echo $cta_panel_button_link; ?>" class="button btn-transparent"><?php echo $cta_panel_button_text; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
</section>
<?php 
newsletter();
get_footer(); ?>