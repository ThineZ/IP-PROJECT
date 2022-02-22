var item = document.getElementById("first-item");
var p = document.getElementById("info");
var payBtn = document.getElementById("payment");

p.style.display = "none";

$("#del-btn").click(function(){
    var $this = $(this);

    item.style.display = "none";

    if($this.data('clicked')) {
        p.style.display = "none";
    }
    else {
        p.style.display = "block";
    }
});