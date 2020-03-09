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
  <a class="navbar-brand" href="#"><img src="<?=SROOT?>image/1.jpg" class="rounded-circle" alt="Cinque Terre"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="Username" id="uname">
		<input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" id="pwd">
    	<button class="btn btn btn-dark my-2 my-sm-0" type="submit" id="login-btn">Login</button>
    </form>
  </div>
</nav>
<div class="msg-box">
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
</div>
<script src="<?=SROOT?>js/jquery-3.4.1.min.js"></script>
<script src="<?=SROOT?>js/bootstrap.min.js"></script>
<script src="<?=SROOT?>js/popper.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#login-btn').click(function(e){
    e.preventDefault();
    var uname = $('#uname').val(); 
    var uname = $('#uname').val(); 
    var pwd = $('#pwd').val();
    $.post('<?=SROOT ?>login/getLoginCred',{'uname':uname,'pwd':pwd},function(data){
      if(data =="success"){
        window.location.href = "<?=SROOT. 'home/home/'?>" + uname ;
      }else{
        alert(data);
      }
    });
  });
});

</script>
</body>
</html>
