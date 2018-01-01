<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trash Cycle Join us Page</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <a class=" title" href="index.php"><h3 class="text-center">Trash Cycle</h3></a> 
            <h3 class="text-center text-dark">Join as Trash Picker</h3> 
            <div class="col-sm-12">
                <form class="loginform mt-4" action="Login.php" style="width: 450px;">    
                    <div class="form-group row">
                        <label for="InputName" class="h6 col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="InputName"  placeholder="Enter Your Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="InputEmail" class="h6 col-sm-4 col-form-label">Email address</label> 
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="InputPassword" class="h6 col-sm-4">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="InputNo" class="h6 col-sm-4">Phone Number</label> 
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="InputN0"  placeholder="Phone Number">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Address" class="h6 col-sm-4">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                </form>                
            </div>
            <div class="col-sm-12 text-center">
                <div class="container">
                    <p class="text-dark" style="width: 450px;">Already have an account ? <a href="Login.php" class="nav-item title h6">Sign In</a></p>
                </div>
            </div>            
        </div>
    </div> 
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>