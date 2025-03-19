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

//opening hamburger menu
const toggleHBMenu = () => {
  const hbMenuButton = document.querySelector(".connect-button");
  const hamburgerMenuModal = document.querySelector(".hamburger-menu");
  const hbCloseButton = document.querySelector(".hb-close-btn");

  hbMenuButton.addEventListener("click", () => {
    hamburgerMenuModal.showModal();
  });

  hbCloseButton.addEventListener("click", () => {
    hamburgerMenuModal.close();
  });
};

toggleHBMenu();
