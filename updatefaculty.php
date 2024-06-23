<?php
session_start();

include 'conn.php';
if (isset($_POST['updatefaculty'])) {
    $id = $_POST['update_id'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $position = $_POST['position'];
    $track = $_POST['track'];
    $type = $_POST['type'];
    if (!empty($id)) {
        $query = "UPDATE faculty SET firstName='$firstName', middleName='$middleName', lastName='$lastName', position='$position', track='$track', type='$type' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['updatesuccess'] = "Updated Successfully";
            header('Location: settings.php');
        } else {
            $_SESSION['updateerror'] = "Update Failed";
            header('Location: settings.php');
        }
    }
}
