<?php
    include('config/app.php');
    include('codes/authentification_code.php');
    $auth->isLoggedIn();
    include('includes/header.php');
    include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            
                <?php include('message.php') ?>

                <div class="card">
                    <div class="card-header">login</div>
                    <div class="card-body">

                        <form action="" method="POST">

                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="First Name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Last Name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="email"  class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" placeholder="password" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Login naw</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('includes/footer.php');
?>