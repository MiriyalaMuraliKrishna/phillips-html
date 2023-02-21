<?php
/*Template Name: Practices Landing
*/
get_header();
?>

<?php
    $hero_banner_desktop_image    = get_field('hero_banner_desktop_image');
    $hero_banner_mobile_image     = get_field('hero_banner_mobile_image');
    $hero_banner_mobile_image     = $hero_banner_mobile_image ? $hero_banner_mobile_image : $hero_banner_desktop_image;
    $hero_banner_h          = get_field('hero_banner_heading');
    if(empty($hero_banner_h)){
        $hero_banner_heading = get_the_title();
    } else {
        $hero_banner_heading = $hero_banner_h;
    }
    $hero_banner_description      = get_field('hero_banner_description');
    $hero_banner_button_text      = get_field('hero_banner_button_text');
    $hero_banner_button_link      = get_field('hero_banner_button_link');
    $banner_secondary_image      = get_field('banner_secondary_image');
    $banner_secondary_image_m      = get_field('banner_secondary_image_mobile');
    $banner_secondary_image_mobile     = $banner_secondary_image_m ? $banner_secondary_image_m : $banner_secondary_image;

    $practices_subpages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
?>

<div class="practices-page site-main-cover">
<section class="default-banner-section pos-relative">
<?php if(!empty($hero_banner_desktop_image)){ ?>
    <div class="background-bg">
        <picture class="object-fit">
            <source srcset="<?php echo $hero_banner_desktop_image['url']; ?>" media="(min-width: 768px)"/>
            <img src="<?php echo $hero_banner_mobile_image['url']; ?>" alt="<?php echo $hero_banner_mobile_image['alt']; ?>">
        </picture>
    </div>
<?php } ?>
    <div class="container">
        <div class="default-banner-main aligncenter">
            <h1><?php echo $hero_banner_heading; ?></h1>
            <?php if(!empty($hero_banner_description)){
                echo $hero_banner_description;
            } ?>
            <?php if(!empty($hero_banner_button_text && $hero_banner_button_link)){?>
                <a href="<?php echo $hero_banner_button_link; ?>" class="button btn-transparent"><?php echo $hero_banner_button_text; ?></a>
            <?php } ?>
        </div>
        <?php if( have_rows('banner_statistics') ): ?>
            <div class="number-count-bg">
                <div class="container">
                    <div class="number-count-main flex">
                    <?php while ( have_rows('banner_statistics') ) : the_row();
                    $banner_statistic_number  = get_sub_field('banner_statistic_number');
                    $banner_statistic_text   = get_sub_field('banner_statistic_text');
                    if(!empty($banner_statistic_number || $banner_statistic_text )){ ?>
                        <div class="number-count aligncenter">
                        <?php if(!empty($banner_statistic_number )){ ?>
                            <div class="num-value"><?php echo $banner_statistic_number; ?></div>
                        <?php } ?>
                        <?php if(!empty($banner_statistic_text )){ ?>
                            <p><?php echo $banner_statistic_text; ?></p>
                        <?php } ?>
                        </div>
                    <?php } endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="practice-section pos-relative">
    <div class="container">
        <div class="practice-wrap pos-relative">
        <div class="practice-big">
        <?php if(!empty($banner_secondary_image)){ ?>
            <picture class="object-fit faq-thumb">
                <source srcset="<?php echo $banner_secondary_image['url']; ?>" media="(min-width: 768px)"/>
                <img src="<?php echo $banner_secondary_image_mobile['url']; ?>" alt="<?php echo $banner_secondary_image_mobile['alt']; ?>">
            </picture>
        <?php } ?>
        </div>
        <?php if($practices_subpages){ ?>
            <div class="practice-main flex">
            <?php foreach( $practices_subpages as $practices_subpage ) {
                $practices_short_description = get_field('practices_short_description', $practices_subpage->ID);
                $practices_thumb_image = get_field('practices_thumb_image', $practices_subpage->ID);
            ?>
                <div class="practice-list pos-relative">
                <?php if(!empty($practices_thumb_image)){ ?>
                    <figure class="practice-thumb flex pos-relative">
                        <img src="<?php echo $practices_thumb_image['url']; ?>" alt="<?php echo $practices_thumb_image['alt']; ?>">
                    </figure>
                <?php } ?>
                    <div class="practice-content">
                        <div class="practice-inner">
                            <h4>
                                <a href="<?php echo get_page_link( $practices_subpage->ID ); ?>">
                                    <?php echo $practices_subpage->post_title; ?>
                                </a>
                            </h4>
                            <?php if(!empty($practices_short_description)){ ?>
                                <p><?php echo $practices_short_description; ?></p>
                            <?php } ?>
                            <a href="<?php echo get_page_link( $practices_subpage->ID ); ?>" class="btn-link pos-relative">Learn More<span class="fa-solid fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<?php echo get_news_event(); ?>

<?php echo cta_with_bg_image(); ?>

<?php echo newsletter(); ?>

<?php get_footer();