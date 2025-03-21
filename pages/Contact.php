<?php include '../components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - WebClass</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        /* Contact Form Styles */
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px); /* Adjust for header/footer */
            padding: 20px;
            margin-top: 60px; /* Space for fixed header */
        }
        .contact-form {
            background-color: #FFFFFF;
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .contact-form h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF;
            border-radius: 3px;
        }
        .contact-form textarea {
            resize: vertical;
            height: 150px;
        }
        .contact-form button {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Contact Form -->
    <div class="contact-container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="button">Send Message</button>
            </form>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>