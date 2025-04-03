<?php

/*
$username = $_POST['username'];
$phoneno = $_POST['phone-no'];
$currentaddress = $_POST['address'];
$nameoncard = $_POST['card-name'];
$cardno = $_POST['card-number'];
$expirydate = $_POST['expiry-date'];
$cvv = $_POST['cvv'];
 

$con=mysqli_connect("localhost","root","","highwaycafe");
$sql="INSERT INTO payment(username,phoneno,currentaddress,nameoncard,cardno,expirydate,cvv) values('$username','$phoneno','$currentaddress ','$nameoncard','$cardno','$expirydate','$cvv')";

$r=mysqli_query($con,$sql);
if($r)
{
    echo "YOUR ORDER PLACED SUCCESSFULLY";

}*/

// Database connection
$con = mysqli_connect("localhost", "root", "", "highwaycafe");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phone-no']);
    $currentaddress = mysqli_real_escape_string($con, $_POST['address']);
    $nameoncard = mysqli_real_escape_string($con, $_POST['card-name']);
    $cardno = mysqli_real_escape_string($con, $_POST['card-number']);
    $expirydate = mysqli_real_escape_string($con, $_POST['expiry-date']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);

    // Simple validation
    if (empty($username) || empty($phoneno) || empty($currentaddress) || empty($nameoncard) || empty($cardno) || empty($expirydate) || empty($cvv)) {
        echo "Please fill in all fields.";
        exit;
    }

    if (strlen($phoneno) < 10) {
        echo "Phone number must be at least 10 digits.";
        exit;
    }

    if (strlen($cardno) < 16) {
        echo "Card number must be at least 16 digits.";
        exit;
    }

    if (strlen($cvv) < 3) {
        echo "CVV must be at least 3 digits.";
        exit;
    }

    // Insert payment information into the database
    $sql = "INSERT INTO payment (username, phoneno, currentaddress, nameoncard, cardno, expirydate, cvv) VALUES ('$username', '$phoneno', '$currentaddress', '$nameoncard', '$cardno', '$expirydate', '$cvv')";

    if (mysqli_query($con, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);


?>
