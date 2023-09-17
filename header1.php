<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <script src="js/bootstrap.bundle.min.js"></script>
  
  <style>
    
    body{
              background-color: black;
    }
          .navbar-nav {
              margin-left: auto;
              gap: 30px;
              border: 1px #04d9ff;
              padding: 10px;
              box-shadow: 5px 10px 28px;
          }
          .navbar-nav a:hover{
            background-color: #04d9ff;
            transition-delay: 1.5s;
            box-shadow: 0 0 10px #04d9ff,
                  0 0 20px #04d9ff,
                  0 0 40px #04d9ff,
                  0 0 80px #04d9ff,
                  0 0 10px #04d9ff;
            color: black;
          }
</style>          

</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
         <img src="image/logo.png" alt="logo" style="width:160px; margin-left: 70px;"><h1 style="font-size:20px">Welcome <?php echo $row["name"]; ?></h1>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
             <span class="navbar-toggler-icon"></span>
         </button>
      </a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto text-center">
 <li class="nav-item">
   <a class="nav-link" href="index.html">Home</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="sub2.html">Subject</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="about.html">About us</a>
 </li>
 <li class="nav-item">
  <a class="nav-link" href="calci.html">Calculator</a>
 </li>   
 <!-- <li class="nav-item">
  <a class="nav-link" href="logout.php">Login</a>
 </li> -->
 <li class="nav-item">
  <a class="nav-link" href="logout.php">Logout</a>
 </li>
 <li class="nav-item">
  <a class="nav-link" href="register.php">Signup</a>
 </li>     
</ul>
</div>
</div>
</nav>

</body>
</html>
