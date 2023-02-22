<?php
/*Template Name: Our People Template
*/
get_header();
?>
<div class="people-page site-main-cover">
<?php 
get_defult_banner();
if ( have_rows('our_feature_points') ) : ?>
<section class="perks-section">
    <div class="container">
        <div class="perks-wrap">
            <div class="perks-title aligncenter">
                <h2>Feature Points</h2>
                <hr class="small aligncenter">
            </div>
            <div class="perks-main flex">
                <?php while ( have_rows('our_feature_points') ) : the_row();
                        $our_feature_points_icon        = get_sub_field('our_feature_points_icon');
                        $our_feature_points_heading     = get_sub_field('our_feature_points_heading');
                        $our_feature_points_description = get_sub_field('our_feature_points_description'); 
                        if(!empty($our_feature_points_heading || $our_feature_points_description )){ ?>
                        <div class="perks-list aligncenter">
                            <?php if(!empty($our_feature_points_icon)){?>
                                <span class="perks-icon flex"><img src="<?php echo $our_feature_points_icon['url']; ?>" alt="<?php echo $our_feature_points_icon['alt']; ?>"></span>
                            <?php } if(!empty($our_feature_points_heading)){?>   
                                <h4><?php echo $our_feature_points_heading; ?></h4>
                            <?php } if(!empty($our_feature_points_description)){
                                echo $our_feature_points_description;
                            } ?>
                        </div>
                <?php  } endwhile; wp_reset_postdata(); ?>
             
            </div>
        </div>
    </div>
</section>
<?php
endif;
get_inclusive_environment();
$args = array(
    'post_type'      => 'our_people', //slug of post type
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
    
);
$select_people =  get_posts( $args );
?>
<section class="find-person-section pos-relative">
    <div class="container">
        <div class="find-person-wrap">
            <div class="our-people-filter">
                <div class="our-people-heading aligncenter">
                    <h2>Find a Person</h2>
                    <p>Separated they live in Bookmarksgrove right at the coast of the famous Semantics, large language ocean and many more stuff and more more more.</p>
                </div>
                <div class="our-people-searchfeild flex">
                    <div class="our-people-text hide-mobile">
                        <h2>Our People</h2>
                    </div>
                    <div class="our-people-search">
                        <div class="filter_icon"><span class="fa-regular fa-filter"></span></div>
                        <form class="our-people-frm flex pos-relative">
                            <input type="text" placeholder="Who can we help you find?">
                            <button type="submit">Search</button>
                        </form>
                        <div class="our-people-letter flex">
                            <div class="our-people-name">
                                <span>Search by last name:</span>
                            </div>
                            <div class="our-people-alphabet">
                                <ul class="alphabet-list flex">
                                    <li><a href="#">A</a></li>
                                    <li><a href="#">B</a></li>
                                    <li><a href="#">C</a></li>
                                    <li><a href="#">D</a></li>
                                    <li><a href="#">E</a></li>
                                    <li><a href="#">F</a></li>
                                    <li><a href="#">G</a></li>
                                    <li><a href="#">H</a></li>
                                    <li><a href="#">I</a></li>
                                    <li><a href="#">J</a></li>
                                    <li><a href="#">K</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">N</a></li>
                                    <li><a href="#">O</a></li>
                                    <li><a href="#">P</a></li>
                                    <li><a href="#">Q</a></li>
                                    <li><a href="#">R</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">T</a></li>
                                    <li><a href="#">U</a></li>
                                    <li><a href="#">V</a></li>
                                    <li><a href="#">W</a></li>
                                    <li><a href="#">X</a></li>
                                    <li><a href="#">Y</a></li>
                                    <li><a href="#">Z</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="our-people-dropdown flex">
                    <div class="our-people-field">
                        <select name="">
                            <option value="">Sort by Office</option>
                            <option value="">Sort by Office</option>
                            <option value="">Sort by Office</option>
                            <option value="">Sort by Office</option>
                            <option value="">Sort by Office</option>
                            <option value="">Sort by Office</option>
                        </select>
                    </div>
                    <div class="our-people-field">
                        <select name="">
                            <option value="">Sort by Practice</option>
                            <option value="">Sort by Practice</option>
                            <option value="">Sort by Practice</option>
                            <option value="">Sort by Practice</option>
                            <option value="">Sort by Practice</option>
                            <option value="">Sort by Practice</option>
                        </select>
                    </div>
                    <div class="our-people-field">
                        <select name="">
                            <option value="">Sort by Role</option>
                            <option value="">Sort by Role</option>
                            <option value="">Sort by Role</option>
                            <option value="">Sort by Role</option>
                            <option value="">Sort by Role</option>
                            <option value="">Sort by Role</option>
                        </select>
                    </div>
                    <div class="our-people-field">
                        <select name="">
                            <option value="">Sort by Jurisdiction</option>
                            <option value="">Option One (341)</option>
                            <option value="">Option Two (47)</option>
                            <option value="">Option Three (42)</option>
                            <option value="">Option Four (31)</option>
                        </select>
                    </div>
                    <div class="our-people-field">
                        <select name="">
                            <option value="">Yale University</option>
                            <option value="">Yale University</option>
                            <option value="">Yale University</option>
                            <option value="">Yale University</option>
                            <option value="">Yale University</option>
                            <option value="">Yale University</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="our-people-main flex">
                <?php foreach ( $select_people as $post ) :
						$thumbnail = get_field('lawyer_profile_image', $post->ID);?>
                <div class="our-people-list">
                    <?php if($thumbnail){ ?>
                        <figure class="our-people-thumb object-fit pos-relative">
                            <a href="<?php echo get_the_permalink($post->ID); ?>"><img src="<?php echo $thumbnail['url'];  ?>" alt="<?php echo $thumbnail['alt'];  ?>"></a>
                        </figure>
                    <?php } ?>
                    <div class="our-people-content">
                        <span class="optional-text"><a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></span>
                        <span>Title/Position  |  Team Leader</span>
                        <ul class="our-people-details">
                            <li>
                                <span class="fa-light fa-location-dot contact-icon"></span>Office Location
                            </li>
                            <li>
                                <a href="mailto:name@phillipslytle.com"><span class="fa-light fa-envelope contact-icon"></span>name@phillipslytle.com</a>
                            </li>
                            <li>
                                <a href="tel:1-555-5555 x555"><span class="fa-light fa-phone contact-icon"></span>1-555-5555 x555</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach;  wp_reset_query();  ?>
            </div>
            <div class="aligncenter show-more-btn">
                <a href="#" class="button">Show More People</a>
            </div>
        </div>
    </div>
</section>
<?php 
get_common_grid();
our_offices();
get_cta_with_rightside_image();
newsletter();
get_footer(); ?>