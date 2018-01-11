<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/index.css"> 
    <link rel="stylesheet" href="../css/cyclelist.css">  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
        <header class=" header container-fluid navbar navbar-expand navbar-dark">
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
                    <li class="nav-item active">
                        <a href="#" class="nav-link">About Us</a>
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
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="cardbox">
                        <img src="../image/IMGP2597.jpg" alt="Gunawan" class="card-img-top text-center" style="width:250px; height:350px; margin:0 auto;" > 
                        <p class="card-text text-center text-dark h6">Gunawan</p>
                        <button class="dropdown-toggle btn btn-success" type="button" id="detail1" style="width:250px;">See More</button> 
                        <div class="container-fluid">
                            <div class="container pt-5 pb-5" id="hasil1" style="width:250px;">
                            <p class="card-text text-left text-dark h6">Lives on Malaka Street no 89/35B.</p>
                            <p class="card-text text-left text-dark h6">Study at STMIK Mikroskil, Medan, Indonesia</p> 
                            <p class="card-text text-left text-dark h6">Email : gunawanhuang32@gmail.com</p> 
                            <p class="card-text text-left text-dark h6">Contact number : 085206588911</p>
                            </div>
                        </div>
                        <script>
                            var tombol1 = document.getElementById("detail1"); 
                            var hasil1 = document.getElementById("hasil1"); 
                            hasil1.style.display="none";
                            tombol1.addEventListener("click",function(){
                                if (hasil1.style.display == "none") {
                                    hasil1.style.display="block";
                                }
                                else {
                                    hasil1.style.display="none";
                                }
                            })
                        </script>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cardbox">
                        <img src="../image/elwin.jpg" alt="elwin" class="card-img-top text-center" style="width:250px; height:350px; margin:0 auto;" >
                        <p class="card-text text-center text-dark h6">Elwin Chen</p>
                        <button class="dropdown-toggle btn btn-success" type="button" id="detail2" style="width:250px;">See More</button> 
                        <div class="container-fluid">
                            <div class="container pt-5 pb-5" id="hasil2" style="width:250px;">
                            <p class="card-text text-left text-dark h6">Lives on Pukat4/5 street GG Durian no 71BB.</p>
                            <p class="card-text text-left text-dark h6">Study at STMIK Mikroskil, Medan, Indonesia</p> 
                            <p class="card-text text-left text-dark h6">Email : elwinchen@rocketmail.com</p> 
                            <p class="card-text text-left text-dark h6">Contact number : 085763055599</p>
                            </div>
                        </div>
                        <script>
                            var tombol2 = document.getElementById("detail2"); 
                            var hasil2 = document.getElementById("hasil2"); 
                            hasil2.style.display="none";
                            tombol2.addEventListener("click",function(){
                                if (hasil2.style.display == "none") {
                                    hasil2.style.display="block";
                                }
                                else {
                                    hasil2.style.display="none";
                                }
                            })
                        </script>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cardbox">
                        <img src="../image/enjelin.jpg" alt="enjelin" class="card-img-top text-center" style="width:250px; height:350px; margin:0 auto;" >
                        <p class="card-text text-center text-dark h6">Enjelin </p>
                        <button class="dropdown-toggle btn btn-success" type="button" id="detail3" style="width:250px;">See More</button> 
                        <div class="container-fluid">
                            <div class="container pt-5 pb-5" id="hasil3" style="width:250px;">
                            <p class="card-text text-left text-dark h6">Lives on Wahidin street no 112.</p>
                            <p class="card-text text-left text-dark h6">Study at STMIK Mikroskil, Medan, Indonesia</p> 
                            <p class="card-text text-left text-dark h6">Email : enjelinnn@gmail.com</p> 
                            <p class="card-text text-left text-dark h6">Contact number : 0814343112</p>
                            </div>
                        </div>
                        <script>
                            var tombol3 = document.getElementById("detail3"); 
                            var hasil3 = document.getElementById("hasil3"); 
                            hasil3.style.display="none";
                            tombol3.addEventListener("click",function(){
                                if (hasil3.style.display == "none") {
                                    hasil3.style.display="block";
                                }
                                else {
                                    hasil3.style.display="none";
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <footer class="container-fluid sect5">
        <div class="container">
            <h3 class="h4 text-light text-center mb-0">Copyright &copy; 2017 , MitM</h3>
        </div>
    </footer>
</body>
</html>