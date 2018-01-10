<!doctype html>
<html lang="en">
  <head>
    <title>Trash Cycle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--Responsice meta tags--> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
<body class="body">
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
                                <a class="dropdown-item" href="Profile.php">Username</a>
                                <a href="index.php" class="dropdown-item">Sign Out</a>
                            </div>
                        </div>
                        
                        
                    </li>
                </ul>
            </nav>
        </div>
    </header> 
    <div class="container-fluid sect1">
        <div class="container-fluid sect2">
            <div class="container">
                <div class="col-sm-12">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-search"></i>
                                Search!
                            </button>
                        </span>
                    </div>
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sect3 pb-3">
        <h3 class="text-center mb-3">Customer List </h3>
        <div class="container detail-scroll">
            <ul class="list-inline">
                <li class="list-inline-item detail-box">
                    <div class="col-sm-12">
                        <b>Customer Detail</b>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <image src="../image/73a9249f-a050-491e-bd75-08937f292719_1.0974051392b4a1788db13a947eb68b5a.jpeg" style="width: 200px; height: 200px;"></image><br>
                            <button type="button" class="mt-2 btn btn-success btn-confirm" style="width: 100%">CONFIRM</button>
                        </div>
                        <div class="col-sm-5">
                            <b>Username:</b>
                            <p>Gunawan Huang</p>
                            <b>Address:</b>
                            <p>Jl. Bambu No. 123</p>
                            <b>Phone:</b>
                            <p>08123456789</p>
                            <b>Qty (kg):</b>
                            <p>0.5</p>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item detail-box">
                    <div class="col-sm-12">
                        <b>Customer Detail</b>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <image src="../image/plastic-cap-ring-shank-roofing-nails.jpg" style="width: 200px; height: 200px;"></image><br>
                            <button type="button" class="mt-2 btn btn-success btn-confirm" style="width: 100%">CONFIRM</button>
                        </div>
                        <div class="col-sm-5">
                            <b>Username:</b>
                            <p>Lause Arwin</p>
                            <b>Address:</b>
                            <p>Jl. Mabar No. 52-46</p>
                            <b>Phone:</b>
                            <p>085297337927</p>
                            <b>Qty (kg):</b>
                            <p>0.2</p>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item detail-box">
                    <div class="col-sm-12">
                        <b>Customer Detail</b>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <image src="../image/plastic.jpg" style="width: 200px; height: 200px;"></image><br>
                            <button type="button" class="mt-2 btn btn-success btn-confirm" style="width: 100%">CONFIRM</button>
                        </div>
                        <div class="col-sm-5">
                            <b>Username:</b>
                            <p>Senpai Elwin</p>
                            <b>Address:</b>
                            <p>Jl. Cinta Gang Damai</p>
                            <b>Phone:</b>
                            <p>08198765432</p>
                            <b>Qty (kg):</b>
                            <p>0.3</p>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item detail-box">
                    <div class="col-sm-12">
                        <b>Customer Detail</b>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <image src="../image/73a9249f-a050-491e-bd75-08937f292719_1.0974051392b4a1788db13a947eb68b5a.jpeg" style="width: 200px; height: 200px;"></image><br>
                            <button type="button" class="mt-2 btn btn-success btn-confirm" style="width: 100%">CONFIRM</button>
                        </div>
                        <div class="col-sm-5">
                            <b>Username:</b>
                            <p>Gunawan Huang</p>
                            <b>Address:</b>
                            <p>Jl. Bambu No. 123</p>
                            <b>Phone:</b>
                            <p>08123456789</p>
                            <b>Qty (kg):</b>
                            <p>0.2</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <footer class="container-fluid sect5">
        <div class="container">
            <h3 class="h4 text-light text-center mb-0">Copyright &copy; 2017 , MitM</h3>
        </div>
    </footer>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>    
    <script>
        var position = { lat: 3.587524, lng: 98.69066010000006 };
        
        var map = new google.maps.Map(document.getElementById('map'), {
            center: position,
            zoom: 18
        });

        var marker = new google.maps.Marker({ position, map, title: 'Hello World!' });

        var collectBtn = document.getElementsByClassName('btn-confirm');
        for(var i = 0; i < collectBtn.length; i++) {
         
        collectBtn[i].addEventListener('click', function () {
            var a = this.parentNode.parentNode.parentNode;
            a.parentNode.removeChild(a);
        })   
        }
    </script>
</body>
</html>