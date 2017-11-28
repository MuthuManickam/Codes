<?php
  require_once("C:/xampp/htdocs/SARA/DB/config.php");
  require_once("C:/xampp/htdocs/SARA/Dash/session.php");
   mysqli_query($db,'SET character_set_results=utf8');
	mysqli_query($db,'SET names=utf8');
	mysqli_query($db,'SET character_set_client=utf8');
	mysqli_query($db,'SET character_set_connection=utf8');
   $myusername=$_SESSION['login_user']; 
	$sql = "SELECT * FROM user_details WHERE email = '$myusername'";
	  $qsql = "SELECT * FROM quotes";
      $qresult = mysqli_query($db,$qsql);
	  $min=1;
	  $max = mysqli_num_rows($qresult);
	  $result = mysqli_query($db,$sql);
	  $avalue=rand($min,$max);
	  $qsql = "SELECT * FROM quotes where id='$avalue'";
	  $qresult = mysqli_query($db,$qsql);
	  $row = mysqli_fetch_array($qresult,MYSQLI_ASSOC);
      $quotes = $row['quotes'];
	  $author=$row['author'];
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $id = $row['id'];
      $username = $row['uname'];
	  $alphabets=array(1=>'A',2=>'B',3=>'C',4=>'D',5=>'E',6=>'F',7=>'G',8=>'H',9=>'I',10=>'J',11=>'K',12=>'L',13=>'M',14=>'N',15=>'O',16=>'P',17=>'Q',18=>'R',19=>'S',20=>'T',21=>'U',22=>'V',23=>'W',24=>'X',25=>'Y',26=>'Z');
	  $key=array_search($username[0],$alphabets);
	  $imsql="select img from propic where id=$key";
	  $imresult = mysqli_query($db,$imsql);
	  $imrow = mysqli_fetch_array($imresult,MYSQLI_ASSOC);
	  $email = $row['email'];
	  $fname = $row['fname'];
	  $lname = $row['lname'];
	  $pwd = $row['pwd'];
	  $about = $row['about'];
	  $check = $row['boolean'];
	  if($_SERVER["REQUEST_METHOD"] == "POST") {

	  $mfname=$_POST['fname'];
	  $mlname=$_POST['lname'];
	  $mabout=$_POST['about'];
	
			  $usql = "UPDATE user_details SET fname='$mfname', lname='$mlname', about='$mabout' WHERE uname='$username'";
			  $result = mysqli_query($db,$usql);
			 
	  }
	  
	  
   ?>
  
<!doctype html>
<html lang="en">
<head>
		<META HTTP-EQUIV=”Content-Type” CONTENT=”text/html; charset=utf-8″>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>User Account</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/> 
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	</head>
	<body>
					
		    

            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                        </div> <!--/.modal-header-->
                        <div class="modal-body">
                            <form method="post" id="updateForm" action="pass.php">
                                <div class="form-group" id="currentPass-group">
                                    <label for="current_pass1">Current Password :</label>
                                    <input class="form-control" type="password" name="current_pass" id="current_pass">
                                </div>
                                <div class="form-group">
                                    <label for="new_pass1">New Password :</label>
                                    <input class="form-control" type="password" name="new_pass" id="new_pass">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_pass1">Confirm Password :</label>
                                    <input class="form-control" type="password" name="confirm_pass" id="confirm_pass">
                                </div>
                        <div class="modal-footer">
                                    <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                                    <button type="submit" name="submit" class="btn btn-info btn-fill" id="submitForm" value="Save changes"><i class="fa fa-reply"></i> Save Changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!--/.modal -->


<div class="wrapper">
    <div class="sidebar" data-color="azure">
  

    	<div class="sidebar-wrapper">
            <div class="logo" >
                <a href="#" class="simple-text"style="color:black;">
					Ranking based on Sensitivity score & Data classification
                </a>
            </div>

            <ul class="nav">
                
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
					<li>
                    <a href="Categorylist.php">
                        <i class="pe-7s-note2"></i>
                        <p>Category List</p>
                    </a>
                </li>                
                <li>
                    <a href="Viewscore.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>View Score</p>
                    </a>
                </li>             
				<li>
                    <a href="Addscore.php">
                        <i class="pe-7s-science"></i>
                        <p>Add Sensitivity Score</p>
                    </a>
                </li>
			
				<li>
                    <a href="Upload.php">
                        <i class="pe-7s-cloud-upload"></i>
                        <p>Upload</p>
                    </a>
                </li>
				<li>
                    <a href="Viewfiles.php">
                        <i class="pe-7s-mail-open-file"></i>
                        <p>View Files</p>
                    </a>
                </li>	
				<li>
                    <a href="Process.php">
                        <i class="pe-7s-loop"></i>
                        <p>Process</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
					<li>
					    <a>
                           <p>Welcome  </font>  <?php echo "<span style='color:Maroon;'>$username</span>"?>!!</p>
                        </a>
						</li>
                        <li>
                            <a href="logout.php">
                                <p><i class="fa fa-sign-out fa-fw"></i> Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled placeholder="Username" value ="<?php echo "$username"?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" disabled placeholder="Email"  value ="<?php echo "$email"?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="fname" placeholder="Company"  value ="<?php echo "$fname"?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lname"  placeholder="Last Name" value ="<?php echo "$lname"?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="4" class="form-control" name="about"  placeholder="Describe yourself"><?php echo "$about"?></textarea>
                                            </div>
                                        </div>
                                    </div>							   
      						<button type="button" class="btn btn-info btn-fill pull-left" data-title="Edit" data-toggle="modal" data-target="#edit" data-backdrop="static" data-keyboard="false"><i class="fa fa-refresh fa-fw"></i> Update password</button>
									      
									<button type="submit" class="btn btn-info btn-fill pull-right"><i class="fa fa-refresh fa-fw"></i> Update Profile</button>
										
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
								<div class="col-md-4">
											<div class="card card-user">
												<div class="image">
													<img src="assets/img/bgimage.jpg" alt="bgimg"/>
												</div>
												<div class="content">
													<div class="author">
														 <a href="#">
														<?php echo '<img class="avatar border-gray" src="data:image/png;base64,'.base64_encode( $imrow['img'] ).'"/>'; ?>
														

														  <h4 class="title"><?php echo "<b><span style='color:MidnightBlue;'>$username</span></b>"?><br/><br/>
															 <small><?php echo "\"".$quotes."\"";?></small>
														  </h4>
														</a>
													</div>
													<br/>
													<p class="description text-center"> <?php $author=" - ".$author;echo "<span style='color:orange;'> $author</span>";?> </p>
													</div>
												<hr>
												
											</div>
								</div>                    
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li><a>All rights reserved &copy; 2017</a></li>                        
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    Created By SARA Team
                </p>
            </div>
        </footer>

    </div>
	
</div>


</body>

    <!--   Core JS Files   -->
	
	
	
	
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

	<script type="text/javascript" src="js/backfix.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	
	<!-- <script src="assets/js/jquery.min.js"></script> -->
	
	<!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script> 

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-home',
            	message: "Welcome <b> <?php echo $username ?> </b>to Ranking based on Sensitivity score & Data classification."

            },{
                type: 'info',
                timer: 3000
            });

    	});
	</script>

</html>


