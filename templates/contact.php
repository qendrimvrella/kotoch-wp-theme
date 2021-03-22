<?php
/* Template Name: Contact Page */
?>
<?php get_header(); ?>

    <div class="container mb-5">
        <h1 class="text-center fw-900 my-5 fs-4"><?php the_title(); ?></h1>
        <div class="d-flex justify-content-center mb-5">
            <a
                class="w-300r h-300r text-white bg-primary d-flex justify-content-center align-items-center rounded-circle"
                href="https://www.facebook.com/HEPTA-SA-406965529508902/"
                target="_blank">
                <i class="fab fa-facebook-f fa-lg"></i>
            </a>
            <a
                class="w-300r h-300r text-white bg-primary d-flex justify-content-center align-items-center rounded-circle mx-3"
                href="https://instagram.com/hepta.sa?igshid=c08uybs7ckad"
                target="_blank">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a
                href="#"
                class="w-300r h-300r text-white bg-primary d-flex justify-content-center align-items-center rounded-circle">
                <i class="fab fa-linkedin-in fa-lg"></i>
            </a>
        </div>
        <?php the_content(); ?>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.131213613496!2d6.081928951758133!3d46.22322369039257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c630fa4ae565b%3A0x46b9dbda9a285b30!2sHEPTA!5e0!3m2!1sen!2s!4v1611823428349!5m2!1sen!2s" class="w-100" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<?php get_footer(); ?>
