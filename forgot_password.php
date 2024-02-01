<?php
include('connection_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Implement password reset logic (send email or redirect to a reset page)
        echo "Password reset instructions sent to your email!";
    } else {
        $error = "Email not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <h2>Forget Password</h2>
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Reset Password">
    </form>
    <?php if(isset($error)) { echo $error; } ?>

    <p>Remember your password? <a href="login.php">Login</a></p>
</body>
</html>
