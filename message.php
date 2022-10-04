<?php

    if(isset($_SESSION['message.php'])){

        echo "<h5>". $_SESSION['message.php'] ."</h5>";
        unset($_SESSION['message.php']);

    }

?>