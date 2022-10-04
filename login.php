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
            <div class="col-md-5">

                <?php include('message.php') ?>

                <div class="card">
                    <div class="card-header">login</div>
                    <div class="card-body">

                        <form action="" method="POST">
                        
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="email" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" name="login_btn" class="btn btn-primary">Login naw</button>
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