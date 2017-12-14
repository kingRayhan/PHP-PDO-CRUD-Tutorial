<?php require 'partials/header.php'; 

$post = new Post;

if(!isset($_GET['id'])){
	die('post id not passed');
}else{
	$post_id = $_GET['id'];
	$post_content = $post->getPostById($post_id);
}

if(empty($post_content)){
	echo "Post does not exist";
}



?>
        <div class="blog-content">
			<h1><?= $post_content['title']; ?></h1>
			<p><?= $post_content['body']; ?></p>
        </div>
<?php require 'partials/footer.php'; ?>
