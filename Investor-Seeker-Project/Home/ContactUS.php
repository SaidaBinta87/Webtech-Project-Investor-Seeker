
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styleContactUS.css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
<?php require "header_home.php"; ?>

<br>
<br>

    <section class="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you. Feel free to reach out to us for any inquiries or collaboration opportunities.</p>
            <div class="contact-details">
                <div class="contact-info">
                    <h3>Our Office</h3>
                    <p>123 Investor Street<br>Koril, IC 12345<br>Dhaka</p>
                </div>
                <div class="contact-info">
                    <h3>Email</h3>
                    <p><a href="mailto:info@investorseeker.com">info@investorseeker.com</a></p>
                </div>
                <div class="contact-info">
                    <h3>Phone</h3>
                    <p><a href="tel:+1234567890">+1 (123) 456-7890</a></p>
                </div>
            </div>
            <form class="contact-form">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name here..">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your mail adress here..">
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Write about your interest "></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
</body>
</html>
