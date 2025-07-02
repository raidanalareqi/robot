<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Robot | Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">AI Robot</div>
             <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="motor_control.php">Motor Control</a></li>
                <li><a href="action_log.php">Action Log</a></li>
            </ul>
        </nav>
    </header>
    <section class="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php if(isset($_GET['success'])): ?>
            <p class="success">Thank you for contacting us! We will get back to you soon.</p>
        <?php endif; ?>
    </section>
    <footer>
        <p>&copy; 2025 AI Robot. All rights reserved.</p>
    </footer>
</body>
</html>
