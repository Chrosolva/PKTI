<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recycle Tips</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/cyclelist.css">
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css">
    <style>
        video {
            width: 100%;
        }

        .fa {
            font-size: 25px;
            margin: 5px;
            cursor: pointer
        }

        .fa-heart {
            color: #c82333;
        }

        .fa-comment {
            color: #138496;
        }

        .creative-box {
            border: 1px solid #cecece;
            padding: 10px;
            margin: 5px;
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
                        <a href="RecycleList.php" class="nav-link">Re-Cycle List</a>        
                    </li>
                    <li class="nav-item">
                        <a href="RecycleTips.php" class="nav-link active">Re-Cycle Tips</a>
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
        <div class="container-fluid sect2 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="container-fluid">
                            <p class="h1 text-center text-light display-4">
                                <b>Here tips for you !</b>
                            </p> 
                            <h2 class="h3 text-light text-center">to collect your cycle !</h2>
                        </section> 
                    </div>       
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container-fluid">
        <div class="container pt-5 pb-5">
            <h2 class="h3 text-dark text-center">Recycle Tips</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 1</div>
                        <video controls autoplay>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o" data-toggle="modal" data-target="#exampleModal"></span>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Creative Tips 1</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <video controls autoplay style="height: 300px; width: 90%; margin: 0 auto;">
                                                <source src="../video/video.mp4" type="video/mp4">
                                            </video>
                                            <textarea class="form-control mt-3 ml-3 mr-3" rows="5" placeholder="Comment..."></textarea>
                                            <div class="col-sm-12 text-right mt-3">
                                                <button class="btn btn-link" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-success" data-dismiss="modal">Comment</button>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 2</div>
                        <video controls>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o"></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 3</div>
                        <video controls>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 4</div>
                        <video controls>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o"></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 5</div>
                        <video controls>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o"></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="creative-box">
                        <div class="col-sm-12 mb-1">Creative Tips 6</div>
                        <video controls>
                            <source src="../video/video.mp4" type="video/mp4">
                        </video>
                        <span class="fa fa-heart-o"></span>
                        <span class="fa fa-comment-o"></span>
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

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        var faComponent = document.getElementsByClassName('fa');
        for ( var i = 0; i < faComponent.length; i++) {
            var fa = faComponent[i];

            fa.addEventListener('click', function () {
                if (this.className == 'fa fa-heart-o') {
                    this.className = 'fa fa-heart'
                } else if (this.className == 'fa fa-heart') {
                    this.className = 'fa fa-heart-o'
                }
            })
        }
    </script>
</body>
</html>