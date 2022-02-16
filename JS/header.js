// PREVENT USER TO CLICK BACK OR RETURN TO PREVIOUS PAGE

function disableBack() { 
    window.history.forward(); 
}
setTimeout("disableBack()", 0);
window.onunload = function () { null };