console.log ('coucou');
document.getElementById('form-inscription-stage-decouverte').addEventListener('submit', function(e) {
    var isCheckedRGPD = document.getElementById('edit-accord-rgpd-custom').checked;
    var isCheckedPay = document.getElementById('accord-pay').checked;
    var errorMessageRGPD = document.querySelector('.custom-checkbox .error-message');
    var errorMessagePay = document.querySelector('.custom-control .error-message');

    if (!isCheckedRGPD) {
        errorMessageRGPD.style.display = 'block';
        e.preventDefault(); // Empêche la soumission du formulaire
    } else {
        errorMessageRGPD.style.display = 'none';
    }

    if (!isCheckedPay) {
        errorMessagePay.style.display = 'block';
        e.preventDefault(); // Empêche la soumission du formulaire
    } else {
        errorMessagePay.style.display = 'none';
    }
});