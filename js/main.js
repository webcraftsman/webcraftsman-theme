var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => {
    const mobileNav = document.getElementById('mobile-nav');
    const navMain = document.querySelector('.nav-main');
    const body = document.body;

    mobileNav.addEventListener('click', function() {
        navMain.classList.toggle('show');
        body.classList.toggle('no-scroll');
    });
});

