<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 3/20/2019
 * Time: 7:43 PM
 */

include 'connect.php';
$id = $_GET['id'];
if($_GET['id']) {
    $id = $_GET['id'];
    if (!empty($id)) {
        $query = (mysqli_query($con, "delete from books where id='$id'"));
        if ($query) {
            header('location:index.php?cvb= silindi');
        } else {
            echo "try it";
        }
    }
}
?>