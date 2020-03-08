<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LogIn</title>
<link rel='stylesheet' href='<?=SROOT?>css/gen.css'>
<link rel='stylesheet' href='<?=SROOT?>css/bootstrap.css'>
</head>	
<body>           

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#"><?=$_SESSION['uname']; ?></a>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	 	<button class="btn btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>
<script src="<?=SROOT?>js/jquery-3.4.1.min.js"></script>
<script src="<?=SROOT?>js/bootstrap.min.js"></script>
<script src="<?=SROOT?>js/popper.min.js"></script>

</body>
</html>
