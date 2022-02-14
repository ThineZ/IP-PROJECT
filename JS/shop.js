const toggleBtn = document.querySelector("#dropbtn");
const divList = document.querySelector("#myDropdown");

toggleBtn.addEventListener('click', () => {
    if (divList.style.display === 'none') {
        divList.style.display = 'block';
    } 
    else {
        divList.style.display = 'none'
    }
});

// SECOND DROPDOWN FUNCTION

const toggleBtnOne = document.querySelector("#dropbtn-one");
const divListOne = document.querySelector("#myDropdown-one");

toggleBtnOne.addEventListener('click', () => {
    if (divListOne.style.display === 'none') {
        divListOne.style.display = 'block';
    } 
    else {
        divListOne.style.display = 'none'
    }
});