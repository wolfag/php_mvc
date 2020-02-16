$(document).ready(function() {
  $("#username").keyup(function() {
    var username = $(this).val();
    $.post("./ajax/checkusername", { username }, function(data) {
      console.log({ data, s: data == "true" });
      if (data == "true ") {
        $("#usernameHelp").html("Invalid");
      } else {
        $("#usernameHelp").html("Valid");
      }
    });
  });
});
