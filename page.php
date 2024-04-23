<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner_bg-image-pages">
        </div>
        <div class="page-banner_content">
            <div class="page-banner_title">
                <?php the_title(); ?>
            </div>
            <div class="page-banner_intro">THIS IS AN INTRO</div>
        </div>
    </div>

    <div class="">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="#">
                    <i class="fa-solid fa-house"></i> Back to
                    About
                    Us
                </a> <span class="metabox__main">Our History</span>
            </p>
        </div>

        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>

    <?php
}
get_footer();

?>