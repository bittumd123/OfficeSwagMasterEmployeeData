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
          if($row['role']!='admin')
          {
            header('location:login.php');
          }
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
        <h1>Register</h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              
                <form method="post" action="register-success.php">
                
                  
                  <div class="form-group">
                    <label>Name</label>
                    <input name="fullname" type="text" class="form-control" required>
                  </div>
              
                  <div class="form-group">
                    <label>Employee ID</label>
                    <input name="empid" type="text" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Date of birth</label>
                    <input name="dob" type="date" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Gender</label><br>
                    <label>
                    <input type="radio" value="Male" name="gender">
                    Male
                    </label><br>
                    <label>
                    <input type="radio" value="Female" name="gender">
                    Female
                    </label>
                  </div>

                  <div class="form-group">
                    <label>Area of expertise</label>
                    <input name="expert" type="text" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Experience, in years</label>
                    <input name="experience" type="number" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Contact number</label>
                    <input name="contact" type="number" class="form-control" required>
                  </div>


                  
                  <br>

                  <input type="submit" class="btn btn-dark" value="SUBMIT" style="width: 100%; padding: 15px">
                  </form>
                
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