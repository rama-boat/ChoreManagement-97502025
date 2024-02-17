
// /simulating a registration-like portal
let buttonOpen = document.querySelector(".buttonOpen");
let box = document.querySelector(".box");
let body = document.querySelector("body");
let close = document.querySelector(".close");

let createHead = document.querySelector(".create-head");
let createBody = document.querySelector(".create-body");
let slantLeft = document.querySelector(".slant-left");
let slantRight = document.querySelector(".slant-right");
let chore = document.querySelector(".Chore");
let bodyText = document.querySelector(".body-text");
let btnClose = document.querySelector(".btnClose");

let createBox = document.querySelector(".create-box");
let confirmationBox = document.querySelector(".confirmation-box");
let btnSubmit = document.querySelector(".btnSubmit");


// this is a listener for the submit button
btnSubmit.addEventListener("click", ()=>{
    
    createHead.style.display="none";    
    createBody.style.display="none";

    slantLeft.style.display="block";    
    slantRight.style.display="block";    
    
    createBox.style.display="none";
    confirmationBox.style.display="block";
});


// event listener for the open button
buttonOpen.addEventListener("click", ()=>{
    buttonOpen.style.display="none";
    box.style.display="block";
    body.style.backgroundColor="#222";
});

close.addEventListener("click", ()=>{
    buttonOpen.style.display="block";
    box.style.display="none";
    body.style.backgroundColor="#999";
});
btnClose.addEventListener("click", ()=>{
    buttonOpen.style.display="block";
    box.style.display="none";
    body.style.backgroundColor="#999";
});


