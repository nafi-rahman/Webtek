<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test1";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $usrname = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) or  empty($password) ) {
            echo "Please fill up the form properly.";
        }
        else {
            $flag = false;

            $sql = "SELECT * FROM user";

            $data = $connection->query($sql);

            if ( $data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    if ( $_POST['username']===$row["username"] and $_POST['password']===$row["password"])  {
                    $flag = true;
                }
            }
        }
        
    }
}
?>