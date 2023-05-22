<!DOCTYPE html>
<html>
    <head>
        <title>Insert Students</title>
    </head>
    <body>
        <h1>Insert Students</h1>
        <form action="insert_table.php" method="POST">
            <table>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Registration Number</td>
                    <td><input type="text" name="regno"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td><input type="text" name="course"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                    
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    
    $conn = new mysqli("localhost", "root", "", "guestDB");

   
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if (isset($_POST['title'])) {
        $sql = "INSERT INTO Students (title, firstname, lastname, reg_no, date_of_birth, email, course, address)
        VALUES (" . $_POST["title"] . ", " . $_POST["fname"] . ", " . $_POST["lname"] . ", " . $_POST["regno"] . 
        ", " . $_POST["dob"] . ", " . $_POST["email"] . ", " . $_POST["course"] . ", " . $_POST["address"] . ")";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
