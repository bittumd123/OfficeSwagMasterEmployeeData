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
        <h1>Admin Dashboard</h1>
        <div class="row">
          <div class="col-md-3">
            <a href="add-member.php"><button class="btn btn-dark">+ ADD NEW MEMBER</button></a>
            <a href="add-notice.php"><button class="btn btn-dark">+ ADD NEW NOTICE</button></a>
            <a href="show-members.php"><button class="btn btn-dark">VIEW ALL MEMBERS</button></a>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <hr>
                <div class="card-title"> 
    <?php
                  
      if(isset($_POST['title']))
      {
        $title = $_POST['title'];
      }
      if(isset($_POST['body']))
      {
        $body = $_POST['body'];
      }
                  
        $user_file = $_FILES["fileToUpload"]["name"];
        $target_dir = "uploads/";
        $target_location = $target_dir . $user_file;

        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_location);
                  
        $date = date("Y-m-d");
    
    $sql = "INSERT INTO notice (title, body, date, author, file) VALUES ('$title', '$body', '$date', '$user_check', '$target_location');";
    $result = mysqli_query($db,$sql) or die ("VERY BAD");

    if($result)
    {
      echo "Successful!";
    }

?>

                  </div>
                <hr>
              </div>
            </div>
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