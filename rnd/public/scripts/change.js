let btn1 = document.querySelector('btn-1');
let btn2 = document.querySelector('btn-2');
let btn3 = document.querySelector('btn-3');
let btn4 = document.querySelector('btn-4');

btn1.addEventListener('click',() => {
    document.body.style.backgroundImage = "url('../img/eroSenin.jpg')";
});

btn2.addEventListener('click',() => {
    document.body.style.backgroundImage = "url('../img/jungle.jpg')";
});

btn3.addEventListener('click',() => {
    document.body.style.backgroundImage = "url('../img/ship.jpg')";
});

btn4.addEventListener('click',() => {
    document.body.style.backgroundImage = "url('../img/space.jpg')";
});
