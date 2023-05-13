<?php
include 'partials/header.php';
?>
<section class="posts">
    </br>
    </br>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="square col-2">
                <img src='../images/rayhan.jpg' />
                </br>
                <input class="form-control form-control-sm" type="file" name="picture" id="picture">
                <label>
                    <h6>Update Your Profile Picture</h6>
                </label>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <center>
                                    <h4>Your Profile</h4>
                                    <span>Account Status - </span>
                                    <label>Pending</label>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <label>
                            <h5>
                                User Info
                            </h5>
                        </label>
                        <div>
                            <div class="col-md-12">
                                <label>User ID</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="userid" placeholder="B190305034">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>First Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Last Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>E-mail</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="rayhan@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Date of Birth</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="dob" placeholder="03 Nov 2001">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <label>
                            <h5>
                                Security
                            </h5>
                        </label>
                        <div>
                            <div class="col-md-12">
                                <label>Current Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="oldpassword" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>New Password</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="newpassword" placeholder="New Password">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
</section>

<?php
include '../partials/footer.php';
?>