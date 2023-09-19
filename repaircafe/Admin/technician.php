<?php
define('TITLE', 'Technician');
define('PAGE', 'technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">Technicians Record</p>
  <?php
    $sql = "SELECT * FROM technician_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Technician ID</th>
    <th scope="col">Technician Name</th>
    <th scope="col"> TechnicianCity</th>
    <th scope="col">Mobile</th>
    <th scope="col">Technician Email</th>
    <th scope="col">Edit</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<th scope="row">'.$row["empid"].'</th>';
    echo '<td>'. $row["empName"].'</td>';
    echo '<td>'.$row["empCity"].'</td>';
    echo '<td>'.$row["empMobile"].'</td>';
    echo '<td>'.$row["empEmail"].'</td>';
    echo '<td><form action="editemp.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["empid"] .'><button type="submit" class="btn btn-dark mr-3" name="view" value="View" style="position: relative;left: 15px;">Edit</button></form>  <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["empid"] .'></form></td>
   </tr>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM technician_tb WHERE empid = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Sorry, Can't Delete Data";
    }
  }
?>
</div>
</div>
<div><a class="btn btn-dark box" href="insertemp.php">Add Technician Details</a>
</div>
</div>

<?php
include('includes/footer.php'); 
?>