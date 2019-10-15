<?php
session_start();
$conn=mysqli_connect('localhost','root','','house') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['register']))
{
 $location=$_POST['location'];
 $dinning=$_POST['dinning'];
 $kitchen=$_POST['kitchen'];
 $washing=$_POST['washing'];
 $sleeping=$_POST['sleeping'];
 $category =$_POST['category'];
 $price =$_POST['price'];
 $details =$_POST['details'];
 $house_id=$_POST['house_id'];

//file uploads------------------------------------------------------------
if(isset($_FILES['image']) && $_FILES['image']['name']!="")
	{
	$photo_name=$_FILES['image']['name'];
	$photo_temp=$_FILES['image']['tmp_name'];
	$photo_size=$_FILES['bimageank']['size'];
	$folder=$target_dir = 'uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name1=str_replace($photo_ext," ",$photo_name);
	$new_name=$name1."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;

  $query=mysqli_query($conn,"select * from publication where house_id='$house_id'") or die("selecting error");
  $count=mysqli_num_rows($query);
  if($count == 0)
  {

 $sql2 = "INSERT INTO publication (uid,location,dinning,kitchen,washing,sleeping,category,price,details,image,house_id)
VALUES ( '".$_SESSION['uid']."','$location','$dinning','$kitchen','$washing','$sleeping','$category','$price','$details','".$_SESSION['front']."','$house_id')" or die(mysql_error());
 if ($conn->query($sql2) == TRUE )
 {

   echo "<script>alert('house registered very well')</script>";
 }
 else
 {
$conn->error;
 }
}
else
{
  echo "<script>alert('house id arleady exist')</script>";

}}
/*
$query1=mysqli_query($conn,"select * from market") or die("selecting error");
$row1=mysqli_fetch_assoc($query1);
$date1=$row1['deadline'];


if($date1 > date("d-m-Y"))
{
$del1=$conn->query("DELETE FROM market where market.uid='".$_SESSION['userId']."'");
}
*/
}
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
                <li><a href="houseyoupublish.php"><i class="fa fa-home"></i> house published <span class="fa fa-chevron-down"></span></a>

                  <li><a href="deletehouse.php"><i class="fa fa-home"></i> delete house <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                  <li><a href="modifyuserinfo.php"><i class="fa fa-edit"></i> update profile <span class="fa fa-chevron-down"></span></a>
                   
                  </li>
                 
                  <li><a href="index.php"><i class="fa fa-table"></i> upload a house <span class="fa fa-chevron-down"></span></a>
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
            <form action="#"   method="POST" enctype="multipart/form-data" style="position:absolute;left:400px;top:150px;height:200px;">
              
            <div class="form-group">
              <label>house identification</label>
              <input type="text" class="form-control" name="house_id"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div> 
            <div class="form-group">
              <label>house Location</label>
              <input type="text" class="form-control" name="location"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
            <label>number of dinning room</label>
                <input type="number" class="form-control" name="dinning"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
            </div>
            <div class="form-group">
              <label>number of kitchen</label>
                  <input type="number" class="form-control" name="kitchen"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
                <label>number of washing room</label>
                    <input type="number" class="form-control" name="washing"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label>number of sleeping room</label>
                      <input type="number" class="form-control" name="sleeping"    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                  </div>
            <div class="form-group">
            <label>house category</label>
            <select name="category" class="form-control" id="subject" required/>
<option value="for buy">For Rent</option>



</select>
                         <div class="validation"></div>
            </div>
           
              <div class="form-group">
              <label>price</label>
                  <input type="text" class="form-control" name="price" required />
                           <div class="validation"></div>
                                            </div>
              <div class="form-group">
              <label>House image</label>
                  <input type="file" class="form-control" name="image" required />
                           <div class="validation"></div>
                </div>
            <div class="form-group">
              <textarea class="form-control" name="details" rows="5"  placeholder="house details" required></textarea>
              <div class="validation"></div>
            </div>

            

            <div class="text-center"><input type="submit" class="btn btn-primary btn-lg" name="register"></div>
          </form>
        </div>              
      </div>
    </div>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
