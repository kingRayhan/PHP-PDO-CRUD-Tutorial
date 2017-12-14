<?php

require 'bootstrap.php';

$post = new Post;
if(!empty($_GET['id'])){
	$post->delete($_GET['id']);	
}


header('location: index.php');