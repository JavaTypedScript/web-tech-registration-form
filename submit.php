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
        echo "<h3 style='color:green;'>Registration Successful!</h3>
              <p><strong>Name:</strong> $fullname</p>
              <p><strong>Email:</strong> $email</p>
              <p><strong>Phone:</strong> $phone</p>
              <p><strong>Gender:</strong> $gender</p>
              <p><strong>Address:</strong> $address</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>

