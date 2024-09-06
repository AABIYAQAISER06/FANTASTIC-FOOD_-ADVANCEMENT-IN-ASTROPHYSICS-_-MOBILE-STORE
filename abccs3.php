<?php 

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$address= $_POST['address'];
$password= $_POST['password'];
// database connection

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error)
{
    die('connection failed : '.conn->connect_error);

}
else{
    $stmt= $conn->prepare("insert into registration(firstname,lastname,email,address,password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$email,$address,$password);
    $stmt->execute();
    echo "Registration Successfully";
    $stmt->close();
    $conn->close();
}
?>