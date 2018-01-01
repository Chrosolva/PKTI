<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recycle List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/cyclelist.css">
    <style>
        .cardbox {
            padding-top: 1.25rem;
            text-align: center;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>
    <header class=" header navbar container-fluid navbar-expand navbar-dark">
        <div class="container">
            <a class="text-light container title" href="#"><h3 class="output h3">Trash Cycle</h3></a>
            
            <nav class="kanan nav navbar navbar-brand flex-column">
                <ul class="kanan navbar-nav nav-item">
                    <li class="nav-item">
                        <a href="RecycleList.php" class="nav-link active">Re-Cycle List</a>        
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
    
    
    <div class="container-fluid sect1">
        <div class="container-fluid sect2 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="container-fluid">
                            <p class="h1 text-center text-light display-4">
                                <b>Start to Collect Your Waste now !</b>
                            </p> 
                            <h2 class="h3 text-light text-center">Select your waste category !</h2>
                        </section> 
                    </div>                    
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="h3 text-dark text-center mb-3">Anorganic Waste</h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="cardbox">
                        <img class="card-img-top text-center" src="../image/plastic.jpg" alt="Bottles" style="width: 200px; height: 200px; margin:0 auto;">
                            <div class="card-body">
                                <p class="card-text text-center text-dark h6">Bottles</p>
                                <button type="button" class="btn btn-success container" data-toggle="modal" data-target="#exampleModal">Collect</button> 
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Bottles</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <image src="../image/plastic.jpg" style="width: 200px; height: 200px;"></image><br>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <b>Username:</b>
                                                        <p>Senpai Elwin</p>
                                                        <b>Address:</b>
                                                        <p>Jl. Cinta Gang Damai</p>
                                                        <b>Phone:</b>
                                                        <p>08198765432</p>
                                                        <b>Qty (kg):</b>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="modal-footer">
                                                <p class="h5 text-dark float-left container">Collect ?</p>
                                                <button type="button" class="btn btn-success">Collect</button>
                                                <button type="button" class="btn btn-link" data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardbox">
                            <img class="card-img-top text-center" src="../image/plastic-cap-ring-shank-roofing-nails.jpg" alt="Metals" style="width: 200px; height: 200px; margin:0 auto;">
                            <div class="card-body">
                                <p class="card-text text-center text-dark h6">Metals</p>
                                <button class="btn btn-success container">Collect</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardbox">
                            <img class="card-img-top text-center" src="../image/img-unavailable.jpg" alt="Papers" style="width: 200px; height: 200px; margin:0 auto;">
                            <div class="card-body">
                                <p class="card-text text-center text-dark h6">Papers</p>
                                <button class="btn btn-success container">Collect</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardbox">
                            <img class="card-img-top text-center" src="../image/73a9249f-a050-491e-bd75-08937f292719_1.0974051392b4a1788db13a947eb68b5a.jpeg" alt="Glasses" style="width: 200px; height: 200px; margin:0 auto;">
                            <div class="card-body">
                                <p class="card-text text-center text-dark h6">Glasses</p>
                                <button class="btn btn-success container">Collect</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <h2 class="h3 text-dark mb-3 text-center">Organic Waste</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="cardbox">
                                <img class="card-img-top text-center" src="../image/img-unavailable.jpg" alt="Bottles" style="width: 200px; height: 200px; margin:0 auto;">
                                <div class="card-body">
                                    <p class="card-text text-center text-dark h6">Food Waste</p>
                                    <button class="btn btn-success container">Collect</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="cardbox">
                                <img class="card-img-top text-center" src="../image/img-unavailable.jpg" alt="Vegetables" style="width: 200px; height: 200px; margin:0 auto;">
                                <div class="card-body">
                                    <p class="card-text text-center text-dark h6">Vegetables Wastes</p>
                                    <button class="btn btn-success container">Collect</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="cardbox">
                                <img class="card-img-top text-center" src="../image/img-unavailable.jpg" alt="Animals Wastes" style="width: 200px; height: 200px; margin:0 auto;">
                                <div class="card-body">
                                    <p class="card-text text-center text-dark h6">Animals Wastes</p>
                                    <button class="btn btn-success container">Collect</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="cardbox">
                                <img class="card-img-top text-center" src="../image/img-unavailable.jpg" alt="Roots&Leaves" style="width: 200px; height: 200px; margin:0 auto;">
                                <div class="card-body">
                                    <p class="card-text text-center text-dark h6">Plants Wastes</p>
                                    <button class="btn btn-success container">Collect</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       

    <div class="container-fluid pt-5 pb-5 sect4">
        <div class="container">
            <h2 class="h3 mt-2 mb-1 text-dark">Waste Collection Graphics</h2> 
            <div class="dropdown">
                <div class="form-group row">
                    <label class="h5 col-sm-3 col-form-label">Select your waste category:</label>
                    <div class="col-sm-7">
                        <button style="width: 160px" class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Anorganic</a>
                            <a class="dropdown-item" href="#">Organic</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <canvas id="myChart" width="400" height="100"></canvas>   
            </div>
        </div>
    </div>

    <footer class="container-fluid sect5">
        <div class="container">
            <h3 class="h4 text-light text-center mb-0">Copyright &copy; 2017 , MitM</h3>
        </div>
    </footer>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../../node_modules/moment/min/moment.min.js"></script>
    <script src="../../node_modules/chart.js/dist/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        
        var waktu = {
            hari: new Date().getDate(),
            bulan: new Date().getMonth(),
            tahun: new Date().getFullYear()
        }
        var awal = waktu.hari - 14;
        var grafik = {
            labels: [],
            datas: []
        }
        for (var i = awal; i <= waktu.hari; i++) {
            var tempWaktu = {
                hari: new Date(waktu.tahun, waktu.bulan, i).getDate(),
                bulan: new Date(waktu.tahun, waktu.bulan, i).getMonth(),
                tahun: new Date(waktu.tahun, waktu.bulan, i).getFullYear()
            }
            grafik.labels.push(`${tempWaktu.hari}/${tempWaktu.bulan}/${tempWaktu.tahun}`);
            grafik.datas.push(Math.floor(Math.random() * 100));
        }

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: grafik.labels,
                datasets: [{
                    label: '# of Votes',
                    data: grafik.datas,
                    backgroundColor: "#c1edc8",
                    borderColor: "#218838",
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>