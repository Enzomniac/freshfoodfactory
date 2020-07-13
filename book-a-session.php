<?php
include("header.php");
?>
    <main>
        <section class="events">
            <h2 class="events__title">
                Events
            </h2>
            <form action="enquiry.php" class="events__form" method="post">
                <input type="hidden" name="enquiryReferral" value="bookings">
                <button type="submit" class="events__button short" >Email us for our cooking course timeslot info  <i class="far fa-envelope"></i></button>
            </form>            
        </section>
        <section class="of-video">
            <h2 class="of-video__title">
                Watch us in action
            </h2>
            <div class="of-video__frame">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XWIk_YrF94Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>
<?php
include("footer.php");
?>