<?php

  use Core\App;

  $db = App::resolve('Core\Database');
  $current_user_id = 1;

  $notes = $db->query('select * from notes where user_id = 1')->get();

  view('notes/index.view.php', ['notes' => $notes, 'heading' => 'My Notes', 'page_title' => 'Notes']);