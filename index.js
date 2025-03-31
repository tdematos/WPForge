const adjustNavBar = () => {
  const navigationBar = document.querySelector(".navigation");
  const searchBar = document.querySelector(".search");
  const hamburgerContainer = document.querySelector(".connect-container");

  let button = null;

  const handleResize = () => {
    if (window.innerWidth <= 700) {
      navigationBar.classList.add("turn-off-nav");
      searchBar.classList.add("turn-off-nav");

      if (!button) {
        button = document.createElement("button");
        button.classList.add("connect-button");

        const icon = document.createElement("i");
        icon.classList.add("fa-solid", "fa-bars");

        button.appendChild(icon);
        hamburgerContainer.appendChild(button);

        // After button is created, call toggleHBMenu to attach event listeners
        toggleHBMenu();
      }
    } else {
      navigationBar.classList.remove("turn-off-nav");
      searchBar.classList.remove("turn-off-nav");

      if (button) {
        button.remove();
        button = null;
      }
    }
  };

  window.addEventListener("resize", handleResize);
  handleResize(); // Run it once to apply styles on load
};

adjustNavBar();

// Toggle Hamburger Menu
const toggleHBMenu = () => {
  const hbMenuButton = document.querySelector(".connect-button");
  const hamburgerMenuModal = document.querySelector(".hamburger-menu");
  const hbCloseButton = document.querySelector(".hb-close-btn");

  if (hbMenuButton) {
    hbMenuButton.addEventListener("click", () => {
      hamburgerMenuModal.showModal();
    });
  }

  if (hbCloseButton) {
    hbCloseButton.addEventListener("click", () => {
      hamburgerMenuModal.close();
    });
  }
};
