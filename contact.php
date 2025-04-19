<?php

$name = "naday";
$email = "naday123@gmail.com";
$password = "naday123";
$username = "nadayuser2";
setcookie($name,$email,time() + (86400 * 30),"/");
setcookie($username,$password,time() + (60), "/");

include("navbar.php");
?>

<div class="container mt-5 mb-5 p-5">
    <h2 class="display-3 fw-bold text-center">
        Contact Us Page
    </h2>

    <div class="row">
        <div class="col-6">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>

        <!-- <div class="col-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7242.26884508462!2d67.11674435326182!3d24.825076234412876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ba68eade8e5%3A0x33fed1ab3edcc63a!2sNasir%20Colony%2C%20Pakistan!5e0!3m2!1sen!2s!4v1745038067398!5m2!1sen!2s"
                class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
    </div>
</div>
<?php
include("footer.php");


?>