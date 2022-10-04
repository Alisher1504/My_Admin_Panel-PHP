<?php
    include('../config/app.php');
    include_once('../controllers/AuthenticationController.php');
    $authenticated = new AuthenticationController;
    $authenticated->admin();

    include_once('controllers/StudentController.php');

    include('includes/header.php');
?>

<div class="container-fluid px-4">
  
    <div class="row mt-5">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">

                <div class="card-header">
                    <h4>Student Edit</h4>
                </div>
                <div class="card-body">

                    <?php
                    
                        if(isset($_GET['id'])) {
                            $student_id = validateInput($db->conn, $_GET['id']);
                            $student = new StudentController;
                            $result = $student->edit($student_id);

                            if($result) {


                                ?>
                                        
                                

                                <form action="codes/student-code.php" method="POST">

                                    <input type="hidden" name="student_id" value="<?= $result['id'] ?>">

                                    <div class="md-3">
                                        <label for="">Full Name</label>
                                        <input type="text" name="fullname" value="<?= $result['fullname'] ?>" required class="form-control">
                                    </div>

                                    <div class="md-3">
                                        <label for="">Email ID</label>
                                        <input type="text" name="email" value="<?= $result['email'] ?>" required class="form-control">
                                    </div>

                                    <div class="md-3">
                                        <label for="">Course</label>
                                        <input type="text" name="course" value="<?= $result['course'] ?>" required class="form-control">
                                    </div>

                                    <div class="md-3">
                                        <label for="">Phone No</label>
                                        <input type="text" name="phone" value="<?= $result['phone'] ?>" required class="form-control">
                                    </div>

                                    <div class="md-3 mt-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">update Student</button>
                                    </div>

                                </form>

                            <?php

                            }
                            else {
                                echo "<h4>no reacord Wront</h4>";
                            }

                        }
                        else {
                            echo "<h4>Somthing Went Wront</h4>";
                        }

                    ?>

                </div>

            </div>
        </div>
    </div>

</div>

<?php

    include('includes/footer.php');
    include('includes/scripts.php');
    

?>