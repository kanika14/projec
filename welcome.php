<?php
session_start();

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

      <?php if( isset($_SESSION['user_type']))
            {
              if ($_SESSION['user_type'] == "admin") {  ?>
            <div class="container">
              <div class="row">
                <div class="col s6">
                  <h4>Welcome <?php echo $_SESSION['user_session']; ?></h4> 
                  <h5>As You are the admin here, You can do whatever you want.</h5>
                </div>
              </div>
            </div>
      <?php   } }
            ?>


<div class="container">
  <div class="row">
  <div class="col s3">
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/download.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo $row['name']; ?><i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $row['name']; ?><i class="material-icons right">close</i></span>
      <p>Here is some more information about you.</p>
    </div>
  </div>
  </div>
<div class="col s4"></div>
<div class="col s5">
  <h4>Search the College...</h4>
  <form>
        <div class="input-field">
          <input id="search" type="search" onkeyup="searchStudents()" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
  </form>
</div>
  </div>
  <div class="row">
      <div class="col-md-8 resultsdiv">
        <div id="blk-1" class="toHide">
          <input type='hidden' id='current_page' />
        <input type='hidden' id='show_per_page' />
  
          <div class="content">
            <div id="hsndiv" class="resultsdiv sacdiv hsnsac_div_height"></div>
          </div>
           
        </div>
    </div>
  </div>  
</div>


<div class="fixed-action-btn horizontal">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating tooltipped red" data-position="top" data-tooltip="Videos" href="videos.php"><i class="material-icons">music_video</i></a></li>
    <li><a class="btn-floating yellow darken-1 tooltipped" data-position="top" data-tooltip="Photos" href="photos.php"><i class="material-icons">camera_alt</i></a></li>
    <li><a class="btn-floating green tooltipped" data-position="top" data-tooltip="Contact Us" href="contact.php"><i class="material-icons">call</i></a></li>
    <li><a class="btn-floating blue tooltipped" data-position="top" data-tooltip="Careers" href="careers.php"><i class="material-icons">account_box</i></a></li>
  </ul>
</div>
<?php include('footer.php');?>