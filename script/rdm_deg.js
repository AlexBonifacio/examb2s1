console.log('random deg')
let buttons = document.querySelectorAll('.btn_main')
// document.documentElement.style.setProperty('--random-deg',`${Math.floor(Math.random()*2-1)}deg`)

buttons.forEach(function(button) {
    button.addEventListener('mouseover', function() {
        let randomDegree = `${Math.floor(Math.random()*6-3)}deg`;
        document.documentElement.style.setProperty('--random-deg', randomDegree);
    })
});

window.addEventListener('scroll', function() {
    var blurElement = document.querySelector('.blur');
    var containerHeight = document.querySelector('.container1').offsetHeight;
    var scrollPosition = window.scrollY;
    console.log(scrollPosition)
    var windowHeight = window.innerHeight;

    // Calculez la hauteur du blur en fonction du défilement
    var blurHeight = 25+Math.min(scrollPosition / 6)

    blurElement.style.height = `${blurHeight}%`;
});


window.addEventListener('scroll', function() {
    var image = document.querySelector('.image-container img');
    var scrollPosition = window.scrollY;
    var windowHeight = window.innerHeight;

    // Calculez le degré de rotation en fonction du défilement
    var rotateDegree = (scrollPosition / 10); // 180 degrés pour un retournement complet

    image.style.transform = `rotateY(${rotateDegree}deg)`;
});