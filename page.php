<?php
    get_header();
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div class="row">
                <div class="col-12 black-bg container">
                    <h1>
                        <?php
                            the_title();
                        ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 container muted-bg py-5">
                    <?php
                        the_content();
                    ?>
                </div>
            </div>
            <?php
        }
    }
    ?>
<?php
    get_footer();
?>