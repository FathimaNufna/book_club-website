
<html>
<head>
    <title>City Book Club - Contact</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>City Book Club</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="messages.php">Messages</a>
    </nav>

    <main>
        <h2>Contact Us</h2>
        <form action="save.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </main>

    <footer>
        <p>&copy; 2026 City Book Club. All rights reserved.</p>
    </footer>
</body>
</html>