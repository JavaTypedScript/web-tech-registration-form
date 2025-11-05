<?php
// include 'db_config.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $fullname = $_POST['fullname'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $gender = $_POST['gender'];
//     $address = $_POST['address'];

//     $sql = "INSERT INTO registrations (fullname, email, phone, gender, address)
//             VALUES ('$fullname', '$email', '$phone', '$gender', '$address')";

//     if ($conn->query($sql) === TRUE) {
//         echo "<h3 style='color:green;'>Registration Successful!</h3>
//               <p><strong>Name:</strong> $fullname</p>
//               <p><strong>Email:</strong> $email</p>
//               <p><strong>Phone:</strong> $phone</p>
//               <p><strong>Gender:</strong> $gender</p>
//               <p><strong>Address:</strong> $address</p>";
//     } else {
//         echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
//     }

//     $conn->close();
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataFile = 'data.json';

    $newEntry = array(
        "fullname" => $_POST['fullname'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "gender" => $_POST['gender'],
        "address" => $_POST['address']
    );

    if (file_exists($dataFile)) {
        $existingData = json_decode(file_get_contents($dataFile), true);
    } else {
        $existingData = array();
    }

    $existingData[] = $newEntry;

    file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT));

    echo "<h3 style='color:green;'>Registration Saved Successfully!</h3>
          <p><strong>Name:</strong> {$_POST['fullname']}</p>
          <p><strong>Email:</strong> {$_POST['email']}</p>
          <p><strong>Phone:</strong> {$_POST['phone']}</p>
          <p><strong>Gender:</strong> {$_POST['gender']}</p>
          <p><strong>Address:</strong> {$_POST['address']}</p>";
}


?>
