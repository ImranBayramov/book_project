<?php
    include 'header.php';
    include 'connect.php';
?>

<div class="container">
    <div class="main-content">
        <div class="test">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr>
                   <th>Kitabın adı</th>
                   <th>Kitabın müəllifi</th>
                   <th>Oxudugum Tarix</th>
                   <th>Kitabın dili</th>
                   <th>Rəylərim</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $sql = "select * from books";
                    $result = $con->query($sql);
                    if ($result-> num_rows > 0){
                        while ($n = $result -> fetch_assoc()){
                            echo "<td>";
                            echo $n['book_name'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['book_author'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['reading_year'];
                            echo "</td>";
                            echo "<td>";
                            echo $n['book_language'];
                            echo "</td>";
                            echo "<td>";
                            echo  "<a href='#' class='rate' id='good' onclick='good();'><i class=\"fas fa-thumbs-up\"></i></a>";
                            echo  "<a href='#'  class='rate' id='bad' onclick='bad();'><i class=\"fas fa-thumbs-down\"></i></a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a class='btn btn-info' href='edit.php?id=".$n['id']."' style='color:white;'>Düzəliş</a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a class='btn btn-danger' href='delet.php?id=".$n['id']."' style='color:white;'>Sil</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tr>
                </tbody>
            </table>
            <a class='btn btn-success add' href='add.php'  style="margin: 15px 0; margin-left:85%; color:white;"> + yeni kitab</a>
        </div>
    </div>
</div>

<div class="txt_img">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text_part">
                    <h3 class="text-left h3_h">
                       Yeni kitablar ilə bağlı bir melumat
                    </h3>
                    <p class="text-left prg">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem doloribus eos
                        esse est iste labore laboriosam non, quam quidem quo quos, rerum! Architecto delectus fugiat nobis qui, repudiandae vel.
                    </p>
                    <p class="text-left prg_">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi et, eum fuga inventore magni maiores
                        nostrum pariatur possimus praesentium provident quia quibusdam repellat reprehenderit saepe sed sint, tenetur voluptatum?
                        nostrum pariatur possimus praesentium provident quia quibusdam repellat reprehenderit saepe sed sint, tenetur voluptatum?
                        nostrum pariatur possimus praesentium provident quia quibusdam repellat reprehenderit saepe sed sint, tenetur voluptatum?
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="image/book_pic.jpg" alt="" width="300" style="">
            </div>
        </div>
    </div>
</div>


<div class="favorite_books">
    <div class="container-fluid">
        <h1 class="text-center fv_boox_txt">Sevdiyimiz kitablar</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="img_box">
                    <img src="image/book1.jpg" alt="">
                    <button class="btn btn-success book_now">İndi oxu</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img_box">
                    <img src="image/book2.jpg" alt="">
                    <button class="btn btn-success book_now">İndi oxu</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img_box">
                    <img src="image/book3.jpg" alt="">
                    <button class="btn btn-success book_now">İndi oxu</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="img_box">
                    <img src="image/book4.jpg" alt="">
                    <button class="btn btn-success book_now">İndi oxu</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php';
?>