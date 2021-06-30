<?php
//header.php
include('header.php')
?>

<!-- Regisrtation Area -->

<section id="register">
    <div class="row m-0">
        <div class="col lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <P class="p-1 m-0 font-ubuntu text-black-50">Register and Enjoy additional features</P>
                <span>I already have <a href="login.php">Login</a></span>
            </div>
            <div class="upload-profile-image">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera-solid.svg"  alt="camera">
                    </div>
                    <img src="./assets/profile/beard.png" class="img rounded-circle" alt="profile">
                    <small class="form-text-black-50">Choose Image</small>
                    <input type="file" class="form-control-file" name="profileUpload"id="upload-profile">
                </div>

            </div>
        </div>
    </div>
</section>
<!--#Registration Area -->

<?php
//footer.php
include('footer.php')
?>

