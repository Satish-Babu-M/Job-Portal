<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body {
      margin: 0;
      padding: 0;
    }
    nav {
      width: 100%;
      height: 70px;
      background-color: white;
      z-index: 1;
      box-shadow: 0px 1px 64px 0px rgba(0, 0, 0, 0.5);
      position: fixed;
      display: flex;
      top: 0;
      justify-content: space-around;
      align-items: center;
    }

    .nav_side {
      display: flex;
      width: 35%;
      padding-top: 15px;
      justify-content: space-around;
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
    .carddisp {
      float: left;
      width: 300px;
      height: 325px;
    }
    .carddisp:hover{
      box-shadow: 0 23px 47px 0 rgb(0 0 0 / 12%);
    }
</style>
    <title>Career</title>
</head>
<body>
<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
        <li><a href="index.php" class="button1">HOME</a></li>
        <li><a href="contact.php" class="button1">CONTACT</a></li>
           <li><a href="about.php" class="button1">ABOUT</a></li>
           </ul>
    </nav>
<div>
<img src="career2.jpg" alt="Banner" width="100%" height="400px" style="margin-top: 70px; ">
</div>    

<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

$sql="SELECT `cname`,`position`,`jdescription`,`skills`,`ctc` FROM `jobs`";
$result=mysqli_query($conn,$sql);
$i=0;

if($result->num_rows>0){

  while($row=$result->fetch_assoc()){
    echo'
    <div class="card border-secondary mb-3 carddisp" style="max-width: 18rem; margin:20px;">
    <div class="card-header" style="text-align:center; font-weight:bolder; font-size:20px;">'.$row['cname'].'</div>
    <div class="card-body text-secondary">
      <h5 class="card-title" style="text-align:center; font-weight:bold;">'.$row['position'].'</h5>
      <p class="card-text">'.$row['jdescription'].'</p><br>
      <P class="card-text" style="font-weight:bold;">SKILLS : '.$row['skills'].'<br>
      CTC : '.$row['ctc'].'</P>
    </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Google">Apply Now</button>
  </div>
  </div>';
  }

}
else{
  echo"";
}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="name" class="col-form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname">
          </div>
          <div class="mb-3">
            <label for="applying" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="applying">
          </div>
          <div class="mb-3">
            <label for="qualification" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="quali">
          </div>
          <div class="mb-3">
            <label for="year" class="col-form-label">Year of Passout</label>
            <input type="text" class="form-control"  name="year">
          </div>
          <div class="mb-3">
            <label for="workexp" class="col-form-label">Work Experience</label>
            <input type="text" class="form-control" name="workexp">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit2">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>