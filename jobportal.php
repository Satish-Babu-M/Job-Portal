<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
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
  <a class="active" href="jobportal.php">Jobs</a>
  <a href="candidates.php">Candidates Applied</a>
</div>

<div class="content">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top:70px;">
    Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class=" card-body">
  <form method="post">
  <div class="mb-3">
    <label for="exampleInputCompanyName" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="exampleInputCompanyName" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="exampleInputJobDescription" class="form-label">Job Description</label>
    <textarea class="form-control" id="exampleInputJobDescription" cols="30" rows="7" name="jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputSkillsRequired" class="form-label">Skils Required</label>
    <input type="text" class="form-control" id="exampleInputSkillsRequired" name="skills">
  </div>
  <div class="mb-3">
    <label for="exampleInputCTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="exampleInputCTC" name="ctc">
  </div>
  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
</form>
  </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
    <tbody>
<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

  $sql="SELECT `cname`,`position`,`ctc` FROM `jobs`";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0){

    while($row = $result->fetch_assoc()){

      echo 
      "<tr>
       <td>" . ++$i . "</td>
       <td>" . $row['cname'] . "</td>
       <td>" . $row['position'] . "</td>
       <td>" . $row['ctc'] . "</td>
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