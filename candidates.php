<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c572f23746.js" crossorigin="anonymous"></script>
<style>
        nav {
          width: 100%;
          height: 60px;
          background-color: white;
          z-index: 1;
          box-shadow: 1px 1px 10px grey;
          position: fixed;
          display: flex;
          top: 0;
          justify-content: space-around;
          align-items: center;
        }

        .nav_side {
          display: flex;
          width: 20%;
          padding-top: 15px;
          list-style-type: none;
        }
        .nav_side a {
          text-decoration: none;
          font-weight: bold;
          font-size: 18px;
          transition: all 0.8s ease;
        }
        .button1 {
          background-color: white;
          width: 120px;
          padding: 8px;
          border-radius: 10px;
          border:1px solid #000066;
          text-align: center;
          transition: 0.4s ease;
        }
        .button1  {
          text-decoration: none;
          font-weight: bold;
          font-size: 20px;
          color: #000066;
        }
        .button1:hover {
          transition: 0.2s ease;
          background-color: #000066;
          color : white ;
        }
          .sidebar {
      padding: 0;
      margin: 0;
      top: 60px;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #000066;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #b3b3b3;
      color: white;
    }
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
    }
</style>
        <title>Dashboard</title>
</head>
<body>
<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
           <li><a href="index.php" class="button1">LOG OUT</a></li>
           </ul>
    </nav>
<div class="sidebar">
  <a href="jobportal.php">Jobs</a>
  <a  class="active" href="candidates.php">Candidates Applied</a>
</div>

<div class="content">
<table class="table table-hover" style="margin-top:70px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Company</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year Of PassOut</th>
      <th scope="col">Work Experience</th>
    </tr>
  </thead>
  <tbody>

<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

  $sql="SELECT `fullname`, `company`, `quali`, `passout`, `workexp` FROM `candidates`";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0){

    while($row = $result->fetch_assoc()){

      echo 
      "   <tr>
      <th>".++$i."</th>
      <td>".$row['fullname']."</td>
      <td>".$row['company']."</td>
      <td>".$row['quali']."</td>
      <td>".$row['passout']."</td>
      <td>".$row['workexp']."</td>
    </tr>";
    }
  }
  else{
    echo"";
  }
  ?>

  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>