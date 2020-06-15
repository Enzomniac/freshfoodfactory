<?php
include("header.php");
?>
    <main>
        <section class="dark">
            <h2>Welcome</h2>
            <p class="short">
                There's much to see here. So, take your time, look around, and learn all there is to know about us.
            </p>
            <a class="button-link" href="#">
                Find Out More
            </a>
        </section>
        <section class="dark">
            <p class="statement">We love healthy yummy food!</p>
        </section>
        <section class="carousel dark">
            <div class="displayed-image">
                <img src="assets/slideshow/1.jpg" alt="">
            </div>
        </section>
        <section class="covered dark" style="background-image: url('assets/stock_cover.jpg')">
            <p class="statement">
                Stay connected with us
            </p>
            <p class="short">
                Sign up to hear from us about our events and latest specials
            </p>
            <form method="post" action="sign-up.php" class="sign-up short">
                <input type="email" name="email" id="email" placeholder="Email">
                <button type="submit" class="dark">SIGN UP</button>
            </form>
        </section>
    </main>
<?php
include("footer.php");
?>
