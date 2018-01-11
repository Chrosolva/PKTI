<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trash Cycle Sign In Page</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/login.css"> 
    <link rel="stylesheet" href="../css/cyclelist.css">
</head>
<body> 

    <div class="container-fluid">
        <div class="container">
            <a class=" title" href="index.php"><h3 class="text-center">Trash Cycle</h3></a> 
            <h5 class="text-center text-dark">Sign in to Trash Cycle</h5>
            <div class="col-sm-12">
                <form method="post" class="loginform mt-4" >    
                    <div class="form-group">
                        <label for="InputEmail" class="h6 col-form-label" >Email address</label>         
                        <input type="email" name="email" class="form-control" size="35" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="InputPassword" class="h6 col-form-label">Password</label> 
                        <a href="ForgotPwd.php" class="float-right col-form-label">Forgot Password ? </a>
                        <input type="password" name="password" class="form-control" size="32" id="InputPassword" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary form-control">Sign In</button>
                </form>
            </div>

            <div class="col-sm-12 text-center">
                <div class="container">
                    <p class="text-dark">
                        Don't have an account ? 
                        <a href="SignUp.php" class="nav-item title h6">Create one</a>
                    </p>
                </div>
            </div>
        </div>
    </div> 
    <script type='text/javascript' language='javascript' src="../js/jquery.min.js"></script>
    <script type='text/javascript' language='javascript' src="../js/popper.min.js"></script>
    <script type='text/javascript' language='javascript' src="../js/bootstrap.min.js"></script>
</body>
</html> 

<?php 
include 'connection.php'; 
session_start();

IF(isset($_POST['email'])) {
    $email =$_POST['email']; 
    $pwd = $_POST['password'];  

    // mysqli_query($conn, "INSERT INTO user (Username, Email_Address, Password, Phone_Number, Address) VALUES ('".$nama."','".$email."','".$pass."','".$nohp."','".$addr."')");
    $sql = "SELECT * FROM user INNER JOIN trashpicker USING (User_Id) WHERE Email_Address = '" . $email . "' AND Password = '" . $pwd . "'limit 1"; 

    $result = mysqli_query($conn,  $sql);   
    if(mysqli_num_rows($result)) { 
        $row = mysqli_fetch_assoc($result);
        if($email == $row['Email_Address']) {
            $_SESSION["user"] = $row['Username']; 
            $_SESSION["address"] = $row['Address']; 
            $_SESSION["nohp"] = $row['Phone_Number']; 
            $_SESSION["userId"] = $row['User_Id'];  
            header("Location: http://localhost/Project/dist/html/Home.php");
        }
     } 
    else 
    {
        $sql2 = "SELECT * FROM user WHERE Email_Address = '" . $email . "' AND Password = '" . $pwd . "'limit 1"; 
            $result2 = mysqli_query($conn,  $sql2); 
            if(mysqli_num_rows($result2)) {
                while($row = mysqli_fetch_assoc($result2)) {
                    echo " You Have succesfully logged in";
                    $_SESSION["user"] = $row['Username']; 
                    $_SESSION["address"] = $row['Address']; 
                    $_SESSION["nohp"] = $row['Phone_Number']; 
                    $_SESSION["userId"] = $row['User_Id'];  
                    header("Location: http://localhost/Project/dist/html/RecycleList.php"); 
                    exit();
                }
            }
    }
} 
    
    /*
    if(mysqli_num_rows($result)) {
        while($row = mysqli_fetch_assoc($result)) {
            echo " You Have succesfully logged in";
            $_SESSION["user"] = $row['Username']; 
            $_SESSION["address"] = $row['Address']; 
            $_SESSION["nohp"] = $row['Phone_Number']; 
            $_SESSION["userId"] = $row['User_Id'];  
            header("Location: http://localhost/Project/dist/html/RecycleList.php"); 
            exit();
        }
    }
    else {
        echo " You Have entered Invalid data"; 
        exit();
    }
}
*/
?>