<?php
require_once 'connect.php';		
$result = mysqli_query ($con, "SELECT * from `user`");
echo '<table border="1">';
echo '<tr> <th> Фамилия </th> <th> Имя </th> <th> Отчество </th> <th> Статус </th> </tr>';
while($name = mysqli_fetch_assoc($result)) {
    echo ' <tr>  <th>' . $name['fam'] . '</th> <th>' . $name['name'] .
	 '</th> <th>' . $name['otchestvo'] . '</th> <th> ' . $name['status'] . '</br> </th>';
	echo '</tr>';
}
echo '</table>';
mysqli_close ($con);
?>