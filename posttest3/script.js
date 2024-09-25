function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
}

function toggleMode() {
    var body = document.body;
    var header = document.querySelector('header');
    var navbar = document.querySelector('nav');
    var menu = document.querySelector('.menu');
    var footer = document.querySelector('footer');
    var modeToggle = document.getElementById('modeToggle');

    body.classList.toggle('dark-mode');
    header.classList.toggle('dark-mode');
    navbar.classList.toggle('dark-mode');
    menu.classList.toggle('dark-mode');
    footer.classList.toggle('dark-mode');

    if (body.classList.contains('dark-mode')) {
        modeToggle.innerHTML = "Ganti ke Light Mode";
    } else {
        modeToggle.innerHTML = "Ganti ke Dark Mode";
    }
}

document.getElementById("openPopup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "flex";
});

function closePopup() {
    document.getElementById("popup").style.display = "none";
}
