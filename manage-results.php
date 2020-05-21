
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Results</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                      <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Results</h2>
                                  
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                      
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
							
						<pre> </pre>
						
                                <div class="row">
								
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql1 ="SELECT StudentId from tblstudents WHERE ClassId='1'";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query1->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                           <br> <span class="name" ><b>NURSERY</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
								
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql2 ="SELECT StudentId from tblstudents WHERE ClassId = '2' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query2->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                         <br> <span class="name" ><b>HKG</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql3 ="SELECT StudentId from tblstudents WHERE ClassId = '3'";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query3->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>LKG</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								</div>	
						
						<pre> </pre>
								
								<div class="row">
								
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql4 ="SELECT StudentId from tblstudents WHERE ClassId = '4'";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query4->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                           <br> <span class="name" ><b>FIRST</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql5 ="SELECT StudentId from tblstudents WHERE ClassId = '5'";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query5->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>SECOND</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql6 ="SELECT StudentId from tblstudents WHERE ClassId = '6'";
$query6 = $dbh -> prepare($sql6);
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query6->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>THIRD</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								</div>

<pre> </pre>
								<div class="row">	
								
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql7 ="SELECT StudentId from tblstudents WHERE ClassId = '7'";
$query7 = $dbh -> prepare($sql7);
$query7->execute();
$results7=$query7->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query7->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                          <br> <span class="name" ><b>FOURTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students1.php?stid='7'"> 
										
<?php 
$sql8 ="SELECT StudentId from tblstudents WHERE ClassId = '8'";
$query8 = $dbh -> prepare($sql8);
$query8->execute();
$results8=$query8->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query8->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>FIFTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sql9 ="SELECT StudentId from tblstudents WHERE ClassId = '9'";
$query9 = $dbh -> prepare($sql9);
$query9->execute();
$results9=$query9->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query9->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>SIXTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
							
                                    </div>
									
								</div>
<pre> </pre>
								<div class="row">	
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq20 ="SELECT StudentId from tblstudents WHERE ClassId = '10'";
$query10 = $dbh -> prepare($sq20);
$query10->execute();
$results10=$query10->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query10->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>SEVENTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq21 ="SELECT StudentId from tblstudents WHERE ClassId = '11'";
$query11 = $dbh -> prepare($sq21);
$query11->execute();
$results11=$query11->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query11->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>EIGHTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq22 ="SELECT StudentId from tblstudents WHERE ClassId = '12'";
$query12 = $dbh -> prepare($sq22);
$query12->execute();
$results12=$query12->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query12->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>NINTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
</div>
<pre> </pre>
								<div class="row">	
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq23 ="SELECT StudentId from tblstudents WHERE ClassId = '13'";
$query13 = $dbh -> prepare($sq23);
$query13->execute();
$results13=$query13->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query13->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>TENTH</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								
                                </div>
                                <!-- /.row -->
								
<pre> </pre>
								<div class="row">	
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq24 ="SELECT StudentId from tblstudents WHERE ClassId = '14'";
$query14 = $dbh -> prepare($sq24);
$query14->execute();
$results14=$query14->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query14->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>ELEVENTH A</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq25 ="SELECT StudentId from tblstudents WHERE ClassId = '15'";
$query15 = $dbh -> prepare($sq25);
$query15->execute();
$results15=$query15->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query15->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>ELEVENTH B</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq26 ="SELECT StudentId from tblstudents WHERE ClassId = '16'";
$query16 = $dbh -> prepare($sq26);
$query16->execute();
$results16=$query16->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query16->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>ELEVENTH C</b></span>
                                           <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								
								</div>
								
								<pre> </pre>
								<div class="row">	
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq27 ="SELECT StudentId from tblstudents WHERE ClassId = '17'";
$query17 = $dbh -> prepare($sq27);
$query17->execute();
$results17=$query17->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query17->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>TWELVE A</b></span>
                                                <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq28 ="SELECT StudentId from tblstudents WHERE ClassId = '18'";
$query18 = $dbh -> prepare($sq28);
$query18->execute();
$results18=$query18->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query18->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>TWELVE B</b></span>
                                            <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
									
								
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
<?php 
$sq29 ="SELECT StudentId from tblstudents WHERE ClassId = '19'";
$query19 = $dbh -> prepare($sq29);
$query19->execute();
$results19=$query19->fetchAll(PDO::FETCH_OBJ);
$totalstudents=$query19->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <br> <span class="name" ><b>TWELVE C</b></span>
                                               <span class="bg-icon"><i class="fa fa-file-text"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
								</div>
								
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->
     

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>
<?php } ?>

