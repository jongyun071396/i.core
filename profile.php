<?php require 'icore.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>  
  <div class="content-wrapper py-3">
      <div class="container-fluid ml-3">
    
        <div class="col-md-12">  
          <div class="page-header">
            <h2>Profile</h2>
          </div><hr>
        </div>
     <div class="row">
          
          <div class="col-md-4 ">
              <img class="prof-img mx-auto d-block rounded-circle" src="img/jinsu.jpg" style=" margin-top: 20px;width: 200px; height: 200px;" alt="profile">
              <h2 id="jinsu" class="mt-3 text-center">Kim, Jinsu</h2>
            </div>
  
          
        
          <div class="col-md-7 ml-5 mb-3">
            <div class="panel panel-default">
            <div class="panel-heading"><h3 class="mt-5 mb-3">Personal Information</h3>
            </div>
            
            <div class="panel-body">
              <div class="mb-1 ml-2">ID Number: </div><hr>
              <div class="mb-1 ml-2">Birthday: </div><hr>
              <div class="mb-1 ml-2">Gender: </div><hr>
              <div class="mb-1 ml-2">Educational level: </div><hr>
              <div class="mb-1 ml-2">Course: </div><hr>
              <div class="mb-1 ml-2">Year: </div><hr>
              <div class="mb-1 ml-2">Subject Interested in: </div><hr>
            </div>
            
         </div>
          </div>    
 
   </div>

   
</body>
</html>
      
      <?php 
        //   session_start()
        //   $host="localhost";
        //   $user="root";
        //   $pass="";
        //   $db="tuteedb";
        // $con=mysqli_connect($host,$user,$pass);
        // mysli_select_db($con,$db);
        // $id=$_SESSION['id'];
        // $bdate=$_POST['bdate'];
        // $gender=$_POST['gender'];
        // $edulevel=$_POST['edulevel'];
        // $course=$_POST['course'];
        // $year=$_POST['year'];
        // $sub=$_POST['sub'];
        // $id=$_POST['id'];
        // $sql= "SELECT * FROM tuteetb WHERE id='$id'";
        // $result=mysqli_query($con,$sql);
        // $row=mysqli_fetch_array($result);

       ?>