//managing screen width code goes below
const adjustNavBar = () => {
  const navigationBar = document.querySelector(".navigation");
  const searchBar = document.querySelector(".search");

  window.addEventListener("resize", function () {
    if (window.innerWidth <= 700) {
      navigationBar.className += " turn-off-nav";
      searchBar.classList += " turn-off-nav";
    }

    if (this.window.innerWidth >= 700) {
    }
  });
};

adjustNavBar();
