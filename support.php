<?php 
$pageTitle = "Healthy Selfie | Support";
$section = "support";
$nav = "no-nav";
include("inc/header.php");
?> 

<div class="top-content">
    <div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-4">

                        <a href="home.php"><h4 class="back navbar-default-back navbar-fixed-top"><i class="fa fa-chevron-left"></i> BACK</h4></a>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container" id="contactUs">

        <?php if($_GET["status"] == "thanks") { ?>

            <div class="row">
                <div class="col-sm-12 contact">
                    <h3>Thanks. <i class="fa fa-paper-plane"></i> </h3>
                    <p>
                        Your feedback and support is greatly appreciated. We'll try to respond to you within 3-5 working days.
                    </p>

                </div>
                <div class="row thanks-support-form">
                    <p>Would you like to send another message? <a href="/">No, take me home.</a></p>
                    <div class="col-md-6 col-md-offset-3 contact-form">
                        <form method="post" action="assets/support_form.php">
                            <input type="text" name="email" placeholder="Email..." class="contact-email">
                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                            <textarea name="message" placeholder="Message..."></textarea>
                            <button type="submit">Send</button>
                        </form>
                    </div>

            </div>
            </div>
        <?php } else { ?>

            <div class="row">
                <div class="col-sm-12 contact">
                    <h3>Support</h3>
                    <p>
                        If you would like to know something, or report something, e.g. a <i class="fa fa-bug"></i>, please get in contact with us here and we'll get back to you 
                        as soon as possible. Thank you.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 contact-form">
                    <form method="post" action="assets/support_form.php">
                        <input type="text" name="email" placeholder="Email..." class="contact-email">
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                        <textarea name="message" placeholder="Message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>

            </div>

        <?php } ?>
        </div>


<?php include("inc/footer.php"); ?>