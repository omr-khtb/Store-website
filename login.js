$(document).ready(function () {
  $("#main").fadeIn(3000);
  $("#button").css("display", "none");
  $("#main").slideUp(1000)
  $("#main").slideDown(1000)
});

$(document).ready(function () {
  $("#main").animate({
    top: '-150px',
    opacity: '0.8',
  });
});

function show() {
  var x = document.getElementById("pswdss");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function show2() {
  var x = document.getElementById("pswd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}