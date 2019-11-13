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

  if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
      unset($_POST['passwordConf'], $_POST['register-btn']);
      $_POST['admin'] = 0;

      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $user_id = create('users', $_POST);
      $user = selectOne('users', ['id' => $user_id]);

      // log user in

      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['admin'] = $user['admin'];
      $_SESSION['message'] = 'You are logged in';
      $_SESSION['message'] = 'success';
      header('location: ' . BASE_URL . '/index.php');
      exit();

      //dd($user);
    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConf = $_POST['passwordConf'];
    }
  }
?>