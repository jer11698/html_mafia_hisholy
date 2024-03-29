<?php 

function validateUser($user) {
  $errors = array();

  if (empty($user['username'])){
    array_push($errors, 'Username is required.');
  }

  if (empty($user['email'])){
    array_push($errors, 'Email is required.');
  }

  if (empty($user['password'])){
    array_push($errors, 'Passwords is required.');
  }

  if ($user['passwordConf'] !== $user['password']){
    array_push($errors, 'Passwords don\'t match.');
  }

  $existingUser = selectOne('users', ['email' => $user['email']]);

  if (isset($existingUser)) {
    array_push($errors, 'Email already exists');
  }
  
  return $errors;
}

function validateLogin($user) {
  $errors = array();

  if (empty($user['username'])){
    array_push($errors, 'Username is required.');
  }

  if (empty($user['password'])){
    array_push($errors, 'Passwords is required.');
  }
  
  return $errors;
}

?>