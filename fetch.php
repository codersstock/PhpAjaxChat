<?php
require_once("core/init.php");

$fetch = new Chat;
$message = $fetch->FetchMessage(); 
if(empty($message)){
    ?>

<h4>There is no messages in the chat</h4>

<?php
}


else{
foreach ($message as $messages){
    ?>
    <div class="row">

    <div class="col-sm-12">
    <a href="#"> <?php echo $messages['user']?> </a>
    </div>
     <div class="col-sm-1"></div>
     <div class="col-sm-9">
     <p class="chatMessage"> <?php echo $messages['chatMessage']?> </p>
          </div>

          <div class="col-sm-2"></div>

    </div>

   <?php } }  ?>

