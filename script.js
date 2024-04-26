window.addEventListener('resize', function() {
    var windowWidth = window.innerWidth;

    var container = document.querySelector('.izquierda');

    if (windowWidth < 768) {
        container.style.width = '100%'; 
    } else {
        container.style.width = '50%'; 
    }
});
