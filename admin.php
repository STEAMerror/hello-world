<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">  
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
  
</head>  
  
<body>  

<form>  
    <input id="btn1" type="button" value="добавить">   
    <input id="btn2" type="button" value="редактировать">  
</form>  

<?php

    //if ($_SERVER['REMOTE_ADDR']=="127.0.0.1")//Если ваш IP
    //{
      

           	
            if ($a1=='add'){
            echo 'Добавление записи</br>';
            if ($a2=='games'){
                echo '<form action=' . 'success.php' . ' method=' . 'POST' . '>
                    <p>Имя факта: <input type=' . 'text' . ' name=' . 'name_game' . ' size=' . '45' . '></p>
                    <p>Текс: <textarea rows=' . '25' . ' cols=' . '150' . ' name=' . 'opisanie' . '></textarea></p>
                    <p>Описание: <input type=' . 'text' . ' name=' . 'url' . ' size=' . '45' . '></p>
                    <input type=submit value=Создать>
                    </form>';
            }
            }
            elseif ($a1=='del'){
                echo 'pipkadel';
            }
            elseif ($a1=='exchange'){
                echo 'pipkagay';
            }
            elseif ($a1=='find'){
                echo 'pipkafind';
                if ($a2=='games'){
                    $result = mysqli_query ($con, "SELECT * from `games`");
                }
            }
        else echo 'Не все поля заполнены.';
    }
    //else echo 'Неизвестный администратор';
//}        
?>






   <!-- <p>Какую страницу желаете открыть?</p>  
    <form>  
        <input id="btn1" type="button" value="Страница 1">   
        <input id="btn2" type="button" value="Страница 2">  
    </form>  
    <div id="content"></div>  
      xyec
    <script>  
        $(document).ready(function(){  
          
            $('#btn1').click(function(){  
                $.ajax({  
                    url: "page1.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                });  
            });  
              
            $('#btn2').click(function(){  
                $.ajax({  
                    url: "page2.html",  
                    cache: false,  
                    success: function(html){  
                        $("#content").html(html);  
                    }  
                });  
            });  
              
        });  
    </script>  
      !-->
</body>  
</html>  