<?php
include("header.php");
addMail($_POST["email"]);
?>
    <main>
        <section class="of-confirmation">
            <p>Thanks for Signing-Up, expect to hear from us soon!</p>
            <a href="index.php">BACK TO SITE</a>
        </section>
    </main>
<?php
include("footer.php");
?>
