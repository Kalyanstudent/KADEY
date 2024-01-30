
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Signup</title>
    <style>
        /* Your styling for the signup page... */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .signup-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="signup-container">
        <h2>New Signup</h2>
        <p>Create a new account by filling out the form below.</p>
        <form action="#" method="post">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>

            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <input type="submit" value="Sign Up" name="Sign_Up">
        </form>
    </div>

</body>
</html>
<?php
include("connection_db.php");

if (isset($_POST['Sign_Up'])) {

    $username = $_POST['newUsername'];
    $password = $_POST['newPassword'];

    $query = "INSERT INTO `users` (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Sign Up successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}
?>
