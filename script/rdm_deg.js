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

document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.anim-numb');
    let hasAnimated = new Set(); // Set to track animated counters

    const animateCounter = (element, start, end, duration) => {
        let startTime = null;

        const step = timestamp => {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            element.textContent = Math.floor(progress * (end - start) + start);

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                hasAnimated.add(element); // Mark as animated
            }
        };

        window.requestAnimationFrame(step);
    };

    const handleScroll = () => {
        counters.forEach(counter => {
            const rect = counter.getBoundingClientRect();
            // Check if the element is in the viewport and not already animated
            if (rect.top >= 0 && rect.bottom <= window.innerHeight && !hasAnimated.has(counter)) {
                const startValue = parseInt(counter.getAttribute('data-from-value') || 0, 10); // Default to 0 if not specified
                const endValue = parseInt(counter.getAttribute('data-to-value'), 10);
                const duration = parseInt(counter.getAttribute('data-duration'), 10);
                animateCounter(counter, startValue, endValue, duration);
            }
        });
    };

    // Déclenchez handleScroll immédiatement pour initialiser les animations
    handleScroll();

    // Ajoutez un écouteur d'événements pour le défilement pour gérer les futurs défilements
    window.addEventListener('scroll', handleScroll);
});



    document.getElementById('form-inscription-stage-decouverte').addEventListener('submit', function(e) {
        var isCheckedRGPD = document.getElementById('edit-accord-rgpd-custom').checked;
        var isCheckedPay = document.getElementById('accord-pay').checked;
        var errorMessageRGPD = document.querySelector('.error-message');
        var errorMessagePay = document.querySelector('.error-message-pay');

        if (!isCheckedRGPD) {
			console.log('Display block rgpd')
            errorMessageRGPD.style.display = 'block';
            e.preventDefault(); // Empêche la soumission du formulaire
        } else {
			console.log('Display none rgpd')
            errorMessageRGPD.style.display = 'none';
        }

        if (!isCheckedPay) {
			console.log('Display block pay')
            errorMessagePay.style.display = 'block';
            e.preventDefault(); // Empêche la soumission du formulaire
        } else {
			console.log('Display none pay')
            errorMessagePay.style.display = 'none';
        }
    });
	document.getElementById('edit-accord-rgpd-custom').addEventListener('click', function() {
    var errorMessageRGPD = document.querySelector('.custom-checkbox .error-message');
    errorMessageRGPD.style.display = 'none';
});

document.getElementById('accord-pay').addEventListener('click', function() {
    var errorMessagePay = document.querySelector('.custom-control .error-message-pay');
    errorMessagePay.style.display = 'none';
});
