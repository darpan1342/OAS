$(document).ready(function() {
  $(".for").hide();
  $(".usr").hide();
  $("#da").click(function() {
    $(".for").show();
  });
  $("#er").click(function() {
    $(".usr").show();
  });
  $("#r").click(function() {
    $(".for").hide();
  });
  $("#e").click(function() {
    $(".usr").hide();
  });
  $(".men").hide();
  $(".container").click(function() {
    $(".men").toggle();
  });
})

function myFunction(x) {
  x.classList.toggle("change");

}
