<?php


require 'bootstrap.php';


$post = new Post;


if(!empty($_POST['title']) && !empty($_POST['body']))
{
	$last_id = $post->create($_POST['title'] , $_POST['body']);
	header('location: single.php?id=' . $last_id);
}else{
	echo "<h1>post title or body can not be empty</h1>";
	echo "<a href='index.php'>Back to home</a>";
}