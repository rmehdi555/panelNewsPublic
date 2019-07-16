window.addEventListener('scroll', function () {
    let nav = document.getElementById("scroll");
    if (document.documentElement.scrollTop|| document.body.scrollTop > window.innerHeight) {
        nav.classList.add('fixed-top');


    }
    else {
        nav.classList.remove('fixed-top');
    }
});

/*----------------------berger menu------------*/
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
