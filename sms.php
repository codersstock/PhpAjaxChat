<?php
session_start();
$_SESSION['user'] = (isset($_GET['user'])===true) ? (string)$_GET['user'] : 0;
require_once "core/init.php";


?>

<body>

   <div class="row container chatbox">
   
   <div class="col-sm-12 col-md-10">
      
   <div class="messages">

   <div class="message">
       <!-- Message Fetch from DB -->
   </div>
   </div>   
   <textarea class="form-control" name="" id="type" cols="30" placeholder="Enter message here" rows="10"></textarea>
   <button class="btn btn-primary btn-block" id="btn_Send"><i class="fa fa-send"></i>&nbsp;Click to Send Message</button>
   </div>
     
   
   </div>

<div id="result"></div> 
<div id="sound">

</div>






<script>
function playSound() {
  document.getElementById("sound").innerHTML = "<audio autoplay>"+
  "<source src='sms.mp3'></audio>";
}
</script>


<script src="js/jquery.js"></script>
<script src="js/chat.js"></script>


</body>
</html>







