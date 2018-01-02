<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>process</title>
</head>
<body>

<?php
//Get values passes from login 
$email = $_POST['email']; 
$password = $_POST['password']; 

echo "<h1>".$email."</h1>"; 
echo $password; 
// Prevent mysql injection 
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 

//Connect to the server and select database 
mysql_connect("localhost","root","") ; 
mysql_select_db("trash cycle");  


//Query the database for email 
$result = mysql_query("SELECT * FROM User where Email_Address = '$email' AND Password = '$password'") or die("Failed to Query Database".mysql_error()); 

$row = mysql_fetch_array($result);
if(($row['Email_Address']==$email&&$row['Password']==$password) {
    echo .$email. " <h1>lala</h1> " .$row['Email_Address'].;
} 

else {
    echo "Failed to Login"; 
}
?>

</body>
</html>
