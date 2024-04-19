document.getElementById('icon').addEventListener('click', function (event) {
    event.stopPropagation();
    let panel = document.getElementById('burger');
    if (panel.style.opacity === '' || panel.style.opacity === '0') {
        panel.style.opacity = '1';
    } else {
        panel.style.opacity = '0';
    }
});

document.addEventListener('click', function() {
    let panel = document.getElementById('burger');
    panel.style.opacity = '0';
});
