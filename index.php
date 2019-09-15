<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">  
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
<title>Юный пользователь</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />  
</head>  

<form>  
    <input class="btn" id="btn1" type="button" value="обновить">   
    
</form>  
<body>  



<form id="myform" method="post" action="javascript:void(0);">
<p>Фамилия: <input type="text" name="fam" /></p>
 <p>Имя: <input type="text" name="name" /></p>
 <p>Отчество: <input type="text" name="otchestvo" /></p>
 <p>Статус: <input type="text" name="status" /></p>
 <p><input type="submit" class="btn" id="btn2" value="поиск"/></p>
</form>

<div id="tabl"> 

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

</div>
<script>  
    $(document).ready(function(){  
        $('#btn1').click(function(){
            $('#tabl').each(function(){
                $(this).html('');
                });
            $.ajax({
                url: "page1.php",  
                cache: false,
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }); 
        $('#btn2').click(function(){
            $('#tabl').each(function(){
                $(this).html('');
                });
            });      
        $("#myform").submit(function() {
            alert('SEND');
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "page2.php",
                dataType: "html", //формат данных
                data: form_data,
                success: function(html) {
                    $("#content").html(html);
                    console.log(html); 
                }
            });
        });   
    });  
</script>   
<div id="content"></div>  
</body>  
</html>  