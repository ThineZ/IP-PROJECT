// FIRST ITEM
const item = document.querySelector(".cart-item-one");
const del = document.querySelector(".del-btn");

// SECOND ITEM
const itemTwo = document.querySelector(".cart-item-two");
const delTwo = document.querySelector(".del-btn-two");

//INFO PARA
const para = document.getElementById("info");

// SHOW AND HIDE THE INFO
para.style.display = "none";
// item.style.display = "none";
// itemTwo.style.display = "none";


// REMOVE THE FIRST ITEM
del.addEventListener("click", () => {
    item.style.display = "none";
});

// REMOVE THE SECOND ITEM
delTwo.addEventListener("click", () => {
    itemTwo.style.display = "none";
});


$('#chair').click(function(){
    item.style.display = "block";
});