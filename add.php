<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 3/20/2019
 * Time: 10:16 PM
 */
include  'header.php';
include 'connect.php';

if (isset($_POST['add'])){
    @$k_ad = $_POST['k_ad'];
    @$k_muellif = $_POST['k_muellif'];
    @$oxu_tar = $_POST['oxu_tar'];
    @$kitab_dil = $_POST['kitab_dil'];
    if (!empty($_POST['k_ad']) and !empty($_POST['k_muellif']) and !empty($_POST['oxu_tar']) and !empty($_POST['kitab_dil'])) {
        $sql = mysqli_query($con,"insert into books (book_name,book_author,reading_year,book_language) values ('$k_ad', '$k_muellif','$oxu_tar','$kitab_dil')");
        if ($sql){
            echo "<script> window.location.href = 'index.php?cvb=ok'; </script>";
        }
    }
}
?>

    <h1 class="text-center" style="margin:35px 0;">Yeni Kitab Əlavə Et</h1>

<div class="container">
    <div class="box_inp">
        <form action="" class=" form_css" method="post">
            <input type="text" class="form-control" placeholder="Kitabın adı" name="k_ad">
            <input type="text" class="form-control" placeholder="Kitabın müəllif" name="k_muellif">
            <input type="text" class="form-control" placeholder="Oxuduğum Tarix" name="oxu_tar">
            <input type="file">
            <input type="text" class="form-control" placeholder="Kitabın dili" name="kitab_dil">
            <input type="submit" class="form-control  btn-success" value="Add new book" name="add">
        </form>
    </div>
</div>



<?php
include 'footer.php';
?>
