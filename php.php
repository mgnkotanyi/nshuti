<?php
$conn=mysqli_connect("localhost","root","","messages");
if(isset($_POST['send'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $message=$_POST['message'];
    $insert="INSERT INTO `contacts`(`id`, `name`, `email`, `subject`, `message`) VALUES
     ('','$name','$email','$sub','$message')";
    if(mysqli_query($conn,$insert))
    {
        echo"<script>alert('Hello, thank you for your message  !!!');</script>";
    }
    else {
        echo"<script>alert('Hello, you are registered!!!');</script>";
    }
}
mysqli_close($conn);





?>