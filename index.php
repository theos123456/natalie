<?php
session_start();
$conn=mysqli_connect('localhost','root','','house') or die('Connection fails');
$query=mysqli_query($conn,"select * from publication,user where user.uid=publication.uid") or die("selecting error");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>Online house publication system</title>

    <!-- Bootstrap core CSS -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--->
    <link rel="stylesheet" href="cssboot/bootstrap.css">
    <link rel="stylesheet" href="cssboot/bootstrap.min.css">
    <link rel="stylesheet" href="cssboot/bootstrap-grid.css">
	<link rel="stylesheet" href="font/font-awesome.css">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style>
        a {
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            top: -100%;
        }
        
        .fa {
            padding: 1px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            display: block;
        }
        /* Add a hover effect if you want */
        
        .fa:hover {
            opacity: 0.7;
        }
        /* Set a specific color for each brand */
        /* Facebook */
        
        .fa-facebook {
            color: white;
        }
        /* Twitter */
        
        .fa-twitter {
            color: white;
        }
    </style>
</head>

<body>



    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->

        <div class="jumbotron bg-red text-center" style="background: -webkit-linear-gradient(top, #7579ff, #b224ef);color:white;">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hackthon/Login/registration.php">Register</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="hackthon/Login/index.php">Login</a>
                </li>
            </ul>

            <h1 class="display-4">Online house publication system</h1>
            <p class="lead">Best online house Marketing</p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="hackthon/Login/registration.php" class="btn btn-lg btn-secondary">register Now</a>

            </div>
        </div>



       
            <br>
            <bR>
            <center>
                <I><b><h3 STYLE="Color:#826361;">available houses</h3></b></I>
            </center>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php
                        while($row=mysqli_fetch_assoc($query))
                        {
                        ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="dashboard/production/<?php echo $row['image'] ?>" class="img-fluid" width="340" height="340">
								
                                <div class="card-body">
                                    <p class="card-text">house<?php echo $row['category'];?><BR>
                                    <b>house Location:</b><?php echo $row['location'];?><br><b>Dinning rooms:</b><?php echo $row['dinning'];?>
                                   <br> <b>washing rooms:</b><?php echo $row['washing'];?><br><b>kitchen rooms:</b><?php echo $row['kitchen'];?>
                                    <br><b>sleeping rooms:</b><?php echo $row['sleeping'];?>
                                    <br><b>Price:</b><?php echo $row['price'];?><br>
                                  <a href="viewmore.php?this=<?php echo $row['pub_id']; ?>" class="btn btn-primary">View more</a>
                                </p>
                                    <div class="d-flex justify-content-between align-items-center">


                                    </div>
                                </div>
                            </div>
                            </div>
                             
                        
                            <?php
                        }
                        ?>
                        </div>
                        </div>
                        </div>
                        </div>

                    
                    
    <footer class="jombotron " style="background: -webkit-linear-gradient(top, #7579ff, #b224ef);width:100%;position: absolute;left:0px;right: 0px; ">
<div class="container marketing ">

    <!-- Three columns of text below the carousel -->
    <div class="row ">
      <div class="col-lg-4 ">
        
        <ul class="nav flex-column ">
  <li class="nav-item ">
    <a class="nav-link " href="# ">Home</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="# ">Contact US</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="# ">About us</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="# ">Register</a>
  </li>
</ul>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 ">
        
        <p style="color:white; "><br><br><br>&copy; Best online House marketing -2019</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 ">
        
      

<div class="list-group " style="background: -webkit-linear-gradient(top, #7579ff, #b224ef); ">
  
  <a href="# " class="list-group-item list-group-item-action " style="background:#7579ff;color:white; "><i class="fa fa-facebook ">&nbsp;&nbsp;Best online market</i></a>
  <a href="# " class="list-group-item list-group-item-action " style="background:#7579ff;color:white; "><i class="fa fa-twitter ">&nbsp;&nbsp;@Best_market</i></a>
  <a href="# " class="list-group-item list-group-item-action " style="background: #7579ff;color:white; "><i class="fa fa-instagram ">&nbsp;&nbsp;Best online market</i></a>
<a href="# " class="list-group-item list-group-item-action " style="background:#7579ff;color:white; "><i class="fa fa-whatsapp ">&nbsp;&nbsp;+2507898170899</i></a>
  
</div>
        
      </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


      
    </footer>
</body>


</html>