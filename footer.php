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
 
    .main {
      border: 5px solid white;
      margin-bottom: 30px;
      margin-left: 40px;
      margin-right: 40px;
      margin-top: 70px;
    background-color: #63c4da6c;
    min-height: 30vh;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    animation: animateBg 3s linear infinite;
    font-family: Verdana, Geneva, Tahoma, sans-serif;  
    
}

footer {
    position: relative;
    width: 100%;
    
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

footer .social_icon,
footer .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
    z-index: 2;
}

footer .social_icon li,
footer .menu li {
    list-style: none;}

footer .social_icon li a {
    font-size: 2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}

footer .social_icon li a {
    transform: translateY(-10px);
}

footer .menu li a {
    font-size: 1.2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none;
    opacity: 0.75;
}

footer .menu a {
    text-decoration: none;
    color: #000000;
    opacity: 1;
    z-index: 1;
}

footer p {
    color: #fff;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: 1.1em;
}




.zoom li a {
    transition: 1s;
}

.zoom li a:hover {
    transform: scale(1.1);
}
  </style>
  <script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            document.querySelector('.preloader').style.display = 'none';
            document.querySelector('.content').style.display = 'block';
        }, 3000);
    });
</script>
</head>

<body>
 
<div class="main">

  <footer>
    
      <div class="zoom">
          <ul class="social_icon">
              <li><a href="#"><ion-icon name="logo-facebook"></ion-icon>
                  </a></li>

              <li><a href="#"><ion-icon name="logo-twitter"></ion-icon>
                  </a></li>

              <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon>
                  </a></li>

              <li><a href="#"><ion-icon name="logo-instagram"></ion-icon>
                  </a></li>
          </ul>

      </div>

      <ul class="menu">
          <p>If any query required the click on <a href="#">Contact us</a></p>
      </ul>

      <p>Designed by Tisha Rathod</p>


  </footer>


</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</div>
</body>
</html>
