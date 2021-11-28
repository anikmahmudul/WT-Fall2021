<?php

    session_start();

    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['designation'] = $_POST['designation'];
    $_SESSION['java'] = $_POST['java'];
    $_SESSION['php'] = $_POST['php'];
    $_SESSION['c++'] = $_POST['c++'];
    $_SESSION['email'] = $_POST['email'];

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        if($first_name && $last_name){
            header("location: home.php");
        }
    }

    if(isset($_POST['reset'])){
        session_start();

        session_destroy();

        header("location: index.php");
    }

?>