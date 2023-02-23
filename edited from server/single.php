<?php get_header(); ?>

<?php
	$hero_banner_image_default = get_field('insight_hero_banner_image_desktop', 'category_13');
	$banner_image_curr = get_field('blog_banner_image');
	$hero_banner_image = $banner_image_curr ? $banner_image_curr : $hero_banner_image_default;
	$banner_image_m_default = get_field('insight_hero_banner_image_mobile', 'category_13');
	$banner_image_m_curr = get_field('blog_banner_image_mobile');
    $hero_banner_image_mobile = $banner_image_m_curr ? $banner_image_m_curr : $banner_image_m_default;
    $blog_banner_image_description = get_field('blog_banner_image_description');

    $written_by_select_team_member = get_field('written_by_select_team_member');

	$short_cta_image = get_field('short_cta_image');
	$short_cta_heading = get_field('short_cta_heading');
	$short_cta_description = get_field('short_cta_description');

	$content_with_right_side_image_image = get_field('content_with_right_side_image_image');
	$content_with_right_side_image_content = get_field('content_with_right_side_image_content');

	$micro_cta_continued_content = get_field('micro_cta_continued_content');

	$content_with_left_side_image_image = get_field('content_with_left_side_image_image');
	$content_with_left_side_image_content = get_field('content_with_left_side_image_content');

	$promotional_section_icon = get_field('promotional_section_icon');
	$promotional_section_content = get_field('promotional_section_content');

	$promotional_section_continued_content = get_field('promotional_section_continued_content');

	$ideascategories = get_the_category();
?>

<div class="insights-default-page site-main-cover">
<section class="common-banner-section">
    <div class="common-banner-main flex">
        <div class="common-banner-text flex flex-vcenter">
            <div class="common-banner-desc pos-relative">
                <span class="optional-text">
            <?php foreach( $ideascategories as $breadcrumb_category ):
              $exclude_breadcrumb_arr = array(1,13);
              
              if(!in_array($breadcrumb_category->term_id,$exclude_breadcrumb_arr)){
                  $breadcrumb_cat_title = $breadcrumb_category->name;
                  $breadcrumb_catid = $breadcrumb_category->term_id;
                  $resultstr[] = ''.$breadcrumb_cat_title.'';
              } 
              endforeach;
              echo implode(" ",$resultstr); ?>  |  <?php echo get_the_date( 'M d, Y', $post->ID ); ?></span>
                <h1><?php echo get_the_title(); ?></h1>
              <?php if(!empty($blog_banner_image_description)){ ?>
                <p><?php echo $blog_banner_image_description; ?></p>
              <?php } ?>
            </div>
        </div>
        <div class="common-banner-image">
            <picture class="object-fit common-banner-thumb">
                <source srcset="<?php echo $hero_banner_image['url']; ?>" media="(min-width: 768px)">
    			<img src="<?php echo $hero_banner_image_mobile['url']; ?>" alt="<?php echo $hero_banner_image_mobile['alt']; ?>">
            </picture>
        </div>
    </div>
</section>

<section class="insights-default-section pos-relative">
    <div class="container x-md">
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
    </div>
    <div class="container x-md">
        <div class="insights-default-wrap">
        <?php if( $written_by_select_team_member ): ?>
            <span class="author-name">Written by: <?php
            $num_of_items = count($written_by_select_team_member);
  			$num_count = 0;
  			foreach( $written_by_select_team_member as $post ): setup_postdata($post); $num_count = $num_count + 1; ?><?php the_title(); if ($num_count < $num_of_items) { echo ", "; } endforeach; ?></span>
        <?php wp_reset_postdata(); endif; ?>
           	<?php
	          while ( have_posts() ) : the_post();
	               the_content();
	          endwhile; wp_reset_postdata();
		    ?>
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

<section class="another-short-section">
    <div class="container">
        <div class="another-short-wrap">
        <?php if(!empty($short_cta_image || $short_cta_heading || $short_cta_description)){ ?>
            <div class="another-short-one flex">
            <?php if(!empty($short_cta_image)){ ?>
                <div class="another-short-image">
                    <figure class="another-short-thumb object-fit">
                        <img src="<?php echo $short_cta_image['url']; ?>" alt="<?php echo $short_cta_image['url']; ?>">
                    </figure>
                </div>
            <?php } ?>
            <?php if(!empty($short_cta_heading || $short_cta_description)){ ?>
                <div class="another-short-content flex flex-center">
                    <div class="another-short-inner">
                    <?php if(!empty($short_cta_heading)){ ?>
                        <h2><?php echo $short_cta_heading; ?></h2>
                    <?php } ?>
                    <?php if(!empty($short_cta_description)){ ?>
                        <?php echo $short_cta_description; ?>
                    <?php } ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } ?>
        <?php if(!empty($content_with_right_side_image_image || $content_with_right_side_image_content)){ ?>
            <div class="another-short-two flex">
            <?php if(!empty($content_with_right_side_image_content)){ ?>
                <div class="another-short-two-content flex flex-center">
                    <div class="another-short-two-inner">
                        <?php echo $content_with_right_side_image_content; ?>
                    </div>
                </div>
            <?php } ?>
            <?php if(!empty($content_with_right_side_image_image)){ ?>
                <div class="another-short-two-image">
                    <figure class="another-short-two-thumb object-fit pos-relative">
                        <img src="<?php echo $content_with_right_side_image_image['url']; ?>" alt="<?php echo $content_with_right_side_image_image['alt']; ?>">
                    </figure>
                </div>
            <?php } ?>
            </div>
        <?php } ?>
        <?php if( have_rows('split_images') ):?>
            <div class="image-caption-section">
                <div class="fluid-container pos-relative">
                    <div class="image-caption-main flex">
                    <?php while ( have_rows('split_images') ) : the_row();
                    $split_image     = get_sub_field('split_image');
                    $split_image_heading = get_sub_field('split_image_heading');
                    $split_image_caption = get_sub_field('split_image_caption');
                    if(!empty($split_image)){ ?>
                        <div class="image-caption-list pos-relative">
                        <?php if(!empty($split_image)){ ?>
                            <figure class="image-caption-thumb object-fit">
                                <img src="<?php echo $split_image['url']; ?>" alt="<?php echo $split_image['alt']; ?>">
                            </figure>
                        <?php } ?>
                        <?php if(!empty($split_image || $split_image_heading || $split_image_caption)){ ?>
                            <div class="image-caption-text">
                            <?php if(!empty($split_image_heading)){ ?>
                                <h4><?php echo $split_image_heading; ?></h4>
                            <?php } ?>
                            <?php if(!empty($split_image_caption)){ ?>
                                <p><?php echo $split_image_caption; ?></p>
                            <?php } ?>
                            </div>
                        <?php } ?>
                        </div>
                    <?php } endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
    <div class="another-short-wrap2 pos-relative">
        <div class="container x-md">
            <?php echo $micro_cta_continued_content; ?>
        <?php if(!empty($content_with_right_side_image_image || $content_with_right_side_image_content)){ ?>
            <div class="medium-headline flex">
            <?php if(!empty($content_with_right_side_image_image)){ ?>
                <div class="medium-headline-image">
                    <figure class="medium-headline-thumb pos-relative flex">
                        <img src="<?php echo $content_with_right_side_image_image['url']; ?>" alt="<?php echo $content_with_right_side_image_image['alt']; ?>">
                    </figure>
                </div>
            <?php } ?>
            <?php if(!empty($content_with_right_side_image_content)){ ?>
                <div class="medium-headline-content flex flex-center">
                    <div class="medium-headline-inner">
                        <?php echo $content_with_right_side_image_content; ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } ?>
        <?php if(!empty($promotional_section_content)){ ?>
            <div class="default-newsletter-main aligncenter">
                <div class="fluid-container pos-relative">
                    <div class="container">
                        <div class="default-newsletter-inner">
                        <?php if(!empty($promotional_section_icon)){ ?>
                            <span>
                            	<img src="<?php echo $promotional_section_icon['url']; ?>" alt="<?php echo $promotional_section_icon['alt']; ?>">
                            </span>
                        <?php } ?>
                            <?php echo $promotional_section_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php echo $promotional_section_continued_content; ?>
            <div class="insight-default-btn flex flex-center">
                <?php previous_post_link('%link', 'Previous Article', TRUE); ?>
                <?php next_post_link('%link', 'Next Article', TRUE); ?>
            </div>
        </div>
    </div>
</section>

<?php echo get_related_insights(); ?>

<?php echo newsletter(); ?>

<?php get_footer(); ?>