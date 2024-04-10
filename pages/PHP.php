<?php
session_start(); // Start the session

$servername = "localhost";
$dbname = "dsweb";
$username = "hamza"; 
$password = "hamza123"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("ConnectionError: " . $conn->connect_error);
} else {
    if (isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];

        $check_query = "SELECT email FROM users WHERE email='$email'";
        $check_result = $conn->query($check_query);

        if ($check_result->num_rows > 0) {
            echo "Email already exists"; 
        } else {
            $insert_query = "INSERT INTO users (nom, email, password) VALUES ('$nom', '$email', '$password')";
            if ($conn->query($insert_query) === TRUE) {
                echo "New record created successfully";
                
               
            } else {
                echo "Error: " . $insert_query . "<br>" . $conn->error;
            }
        }
    }
}
?>
