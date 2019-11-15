<?php 

//$_SESSION['id'] = 1;
//$_SESSION['username'] = 1;

include(ROOT_PATH . '/database/db.php');
include(ROOT_PATH . '/database/helper/vaildateUser.php');
$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function userLogin($user) {
  $_SESSION['id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['admin'] = $user['admin'];
  $_SESSION['message'] = 'You are logged in';
  $_SESSION['type'] = 'success';
  header('location: ' . BASE_URL);
  exit();
}

  if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
      unset($_POST['passwordConf'], $_POST['register-btn']);
      $_POST['admin'] = 0;

      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $user_id = create($table, $_POST);
      $user = selectOne($table, ['id' => $user_id]);

      // log user in
      userLogin($user);

      //dd($user);
    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
    }
  }

  if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0){
      $user = selectOne($table, ['username'  => $_POST['username']]);

      if ($user && password_verify($_POST['password'], $user['password'])){
        // log user in
        userLogin($user);

      //dd($user);
      } else{
        array_push($errors, "worng credentials");
      }
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
  }

  

?>