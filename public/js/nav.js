var timer;

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var hero = document.getElementById('hero');
    var heroBottom = hero.offsetTop + hero.offsetHeight;

    if (window.scrollY >= heroBottom) {
        navbar.classList.add('absolute');
    } else {
        navbar.classList.remove('absolute');
    }

    var heroHeight = hero.offsetHeight;

    if (window.scrollY > heroHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }

    if (window.scrollY > heroHeight) {
        navbar.classList.add('fixed');
        // Clear previous timer
        clearTimeout(timer);
        // Set a timer to remove the 'fixed' class after 2000 milliseconds (adjust as needed)
        timer = setTimeout(function() {
            navbar.classList.remove('fixed');
        }, 2000);
    } else {
        navbar.classList.remove('fixed');
    }
});
