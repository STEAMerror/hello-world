<?php
require_once 'connect.php';
 if (!empty($_POST))
 {
   $query = "
   SELECT * FROM (
     SELECT id, concat(fam,' ',name,' ',otchestvo) as fio, status
     FROM user) as new_table
     WHERE LOWER(REPLACE(fio,' ','')) like LOWER(REPLACE('%".$_POST['search_input']."%',' ', '')) and LOWER(status) like LOWER('%".$_POST['status']."%')
   ";
 }else{
   $query ="
   SELECT id, concat(fam,' ',name,' ',otchestvo) as fio, status
   FROM user
   ";
 }

$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
if($result)
{
  echo '<table>';
  echo '
  <tr><td colspan="3">
  <form method="POST" id="form-seacrh" action="javascript:void(null);" onsubmit="call()">
    Поиск: <input type="text" name="search_input" value="">
    <select name="status">
      <option value=""></option>
      <option value="Первый">Первый</option>
      <option value="Второй">Второй</option>
      <option value="Третий">Третий</option>
    </select>
    <input type="submit" name="search" value="Поиск">
  </form>';
  echo '<tr><th>Номер</th><th>Ф.И.О.</th><th>Статус</th></tr>';
  while($row = mysqli_fetch_array($result)){
    echo '<tr><td>'.$row['id'].'</td><td>'.$row['fio'].'</td><td>'.$row['status'].'</td></tr>';
  }
  echo '</table>';
}
mysqli_close($con);
 ?>
