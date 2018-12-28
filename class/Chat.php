<?php


class Chat extends Core{
function FetchMessage(){
 $this->query("SELECT * FROM chat ORDER BY messageId DESC");
return $this->rows();
}


function InsertMessage($user,$m,$currentTime){
$this->query("INSERT INTO `chat` (`user`,`chatMessage`,`timestampp`) VALUES(' ". $user .  " ', ' ". $m .  " ' , ' ". $currentTime .  " ')
");

}


}







?>