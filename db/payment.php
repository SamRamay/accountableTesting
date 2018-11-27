<?php

  require_once 'registration.php';
  require_once 'login.php';
  require_once 'vendor/autoload.php';
  require_once 'view/layout.php';

  # code...
  $id = $_SESSION['id'];
  $_SESSION['user_id'] = $id;
  $stripe = [
    'publishable' => 'pk_live_8bk3cCp7v74ZqA6UDhlsItpE',
    'private' => 'sk_live_VkNVXDu1FoLMi54KwVu2OgeK'
  ];

  \Stripe\Stripe::setApiKey($stripe['private']);

  $db = new PDO('mysql:host=localhost;dbname=medicare;', 'root' , '');

  $userQuery = $db->prepare("
      SELECT id, username, email, payment, selection
      FROM users
      WHERE id = :user_id
  ");

  $userQuery->execute(['user_id' => $_SESSION['user_id']]);


  $user = $userQuery->fetchObject();





 ?>
