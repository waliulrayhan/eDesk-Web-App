<?php
include 'partials/header.php';
?>

<br />
<br />
<br />

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to e-Desk!</h1>
        <p>Submit your complaints, requests, and suggestions easily.</p>
        <!-- <a href="signin.php" class="btn">Get Started</a> -->
    </div>
</section>

<section class="features">
    <div class="feature">
        <!-- <img src="complaint.png" alt="Complaint Icon"> -->
        <img src="<?= ROOT_URL . 'images/auth.png' ?>" width="500" height="1000">
        <h2>Authorized Users</h2>
        <p>Streamlined platform for authorized personnel, ensuring valid concerns and efficient processing.</p>
    </div>

    <div class="feature">
        <!-- <img src="admin.png" alt="Admin Icon"> -->
        <img src="<?= ROOT_URL . 'images/submission.png' ?>" width="500" height="1000">
        <h2>Office-Specific Submission</h2>
        <p>Tailored process addressing unique office dynamics, fostering relevant and effective resolutions.</p>
    </div>

    <div class="feature">
        <!-- <img src="profile.png" alt="Profile Icon"> -->
        <img src="<?= ROOT_URL . 'images/monitor.png' ?>" width="500" height="1000">
        <h2>Efficient Monitoring</h2>
        <p>Robust tracking system ensures transparency, swift decisions, and timely issue resolution.</p>
    </div>
</section>

<section class="features">
    <div class="feature">
        <!-- <img src="complaint.png" alt="Complaint Icon"> -->
        <img src="<?= ROOT_URL . 'images/record.png' ?>" width="500" height="1000">
        <h2>Digital Records</h2>
        <p>Transition to digital records enables organized data, trends analysis, and comprehensive reporting.</p>
    </div>

    <div class="feature">
        <!-- <img src="admin.png" alt="Admin Icon"> -->
        <img src="<?= ROOT_URL . 'images/authority.png' ?>" width="500" height="1000">
        <h2>Authority Responses</h2>
        <p>Prompt replies reassure employees, expedite resolutions, and enhance satisfaction and trust.</p>
    </div>

    <div class="feature">
        <!-- <img src="profile.png" alt="Profile Icon"> -->
        <img src="<?= ROOT_URL . 'images/profile.png' ?>" width="500" height="1000">
        <h2>Manage Your Profile</h2>
        <p>Take control of your profile information and keep it up-to-date for effective communication.</p>
    </div>
</section>

<section class="hero">
    <div class="hero-content">
        <!-- <h1>Welcome to e-Desk!</h1> -->
        <!-- <p>Submit your complaints, requests, and suggestions easily.</p> -->
        <a href="signin.php" class="btn">Let's Get Started</a>
    </div>
</section>

<br />
<br />
<br />
<br />
<br />

<?php
include 'partials/footer.php';
?>