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
            <h5 class="text-center text-dark">Sign in to Trash Cycle as Trash Picker</h5>
            <div class="col-sm-12">
                <form method="post" action="Home.php" class="loginform mt-4" >    
                    <div class="form-group">
                        <label for="InputEmail" class="h6 col-form-label">Email address</label>         
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="InputPassword" class="h6 col-form-label">Password</label> 
                        <a href="ForgotPwd.php" class="float-right col-form-label">Forgot Password ? </a>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-control">Sign In</button>
                </form>
            </div>

            <div class="col-sm-12 text-center">
                <div class="container">
                    <p class="text-dark">
                        Don't have an account ? 
                        <a href="JoinUS.php" class="nav-item title h6">Create one</a>
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