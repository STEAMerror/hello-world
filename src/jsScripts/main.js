
//ajax отправка формы поиска пользователя из раздела пользователя
function call() {
  var msg = $('#form-seacrh').serialize();
  // alert(msg);
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'src/php-scripts/query-table.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data);
          // alert(data);
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
function call2() {
  var msg = $('#form-seacrh').serialize();
  // alert(msg);
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'src/php-scripts/query-table-admin.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data);
          // alert(data);
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
//Ajax отправка формы добавления новых пользователей
function add_user() {
  var msg = $('.add-user').serialize();
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'src/php-scripts/add-user.php',
        data: msg,
        success: function(data) {
          $.post("src/php-scripts/query-table-admin.php", function(data){
            $('.user-table').html(data);
          });
        ShowAdder();
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
//PopUp открытие/закрытие окна
function ShowAdder(edit){
  // alert($('.adder-block').css('display'));
  if (edit){
    $('form.add-user').hide();
    $('form.edit-user').show();
  }else{
    $('form.add-user').show();
    $('form.edit-user').hide();
  }
  if ($('.adder-block').css('display') != 'none'){
    $('.adder-block').css('display','none') ;
    $('.shadow').css('display','none') ;
  }else {
    $('.adder-block').css('display','block');
    $('.shadow').css('display','block') ;
  }
}
//
$(document).mouseup(function (e) {
    var container = $('.adder-block');
    if (container.has(e.target).length === 0){
        $('.shadow').hide();
        container.hide();
        // document.getElementById("#add_user").reset();
    }
});
//Кнопка редактирования в админке на таблице
function edit_user(i){
  var msg = $('.admin-table').find('#'+i).text();
  var array = msg.split(' ');
  $('input[name="id_edit"]').val(array[0].replace('Ред.',''));
  $('input[name="fam_edit"]').val(array[1]);
  $('input[name="name_edit"]').val(array[2]);
  $('input[name="otchestvo_edit"]').val(array[3]);
  $("select[name='status_edit'] :contains('"+array[4]+"')").attr("selected", "selected");
  ShowAdder(true);
}
//Ajax на редактирование записи пользователя
function edit_user_ok() {
  var msg = $('.edit-user').serialize();
  // alert(msg);
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'src/php-scripts/edit-user.php',
        data: msg,
        success: function(data) {
          $.post("src/php-scripts/query-table-admin.php", function(data){
            $('.user-table').html(data);
          });
          ShowAdder(true);
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
