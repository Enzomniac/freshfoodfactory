<?php
include("header.php");
?> 
    <main>    
        <section class="of-slides dark">
            <div class="carousel">
                <button class="carousel__button carousel__button--left">
                    <i class="fa fa-angle-left" ></i>
                </button>
                <div class="carousel__track-container">
                    <ul class="carousel__track">
                        <li class="carousel__slide">
                            <img class="carousel__image" src="assets/slideshow/1.jpg">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="assets/slideshow/2.jpg">
                        </li>
                        <li class="carousel__slide">
                            <img class="carousel__image" src="assets/slideshow/3.jpg">
                        </li>
                    </ul>
                </div>
                <button class="carousel__button carousel__button--right">
                    <i class="fa fa-angle-right"></i>
                </button>
                <div class="carousel__nav">
                    <button class="carousel__indicator current-slide"></button>
                    <button class="carousel__indicator"></button>
                    <button class="carousel__indicator"></button>
                </div>
            </div>
            <script src="slideJS.js"></script>
        </section>
    </main>
<?php
include("footer.php");
?>