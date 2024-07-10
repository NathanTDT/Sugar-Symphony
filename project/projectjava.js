// projectjava.js
const loginButton = document.getElementById('login');
const popupFrame = document.getElementById('frame');
const closeBtn = document.getElementById('close-btn');

loginButton.onclick = function () {
    if (popupFrame.style.display === 'block') {
        popupFrame.style.display = 'none';
    } else {
        popupFrame.style.display = 'block';
    }
};

document.getElementById('close-btn').onclick = function () {
document.getElementById('frame').style.display = 'none'; 
}


