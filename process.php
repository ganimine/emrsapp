<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "applications";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$dob = $_POST['dob'];
$qualifications = $_POST['qualifications'];
$prof_qualifications = $_POST['prof_qualifications'];
$community = $_POST['community'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$agency = $_POST['agency'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO applications (name, father_name, dob, qualifications, prof_qualifications, community, address, mobile, agency) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $father_name, $dob, $qualifications, $prof_qualifications, $community, $address, $mobile, $agency);

// Execute
if ($stmt->execute()) {
    echo "Application submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
