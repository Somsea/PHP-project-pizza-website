<?php
$formData = $_POST;
$formErrors = array();

if (isset($formData['send']) && $formData['send'] === 'contact') {

    // Validation name
    if (empty($formData['name'])) {
        $formErrors['name'] = 'The field must not be empty, data must be entered.';
    } else {
        $name = trim($formData['name']);
    }

    //validation email

    if (empty($formData['email'])) {
        $formErrors['email'] = ' The field must not be empty.';
    } else {
        $email = trim($formData['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, '@') < 3 || preg_match('/[A-Z]/', $email)) {
            $formErrors['email'] = 'A valid email must be entered';
        }
    }

    //validation text

    if (empty($formData['message'])) {
        $formErrors['message'] = 'The field must not be empty.';
    } else {
        $message = trim($formData['message']);
    }

//printing messages if everything is fine and if an error has occurred.
    if (empty($formErrors)) {
        echo '<div class="success-wrapper">';
        echo 'Your message has been sent successfully. Thanks for writing to us.';
        echo '</div>';
    } else {
        echo '<div class="error-wrapper">';
        echo 'The form could not be submitted due to invalid data. Please check your inputs and try again.';
        echo '</div>';
    }
}
?>

<?php
$contactMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs";
?>

<main>
    <div class="container">
        <section class="contact-section">
            <aside class="form-wrapper">
                <form method="POST" action="" class="contact-form">
                    <div class="form-group">
                        <label for='name'>Your Name*</label>
                        <input type="text" name="name" id='name' value="" class="form-control" />
                        <?php if (isset($formErrors['name'])) { ?>
                            <div class="error-wrapper"><?php echo $formErrors['name']; ?></div>
                        <?php } elseif (empty($formData['name']) && isset($formData['send']) && $formData['send'] === 'contact') { ?>
                            <div class="error-wrapper"><?php echo $formErrors['name']; ?></div> 
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email*</label>
                        <input type="email" name="email" id="email" value="" class="form-control" />
                        <?php if (isset($formErrors['email'])) { ?>
                            <div class="error-wrapper"><?php echo $formErrors['email']; ?></div>
                        <?php } elseif (empty($formData['email']) && isset($formData['send']) && $formData['send'] === 'contact') { ?>
                            <div class="error-wrapper"><?php echo $formErrors['email']; ?></div> 
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message*</label>
                        <textarea name="message" id='message' value='' class="form-control" rows="7"></textarea>
                        <?php if (isset($formErrors['message'])) { ?>
                            <div class="error-wrapper"><?php echo $formErrors['message']; ?></div>
                        <?php } elseif (empty($formData['message']) && isset($formData['send']) && $formData['send'] === 'contact') { ?>
                            <div class="error-wrapper"><?php echo $formErrors['message']; ?></div> 
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="send" value="contact" class="btn">Send Message</button>
                    </div>
                </form>

                <!--
                    <div class="error-wrapper">

                    </div>
                    <div class="success-wrapper">
                        
                    </div>
                -->
            </aside>

            <div class="contact-map">
                <iframe src="<?php echo $contactMap; ?>"></iframe>
            </div>
        </section>
    </div>
</main>
