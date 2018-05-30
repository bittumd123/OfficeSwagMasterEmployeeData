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
      
    $sql = "select * from employee ORDER by empid";
    $result = mysqli_query($db,$sql) or die ("VERY BAD");

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
        <h1>Your Team</h1>
        <div class="row">

          <div class="col-md-12">
            
            <table class="table">
              <tr>
                <th>Full Name</th>
                <th>Emp ID</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Expertise</th>
                <th>Experience</th>
                <th>Contact</th>
                <th>Action</th>
              </tr>
            <?php
                
                while($row = mysqli_fetch_array($result))
                { 
                  echo "<tr>";
                  echo "<td>".$row['fullname']."</td>";
                  echo "<td>".$row['empid']."</td>";
                  echo "<td>".$row['dob']."</td>";
                  echo "<td>".$row['gender']."</td>";
                  echo "<td>".$row['expert']."</td>";
                  echo "<td>".$row['experience']."</td>";
                  echo "<td>".$row['contact']."</td>";
                  echo "<td><a href='fire.php?fire=".$row['fullname']."'><button class='btn btn-danger'>Fire</button></td></a>";
                  echo "</tr>";
                }
                
                ?>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>