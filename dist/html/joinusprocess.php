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
    }
    else {
        echo "Error : Something went wrong " . mysqli_error($conn); 
    }
} 
else {
    echo "name is empty"; 
}
session_start(); 

$sql2 = "SELECT user.Email_Address, user.Password , trashpicker.Trash_PickerID FROM user INNER JOIN trashpicker ON user.User_Id = trashpicker.User_Id WHERE trashpicker.Trash_PickerID !=Null" ;
$sql = "SELECT * FROM user WHERE Email_Address = '" . $email . "' AND Password = '" . $pass . "'limit 1"; 
$userid; 
$NoBK = $_POST['nobk'];
$result = mysqli_query($conn,  $sql);
 
$row = mysqli_fetch_assoc($result); 
$userid = $row['User_Id'];

$sqltoTP  = mysqli_query($conn, "INSERT INTO trashpicker ( User_Id, No_Kendaraan) VALUES ('".$userid."','".$NoBK."')");  

if($sqltoTP) {
    echo "Account has been created-" .$NoBK; 
    header("Location: http://localhost/Project/dist/html/Login.php");
}
else {
    echo "Error : Something went wrong " . mysqli_error($conn); 
}


?> 
