<?php 
include "connection.php";  

$nama = $_POST['name']; 
$email = $_POST['email']; 
$pass = $_POST['password']; 
$addr = $_POST['address']; 
$nohp = $_POST['nohp']; 
if(!empty($nama)) {
    $query = mysqli_query($conn, "INSERT INTO user (Username, Email_Address, Password, Phone_Number, Address) VALUES ('".$nama."','".$email."','".$pass."','".$nohp."','".$addr."')"); 
    if($query) {
        echo "Account has been created-" .$nama; 
        header("Location: http://localhost/Project/dist/html/Login.php");
    }
    else {
        echo "Error : Something went wrong " . mysqli_error($conn); 
    }
} 
else {
    echo "name is empty"; 
}

// phpinfo();


?> 