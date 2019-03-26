<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 3/20/2019
 * Time: 9:35 PM
 */
include 'header.php';
include 'connect.php';
@$id = $_GET['id'];
$query = mysqli_query($con, "select * from books where  id = '$id'");
$row = mysqli_fetch_assoc($query);

if (isset($_POST['edit'])){
    $menu_ad = $_POST['menu_ad'];
    $menu_url = $_POST['menu_url'];
    $menu_sira = $_POST['menu_sira'];
    $kitab_dil = $_POST['kitab_dil'];
    if (!empty($menu_ad) and !empty($menu_url) and !empty($menu_sira)) {
        mysqli_query($con, "update books set book_name ='$menu_ad', book_author='$menu_url', reading_year = '$menu_sira',book_language='$kitab_dil' where id = '$id'");
        echo "<script> window.location.href = 'index.php?cvb=ok'; </script>";
    }
}
?>

<h1 class="text-center" style="margin:35px 0;"> Məlumatlarını yenilə</h1>

<div class="container">
    <div class="box_inp">
        <form action="" class="form_css" method="post">
            <input type="text" class="form-control" placeholder="Kitabın adı" name="menu_ad" value="<?php echo $row['book_name'];?>">
            <input type="text" class="form-control" placeholder="Kitabın müəllifi" name="menu_url" value="<?php echo $row['book_author'];?>">
            <input type="text" class="form-control" placeholder="Oxuduğum Tarix" name="menu_sira" value="<?php echo $row['reading_year'];?>">
            <input type="text" class="form-control" placeholder="Kitabın dili" name="kitab_dil" value="<?php echo $row['book_language'];?>">
            <input type="submit" class="form-control btn-success" value="Edit" name="edit">
        </form>
    </div>
</div>


    <h1 class="text-center" style="margin:35px 0;"> Biz nələr edirik </h1>

<div class="what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="far fa-star fa-2x" style="color:#AA66CC;"></i> Pulsuz çatdırılma</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="fas fa-redo-alt fa-2x" style="color:#AA66CC;"></i> Asan qaytarış</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="fas fa-edit fa-2x" style="color:#AA66CC;"></i> Qeydlər</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="fas fa-medal fa-2x" style="color:#AA66CC;"></i>  Zəmanəti</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="far fa-bookmark fa-2x" style="color:#AA66CC;"></i> Vurqulama</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="far fa-calendar-alt fa-2x" style="color:#AA66CC;"></i> Lorem</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="far fa-comment fa-2x" style="color:#AA66CC;"></i> Canlı Dəstək</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon_txt">
                    <h4><i class="fas fa-wallet fa-2x" style="color:#AA66CC;"></i> Endirimlər</h4>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos dolores
                        dolorum est excepturi fuga incidunt iusto
                        laudantium necessitatibus odio optio perspiciatis quas recusandae, sit, temporibus tenetur voluptas. Delectus, ullam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include 'footer.php';
?>