<?php 
if(!session_id())
	session_start();
$page_title = "Global Institute of technology and Management";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
		<link rel="stylesheet" type="text/css" href="fonts/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2">
		<script type="text/javascript" src="script/jquery.min.js"></script>
		<script type="text/javascript" src="script/materialize.min.js"></script>
		<script type="text/javascript" src="script/validation.min.js"></script>
		<script src="script/common.js"></script>
		<script type="text/javascript" src="script/register.js"></script>
		<link href="css/font.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
	<div class="navbar-fixed">
		<nav>
		  <div class="nav-wrapper">
		    <a href="index.php" class="brand-logo left">GITM GURGAON</a>
		    <ul class="right hide-on-med-and-down">
		      <li><a href="index.php">Home</a></li>
		      <li><a href="careers.php">Careers</a></li>
		      <li><a href="photos.php">Photos</a></li>
		      <li><a href="videos.php">Videos</a></li>
		       <li><a href="contact.php">Contact Us</a></li>
		       <?php if( isset($_SESSION['user_type'])){
		       	{if ($_SESSION['user_type'] == "admin") {  ?>
		       	<li><a href="signup.php">Add User</a></li>	
			<?php  	}}
		        ?>
		       	
		       <?php } else{echo "";}?>
		       <?php  if(isset($_SESSION['user_session'])) { ?>
		      	<li><a href="dashboard.php">Dashboard</a></li>
		      	<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">account_circle</i></a></li>
			     <ul id="dropdown1" class="dropdown-content customdropdown">
			       <li><a href="welcome.php">View Profile</a></li> 
			       <li><a href="logout.php">Logout</a></li>
			     </ul>
		     <?php  } else { ?>
		     <li><a href="login.php">Login</a></li>
		     
		      <?php } ?>
		      
		      	    	</ul>
		  </div>
		</nav>
	</div>
	</body>
</html>