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
            <div class="row">
                <div class="col-sm-6">
                    <div class="container">
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
                                    <input type="text" class="form-control" id="InputNo"  placeholder="Phone Number">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Address" class="h6 col-sm-4">Address</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Your Address"></textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="InputNoBK" class="h6 col-sm-4">No Kendaraan</label> 
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="InputNoBK"  placeholder="No Kendaraan">    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                        </form>                
                    </div>      
                </div> 
                <div class="col-sm-6 pt-4">
                    <p class="text-dark h6">Become our partners in picking trash.</p> 
                    <p class="text-dark h6">You will get propriate bonus for each effort you make each day.</p> 
                    <p class="text-dark h6">With dynamic routing system and easy to use webpage.</p> 
                    <p class="text-dark h6">The more trashpicker registered the easier the job will be.
                    and the more you collect , the better the earth will be. clean environment for better life.
                    </p> 
                    <p class="text-dark h6">Registered ? Then Start to Collect. <a href="LoginTP.php" class=" btn btn-success text-right">Sign In</a></p>
                </div>
            </div>
             
                        
        </div>
    </div> 
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>