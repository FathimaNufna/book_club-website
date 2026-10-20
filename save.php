<!DOCTYPE html>
<html>
<head>
    <title>City Book Club - Save Message</title>
    <link rel="stylesheet" href="style.css">
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
        <?php
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $conn = mysqli_connect("localhost", "root", "", "bookclub_db");

        if (!$conn) {
            echo "<h2>Connection failed: " . mysqli_connect_error() . "</h2>";
        } else {
            $name    = mysqli_real_escape_string($conn, $name);
            $email   = mysqli_real_escape_string($conn, $email);
            $subject = mysqli_real_escape_string($conn, $subject);
            $message = mysqli_real_escape_string($conn, $message);

            $sql = "INSERT INTO messages (name, email, subject, message)
                    VALUES ('$name', '$email', '$subject', '$message')";

            if (mysqli_query($conn, $sql)) {
                echo "<h2>Your message has been saved successfully.</h2>";
            } else {
                echo "<h2>Error: " . mysqli_error($conn) . "</h2>";
            }
        }
        ?>
        <p><a href="messages.php">View Messages</a></p>
    </main>

    <footer>
        <p>&copy; 2026 City Book Club. All rights reserved.</p>
    </footer>
</body>
</html>