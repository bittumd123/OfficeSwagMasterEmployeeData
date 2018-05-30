<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SWAG database</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    
    <?php
          include("session.php");
    
    $aaa = $_SESSION["theuser"];
      
    $sql2 = "select * from employee where fullname = '$aaa'";
    $result2 = mysqli_query($db,$sql2) or die ("VERY BAD");
    
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">SWAG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Hey <?php echo $_SESSION["theuser"]; ?>!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin-dash.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="logout.php"><button type="button" class="btn btn-light">Logout</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <div class="admin-dash">
        <h1>Profile - <?php echo $_SESSION["theuser"]; ?></h1>
        <div class="row">
          
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
            <?php
                
                while($row2 = mysqli_fetch_array($result2))
                {
                  echo "<b>Name:</b> ";
                  echo $row2['fullname'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>Emp ID:</b> ";
                  echo $row2['empid'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>DOB:</b> ";
                  echo $row2['dob'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>Expertise:</b> ";
                  echo $row2['expert'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>Gender:</b> ";
                  echo $row2['gender'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>Experience:</b> ";
                  echo $row2['experience'];
                  echo "<br>";
                  echo "<br>";
                  echo "<b>Conact:</b> ";
                  echo $row2['contact'];
                  echo "<br>";
                }
                  
                ?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        &copy; All rights reserved
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>