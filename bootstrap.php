<?php

require_once 'config/config.php';
require_once 'database/database.php';
require_once 'controllers/controllers.php';


$post = new Post;

print_r($post->getPostById(3));

die();