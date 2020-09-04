<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");

if (!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "youtube";

        // create a connection

        $conn = new mysql_connect ($host, $dbusername, $dbpassword, $dbname);

        if ( mysql_connect()){
            die('Connect Error ('. mysql_connect() .') '
            . mysql_connect());
        }else{
            $sql = "INSERT INTO FORM (username, password) values ('$username', '$password')";
            if ($conn->query($sql)){
                echo "New record is inserted successfully";
            }else {
                echo "Error: ". $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }

    }else{
        echo "Password not be empty";
        die();
    }

}
else{
    echo "Username should not be empty";
    die();
}
?>