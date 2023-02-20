<?php
/*Template Name: Contact Template
*/
get_header();
$hero_banner_desktop_image    = get_field('hero_banner_desktop_image',$pageid);
$hero_banner_mobile_image     = get_field('hero_banner_mobile_image',$pageid);
$hero_banner_mobile_image     = $hero_banner_mobile_image ? $hero_banner_mobile_image : $hero_banner_desktop_image;
$hero_banner_heading          = get_field('hero_banner_heading',$pageid);
$hero_banner_heading          = $hero_banner_heading ? $hero_banner_heading : get_the_title();
$hero_banner_description      = get_field('hero_banner_description',$pageid);
?>
<section class="default-banner-section pos-relative">
<div class="background-bg">
    <picture class="object-fit">
        <source srcset="<?php echo $hero_banner_desktop_image['url']; ?>" media="(min-width: 768px)"/>
		<img src="<?php echo $hero_banner_mobile_image['url']; ?>" alt="<?php echo $hero_banner_mobile_image['alt']; ?>">
	</picture>
</div>
<div class="container">
    <div class="default-banner-main aligncenter">
            <?php if(!empty($hero_banner_heading)){ ?>
				<h1><?php echo $hero_banner_heading; ?></h1>
			<?php } if(!empty($hero_banner_description)){ 
				echo $hero_banner_description;
			}  if( have_rows('hero_banner_social_media') ):?>
            <ul class="banner-icons flex flex-center">
                <?php while ( have_rows('hero_banner_social_media') ) : the_row();
                    $hero_banner_social_icons_class          = get_sub_field('hero_banner_social_icons_class');
                    $hero_banner_social_icons_link           = get_sub_field('hero_banner_social_icons_link'); 
                    if(!empty($hero_banner_social_icons_class && $hero_banner_social_icons_link)){ ?>
                        <li><a href="<?php echo $hero_banner_social_icons_link; ?>" target="_blank" rel="noopener"><span class="<?php echo $hero_banner_social_icons_class; ?>"></span></a></li>
                    <?php  } 
                endwhile; ?>
            </ul>
            <?php endif; ?>
    </div>
</div>
</section>
<?php
$contact_our_office_heading      = get_field('contact_our_office_heading');
$contact_our_office_description  = get_field('contact_our_office_description'); ?>
<section class="contact-office-section">
<div class="container">
    <div class="contact-office-wrap">
        <div class="contact-office-main flex">
            <div class="contact-office-text">
                <?php if(!empty($contact_our_office_heading || $contact_our_office_description)){ ?>
                    <div class="contact-office-head">
                        <?php if(!empty($contact_our_office_heading)){?>
                            <h2><?php echo $contact_our_office_heading; ?></h2>
                        <?php } if(!empty($contact_our_office_description)){
                            echo $contact_our_office_description;
                        } ?>
                    </div>
                <?php } 
                $arg =  array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'post_parent'    => 884,//our firm location
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                
                );
                
                $parent = new WP_Query($arg);
                if ($parent->have_posts()) : ?>
                    <div class="contact-office-lists flex">
                        <?php while ($parent->have_posts()) : $parent->the_post();
                            	$feature_image_url =  get_the_post_thumbnail_url(get_the_ID());
                         ?>
                            <div class="contact-office-list">
                                <?php if(!empty($feature_image_url)){ ?>
                                <div class="contact-office-image">
                                    <figure class="object-fit contact-office-thumb">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <img src="<?php echo $feature_image_url; ?>" alt="Office Image">
                                        </a>
                                    </figure>
                                </div>
                                <?php } ?>
                                <div class="contact-office-desc">
                                    <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                    <ul class="phone-list">
                                    <li class="flex">
                                        <span class="fa-sharp fa-solid fa-location-dot contact-icon"></span>
                                        <span class="contact-icon-text">
                                            <address>Omni Plaza <br>30 South Pearl Street <br>Albany, NY 12207-1537</address>
                                            <a href="#" class="read-btn pos-relative">Get Directions<span class="fa-solid fa-angle-right angle-icon"></span></a>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="tel:1-555-5555 x555" class="flex"><span class="fa-solid fa-phone contact-icon"></span><span class="contact-icon-text">1-555-5555 x555</span></a>
                                        </li>
                                        <li>
                                        <a href="tel:1-555-5555 x555" class="flex"><span class="fa-solid fa-fax contact-icon"></span><span class="contact-icon-text">1-555-5555 x555</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        <?php endwhile;                        
                        wp_reset_postdata(); ?>            
                    </div>
                    <div class="contact-page-btn flex flex-center hide-desktop hide-tablet">
                        <a href="#" class="button">Load More</a>
                    </div>
                    <figure class="breakpoint-thumb pos-relative hide-desktop hide-tablet">
                        <img src="images/small-logo.svg" alt="small-logo">
                    </figure>
                <?php endif; ?>
            </div>
           <?php $contact_form_heading    = get_field('contact_form_heading',$pageid);
                    $contact_form_id      = get_field('contact_form_id',$pageid); 
                    if(!empty($contact_form_heading || $contact_form_id)){?>
                    <div class="contact-office-form">
                        <div class="office-form-bg">
                            <?php if(!empty($contact_form_heading)){?>
                                    <h4><?php echo $contact_form_heading; ?></h4>
                                <?php } if(!empty($contact_form_id)){
                                    echo do_shortcode($contact_form_id);
                            } ?>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
</section>
<?php
newsletter();
get_footer(); ?>