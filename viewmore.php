<?php
session_start();
$conn=mysqli_connect('localhost','root','','house') or die('Connection fails');

if(isset($_GET['this']))
{
 $pub_id=$_GET['this'];
 $_SESSION['pub_id']=$pub_id;
}
$select2="select * From user,publication where publication.pub_id='$pub_id' and user.uid=publication.uid";
$result2=$conn->query($select2);
$info2=$result2->fetch_assoc();
?>
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
<center>
<h1>House information</h1>
<p>LOCATION:<?php echo $info2['location'];?></p>
<img src="dashboard/production/<?php echo $info2['image']; ?>"class="img-fluid" width="150px" height="150px" />
<p>Dinning rooms:<?php echo $info2['dinning'];?></p>
<p>Kitchen:<?php echo $info2['kitchen'];?></p>
<p>washing:<?php echo $info2['washing'];?></p>
<p>category:<?php echo $info2['category'];?></p>
<p>price:<?php echo $info2['price'];?>&nbsp;<b>RWF</b></p>
<p class="card-text"><i>Details:</i><?php echo $info2['details'];?></p>
<h1>Owner information <a href="index.php" class="btn btn-success">Back to home</a>
</h1>
<p>Names:<?php echo $info2['firstname'];?></p>
<p>Phone:<?php echo $info2['phone'];?></p>
<p>email:<?php echo $info2['email'];?></p>

</center>
