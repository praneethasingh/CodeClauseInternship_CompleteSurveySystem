<?php

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Creating a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Processing the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $occupation = $_POST["occupation"];
    $income = $_POST["income"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $overallSatisfaction = $_POST["overall-satisfaction"];
    $productQuality = $_POST["product-quality"];
    $customerSupport = $_POST["customer-support"];
    $deliverySpeed = $_POST["delivery-speed"];
    $nps = $_POST["nps"];
    $likes = $_POST["likes"];
    $improvements = $_POST["improvements"];
    $suggestions = $_POST["suggestions"];

    // Inserting data into the database
    $sql = "INSERT INTO survey_responses (age, gender, location, occupation, income, name, email, phone, overall_satisfaction, product_quality, customer_support, delivery_speed, nps, likes, improvements, suggestions)
    VALUES ('$age', '$gender', '$location', '$occupation', '$income', '$name', '$email', '$phone', '$overallSatisfaction', '$productQuality', '$customerSupport', '$deliverySpeed', '$nps', '$likes', '$improvements', '$suggestions')";

    if ($conn->query($sql) === TRUE) {
        echo "Survey submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Closing the connection
    $conn->close();
}
?>
