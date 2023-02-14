<?php

  use Core\App;

  $db = App::resolve('Core\Database');

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $user = $db->query(
    'SELECT * FROM users WHERE email = :email AND password = :password',
    [
      'email' => $email,
      'password' => $password
    ])->findOrFail();
    
  if($user){
    header('location: /');
  }else{
    header('location: /login');
  }
