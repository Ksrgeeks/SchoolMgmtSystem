<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{

$stid=intval($_GET['stid']);

if(isset($_POST['submit']))
{
$teachername=$_POST['fullanme'];
$mobile=$_POST['mobile']; 
$teacheremail=$_POST['emailid']; 
$gender=$_POST['gender']; 
$dob=$_POST['dob']; 
$subject=$_POST['subject']; 
$designation=$_POST['designation']; 
$experience=$_POST['experience']; 
$address=$_POST['address']; 

$sql="update tblteachers set TeacherName=:teachername,Mobile=:mobile,TeacherEmail=:teacheremail,Gender=:gender,DOB=:dob,Subject=:subject,Designation=:designation,Experience=:experience,Address=:address,Status=:status where TeacherId=:stid ";
$query = $dbh->prepare($sql);
$query->bindParam(':teachername',$teachername,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':teacheremail',$teacheremail,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':designation',$designation,PDO::PARAM_STR);
$query->bindParam(':experience',$experience,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':stid',$stid,PDO::PARAM_STR);
$query->execute();

$msg="Student info updated successfully";
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin| Edit Teacher < </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update Teacher</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Update Teacher</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Teacher info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                                <form class="form-horizontal" method="post">
<?php 
 $sql = "SELECT * FROM tblteachers ";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-10">
<input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo htmlentities($result->TeacherName)?>" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Mobile</label>
<div class="col-sm-10">
<input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo htmlentities($result->Mobile)?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Email id)</label>
<div class="col-sm-10">
<input type="email" name="emailid" class="form-control" id="email" value="<?php echo htmlentities($result->TeacherEmail)?>" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Gender</label>
<div class="col-sm-10">
<?php  $gndr=$result->Gender;
if($gndr=="Male")
{
?>
<input type="radio" name="gender" value="Male" required="required" checked>Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other
<?php }?>
<?php  
if($gndr=="Female")
{
?>
<input type="radio" name="gender" value="Male" required="required" >Male <input type="radio" name="gender" value="Female" required="required" checked>Female <input type="radio" name="gender" value="Other" required="required">Other
<?php }?>
<?php  
if($gndr=="Other")
{
?>
<input type="radio" name="gender" value="Male" required="required" >Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required" checked>Other
<?php }?>


</div>
</div>


<div class="form-group">
                                                        <label for="date" class="col-sm-2 control-label">DOB</label>
                                                        <div class="col-sm-10">
                <input type="date"  name="dob" class="form-control" value="<?php echo htmlentities($result->Dob)?>" id="date">
                                                        </div>
                                                    </div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Subject</label>
<div class="col-sm-10">
<input type="text" name="subject" class="form-control" id="subject" value="<?php echo htmlentities($result->Subject)?>" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Designation</label>
<div class="col-sm-10">
<input type="text" name="designation" class="form-control" id="designation" value="<?php echo htmlentities($result->Designation)?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Experience</label>
<div class="col-sm-10">
<input type="text" name="experience" class="form-control" id="experience" value="<?php echo htmlentities($result->Experience)?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Address</label>
<div class="col-sm-10">
<input type="text" name="address" class="form-control" id="address" value="<?php echo htmlentities($result->Address)?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Date of Joining </label>
<div class="col-sm-10">
<?php echo htmlentities($result->RegisterDate)?>
</div>
</div>

<?php }} ?>                                                    

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({ 
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP } ?>
