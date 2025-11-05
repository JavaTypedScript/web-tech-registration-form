<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $sql = "INSERT INTO registrations (fullname, email, phone, gender, address)
            VALUES ('$fullname', '$email', '$phone', '$gender', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3 style='color:white;'>Registration Successful!</h3>
              <p style='color:white;'><strong style='color:white;'>Name:</strong> $fullname</p>
              <p style='color:white;'><strong style='color:white;'>Phone:</strong> $phone</p>
              <p style='color:white;'><strong style='color:white;'>Email:</strong> $email</p>
              <p style='color:white;'><strong style='color:white;'>Gender:</strong> $gender</p>
              <p style='color:white;'><strong style='color:white;'>Address:</strong> $address</p>";
    } else {
        echo "<p style='color:white;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>

