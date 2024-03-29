<?php
include 'partials/header.php';

// fetch 50 posts from posts table
$query = "SELECT * FROM post WHERE status='Approved' ORDER BY date_time DESC LIMIT 50";
$posts = mysqli_query($connection, $query);

?>

</br>
</br>
</br>




<section class="posts <?= $featured ? '' : 'section__extra-margin' ?>">
    <div class="container posts__container">
        <?php while ($post = mysqli_fetch_assoc($posts)): ?>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="<?= ROOT_URL . 'images/' . $post['picture'] ?>" width="400" height="250">
                </div>
                <div class="post__info">
                    <?php
                    // fetch category from categories table using category_id of post
                    $category_id = $post['office_id'];
                    $category_query = "SELECT * FROM adminaddoffice WHERE id=$category_id";
                    $category_result = mysqli_query($connection, $category_query);
                    $category = mysqli_fetch_assoc($category_result);
                    ?>
                    <h3>
                        <?= $post['type'] ?>
                        <?= $post['id'] ?>
                        </br>
                        <small>
                            <?= date("d M Y - H:i", strtotime($post['date_time'])) ?>
                        </small>
                    </h3>
                    <a href="<?= ROOT_URL ?>admin/admin-catagory-post.php?id=<?= $post['office_id'] ?>"
                        class="category__button"><?= $category['title'] ?></a>
                    </br>
                    </br>
                    <p class="post__body">
                        <?php if ($post['author_id']): ?> <!-- Find any admin Post. -->
                        <h4>
                            <?= $post['title'] ?>
                        </h4>

                        <?php $len = strlen($post['body']); ?>
                        <?php if ($len < 250): ?>
                            <a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>"><?= $post['body'] ?></a>
                        <?php else: ?>
                            <?= substr($post['body'], 0, 250) ?>
                            <h5>
                                <a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>">See more...</a>
                            </h5>
                        <?php endif ?>

                        </p>
                        <div class="post__author">
                            <div class="post__author-info">
                                <?php if ($post['comment']): ?>
                                    <h5>Status:
                                        <?= $post['comment'] ?>
                                    </h5>
                                <?php else: ?>
                                    <h5><a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>">Add Comment or
                                            Reply</a></h5>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <?php
                    // fetch user from usermanagement table using user_id of post
                    $user_id = $post['user_id'];
                    $user_query = "SELECT * FROM usermanagement WHERE id=$user_id";
                    $user_result = mysqli_query($connection, $user_query);
                    $user = mysqli_fetch_assoc($user_result);
                    ?>
                    <h4>
                        User ID:
                        <?= $user['userid'] ?>
                    </h4>
                    <h4>
                        Name:
                        <?= $user['firstname'] ?>
                        <?= $user['lastname'] ?>
                    </h4>

                    <?php $len = strlen($post['body']); ?>
                    <?php if ($len < 250): ?>
                        <a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>"><?= $post['body'] ?></a>
                    <?php else: ?>
                        <?= substr($post['body'], 0, 250) ?>
                        <h5>
                            <a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>">See more...</a>
                        </h5>
                    <?php endif ?>

                    </p>
                    <div class="post__author">
                        <div class="post__author-info">
                            <?php if ($post['comment']): ?>
                                <h5>Status:
                                    <?= $post['comment'] ?>
                                </h5>
                            <?php else: ?>
                                <h5><a href="<?= ROOT_URL ?>admin/details-post.php?id=<?= $post['id'] ?>">Add Comment or Reply</a>
                                </h5>
                            <?php endif ?>
                        </div>
                    </div>
            </div>
        <?php endif ?>
        </article>
    <?php endwhile ?>
    </div>
</section>
<!-- ============= END OF POSTS ============= -->


<?php
include '../partials/footer.php';
?>