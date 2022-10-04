<?php
    include('../config/app.php');
    include_once('../controllers/AuthenticationController.php');
    $authenticated = new AuthenticationController;
    $authenticated->admin();

    include_once('controllers/StudentController.php');

    include('includes/header.php');
?>

<div class="container-fluid px-4">
    
    <div class="row">
        <div class="col-md-12">

            <?php include('../message.php') ?>

            <div class="card">

                <div class="card-header">
                    <h4>Student view</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">
                        
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Fullname</th>
                                    <th>Course</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php

                                $students = new StudentController;
                                $result = $students->index();

                                if($result) {
                                    foreach($result as $row) {
                                        ?>

                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['fullname'] ?></td>
                                            <td><?= $row['course'] ?></td>
                                            <td><?= $row['phone'] ?></td>
                                            <td>
                                                <a href="student-edit.php?id= <?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="codes/student-code.php" method="POST">
                                                    <button type="submit" name="deleteStudent" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <?php

                                    }
                                }
                                else{
                                    echo "No Record Found";
                                }

                            ?>

                               
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<?php

    include('includes/footer.php');
    include('includes/scripts.php');
    

?>