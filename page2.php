
<?php
require_once 'connect.php';
    $a = $_POST["fam"];
    $b = $_POST["name"];
    $c = $_POST["otchestvo"];
    $d = $_POST["status"];
    $result = mysqli_query ($con, "SELECT * from `user` WHERE `fam` Like '$a%' AND `name` Like '$b%' AND
    `otchestvo` Like '$c%' AND `status` Like '$d%'");
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