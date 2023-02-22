
<?php
/*Template Name: Careers Group Template
*/
get_header();
?>
<div class="careers-group-page site-main-cover">
<?php get_defult_banner(); 
$careers_group_cta_sub_heading      = get_field('careers_group_cta_sub_heading');
$careers_group_cta_heading          = get_field('careers_group_cta_heading');
$careers_group_cta_button_text      = get_field('careers_group_cta_button_text');
$careers_group_cta_button_link      = get_field('careers_group_cta_button_link');
if ( have_posts() ) : ?>
<section class="short-headline-section">
    <div class="container">
        <div class="short-headline-wrap">
            <div class="short-headline-main flex">
                <?php if(!empty($careers_group_cta_heading)){ ?>
                    <div class="short-headline-heading">
                        <div class="short-headline-title">
                            <?php if(!empty($careers_group_cta_sub_heading)){ ?>
                                <span class="optional-text"><?php echo $careers_group_cta_sub_heading;  ?></span>
                            <?php } if(!empty($careers_group_cta_heading)){ ?>
                                <h4><?php echo $careers_group_cta_heading;  ?></h4>
                            <?php } if(!empty($careers_group_cta_button_text && $careers_group_cta_button_link)){ ?>
                                <a href="<?php echo $careers_group_cta_button_link;  ?>" class="button"><?php echo $careers_group_cta_button_text;  ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } if ( have_posts() ) :?>
                <div class="short-headline-content">
                <?php  while ( have_posts() ) : the_post();
                    the_content();
                endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif;
if( have_rows('career_testimonials') ): ?>
<section class="testimonial-section">
    <div class="container">
        <div class="testimonial-wrap"> 
            <div class="testimonial-sider">

            <?php  while ( have_rows('career_testimonials') ) : the_row();
                $testimonial_author_image     = get_sub_field('testimonial_author_image');
                $testimonial_content          = get_sub_field('testimonial_content');
                $testimonial_author_name      = get_sub_field('testimonial_author_name');
                $testimonial_author_position  = get_sub_field('testimonial_author_position');
                if(!empty($testimonial_content)){
                $topic_heading     = get_sub_field('topic_heading'); ?>
                  
                        <div class="testimonial-side">
                            <div class="testimonial-list flex">
                                <?php if(!empty($testimonial_author_image)){?>
                                    <div class="testimonial-image">
                                        <figure class="object-fit">
                                            <img src="<?php echo $testimonial_author_image['url']; ?>" alt="<?php echo $testimonial_author_image['url']; ?>">
                                        </figure>
                                    </div>
                                <?php } ?>
                                <div class="testimonial-content">
                                    <?php echo $testimonial_content; 
                                    if(!empty($testimonial_author_name || $testimonial_author_position)){?>
                                        <div class="testimonial-name">
                                            <?php if(!empty($testimonial_author_name)){?>
                                                <h6><?php echo $testimonial_author_name; ?></h6>
                                            <?php } if(!empty($testimonial_author_position)){?>
                                                <span><?php echo $testimonial_author_name; ?></span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        
                    
            <?php } endwhile;  wp_reset_postdata();?>
            </div>
        </div>
    </div>
</section>
<?php endif; 
if( have_rows('ctas') ):?>
<section class="careers-cta-section">
    <div class="container">
        <div class="careers-cta-wrap">
            <div class="careers-cta-main flex">
            	<?php $i=1; while ( have_rows('ctas') ) : the_row();
	      				$cta_image         = get_sub_field('cta_image');
	      				$cta_heading       = get_sub_field('cta_heading');
	      				$cta_description   = get_sub_field('cta_description');
	      				$cta_button_text   = get_sub_field('cta_button_text');
	      				$cta_button_link   = get_sub_field('cta_button_link');
                        if(empty($cta_image)){
                            $no_image = "no_image";
                        }else{
                            $no_image = "";
                        }
	      				if($i %2 == 0){ $direction_class  = "careers-cta-list flex reverse"; }else { $direction_class ="careers-cta-list flex";}
	      				if(!empty($cta_heading ||  $cta_description)){?>
			                <div class="<?php echo $direction_class." ".$no_image; ?>">
			                	<?php if ( !empty( $cta_heading ||  $cta_description) ) { ?>
			                    <div class="careers-cta-text flex">
			                    	<?php if ( !empty( $cta_heading ) ) { ?>
			                        	<h2><?php echo $cta_heading; ?></h2>
			                        <?php } if ( !empty( $cta_description ) ) {
			                        	echo $cta_description;
			                        } if(!empty($cta_button_text && $cta_button_link)){?>			                       
			                        	<a href="<?php echo $cta_button_link; ?>" class="button"><?php echo $cta_button_text; ?></a>
			                        <?php } ?>
			                    </div>
			                    <?php } if ( !empty( $cta_image ) ) { ?>
				                    <div class="careers-cta-image">
				                        <figure class="object-fit">
				                            <img src="<?php echo $cta_image['url']; ?>" alt="<?php echo $careers_feature_icon['alt']; ?>">
				                        </figure>
				                    </div>
			                    <?php } ?>
			                </div>
               			<?php } 
               		$i++; endwhile;  wp_reset_query(); ?>  


            </div>

        </div>

    </div>

</section>
<?php 
endif;
get_our_perks('bottom');
get_cta_with_rightside_image();
get_current_career_opportunities(); 
newsletter();
get_footer(); ?>