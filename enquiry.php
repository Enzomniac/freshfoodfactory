<?php
include("header.php");
$messagePrePop = makeEnquiry();
?>
    <main>
        <section class="of-enquiry">
            <form action="success.php" class="enquiry__form" method="post">
                <div class="enquiry__a-line">
                    <label for="name" class="enquiry__label">
                        NAME:
                    </label>
                    <input type="text" name="name" class="enquiry__input" placeholder="YOUR NAME" required>
                </div>
                <div class="enquiry__a-line">
                    <label for="email" class="enquiry__label">
                        EMAIL:
                    </label>
                    <input type="email" name="email" class="enquiry__input" placeholder="JOHN@DO.COM" required>
                </div>
                <div class="enquiry__a-line message__box">
                    <textarea name="message" id="message" cols="30" rows="10"><?php echo($messagePrePop); ?></textarea>                    
                </div>
                <div class="enquiry__a-line">
                    <input type="hidden" name="sendReferral" value="<?php echo($_POST['enquiryReferral']); ?>">
                    <button type="submit" class="enquiry__submit">SEND</button>
                </div>
            </form>
        </section>
    </main>
<?php
include("footer.php");
?>
