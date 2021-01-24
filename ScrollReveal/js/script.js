document.addEventListener("DOMContentLoaded", function () {
    
    // Parallax //
    var elems = document.querySelectorAll(".parallax");
    var instances = M.Parallax.init(elems);

    // Material Box //
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
});

window.sr = ScrollReveal();

sr.reveal('.efecto1', {
    duration: 3000,
    origin: 'bottom',
    distance: '-100px',
    reset: true
});

sr.reveal('.efecto2', {
    duration: 3000,
    origin: 'right',
    distance: '400px',
    reset: true
});

sr.reveal('.efecto3', {
    duration: 3000,
    origin: 'left',
    distance: '400px',
    reset: true
});

sr.reveal('.efecto4', {
    duration: 3000,
    origin: 'top',
    distance: '-100px',
    reset: true
});

sr.reveal('.logo', {
    duration: 4000,
    rotate: {
        x: 1,
        y: 180,
    }
});