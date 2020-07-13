<?php
$STATE = array(
    'uri' => setUri()
);

initial();

function initial() {    
}

function setUri() {
    $uri = explode("/", $_SERVER['PHP_SELF']);
    $uri = end($uri);
    return $uri;
}

function setActive($pageName) {
    $currentUrl = $GLOBALS['STATE']['uri'];    
    $pageName = $pageName . ".php";    
    if ($currentUrl == $pageName) {
        echo("active");
    }    
}

function checkHero() {    
    if ($GLOBALS['STATE']['uri'] != ("index" . ".php")) {
        echo("no-hero");
    }
}

function sendMail($email) {    
    // add mail address to database
        //later
    // mail confirmation to lucy
    $message = "Hi Lucy,\nPlease add " . $email . " to your database of people that are interested to hear about the Factory's updates.\n\nKind regards,\nYour Website Server";
    $message = wordwrap($message, 70);
    mail("rhsupton@gmail.com", "Fresh Food Factory, New Sign-Up for Updates", $message);
}

function makeEnquiry() {    
    switch ($_POST['enquiryReferral']) {
        case 'giftCard':
            $message = <<<EOD
            Hi Fresh Food Factory,
            
            Can you please send me more information regarding your gift cards?
            EOD;                     
            return($message);
        case 'bookings':
            $message = <<<EOD
            Hi Fresh Food Factory,
            
            Can you please send me more information regarding your your upcoming events?
            EOD;
            return($message);            
        case null:
            echo("No Referer");
        break;  
        default:
            # code...
            break;
    }
}

function enquiryFunctionality() {    
    $isTesting = FALSE;
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
    mail($mailTo, $mailSubject, $mailMessage, $headers);
    return($successMessage);
}

?>