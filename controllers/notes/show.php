<?php


  use Core\App;

  $db = App::resolve('Core\Database');
  $current_user_id = 1;

  $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] == $current_user_id);

  view('notes/show.view.php', ['heading' => 'Note Detail', 'note' => $note, 'page_title' => 'Note Detail' ]);