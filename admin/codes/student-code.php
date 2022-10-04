<?php

    include('../../config/app.php');
    include_once('../controllers/StudentController.php');

     if(isset($_POST['deleteStudent'])) {

        $id = validateInput($db->conn, $_POST['deleteStudent']);
        $student = new StudentController;
        $result = $student->delete($id);

        if($result) {
            redirect("Student Delete Successfully", "admin/student-view.php");
        }
        else {
            redirect("Something Went Wrong", "admin/student-view.php");
        }

     }



    if(isset($_POST['update_student'])) {
        $id = validateInput($db->conn, $_POST['student_id']);
        $inputData = [
            'fullname' => validateInput($db->conn, $_POST['fullname']),
            'email' => validateInput($db->conn, $_POST['email']),
            'phone' => validateInput($db->conn, $_POST['phone']),
            'course' => validateInput($db->conn, $_POST['course']),
        ];
        $student = new StudentController;
        $result = $student->update($inputData, $id);
        if($result) {
            redirect("Student Update Successfully", "admin/student-view.php");
        }
        else {
            redirect("Somthing Went Wrong", "admin/student-view.php"); 
        }
    }

    if(isset($_POST['save_student'])){

        $inputData = [
            'fullname' => validateInput($db->conn, $_POST['fullname']),
            'email' => validateInput($db->conn, $_POST['email']),
            'phone' => validateInput($db->conn, $_POST['phone']),
            'course' => validateInput($db->conn, $_POST['course']),
        ];

        $student = new StudentController;
        $result = $student->create($inputData);
        if($result){
            redirect("Student Added Successfully", "admin/student-view.php");
        }
        else {
            redirect("Something went wrong", "admin/student-add.php");
        }
    }

?>