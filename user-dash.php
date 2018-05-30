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

          $sql = "select * from notice ORDER by date DESC";
          $result = mysqli_query($db,$sql) or die ("VERY BAD");


          $sql2 = "select * from employee where fullname = '$aaa'";
          $result2 = mysqli_query($db,$sql2) or die ("VERY BAD");
    
    
          $sql3 = "select * from employee where fullname = '$user_check'";
          $result3 = mysqli_query($db,$sql3) or die ("VERY BAD 2");
          $row3 = mysqli_fetch_array($result3);

    
          if($row['role']!='user')
          {
            header('location:login.php');
          }
     
//          if($row3['empid'] == null)
//          {
//            header('location: register.php');
//          }


      ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">SWAG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Hey <?php echo $_SESSION["theuser"]; ?>!</a>
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
        <h1>User Dashboard</h1>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <center><b>My Profile</b>
                <img src="img/profile.svg">
                  </center>
                  <?php
                
                while($row2 = mysqli_fetch_array($result2))
            
                {
                  echo "<h4>";
                  echo $row2['fullname'];
                  echo "</h4>";
                  echo "<hr>";
                  echo "<b>Emp ID:</b> ";
                  echo $row2['empid'];
                  echo "<br>";
                  echo "<b>DOB:</b> ";
                  echo $row2['dob'];
                  echo "<br>";
                  echo "<b>Expertise:</b> ";
                  echo $row2['expert'];
                  echo "<br>";
                  
                }
                  
                ?>
                
                <hr>
                
                <a href="editprofile.php">Edit Profile</a>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-9">
            <?php
                
                while($row = mysqli_fetch_array($result))
                { 
                  echo "<div class='card'>
                        <div class='card-body'>";
                  echo "<h3>".$row['title']."</h3>";
                  echo $row['body'];
                  echo "<br>";
                  
                  if($row['file']!=null)
                  {
                    echo "<br>";
                    echo "<a href='".$row['file']."'>View file</a>";
                  }
                  echo "<hr>";
                  echo "<small><b>Date: </b>".$row['date']."</small> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;";
                  echo "<small><b>Author: </b>".$row['author']."</small>";
                  echo "</div>
                        </div>";
                }
                
                ?>
           
            
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