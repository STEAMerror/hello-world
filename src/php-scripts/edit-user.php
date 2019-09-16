<?php
require_once 'connect.php';
if (!empty($_POST))
{
   $query = "
      UPDATE `user`
      SET `fam` = '".str_replace(' ', '', $_POST['fam_edit'])."', `name` = '".str_replace(' ', '', $_POST['name_edit'])."', `otchestvo` = '".str_replace(' ', '', $_POST['otchestvo_edit'])."', `status` = '".str_replace(' ', '', $_POST['status_edit'])."'
      WHERE `user`.`id` = ".$_POST['id_edit'].";";
  $result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
  if(!$result)
  {
    echo "Ошибка добавления";
  }
  mysqli_close($con);
}
?>
