<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
 <div class="container">

<?php
// Объявляем константы со значениями правильного логина и пароля
const LOGIN = "admin";
const PASSWORD = "Fs~j4Ms|Go";

$login = $_POST["login"];
$password = $_POST["psw"];

// Пишем условие с проверкой введенных имени и пароля 
// Если введенные значения правильные запускаем функцию welcomeAdmin
if (isset( $_POST["page"]) and $login == LOGIN and $password == PASSWORD) { 
  welcomeAdmin();
// Если введенные значения неправильные запускаем функцию repeatPage
} elseif (isset( $_POST["page"]) and ( $login != LOGIN or $password != PASSWORD) ) {
  repeatPage();
// Иначе запускаем функцию startPage
} else {
  startPage();
}


// Объявляем функцию welcomeAdmin которая будет хранить html разметку секретного меню
function welcomeAdmin(){
  ?>
  <div>
    <h3>Добро пожаловать в секретное меню</h3>
    <ul>
      <li><a href="#">Секретная ссылка</a></li>
      <li><a href="#">Секретная ссылка</a></li>
      <li><a href="#">Секретная ссылка</a></li>
      <li><a href="#">Секретная ссылка</a></li>
    </ul>

  </div>
<?php
}

// Объявляем функцию startPage которая будет хранить html разметку стартовой страницы
function startPage(){
   ?>
  <form method="post" class="w-50 pt-5 m-auto">
	<input type="hidden" name="page" value="start" /> 
	
  <div class="form-group">
    <input type="text" name="login" class="form-control" placeholder="Введите логин">
  </div>
  
  <div class="form-group">
    <input type="password" name="psw"  class="form-control" placeholder="Введите пароль">
  </div>

  <button type="submit" class="btn btn-primary">Войти</button>
  </form>
  <?php
  
   }

// Объявляем функцию repeatPage которая будет хранить html разметку стартовой страницы и указание, что 
// введены неправильные данные
   function repeatPage(){
    ?>
    <h4 class="text-center text-danger">Введены неправильные данные, попробуйте еще раз: </h4>
    <?php
    startPage();
   }
  ?>
  </div>
</body>
</html>