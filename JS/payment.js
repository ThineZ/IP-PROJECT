$(document).ready(function () {
  $("input[type='radio']").change(function () {
    if ($(this).val() == "no") {
      $("#box").show();
    } 
    else {
      $("#box").hide();
    }
    if ($(this).val() == "no") {
      $("#submit").show();
    } 
    else {
      $("#submit").hide();
    }
  });
});

// TO PAYMANT PAGE
const pay = document.getElementById("payment");    

pay.addEventListener("click", function(){
    document.location.href = '../CART/payment.php';
});