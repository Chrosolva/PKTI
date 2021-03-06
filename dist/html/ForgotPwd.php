<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Page</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/login.css"> 
    <link rel="stylesheet" href="../css/cyclelist.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <a class=" title" href="index.php">
                <h3 class="text-center">Trash Cycle</h3>
            </a>

            <h5 class="text-center text-dark">Reset Your Password</h5>
            <div class="col-sm-12">
                <form method="post" class="loginform mt-4" >    
                    <div class="form-group">
                        <label for="InputEmail" class="h6 col-form-label">Enter your email address and we will send you a link to reset your password</label>         
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    
                    <button id="muncul" type="button" class="btn btn-primary form-control">Send password reset email</button>
                </form>
            </div> 
            <div id="hasil" class="col-sm-12">
                <div class="container">
                    <p class="text-dark text-center">We have send a link to reset your password to your email. Please check it. if the email doesn't appear, click <a class="navbar-brand" href="#">here</a></p>
                </div>
            </div>
        </div>
    </div> 
    <script type='text/javascript' language='javascript' src="../js/jquery.min.js"></script>
    <script type='text/javascript' language='javascript' src="../js/popper.min.js"></script>
    <script type='text/javascript' language='javascript' src="../js/bootstrap.min.js"></script>
    <script>
        var tombolsaya = document.getElementById("muncul"); 
        var hasil = document.getElementById("hasil"); 
        hasil.style.display="none";
        tombolsaya.addEventListener("click",function(){
            if (hasil.style.display == "none") {
                hasil.style.display="block";
            }
            else {
                hasil.style.display="none";
            }
        })
    </script>
</body>
</html>