<?php require 'partials/header.php'; ?>
    <div class="blog-content">
        <form action="createpost.php" class="post-form" method="post">
            <p>
                <input type="text" name="title" placeholder="Title">
            </p>
            <p>
                <textarea name="body" cols="30" rows="10"></textarea>
            </p>
            <p>
                <button type="submit">Publish</button>
            </p>
        </form>
    </div>
<?php require 'partials/footer.php'; ?>
