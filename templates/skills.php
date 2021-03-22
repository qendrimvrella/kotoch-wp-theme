<?php /* Template Name: Skills */ ?>

<?php get_header(); ?>

<h1 class="text-center fw-900 my-5 fs-4"><?php the_title(); ?></h1>

<div class="container overflow-hidden pt-3">
    <div class="row gx-1 gx-md-4 gx-lg-3 gx-xl-5 gy-5 pb-4">
        <?php
        $query = new WP_Query(array('post_type'=>'competence'));
        if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
        ?>
            <?php get_template_part( 'template-parts/content', 'skills-card' ); ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</div>

<?php get_footer(); ?>
