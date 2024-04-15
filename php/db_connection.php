<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "test_from";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO CUSTOMERS (NAME, AGE, ADDRESS, SALARY) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $name, $age, $address, $salary);

    // Set parameters
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
