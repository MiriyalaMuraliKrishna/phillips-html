<?php
/*Template Name: Subscribe Template
*/
get_header();
$subscribe_intro_heading      = get_field('subscribe_intro_heading');
$subscribe_intro_description  = get_field('subscribe_intro_description'); 
$subscribe_content            = get_field('subscribe_content');
$subscribe_form_id            = get_field('subscribe_form_id'); 
?>
<section class="subscribe-page-section">
<div class="container">
    <div class="subscribe-page-wrap">
        <div class="subscribe-page-main flex">
            <?php if(!empty($subscribe_intro_heading || $subscribe_intro_description)){ ?>
                    <div class="subscribe-page-text pos-relative">
                        <?php if(!empty($subscribe_intro_heading)){?>
                            <h1><?php echo $subscribe_intro_heading; ?></h1>
                            <h2 style="display: none;"></h2>
                        <?php }  if(!empty($subscribe_intro_description)){
                            echo $subscribe_intro_description; 
                        } if(!empty($subscribe_content)){
                            echo $subscribe_content; 
                        } ?>
                    </div>
            <?php } if(!empty($subscribe_form_id)){?>
                <div class="subscribe-page-form">
                    <?php echo do_shortcode($subscribe_form_id); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

</section>
<?php get_footer(); ?>