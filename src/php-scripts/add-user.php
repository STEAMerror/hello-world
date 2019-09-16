<?php
require_once 'connect.php';
if (!empty($_POST))
{
 $query = "
   INSERT INTO `user` (`id`, `fam`, `name`, `otchestvo`, `status`)
   VALUES (NULL, '".str_replace(' ', '', $_POST['fam'])."', '".str_replace(' ', '', $_POST['name'])
   ."', '".str_replace(' ', '', $_POST['otchestvo'])."', 'Первый')
  ";
  echo $query;
  $result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
  if(!$result)
  {
    echo "Ошибка добавления";
  }
  mysqli_close($con);
}

?>
