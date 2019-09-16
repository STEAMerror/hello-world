<script 
    
    engine="text/javascript" src="src/jsScripts/main.js">
</script>

<H1>Вы администратор</H1>
<br> <button class="btn" type="button" name="add-user" onclick="ShowAdder(false)">Добавить клиента</button>
<div class="shadow">
  <div class="adder-block block">
    <div class="center">
      <div class="forma">
      <form class="add-user" id="#form-add-user" action="javascript:void(null);" method="post" onsubmit="add_user()">
        <br>Фамилия: <input type="text" name="fam" value="">
        <br>Имя: <input type="text" name="name" value="">
        <br>Отчество: <input type="text" name="otchestvo" value="">
        <br><input class="btn" type="submit" name="add" value="Добавить">
      </form>
      <form class="edit-user" id="#form-edit-user" action="javascript:void(null);" method="post" onsubmit="edit_user_ok()">
        <input type="text" name="id_edit" value="" style="display:none;">
        <br>Фамилия: <input type="text" name="fam_edit" value="">
        <br>Имя: <input type="text" name="name_edit" value="">
        <br>Отчество: <input type="text" name="otchestvo_edit" value="">
        <br> Статус: <select name="status_edit">
              <option value="Первый">Первый</option>
              <option value="Второй">Второй</option>
              <option value="Третий">Третий</option>
        </select>
        <br><input class="btn" type="submit" name="edit" value="Ок">
      </form>
      </div>
    </div>
  </div>
</div>
<div class="user-table">
  <?php
    require 'query-table-admin.php';
   ?>
</div>
</main>
