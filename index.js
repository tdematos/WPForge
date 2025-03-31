const adjustNavBar = () => {
  const navigationBar = document.querySelector(".navigation");
  const searchBar = document.querySelector(".search");
  const hamburgerContainer = document.querySelector(".connect-container");

  let button = document.querySelector(".connect-button");

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

        toggleHBMenu(button);
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
  handleResize();
};

adjustNavBar();

// Toggle Hamburger Menu (Attach event listener only once)
const toggleHBMenu = (button) => {
  const hamburgerMenuModal = document.querySelector(".hamburger-menu");
  const hbCloseButton = document.querySelector(".hb-close-btn");

  if (button && !button.dataset.listenerAdded) {
    button.addEventListener("click", () => {
      hamburgerMenuModal.showModal();
    });

    button.dataset.listenerAdded = "true";
  }

  if (hbCloseButton && !hbCloseButton.dataset.listenerAdded) {
    hbCloseButton.addEventListener("click", () => {
      hamburgerMenuModal.close();
    });

    hbCloseButton.dataset.listenerAdded = "true";
  }
};

// Toggle Hamburger Menu
const toggleSearchMenu = () => {
  const searchButton = document.querySelector(".search-btn");
  const searchMenuModal = document.querySelector(".search-modal");
  const searchModalClose = document.querySelector(".search-modal-close");

  if (searchButton) {
    searchButton.addEventListener("click", () => {
      searchMenuModal.showModal();
    });
  }

  if (searchButton) {
    searchModalClose.addEventListener("click", () => {
      searchMenuModal.close();
    });
  }
};

toggleSearchMenu();
