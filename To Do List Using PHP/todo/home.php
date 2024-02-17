<?php
session_start();
require_once "header.php";
 ?>


<div class="container">
  <div class="row">
    <div class="col-8 m-auto">

    <h2 class="display-4 text-center" style=" font-family: 'Times New Roman', Times, serif;
  font-size: 300%;font-weight: bold;">My To Do List</h2>
      <form class="mt-4" action="index_valid.php" method="post">
        <div class="form-group">
          <input class= "form-control form-control-lg" type="text" name="textfield" placeholder="Enter your task"  >

        </div>
        <div class="">
          <input class="btn btn-success btn-block" style="font-weight: bold;" type="submit" name="addtask" value="Add Task">

        </div>
      </form>
    </div>
  </div>
<!-- ===================== show delete alert message ============= -->
<?php 
  if(isset($_SESSION['delete_success'])) { ?>

<div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
  <?=$_SESSION['delete_success'];?>
</div>



<?php
  unset($_SESSION['delete_success']);

}

?>

<!-- ========================== update alert message ==================== -->

<?php 
  if(isset($_SESSION['upadate_success'])) { ?>

<div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
  <?=$_SESSION['upadate_success'];?>
</div>



<?php
  unset($_SESSION['upadate_success']);

}

?>

<!-- =================================== table =========================== -->

<table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3" > 
<thead class="bg-dark text-white text-center">
  <tr>
    <th>Serial</th>
    <th>task</th>
    <th>Action</th>
  </tr>
</thead>

<?php
require_once "db.php";
$task_show_query = "SELECT * FROM task_table";
$result = $dbcon -> query($task_show_query);
if($result->num_rows!=0){
  $serial = 1;
  while($row = $result->fetch_assoc()){
?>

<tr>
  <td><?=$serial++?></td>
  <td><?=$row['task_name'] ?></td>
  <td>
    <div class="btn-group">
      <a class="btn btn-sm btn-warning" href="update.php?id=<?php echo base64_encode($row['id']); ?>">Update</a>
      <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo base64_encode($row['id']); ?>">Delete</a>
    </div>
  </td>
</tr>

<?php
  }
} else {
?>
  <tr>
    <td colspan="3" class="text-center display-4" style="font-weight: bold;">No tasks</td>
  </tr>
<?php
}
?>


</table>




     <!-- </div>
  </div> -->

<!-- </div> -->


  </body>
</html>
