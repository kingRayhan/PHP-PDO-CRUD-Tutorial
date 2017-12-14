<?php require 'partials/header.php'; ?>
        <div class="blog-content">
        <?php $post  = new Post;?>


        <?php foreach ($post->getPostAll(PDO::FETCH_OBJ) as $value): ?>
            <article>
                <h1><a href="single.php?id=<?= $value->id; ?>"><?= $value->title  ?></a></h1>
                [ <a href="#">Edit</a> ]&nbsp;&nbsp;[ <a href="delete.php?id=<?= $value->id; ?>">Delete</a> ]
                <p><?php 
                    echo substr($value->body, 0 , 250);

                ?></p>
                <a href="single.php?id=<?= $value->id; ?>">Read More ..</a>
            </article>
        <?php endforeach; ?>

        </div>
<?php require 'partials/footer.php'; ?>
