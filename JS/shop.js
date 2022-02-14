const toggleBtn = document.querySelector("#dropbtn");
const divList = document.querySelector("#myDropdown");
const triUp = document.querySelector("#triangle-up");
const triDown = document.querySelector("#triangle-down");

toggleBtn.addEventListener('click', () => {
    if (divList.style.display === 'none') {
        divList.style.display = 'block';
    } 
    else {
        divList.style.display = 'none'
    }
});

toggleBtn.addEventListener('click', () => {
    if (triUp.style.display === 'none') {
        triUp.style.display = 'block';
        triDown.style.display = 'none';
    } 
    else {
        triUp.style.display = 'none'
        triDown.style.display = 'block'
    }
});


// SECOND DROPDOWN FUNCTION

const toggleBtnOne = document.querySelector("#dropbtn-one");
const divListOne = document.querySelector("#myDropdown-one");
const triUpOne = document.querySelector("#triangle-up-one");
const triDownOne = document.querySelector("#triangle-down-one");

toggleBtnOne.addEventListener('click', () => {
    if (divListOne.style.display === 'none') {
        divListOne.style.display = 'block';
    } 
    else {
        divListOne.style.display = 'none'
    }
});

toggleBtnOne.addEventListener('click', () => {
    if (triUpOne.style.display === 'none') {
        triUpOne.style.display = 'block';
        triDownOne.style.display = 'none';
    } 
    else {
        triUpOne.style.display = 'none'
        triDownOne.style.display = 'block'
    }
});

// THIRD DROPDOWN FUNCTION

const toggleBtnTwo = document.querySelector("#dropbtn-two");
const divListTwo = document.querySelector("#myDropdown-two");
const triUpTwo = document.querySelector("#triangle-up-two");
const triDownTwo = document.querySelector("#triangle-down-two");

toggleBtnTwo.addEventListener('click', () => {
    if (divListTwo.style.display === 'none') {
        divListTwo.style.display = 'block';
    } 
    else {
        divListTwo.style.display = 'none'
    }
});

toggleBtnTwo.addEventListener('click', () => {
    if (triUpTwo.style.display === 'none') {
        triUpTwo.style.display = 'block';
        triDownTwo.style.display = 'none';
    } 
    else {
        triUpTwo.style.display = 'none'
        triDownTwo.style.display = 'block'
    }
});

// CHECKBOX ITEM

function chairChecked() {

    var checkBox = document.getElementById("chair");

    var chairInfo = document.getElementById("chair-info");
    var tableInfo = document.getElementById("table-info");

    if (checkBox.checked == true) {
        chairInfo.style.display = "block";
        tableInfo.style.display = 'none';
    } 
    else  {
        tableInfo.style.display = 'block';
    }
}

function tableChecked() {
    var checkBoxOne = document.getElementById("table");

    var chairInfoOne = document.getElementById("chair-info");
    var tableInfoOne = document.getElementById("table-info");

    if (checkBoxOne.checked == true) {
        tableInfoOne.style.display = 'block';
        tableInfoOne.style.bottom = "0px";
        tableInfoOne.style.left = "0px";
        chairInfoOne.style.display = "none";
    } 
    else  {
        chairInfoOne.style.display = 'block';
        tableInfoOne.style.bottom = "340px";
        tableInfoOne.style.left = "320px";
    }
}