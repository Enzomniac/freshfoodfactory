<?php
include("header.php");
?>
    <main>
        <section class="events">
            <h2 class="events__title">
                Events
            </h2>
            <p class="short">Email us for our cooking course timeslot info</p>
            <div class="events__box">
                <div class="an-event">
                    <div class="an-event__date">
                        15/08/2020
                    </div>
                    <div class="an-event__title">
                        Adult Cooking Class
                    </div>
                    <div class="an-event__time">
                        7pm-10pm
                    </div>
                    <div class="an-event__location">
                        Woodstock Studio
                    </div>
                    <div class="an-event__details">
                        <input type="checkbox" class="an-event__copy__toggle" id="an-event__copy__toggle">
                        <div class="an-event__copy">
                            Join Us!
                            Cookers get collected and dropped off at the studio and receive a welcome drink. We then cook a 4-course meal together! Enjoy the ...
                        </div>
                        <label for="an-event__copy__toggle" class="an-event__link an-event__copy__toggle__label">+ Event Details</label>
                    </div>
                </div>
                <div class="an-event">
                    <div class="an-event__date">
                        15/08/2020
                    </div>
                    <div class="an-event__title">
                        Adult Cooking Class
                    </div>
                    <div class="an-event__time">
                        7pm-10pm
                    </div>
                    <div class="an-event__location">
                        Woodstock Studio
                    </div>
                    <div class="an-event__copy">
                        Join Us!
                        Cookers get collected and dropped off at the studio and receive a welcome drink. We then cook a 4-course meal together! Enjoy the ...
                    </div>
                    <div class="an-event__link">
                        + Event Details
                    </div>
                </div>
                
            </div>
        </section>
        <section class="promo">
            <div class="promo__image-box">
                <img src="assets/promo-pizza.jpg" alt="">
            </div>
            <div class="promo__info-box">
                <h3 class="promo__statement">
                    The Champion Pizza Box!
                </h3>
                <div class="promo__info">
                    <div class="promo__price">
                        R 375.00 <span>(R 0.00 shipping)</span>
                    </div>
                    <div class="promo__pay">
                        <button class="promo__buy-button">BUY NOW</button>
                        <div class="promo__payment-options">
                            <img src="assets/cc-badges-ppmcvdam.png" alt="">
                        </div>
                    </div>
                    <div class="promo__copy">
                        <p>
                            Some of our services cannot operate currently, but we found a way to keep your meals healthy and happy! Contact us for our Pizza in a Box promotion!
                        </p>                        
                        <p>
                            4 x Family sized pizzas with all the ingredients. So easy even the Kids and cook it!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include("footer.php");
?>
