<?php
include("header.php");
?>
    <main>
        <section class="of-centered-text dark">
            <h2 class="of-centered-text__title">
                Contact Us
            </h2>
            <p>Do you have questions or comments about our products? We love to hear from our customers. Send us a message, and we will get back to you soon.</p>
            <h3 class="of-centered-text__sub-title">
                The Fresh Food Factory
            </h3>
            <p><a href="tel:0765463847" class="plain-anchor">076 546 3847</a></p>
            <form action="enquiry.php" class="form-as-link" method="post">
                <input type="hidden" name="enquiryReferral" value="contact">
                <button type="submit" class="button-as-link" >eat@thefreshfoodfactory.co.za</button>
            </form>            
            <h3 class="of-centered-text__sub-title">
                Hours
            </h3>
            <p>
                Monday - Sunday: 9am - 5pm        
            </p>
        </section>
    </main>
<?php
include("footer.php");
?>