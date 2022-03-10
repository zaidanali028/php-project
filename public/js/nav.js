let navSlide = () => {
  let burger = document.querySelector(".burger");
  let nav = document.querySelector(" .nav-links");
  let navLinks = document.querySelectorAll(".nav-links li");

  //   nav toggler
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

      //   navFader
  navLinks.forEach((link, i) => {
    if(link.style.animation){
      link.style.animation=''
    }else{
      link.style.animation = `navFader 0.5s ease forwards ${i / 7+1}s`;

    }
});

// burger anim
burger.classList.toggle('toggle')
  });


};

const app = () => {
  navSlide();
};

app();
