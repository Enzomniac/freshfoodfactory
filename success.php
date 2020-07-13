<?php
include("header.php");
$successMessage = enquiryFunctionality();


/* $isTesting = TRUE;
$headers = "From: eat@thefreshfoodfactory.co.za";

if ($isTesting) {
    $mailTo = 'rhsupton@gmail.com';
} else {
    $mailTo = 'eat@thefreshfoodfactory.co.za';
}

$successMessage = "Not Set";
$enquirerMail = $_POST['email'];
switch ($_POST['sendReferral']) {
    case 'sign_up':
        $successMessage = 'Thanks for signing up, expect to here from us soon!';
        $mailSubject = 'New Sign-Up for Updates';
        $mailMessage = <<<EOD
        Hi Lucy,        
        Please add $enquirerMail to your mailing list of interested clients.
        Cheers,
        The Fresh Food Factory Robot
        EOD;
        break;
    case 'giftCard':
        $successMessage = 'Thanks for asking about our gift cards, I\'ll get back to you soon!';
        $mailSubject = 'Gift Card Enquiry from: ' . $_POST['email'];
        $mailMessage = $_POST['message'];
        break;
    case 'bookings':
        $successMessage = 'Thanks for your enquiry, I\'ll send through available dates and sessions ASAP!';
        $mailSubject = 'Event Schedule Enquiry from: ' . $_POST['email'];
        $mailMessage = $_POST['message'];
        break;
    case 'contact':
        $successMessage = 'Thanks for your enquiry, I\'ll get back to you ASAP!';
        $mailSubject = 'Website enquiry from: ' . $_POST['name'] . " " . $_POST['email'];
        $mailMessage = $_POST['message'];
        break;
}

mail($mailTo, $mailSubject, $mailMessage, $headers); */
?>
    <main>
        <section class="of-confirmation">
            <p><?php echo($successMessage); ?></p>            
            <a href="index.php">BACK TO SITE</a>
        </section>
    </main>
<?php
include("footer.php");
?>
