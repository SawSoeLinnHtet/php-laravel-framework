<?php
  global $page_title; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $page_title ?>
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
  <div class="min-h-full">
    <?php include('nav.php') ?>