<?php
session_start();
$conn=mysqli_connect('localhost','root','','house') or die('Connection fails');

$query=mysqli_query($conn,"select * from publication,user where publication.uid=user.uid ") or die("selecting error");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>House Publication management system | </title>

    <!-- Bootstrap -->
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
	<link rel="stylesheet" href="../../cssboot/bootstrap.min.css">
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $_SESSION['username'];?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['fname'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Pages</h3>
                <ul class="nav side-menu">
                <li><a href="allhouse.php"><i class="fa fa-home"></i> all houses <span class="fa fa-chevron-down"></span></a>

                  <li><a href="deletehouse.php"><i class="fa fa-home"></i> delete house <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                  <li><a href="deleteuser.php"><i class="fa fa-home"></i> delete user <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                  <li><a href="modifyuserinfo.php"><i class="fa fa-edit"></i> update profile <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                 
                  <li><a href="index.php"><i class="fa fa-table"></i> add a user <span class="fa fa-chevron-down"></span></a>
                    <li><a href="logout.php"><i class="fa fa-table"></i> logout <span class="fa fa-chevron-down"></span></a>

                    
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<h1>Online house publication system</h1>                  </a>
                  <ul class="# ">
                   

               
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
           
          <!-- /top tiles -->

          <div class="row" style="height:1000px;">
           <table border="1" style="position: absolute;left:350px;top:160px;">
           
             <tr><th>publsher names</th>
              <th>last name</th>
              <th>house id</th>
              <th>Location</th>
              <th>Dinning</th>
              <th>Kitchen</th>
              <th> washing</th>
              <th>slleprooms</th>
              <th>price</th>
              

                <th>Image</th>
                <th>Delete</th>
            </tr>
            <?php
                        while($row=mysqli_fetch_assoc($query))
                        {
                        ?>
            <tr><td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['house_id']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['dinning']; ?></td>
            <td><?php echo $row['kitchen']; ?></td>
            <td><?php echo $row['washing']; ?></td>
            <td><?php echo $row['sleeping']; ?></td>
            <td><?php echo $row['price']; ?> RWF</td>
           
            <td><img src="../../dashboard/production/<?php echo $row['image'] ?>" width="80px" height="80px"></td>
            <form action="#" method="post">
<input type="hidden" name="pub_id" value="<?php echo $row['pub_id'];?>">

<td><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td> </tr>



</form> 
<?php

if(isset($_GET['pub_id']))
{
  $pub_id=$_GET['pub_id'];
}
if(isset($_POST['delete']))
{

$pub_id=$_POST['pub_id'];
// echo"<script>alert($id)</script>";
$del1="DELETE FROM publication where pub_id='$pub_id'";

if(($conn->query($del1)==true))
 {
//echo "user deleted success";
  echo '<script>location.href="deletehouse.php"</script>';
  
 }
 else{
 // echo "delete fail";
  echo '<script>location.href="deletehouse.php"</script>';

 }
}
                        
?>
<?php
                        }
?>
           
           </table>
                  </div>
                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            house publication management system <a href="https://colorlib.com">Natalie</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
