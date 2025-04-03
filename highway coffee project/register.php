<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
 

$con=mysqli_connect("localhost","root","","highwaycafe");
$sql="INSERT INTO register(username,email,password1,password2) values('$username','$email','$password1','$password2')";

$r=mysqli_query($con,$sql);
if($r)
{
    echo "user detail added successfully";

}
else{
    echo "user detail not added";
}


/*
// Database connection
$con = mysqli_connect("localhost", "root", "", "highwaycafe");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);

    // Check if passwords match
    if ($password1 !== $password2) {
        echo "Passwords do not match.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password1, PASSWORD_BCRYPT);

        // Insert user into the database
        $sql = "INSERT INTO register (username, email, password1, password2) VALUES ('$username', '$email', '$password1''$password2')";

        if (mysqli_query($con, $sql)) {
            echo "User details added successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

mysqli_close($con);

*/
?>
