document.getElementById('icon').addEventListener('click', function (event) {
    event.stopPropagation();
    let panel = document.getElementById('burger');
    if (panel.style.display === '' || panel.style.display === 'none') {
        panel.style.display = 'flex';
        panel.style.animation = 'slideDown 0.2s ease-out';
    } else {
        panel.style.animation = 'slideUp 0.2s ease-out';
        setTimeout(function() {
            panel.style.display = 'none';
        }, 150);
    }
});

document.addEventListener('click', function() {
    let panel = document.getElementById('burger');
    panel.style.animation = 'slideUp 0.2s ease-out';
    setTimeout(function() {
        panel.style.display = 'none';
    }, 150);
});
