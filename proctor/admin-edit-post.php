<?php
include 'partials/header.php';

// fetch categories from database
$category_query = "SELECT * FROM adminaddoffice";
$categories = mysqli_query($connection, $category_query);

// fetch post data from databse if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'proctor/admin-manage-post.php');
    die();
}
?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form action="<?= ROOT_URL ?>proctor/admin-edit-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <input type="hidden" name="previous_picture_name" value="<?= $post['picture'] ?>">
            <input type="text" name="title" value="<?= $post['title'] ?>" placeholder="Title">
            <select name="category">
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea style="resize:none" rows="10" name="body" placeholder="Body"><?= $post['body'] ?></textarea>
            <div class="form__control">
                <label for="thumbnail">Change Picture</label>
                <input type="file" name="picture" id="picture">
            </div>
            <button type="submit" name="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>