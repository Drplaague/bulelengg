<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="side/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="side/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" placeholder="Masukan Username" required="required" autofocus="autofocus" name="user">
              <label >Masukan Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" class="form-control" placeholder="Masukan Password" required="required" name="pass">
              <label>Masukan Password</label>
            </div>
          </div>
          
          <input type="submit" class="btn btn-primary btn-block" value="Login" name="Login"/>
        </form>
      </div>
    </div>
  </div>

  <?php
  include 'koneksi.php';
  session_start();
      if(isset($_POST["Login"]))
  {
          $user = $_POST['user'];
          $pass = $_POST['pass'];
  
          //$username = mysqli_real_escape_string($data, $user);
          //$password = mysqli_real_escape_string($data, $pass);
              $sql = mysqli_query($conn,"SELECT * FROM userlogin WHERE username='$user'
                                   && password='$pass'") or die(mysql_error());
                                  $hasil = mysqli_fetch_array($sql);
                  
              if($hasil['username'] == $user && $hasil['password'] == $pass)
              {
                  $_SESSION['username'] = $user;
                  header("Location:admin.php");
              }
              if($user == " " && $pass == " "){
                  echo("<script>alert('username/password tidak ada');</script>");
          }
  }
  if(isset($_POST['Back'])){
      header("#");
  }
  ?>
  <!-- Bootstrap core JavaScript-->
  <script src="side/vendor/jquery/jquery.min.js"></script>
  <script src="side/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="side/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
