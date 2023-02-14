<?php

  use Core\App;
  use Core\Validator;

  $errors = [];

  if(!Validator::email($_POST['email'])){
    $errors['email'] = "Please Check Your Email Format!";
  }

  $password = Validator::checkPassword($_POST['password'], $_POST['confirm_password']);

  if(!$password){
    $errors['password'] = "Password are not match!";
  }

  $db = App::resolve('Core\Database');
  $current_user_id = 1;

  date_default_timezone_set('Asia/Yangon');

  if(empty($errors)){
    $db->query(
      "INSERT INTO 
      users(first_name, last_name, email, password, gender, phone_number, address, created_at) 
      VALUES (:first_name, :last_name, :email, :password, :gender, :phone_number, :address, :created_at)", 
      [
      'first_name' => $_POST['first_name'],
      'last_name' => $_POST['last_name'],
      'email' => $_POST['email'],
      'password' => $password,
      'gender' => $_POST['gender'],
      'phone_number' => $_POST['phone_number'],
      'address' => $_POST['phone_number'],
      'created_at' => date('Y-m-d H:i:s')
    ]);

    header('location: /');
    exit();
  }
  header('location: /register');
  exit();

