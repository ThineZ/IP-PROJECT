var modal = document.getElementById("modal");

var img = document.getElementById("zoom");
var modalImg = document.getElementById("img01");

img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.style.width = "700px";
    modalImg.style.height = "700px";
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}