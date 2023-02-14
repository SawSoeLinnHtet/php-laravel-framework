<?php

  $router->get('/', 'controllers/index.php');
  $router->get('/contact', 'controllers/contact.php');
  $router->get('/about', 'controllers/about.php');

  // Notes
  $router->get('/notes', 'controllers/notes/index.php');
  $router->get('/notes/create', 'controllers/notes/create.php');
  $router->post('/notes', 'controllers/notes/store.php');
  $router->get('/note', 'controllers/notes/show.php');
  $router->delete('/note', 'controllers/notes/destroy.php');

  //Register
  $router->get('/register', 'controllers/users/create.php');
  $router->post('/register', 'controllers/users/store.php');

  // Login
  $router->get('/login', 'controllers/auth/index.php');
  $router->post('/login', 'controllers/auth/login.php');
