<?php

get_header();

$post_id = $post->ID;
$post_content = get_the_content(null, false, $post_id);

?>


<section class="pp__content fade-content delay-200">
    <div class="container">
        <div class="container__inner">
            <p>
                <?php echo $post_content ?>
            </p>
        </div>
    </div>
</section>


<?php get_footer(); ?>