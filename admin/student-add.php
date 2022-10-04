<?php
    include('../config/app.php');
    include_once('../controllers/AuthenticationController.php');
    $authenticated = new AuthenticationController;
    $authenticated->admin();

    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <!-- <h1 class="mt-4">Studanr Add</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->
    
    <div class="row">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">

                <div class="card-header">
                    <h4>Student Add</h4>
                </div>
                <div class="card-body">

                    <form action="codes/student-code.php" method="POST">

                        <div class="md-3">
                            <label for="">Full Name</label>
                            <input type="text" name="fullname" required class="form-control">
                        </div>

                        <div class="md-3">
                            <label for="">Email ID</label>
                            <input type="email" name="email" required class="form-control">
                        </div>

                        <div class="md-3">
                            <label for="">Course</label>
                            <input type="text" name="course" required class="form-control">
                        </div>

                        <div class="md-3">
                            <label for="">Phone No</label>
                            <input type="number" name="phone" required class="form-control">
                        </div>

                        <div class="md-3 mt-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

<?php

    include('includes/footer.php');
    include('includes/scripts.php');
    

?>