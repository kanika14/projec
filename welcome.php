<?php
session_start();
print_r($_SESSION);
if(!isset($_SESSION['user_session'])){
	header("Location: index.php");
}
include('inc/header.php');
include_once("dbcon.php");
$sql = "SELECT name FROM myguests WHERE id='".$_SESSION['user_session']."' OR name='".$_SESSION['user_session']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
include('container.php');
?>
<div class="container">    
	<div id="navbar" class="navbar-collapse collapse">
	 <ul class="nav navbar-nav navbar-right">            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $row['name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
	</div>	
	<div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
		Hello, <br><br>Welcome to the members page.<br><br>
    </div>		
</div>
<?php include('footer.php');?>