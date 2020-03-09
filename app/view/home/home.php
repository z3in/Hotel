<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LogIn</title>
<link rel='stylesheet' href='<?=SROOT?>css/gen.css'>
<link rel='stylesheet' href='<?=SROOT?>css/bootstrap.css'>
</head>	
<body>           

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?=SROOT?>image/png/user.png" class="rounded-circle" alt="Cinque Terre"><?=$_SESSION['uname']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class=" mr-auto mt-0 mt-lg-0">
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account&nbsp
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dp-img">
            <a class="dropdown-item" href="#"><img src="<?=SROOT?>image/png/user.png" class="rounded-circle" alt="Cinque Terre"><?=$_SESSION['uname']; ?></a>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Notifications</a>
          <a class="dropdown-item" href="#">Settigns</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Log Out</a>
        </div>
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Forums</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galery</a>
      </li>
    </ul>
  </div>
</nav>
<script src="<?=SROOT?>js/jquery-3.4.1.min.js"></script>
<script src="<?=SROOT?>js/bootstrap.min.js"></script>
<script src="<?=SROOT?>js/popper.min.js"></script>

</body>
</html>