const botao = document.querySelector(".mobile-menu");
const menu = document.querySelector(".nav-list");

botao.addEventListener("click", function(){
    menu.classList.toggle("active");
});

