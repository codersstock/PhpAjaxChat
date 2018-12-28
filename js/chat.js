var chat = {};

chat.fetch = function() {
  $.post("fetch.php", { method: "fetch" }, function(msg) {
    $(".messages .message").html(msg);
  });
};

chat.interval = setInterval(chat.fetch, 2000);

$(document).ready(function() {
  $("#btn_Send").click(function() {
    $message_User = $("#type").val();
    $.post("send.php", { message: $message_User }, function(Data) {
      $("#result").html(Data);
      playSound();
    });
  });
});
