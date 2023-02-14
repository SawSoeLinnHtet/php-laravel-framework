<?php

  use Core\App;

  $db = App::resolve('Core\Database');
  $current_user_id = 1;

  dd($_POST['id']);
  $note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    [
      'id' => $_POST['id']
    ])->findOrFail();

  authorize($note['user_id'] == $current_user_id);

  $db->query('DELETE FROM notes WHERE id = :id', ['id' => $_POST['id']]);

  header('location: /notes');
  exit();