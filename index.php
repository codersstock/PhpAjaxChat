<?php

require_once("core/init.php");
?>
<body>
    <div class="reg-form">
    <form class="form-horizontal" action="" method="POST"> 
        <p class="text-center"><img src="images/logo.png" alt=""></p>
    <div class="form-group">
    
    <label for="loginId" id="icon"><i class="fa fa-user"></i></label>
    <input type="text" name="" id="loginId" placeholder="Enter Login Id" autofocus>
    </div>
    
    <div class="form-group">
    <label for="password" id="icon"><i class="fa fa-lock"></i></label>
    <input type="password" id="password" name="" placeholder="Enter Password">
    </div>

<div class="form-group">
<div class="form-check" id="remember">
<input type="checkbox" class="form-input-check" name="" id="rememberme">
<label for="rememberme" class="form-check-label">Remember me</label>
</div>


</div>

<input type="submit" class="btn btn-success btn-block" value="Send">    

<div class="form-row" id="reg_extra">

<div class="col-sm-6 col-xs-12 text-center">
<a href="" class="text-primary">Register Now!</a>
</div>

<div class="col-sm-6 col-xs-12 text-center">
<a href="" class="">Forgot Password</a>
</div>

</div>

    </form>
    
    
        
    </div>
</body>
</html>