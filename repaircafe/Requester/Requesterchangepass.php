<?php
define('TITLE', 'Change Password');
define('PAGE', 'Requesterchangepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}

 $rEmail = $_SESSION['rEmail'];
 if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['rPassword'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $rPass = $_REQUEST['rPassword'];
     $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}

?>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="Enter New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-dark mr-4 mt-4" name="passupdate" style="position: relative;bottom: 26px;" >Update</button>
        <button type="reset" class="btn btn-secondary mt-4" style="position: relative;left: -18px; position: relative;bottom: 26px;">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>

    </div>

  </div>
</div>
</div>
</div>

<?php
include('includes/footer.php'); 
?>

 <!-- Start Footer-->
 <footer class="container-fluid bg-dark text-white mt-5" style="position: fixed;bottom: 0;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 text-light"><i class="fab fa-instagram"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->

        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->