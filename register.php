<?php 
include 'connect.php';
if(isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $checkEmail="SELECT * FROM `users` WHERE email='$email'";
    $result = $connection->query($checkEmail);
    if($result->num_rows > 0) {
        echo "Email already exists!";
    } else {
        $insertQuery = "INSERT INTO `users`(firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
        if($connection->query($insertQuery) == TRUE) {
            header("location: index.php");
            // echo "Registration successful!";
        } else {
            echo "Error: " . $connection->error;
        }
    }
}
if(isset($_POST['signIn'])){
    $email= $_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql = "SELECT * FROM `users` WHERE email='$email' and password='$password' ";
    $result=$connection->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: homepage.php");
        exit();

    }else{
        echo "Not found! Inccorect Email or Password";
    }
}

?>