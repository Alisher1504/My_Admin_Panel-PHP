<?php



    class AuthenticationController 
    {

        public function __construct() {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
            $this->checkIsLoggedIn();
        }


        public function admin() {

            $user_id = $_SESSION['auth_user']['user_id'];
            $checkAdmin = "SELECT id,role_as FROM users WHERE id='$user_id' AND role_as='1' LIMIT 1";
            $result = $this->conn->query($checkAdmin);
            if($result->num_rows == 1) {
                return true;
            }
            else {
                redirect("you are not authorized as Admin", "index.php");
            }
        }



        public function checkIsLoggedIn() {

            if(!isset($_SESSION['authenticated'])){
                redirect("Login to Access the page", "login.php");
                return false;
            }
            else {
                return true;
            }

        }

        public function authDetail() {

            $checkAuth = $this->checkIsloggedIn();
            if($checkAuth) {
                $user_id = $_SESSION['auth_user']['user_id'];

                $getUserData = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
                $result = $this->conn->query($getUserData);
                if($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
                    return $data;
                }
                else {
                    redirect("Seomthing Went Wrong", "login.php");
                }
            }
            else {
                return false;
            }

        }

    }

    $authenticated = new AuthenticationController;

?>