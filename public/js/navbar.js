const botao = document.querySelector(".mobile-menu");
const menu = document.querySelector(".nav-list");

botao.addEventListener("click", function(){
    menu.classList.toggle("active");
});

/*
class MobileNavbar{
    constructor(mobileMenu, navList, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
        console.log("Teste");
        this.init();
    }

    animateLinks(){
        this.navLinks.forEach((link) => {
            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);
        });
    }

    handleClick(){
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent(){
        this.mobileMenu.addEventListener('click', this.handleClick);
    }

    init() {
        if (this.mobileMenu){
            this.addClickEvent;
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);*/