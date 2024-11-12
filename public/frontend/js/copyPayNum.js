const showBkashNumber = document.querySelector('.showBkashNumber');
const showNagadNumber = document.querySelector('.showNagadNumber');
const showUpayNumber = document.querySelector('.showUpayNumber');
const showRocketNumber = document.querySelector('.showRocketNumber');

function payWithBkash(){
    showBkashNumber.classList.remove('d-none');
    showNagadNumber.classList.add('d-none');
    showUpayNumber.classList.add('d-none');
    showRocketNumber.classList.add('d-none');
}
function payWithNagad(){
    showBkashNumber.classList.add('d-none');
    showNagadNumber.classList.remove('d-none');
    showUpayNumber.classList.add('d-none');
    showRocketNumber.classList.add('d-none');
}
function payWithRocket(){
    showBkashNumber.classList.add('d-none');
    showNagadNumber.classList.add('d-none');
    showUpayNumber.classList.add('d-none');
    showRocketNumber.classList.remove('d-none');
}
function payWithUpay(){
    showBkashNumber.classList.add('d-none');
    showNagadNumber.classList.add('d-none');
    showUpayNumber.classList.remove('d-none');
    showRocketNumber.classList.add('d-none');
}