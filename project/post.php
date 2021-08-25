<?php
include('database.inc.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $comment=mysqli_real_escape_string($con,$_POST['comment']);

    mysqli_query($con,"insert into post_comment(name,email,comment) values('$name','$email','$comment')");
    header('Location: blog.php');
}
  ?>