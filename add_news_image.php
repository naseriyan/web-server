<form action="#" method="post" enctype="multipart/form-data">
<p>News Image:</p>
    <input type="file" name="img1" id="img1">
    <br>
    <input type="submit" name="save" value="save">

<?php
echo"<h1>تصاویر خبر</h1>";



if(!empty($_GET)){
    if(!empty($_GET['id_n'])){

        /* جهت نگهداری شناسه خبری که قرار است تصاویر به آن اضافه شود */
        echo '<input  type="hidden" name="id_n" value="'. $_GET['id_n'].'">';

        $servername="localhost";
        $username="root";
        $pasword="";
        $dbname="prac";
        $id=$_GET['id_n'];
        $query="select * from tb_news_pic where id_n=".$id;
        $c=mysqli_connect($servername,$username,$pasword,$dbname);
        $q=mysqli_query($c,$query);

     while($t1=mysqli_fetch_assoc($q)){
            echo '<img src="'.$t1["name"].'"/>';
        }
    }
}

 
if(!empty($_POST)){
    if(!empty($_POST['id_n'])){
        $id_n=$_POST['id_n'];

         //$target_file="images/aaaaa.jpg";               
         $target_file="images/".$id_n."-".basename($_FILES["img1"]["name"]);

         move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file);


        $query="INSERT INTO `tb_news_pic`(`id_n`, `name`) VALUES (".$id_n.",'".$target_file."')";

        $q=mysqli_query($c,$query);

        header("location:add_news_image.php?id_n=".$id_n);

        
    }
    
}
?>

</form>

<a href="search_news.php"> رفتن به صفحه قبل</a>
<link rel="stylesheet " href="style.css">
