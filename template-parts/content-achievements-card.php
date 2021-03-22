<div class="col-12 col-md-6 col-lg-4 h-3300r d-flex flex-column justify-content-end">
    <div class="position-relative shadow rounded-25 h-2500r d-flex flex-column justify-content-end p-4">
        <div class="position-absolute top-0 start-50 translate-middle w-85 h-1950r">
            <div class="position-relative h-110">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('images') ):
                            while( have_rows('images') ) : the_row();
                                ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="<?php the_title(); ?>" class="w-100 h-90 rounded-25 object-fit-cover object-position-top">
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination mb-n2"></div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-72 start-50 translate-middle w-85 h-46 overflow-hidden">
            <a href="<?php echo get_post_permalink(); ?>" class="text-dark">
                <h2 class="fs-90r fw-bold"><?php the_title(); ?></h2>
            </a>
            <div class="fs-70r m-0">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
