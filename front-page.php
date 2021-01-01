<?php
    /*
        Template Name: Home
    */
    get_header();
?>
<div class="row py-5">
    <div class="col-sm-6">
        <div class="h-100 py-5">
            <div id="trendGraph">
                <video width="100%" height="100%" autoplay>
                    <source src="/wp-content/themes/trending_investors/assets/videos/home-animation.mp4">
                    this animation isn't supported in your browser
                </video>
            </div>
        </div>
    </div>
    <div class="col-sm-6 align-items-center justify-content-center">
        <table style="width: 100%; height: 100%;">
            <tbody>
                <tr>
                    <td>
                        <h3 style="box-shadow: -0.1rem 0.1rem 0.01rem;" class="green-bg text-center align-middle white-bg py-3 rounded">
                            Welcome to Trending Investors!
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
            We'll watch what's trending so you don't have to!
        </h4>
        <a class="btn mt-3">
            Learn more!
        </a>
    </div>
</div>
<div class="row muted-bg">
    <div class="col-12 mt-5 mb-3">
        <h4>Explore the company:</h4>
    </div>
    <div class="explore-link text-center col-sm-4 my-5">
        <div class="w-100">
            <img class="card-img" src="courses.jpg" alt="courses img">
            <div class="card-body">
                <h5 class="card-title">courses</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of
                    the card's content.
                </p>
                <a class="btn">
                    Go somewhere
                </a>
            </div>
        </div>
    </div>
    <div class="explore-link text-center col-sm-4 my-5">
        <div class="w-100">
            <img class="card-img" src="bio.jpg" alt="bio img">
            <div class="card-body">
                <h5 class="card-title">bio</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of
                    the card's content.
                </p>
                <a class="btn">
                    Go somewhere
                </a>
            </div>
        </div>
    </div>
    <div class="explore-link text-center col-sm-4 my-5">
        <div class="w-100">
            <img class="card-img" src="join.jpg" alt="join img">
            <div class="card-body">
                <h5 class="card-title">join</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of
                    the card's content.
                </p>
                <a class="btn">
                    Go somewhere
                </a>
            </div>
        </div>
    </div>
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