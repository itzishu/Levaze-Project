<?php
    if(isset($_POST['submit'])){
        // ??set connection variables
        $server = "localhost";
        $username = "root";
        $password = "sequelmysql";
        $database = "signUpForm";

        // create a databse connection
        $con = mysqli_connect($server,$username,$password,$database);

        // ?check forr connection is successful or not
        if(!$con){
            die("connection to this database failed due to". mysqli_connect_error());
        }
        else {
            echo "successfylly connected";
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        // $dt = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `signUpForm`.`signUpTable`(`name`, `email`, `dob`, `gender`, `phone`, `password`) VALUES ('$name', '$email', '$dob', '$gender', '$phone', '$password');";

        if($con->query($sql) == true){
            // echo "successfully inserted";
            header("Location:index.php");
            // alert "Congratulations you have login succesfully";
        }else {
            echo "Error: " . $con->error;
        }

    }
    $con->close();
?>
