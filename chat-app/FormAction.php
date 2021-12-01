<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $servername = "localhost";
        $usernamee = "root";
        $password = "";
        $dbname = "test1";

    $connection = new mysqli($servername, $usernamee, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

        
        $usrname = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username) or empty($email ) or empty($password) ) {
            echo "Please fill up the form properly.";
        }
        
        else {
            $sql = "INSERT INTO user (username, email,password) VALUES ( '$username', '$email', '$password')";

            $ins = $connection->query($sql);

         
        }
    }
?>
