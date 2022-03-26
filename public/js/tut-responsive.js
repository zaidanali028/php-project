// this module makes the tutorial section responsive


// selectig all classess with the class name of tutorial
const tuts = document.querySelectorAll(".tutorial");

tuts.forEach(function (tut) {
// the font awesome icon changing dynamically(+/-)
  const btn = tut.querySelector(".tut-btn");



  btn.addEventListener("click", function () {
    // console.log(tut);

    tuts.forEach(function (item) {
      if (item !== tut) {
        // closes other tutorial drop downs that does not have focus
        item.classList.remove("show-text");
      }
    });

    tut.classList.toggle("show-text");
  });
});