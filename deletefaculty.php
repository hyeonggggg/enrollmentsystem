<?php
session_start();
if (isset($_POST['delete_id'])) {

  $id = $_POST['delete_id'];
  //connection
  include 'conn.php';
  //delete query
  $query = "DELETE FROM faculty WHERE id = $id";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['deletesuccess'] = "Deleted Successfully";
    header('Location: settings.php');
  } else {
    $_SESSION['deleteerror'] = "Delete Failed";
    header('Location: settings.php');
  }
}
?>