<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";


if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Number=$_POST['Phone_Number'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];


    $sql="INSERT INTO `users`(`Name`, `Email`, `Password`,`Phone_Number`) VALUES ('$Name','$Email','$Password','$Number')";

    if(mysqli_query($conn, $sql)){
        echo "";
    }
    else{
        echo "Error:Could not able to execute $sql." .mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $query="SELECT * FROM users WHERE `Email`='$Email' AND `Password`='$Password'";

    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:jobportal.php");
    }
    else{
        $error="Email OR Password is Incorrect";
    }
}

if(isset($_POST['submit1'])){
    $cname=$_POST['cname'];
    $position=$_POST['pos'];
    $jdescription=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];

    $sql="INSERT INTO `jobs`(`cname`, `position`, `jdescription`, `skills`, `ctc`) VALUES ('$cname','$position','$jdescription','$skills','$ctc')";
    mysqli_query($conn, $sql);
}

if(isset($_POST['submit2'])){
    $fullname=$_POST['fullname'];
    $apply=$_POST['applying'];
    $quali=$_POST['quali'];
    $year=$_POST['year'];
    $work=$_POST['workexp'];

    $sql="INSERT INTO `candidates`(`fullname`, `company`, `quali`, `passout`, `workexp`) VALUES ('$fullname','$apply','$quali','$year','$work')";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>