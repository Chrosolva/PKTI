<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/index.css"> 
    <link rel="stylesheet" href="../css/cyclelist.css">
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css"> 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        .sect2 {
            padding: 10px;
        }
        #map {
            width: 100%;
            height: 500px;
        }
        .detail-box {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #cecece;
        }
        .detail-scroll {
            overflow-x: scroll;
            white-space: nowrap;
        }
        .detail-list {
            width: 1000px;
        }
    </style>

</head>
<body>
    <header class=" header navbar container-fluid navbar-expand navbar-dark">
        <div class="container">
            <a class="text-light container title" href="#"><h3 class="output h3">Trash Cycle</h3></a>
            <nav class="kanan nav navbar navbar-brand flex-column">
                <ul class="kanan navbar-nav bd-navbar-nav flex-row">
                    <li class="nav-item">
                        <a href="RecycleList.php" class="nav-link">Re-Cycle List</a>        
                    </li>
                    <li class="nav-item">
                        <a href="RecycleTips.php" class="nav-link">Re-Cycle Tips</a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../image/user.jpg" alt="User" class="img-fluid nav-item float-left" style="width: 35px; margin-right:10px;">
                                <a href="#" class="nav-link text-light" style="margin-left:20px; padding-right:20px; ">UserName</a>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Username</a>
                                <a href="index.php" class="dropdown-item">Sign Out</a> 
                            </div>
                        </div>  
                    </li>
                </ul>
            </nav>
        </div>
    </header> 
    <div class="container-fluid sect2"> 
        <div class="container pt-5 pb-5 ">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img class="img-fluid text-center" src="../image/user.jpg" alt="user" style="border-radius:50%;"> 
                </div> 
                <div class="col-sm-6 pt-5 pb-5">
                    <p class="text-light h5">User Name</p> 
                    <p class="text-light h5">Username@example.com</p> 
                    <p class="text-light h5">08xxxxxxxxxx</p> 
                    <p class="text-light h5">Addresses</p> 
                    <p class="text-light h5">Collected : 10 kg Trash</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>