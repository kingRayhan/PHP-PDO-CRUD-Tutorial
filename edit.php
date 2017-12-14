<?php require 'partials/header.php'; 
$post = new Post;

if( !empty($_GET['id']) ){
    $id = $_GET['id'];
    $post_content = $post->getPostById($id);



}else{
    die('post id not passed');
}


if(!$post_content){
    echo "There is no post with id " . $id ;
    die();
}


?>
    <div class="blog-content">
        <form action="editpost.php" class="post-form" method="post">
            <p>
                <input type="text" name="title" placeholder="Title" value="<?php echo $post_content['title']; ?>">
            </p>
            <p>
                <textarea name="body" cols="30" rows="10"><?php echo $post_content['body'] ?></textarea>
            </p>
            <input type="hidden" name="id" value="<?php echo $post_content['id']; ?>">
            <p>
                <button type="submit">Update</button>
            </p>
        </form>
    </div>
<?php require 'partials/footer.php'; ?>