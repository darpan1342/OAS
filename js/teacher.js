$(document).ready(function(){
 $(".men").hide();
  $(".ver").hide();
  $(".vr").hide();
   $(".er").hide();
   $(".re").hide();
 $(".over").hide();
 $(".container").click(function(){
     $(".men").toggle();
 });
 $(".f").click(function(){
 $(".over").show();
  $(".ver").hide();
  $(".vr").hide();
   $(".er").hide();
   $(".re").hide();
});
$("#po").click(function(){
 $(".re").show();
  $(".ver").hide();
  $(".vr").hide();
   $(".er").hide();
 $(".over").hide();
});
$("#y").click(function(){
$(".over").show();
 $(".ver").hide();
  $(".vr").hide();
   $(".er").hide();
   $(".re").hide();
});
$("#kl").click(function(){
$(".er").show();
 $(".ver").hide();
  $(".vr").hide();
   $(".re").hide();
 $(".over").hide();
});
$("#r").click(function(){
$(".over").hide();
});
$("#k").click(function(){
$(".over").hide();
});
$("#ko").click(function(){
$(".ver").hide();
});
$("#lo").click(function(){
$(".ver").show();
  $(".vr").hide();
   $(".er").hide();
   $(".re").hide();
 $(".over").hide();
});
$("#pp").click(function(){
$(".vr").show();
 $(".ver").hide();
   $(".er").hide();
   $(".re").hide();
 $(".over").hide();
});
$("#ro").click(function(){
$(".ver").hide();
});
$("#kp").click(function(){
$(".er").hide();
});
$("#rp").click(function(){
$(".er").hide();
});
$("#pk").click(function(){
$(".re").hide();
});
$("#pr").click(function(){
$(".re").hide();
});
$("#rr").click(function(){
$(".vr").hide();
});
$("#kk").click(function(){
$(".vr").hide();
});
})
function myFunction(x)
{
  x.classList.toggle("change");
}
