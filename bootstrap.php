<?php

require_once 'config/config.php';
require_once 'database/database.php';
require_once 'controllers/controllers.php';


$post = new Post;

$post->update(3 , 'title changed' , 'body modified');
die();