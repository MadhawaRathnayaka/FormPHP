<?php
    
    $conn = new mysqli("localhost", "root", "", "fasDB");

  
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "CREATE TABLE Students (
        title VARCHAR(5),
        firstname VARCHAR(40),
        lastname VARCHAR(40),
        reg_no VARCHAR(20),
        index_no integer PRIMARY KEY AUTO_INCREMENT,
        date_of_birth TIMESTAMP,
        email VARCHAR(50),
        course VARCHAR(20),
        address VARCHAR(60)
    )";
    

    if ($conn->query($sql) === TRUE)
    {
        echo "Table Students created successfully";
    }
    else
    {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>
