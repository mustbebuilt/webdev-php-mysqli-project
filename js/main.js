(function () {
  let setMenu = function () {
    // variables
    let burgerMenu = document.querySelector(".burger");
    let navBar = document.querySelector("nav");
    let navBarStatus = false;
    if (navBar.style.left === "") {
      burgerMenu.addEventListener("click", () => {
        console.info(burgerMenu.classList);
        if (navBarStatus) {
          navBarStatus = false;
          navBar.removeAttribute("style");
          // burger animation class
          //burgerMenu.classList.toggle("changeBurger");
		  burgerMenu.setAttribute("class", "burger");
        } else {
          navBarStatus = true;
          navBar.style.left = "0px";
          // burger animation class
          //burgerMenu.classList.toggle("changeBurger");
          burgerMenu.setAttribute("class", "burger changeBurger");
        }
      });
    } else {
      navBarStatus = false;
      navBar.removeAttribute("style");
    }
  };
  setMenu();
  // resize
  window.addEventListener("resize", () => setMenu());
})();
