echo'<tr> <td>'.$i.'</td> <td><a href="show_news.php">'.$t1['headline'].'</a></td> <td>'.$t1['text'].'</td>  <td><a href="edit_news.php">ویرایش</a></td></tr>';


echo '<h1>عنوان خبر : '.$t1['headline'].'</h1><br>';
                echo '<h3>متن خبر:</h3>'.$t1['text'].'<br>';
                echo '------------------------------------'.'<br>';




                
            if ($groupnews==$t['group_name']){
                echo'<option selected   value='.$t['id_g'].'>'.$t['group_name'].'</option>';


        header("location:edit_news.php?id_n=".$_POST['id_n']);


            }