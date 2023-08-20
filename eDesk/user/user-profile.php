<?php
include 'partials/user-profile-header.php';

// fetch users from database
$user_query = "SELECT * FROM usermanagement";
$users = mysqli_query($connection, $user_query);

// Find current User
$current_user_id = $_SESSION['user-id'];

$query = "SELECT * FROM usermanagement WHERE id=$current_user_id";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);


// get back form data if form was invalid
$firstname = $_SESSION['use-data']['firstname'] ?? null;
$lastname = $_SESSION['user-data']['lastname'] ?? null;
$email = $_SESSION['user-data']['email'] ?? null;
$oldpassword = $_SESSION['user-data']['oldpassword'] ?? null;
$newpassword = $_SESSION['user-data']['newpassword'] ?? null;

?>
<!-- <section class="posts">
    </br>
    </br>

    <?php if (isset($_SESSION['edit-post'])): ?>
        <div class="alert__message error">
            <p>
                <?= $_SESSION['edit-post'];
                unset($_SESSION['edit-post']);
                ?>
            </p>
        </div>
    <?php endif ?>

    <form action="<?= ROOT_URL ?>user/user-profile-logic.php" enctype="multipart/form-data" method="POST">

        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="hidden" name="previous_picture_name" value="<?= $user['picture'] ?>">

        <img src="<?= ROOT_URL . 'images/' . $user['picture'] ?>" width="400" height="200">


        </br>

        <input class="form-control form-control-sm" type="file" name="picture" id="picture">
        <label>
            <h6>Update Your Profile Picture</h6>
        </label>

        <center>
            <h4>Your Profile</h4>
            <span>Account Status - </span>
            <label><?= $user['stat'] ?></label>
        </center>

        <label>
            <h5>
                User Info
            </h5>
        </label>
        <label>User ID</label>
        <input type="text" name="userid" value="<?= $user['userid'] ?>" placeholder="User ID" readonly>

        <label>First Name</label>
        <input type="text" name="firstname" value="<?= $user['firstname'] ?>" placeholder="First Name">

        <label>Last Name</label>
        <input type="text" name="lastname" value="<?= $user['lastname'] ?>" placeholder="Last Name">

        <label>E-mail</label>
        <input type="text" name="email" value="<?= $user['email'] ?>" placeholder="E-mail">

        <label>
            <h5>
                Security
            </h5>
        </label>
        <label>Current Password</label>
        <input type="password" name="oldpassword" placeholder="Current Password">

        <label>New Password</label>
        <input type="password" name="newpassword" placeholder="New Password">

        <button type="submit" name="submit" class="btn">Update Profile</button>
        <button type="button" name="submit" class="btn btn-primary btn-lg">Update profile</button>

    </form>

    </br>
    </br>
</section> -->

<br />
<br />

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="my-5">
                <h3>My Profile</h3>
                <span>Account Status - </span>
                <label>
                    <?= $user['stat'] ?>
                </label>
                <hr>
            </div>

            <?php if (isset($_SESSION['edit-post'])): ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['edit-post'];
                        unset($_SESSION['edit-post']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="<?= ROOT_URL ?>user/user-profile-logic.php" enctype="multipart/form-data" method="POST">
                <div class="row mb-5 gx-5">

                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Contact detail</h4>

                                <div class="col-md-6">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" name="firstname" value="<?= $user['firstname'] ?>"
                                        class="form-control" placeholder aria-label="First name">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" name="lastname" value="<?= $user['lastname'] ?>"
                                        class="form-control" placeholder aria-label="Last name">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">HSC Roll</label>
                                    <input type="text" class="form-control" placeholder aria-label="HSC Roll" readonly
                                        value="165897">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">SSC Roll</label>
                                    <input type="text" class="form-control" placeholder aria-label="SSC Roll" readonly
                                        value="235416">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">User ID</label>
                                    <input type="text" name="userid" value="<?= $user['userid'] ?>" class="form-control"
                                        placeholder aria-label="User ID" readonly>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>"
                                        placeholder aria-label="Email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                <div class="text-center">

                                    <!-- <div class="square position-relative display-2 mb-3">
                                        <i
                                            class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
                                    </div>

                                    <img src="<?= ROOT_URL . 'images/' . $user['picture'] ?>" width="300" height="300">

                                    <input type="file" id="customFile" name="file" hidden>
                                    <label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
                                    <button type="button" class="btn btn-danger-soft">Remove</button>

                                    <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Minimum size
                                        300 x 300</p> -->

                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <input type="hidden" name="previous_picture_name" value="<?= $user['picture'] ?>">

                                    <img src="<?= ROOT_URL . 'images/' . $user['picture'] ?>" width="300" height="300">
                                    <br />
                                    <br />

                                    <input type="file" id="customFile" name="file" hidden>
                                    <label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
                                    <button type="button" class="btn btn-danger-soft">Remove</button>

                                    <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Minimum size
                                        300 x 300</p>

                                    <!-- <input class="form-control form-control-sm" type="file" name="picture" id="picture">
                                    <label>
                                        <h6>Update Your Profile Picture</h6>
                                    </label> -->

                                    <!-- <center>
                                        <h4>Your Profile</h4>
                                        <span>Account Status - </span>
                                        <label>
                                            <?= $user['stat'] ?>
                                        </label>
                                    </center> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5 gx-5">
                    <div class="col-xxl-6">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="my-4">Change Password</h4>

                                <div class="col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Old password *</label>
                                    <input type="password" name="oldpassword" class="form-control"
                                        id="exampleInputPassword1">
                                </div>

                                <div class="col-md-6">
                                    <label for="exampleInputPassword2" class="form-label">New password *</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2">
                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
                                    <input type="password" name="newpassword" class="form-control"
                                        id="exampleInputPassword3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-3 d-md-flex justify-content-md-left text-center">
                    <button type="button" class="btn btn-danger btn-lg">Delete profile</button>
                    <button type="button" name="submit" class="btn btn-primary btn-lg">Update profile</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br />
<br />
<br />

<footer>

    <div class="footer__copyright">
        <small>Copyright &copy; 2023 | Team Prefetch | All rights reserved</small>
    </div>
</footer>