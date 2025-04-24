<?php 
    include "../Model/user.php";
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

    } else if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['delete'])) {
        $get_id = $_GET['delete'];

        $result = $user->deleteUser($get_id);

        if ($result) {
            echo '<script>alert("DELETED SUCCESSFULLY")</script>';
            header("location: ../View/list-user.php");
            exit();
        } else {
            echo '<script>alert("DELETED UNSUCCESSFULLY")</script>';
            header("location: ../View/list-user.php");
        }
        
    }

?>