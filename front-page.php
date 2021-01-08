<?php
    get_header();
    if(have_posts()) {
        while(have_posts()) {
            the_post(); 
            the_content();
        }
    }
?>
<div class="row">
    <div class="col-sm-6 pb-5">
        <div class="w-100 text-center" style="height: 25vh;">
            <img class="img-fluid" style="max-height: 100%!important;" src="/wp-content/themes/trending_investors/assets/images/graph.png" alt="graph" />
        </div>
    </div>
    <div class="col-sm-6 align-items-center justify-content-center">
        <table style="width: 100%; height: 100%;">
            <tbody>
                <tr>
                    <td>
                        <h3 style="box-shadow: -0.1rem 0.1rem 0.01rem;" class="green-bg text-center align-middle white-bg py-3 rounded">
                            <?php 
                                if (get_post_custom_values('welcome-message') != null) {
                                    foreach(get_post_custom_values('welcome-message') as $key => $value) {
                                        echo "$value";
                                    }
                                }
                                else {
                                    echo "Welcome to Trending Investors!";
                                }
                            ?>
                        </h3>
                    </td>
                </tr>
            </tbody>
        </table>    
    
    </div>
</div>
<div class="row secondary-bg">
    <div class="col-12 my-5 text-center">
        <h4>
            <?php 
                if (get_post_custom_values('slogan') != null) {
                    foreach(get_post_custom_values('slogan') as $key => $value) {
                        echo "$value";
                    }
                }
                else {
                    echo "We'll watch what's trending so you don't have to!";
                }
            ?>
        </h4>
        <a class="btn mt-3">
            Learn more!
        </a>
    </div>
</div>
<div class="row muted-bg">
    <div class="col-12 my-5">
        <h4>Explore the company:</h4>
    </div>
    <?php
        query_posts(array('post_type' => 'page'));
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

        <div class="explore-link text-center col-sm-4 mb-5">
            <div class="w-100">
                <img class="card-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php the_title();?>
                    </h5>
                    <p class="card-text">
                        <?php 
                                if (get_post_custom_values('description') != null) {
                                    foreach(get_post_custom_values('description') as $key => $value) {
                                        echo "$value";
                                    }
                                }
                                else {
                                    echo "";
                                }
                        ?>
                    </p>
                    <a class="btn">
                        <?php the_title();?>
                    </a>
                </div>
            </div>
        </div>

    <?php
            }
        }
        wp_reset_query();
    ?>
</div>
<div class="row">
    <div class="col-12 my-5 text-center">
        <h4>
            Have questions?
        </h4>
        <a class="btn mt-3">
            Contact us!
        </a>
    </div>
</div>
<?php
    get_footer();
?>