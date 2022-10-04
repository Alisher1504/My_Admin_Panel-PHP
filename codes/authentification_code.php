<?php
    
    // include('config/app.php');
    include_once('controllers/RegisterController.php');
    include_once('controllers/LoginController.php');
    $auth = new LoginController;


    if(isset($_POST['logout_btn'])) {
        $checkedLoggedOut = $auth->logout();
        if($checkedLoggedOut) {
            redirect("Loged out successfully", "login.php");
        }
    }


    if(isset($_POST['login_btn'])) {

        $email = validateInput($db->conn, $_POST['email']);
        $password = validateInput($db->conn, $_POST['password']);

        
        $checkLogin=$auth->userLogin($email, $password);

        if($checkLogin) {

            if($_SESSION['auth_role'] == '1'){
                redirect("Loged in successfully", "admin/index.php");
            }
            else {
                redirect("Loged in successfully", "index.php");
            }
           
        }
        else {
            redirect("Invalid Email id or password", "login.php");
        }

    }



    if(isset($_POST['register_btn']))
    {
        $fname = validateInput($db->conn, $_POST['fname']);
        $lname = validateInput($db->conn, $_POST['lname']);
        $email = validateInput($db->conn, $_POST['email']);
        $password = validateInput($db->conn, $_POST['password']);
        $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

        $register = new RegisterController;
        $result_password = $register->confirmPassword($password,$confirm_password);

        if($result_password){

            $result_user = $register->isUserExistes($email);

            if($result_user) {
                redirect("Already Email Existes", "register.php");
            }

            else {
                $register_query = $register->registration($fname, $lname, $email, $password);
                if($register_query) {
                    redirect("register successfully", "login.php");
                }
                else {
                    redirect("Somthing went wrong", "register.php");
                }
            }

        }
        else {
            redirect("password and confirm password Does not match", "register.php");
        }
    }

?>