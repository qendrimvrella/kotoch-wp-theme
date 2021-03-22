<div class="col-12 col-md-6 col-lg-4 h-2900r d-flex flex-column justify-content-end">
    <div class="position-relative shadow rounded-25 h-1950r d-flex flex-column justify-content-end p-4 pb-1">
        <div class="position-absolute top-0 start-50 translate-middle w-85 h-1950r z-index-10">
            <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>" class="w-100 h-100 rounded-25 object-fit-cover">
        </div>
        <div class="position-absolute top-0 start-50 translate-middle rounded-25 w-85 h-1950r z-index-20 bg-dark-30">
        </div>
        <div class="position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center w-85 h-1950r z-index-30">
            <img src="<?php the_field('icon'); ?>" alt="<?php the_title(); ?>" class="w-600r h-600r filter-white">
        </div>
        <div class="position-absolute top-75 start-50 translate-middle w-85 h-50 pt-3 d-flex flex-column justify-content-between">
            <div class="h-65 overflow-hidden">
                <h2 class="fs-90r fw-bold"><?php the_title(); ?></h2>
                <div class="fs-70r m-0"><?php the_content() ?></div>
            </div>
            <div class="h-35 d-flex justify-content-center align-items-center">
                <div
                        class="rounded-circle bg-primary d-flex justify-content-center align-items-center w-150r h-150r bg-h-8"
                        data-bs-toggle="modal"
                        data-bs-target="#skills-modal"
                        data-bs-title="<?php the_title(); ?>"
                        data-bs-url="<?php the_field('image'); ?>"
                        data-bs-url2="<?php the_field('icon'); ?>"
                        data-bs-desc="<?php echo htmlspecialchars(get_the_content(), ENT_QUOTES); ?>"
                >
                    <div class="text-white d-flex justify-content-center align-items-center cursor-pointer">
                        <i class="fas fa-plus fa-xs"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
