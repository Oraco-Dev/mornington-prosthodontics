<?php

/*
Template Name: Services Template
*/

get_header();

// page title
$page_id = get_the_ID();
$page_title = get_the_title();
$thumbnail_url = get_the_post_thumbnail_url();

$main_content = get_field('main_content', $page_id);
$cta_content = get_field('cta_content', $page_id);


?>

<section class="sc__banner fade-content delay-200">
    <div class="container">
        <div class="container__inner">
            <div class="sc__banner-outer">
                <span class="button-text-secondary">PROCEDURES</span>
                <h1>
                    <?php echo $page_title ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sc__procedure">
    <div class="container">
        <div class="container__inner">
            <div class="sc__procedure-alternate">
                <div class="sc__procedure-alternate-left fade-content delay-400">
                    <img src="<?php echo $thumbnail_url ?>" alt="Image of dentist" />
                </div>
                <div class="sc__procedure-alternate-right fade-content delay-600">
                    <div class="sc__procedure-meta">
                        <p>
                            <?php echo $main_content ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sc__cta">
    <?php get_template_part('template-parts/call-to-action', null, array('ctaText' => $cta_content, 'ctaBtnText' => 'CALL US', 'ctaBtnLink' => 'tel:0399238255')); ?>
</section>

<section class="sc__accordion">
    <?php get_template_part('template-parts/accordion', null, array()); ?>
</section>


<? get_footer(); ?>