<!DOCTYPE html>
<html>
<head>
    <title>Form Input Injection</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "Input tidak valid. Silakan masukkan email yang benar.";
        }
    }
    ?>
</body>
</html>