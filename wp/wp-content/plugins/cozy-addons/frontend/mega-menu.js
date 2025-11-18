(function ($) {
  window["cozyBlockMegaMenuInit"] = (e) => {
    const n = e.replace(/-/gi, "_");
    const blockOptions = window[`cozyMegaMenu_${n}`];
    const megaMenuClass = `#cozyBlock_${n}`;
    const cozyMegaMenu = document.querySelector(megaMenuClass);

    const responsiveOpenIcon = cozyMegaMenu.querySelector(
      ".cozy-responsive-icon__wrapper.open-icon-wrapper"
    );
    const responsiveCloseIcon = cozyMegaMenu.querySelector(
      ".cozy-responsive-icon__wrapper.close-icon-wrapper"
    );

    const cozyNavMenu = cozyMegaMenu.querySelector(
      ".cozy-block-navigation-menu"
    );
    displayResponsiveMenu(cozyNavMenu);
    window.addEventListener("resize", function () {
      displayResponsiveMenu(cozyNavMenu);
    });

    function displayResponsiveMenu(cozyNavMenu) {
      const viewWidth = window.innerWidth;

      const displayEvent = "event-" + blockOptions.displayEvent;

      if (viewWidth <= blockOptions.responsive.width) {
        responsiveOpenIcon.classList.remove("display-none");

        if (!cozyNavMenu.classList.contains("full-screen")) {
          cozyNavMenu.classList.add("display-none");
        }

        if (blockOptions.displayEvent === "hover") {
          cozyMegaMenu.classList.remove(displayEvent);
          cozyMegaMenu.classList.add("event-click");
        }
      } else {
        $(megaMenuClass)
          .find(".cozy-block-mega-menu__dropdown")
          .removeClass("show-cozy-dropdown-content");

        $("body").removeClass("overflow-hidden");

        responsiveOpenIcon.classList.add("display-none");
        cozyNavMenu.classList.remove("display-none");
        cozyNavMenu.classList.remove("full-screen");

        if (!cozyNavMenu.classList.contains("full-screen")) {
          responsiveCloseIcon.classList.add("display-none");
        }

        if (blockOptions.displayEvent === "hover") {
          cozyMegaMenu.classList.add(displayEvent);
          cozyMegaMenu.classList.remove("event-click");
        }
      }
    }

    let eventAttached = false;
    responsiveOpenIcon.addEventListener("click", function () {
      cozyNavMenu.classList.remove("display-none");
      cozyNavMenu.classList.add("full-screen");
      $("body").addClass("overflow-hidden");

      if (cozyNavMenu.classList.contains("full-screen")) {
        responsiveCloseIcon.classList.remove("display-none");

        if (blockOptions.displayEvent === "hover" && !eventAttached) {
          navSubmenu.forEach((submenu) => {
            addSubmenuClickEvent(submenu);
          });

          cozyNavItem.forEach((navItem) => {
            addMegaMenuClickEvent(navItem, cozyNavItem);
          });

          eventAttached = true;
        }
      } else {
        responsiveCloseIcon.classList.add("display-none");
      }
    });

    responsiveCloseIcon.addEventListener("click", function () {
      cozyNavMenu.classList.add("display-none");
      cozyNavMenu.classList.remove("full-screen");
      $("body").removeClass("overflow-hidden");
    });

    // Mega menu navigation item.
    const cozyNavItem = cozyMegaMenu.querySelectorAll(".cozy-mega-menu__item");

    // Hide all cozy mega menu dropdown content elements.
    function hideDisplayedMegaMenu(cozyNavItem, dropdownContent) {
      cozyNavItem.forEach((item) => {
        const content = item.querySelector(".cozy-block-mega-menu__dropdown");
        if (content !== dropdownContent || dropdownContent === null) {
          content.classList.remove("show-cozy-dropdown-content");
        }
      });
    }

    const navSubmenu = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation-submenu.has-child"
    );
    const navSubmenuContainers = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation__submenu-container"
    );
    function hideAllSubmenus() {
      navSubmenuContainers.forEach((container) => {
        container.classList.remove("show-cozy-dropdown-content");
      });
    }

    function hideSiblings(element) {
      const siblings = $(element).siblings(
        ".wp-block-navigation-submenu.has-child"
      );

      siblings.map((index) => {
        const el = siblings[index];
        const submenuChild = el.querySelector(
          ".wp-block-navigation__submenu-container"
        );
        submenuChild.classList.remove("show-cozy-dropdown-content");
      });
    }

    function toggleSubmenu(submenuContainer, event) {
      hideSiblings(submenuContainer.parentNode);

      submenuContainer.classList.toggle("show-cozy-dropdown-content");
    }

    function addSubmenuClickEvent(submenu) {
      submenu.addEventListener("click", function (e) {
        // Hide Mega menu if any displayed.
        hideDisplayedMegaMenu(cozyNavItem, null);

        const submenuContainer = this.querySelector(
          ".wp-block-navigation__submenu-container"
        );

        if (submenuContainer) {
          e.stopPropagation();

          toggleSubmenu(submenuContainer, e);
        }
      });
    }

    function addMegaMenuClickEvent(navItem, cozyNavItem) {
      const dropdownContent = navItem.querySelector(
        ".cozy-block-mega-menu__dropdown"
      );

      navItem.addEventListener("click", function (e) {
        hideAllSubmenus();

        $(this)
          .siblings(".cozy-mega-menu__item")
          .find(".cozy-block-mega-menu__dropdown")
          .removeClass("show-cozy-dropdown-content");

        const navItemChild = $(this).find(".wp-block-navigation-item__content");

        if (
          dropdownContent.classList.contains("show-cozy-dropdown-content") &&
          (e.target === this ||
            e.target === navItemChild ||
            $(navItemChild).has(e.target))
        ) {
          dropdownContent.classList.remove("show-cozy-dropdown-content");
        } else {
          dropdownContent.classList.add("show-cozy-dropdown-content");
        }
      });
    }

    function renderDropdownIcon(submenu) {
      if (blockOptions.icon.enabled) {
        const itemContent = submenu.querySelector(
          ".wp-block-navigation-item__content"
        );

        // Create icon wrapper element
        var iconWrapper = document.createElement("div");
        iconWrapper.className = "cozy-dropdown-icon-wrapper";
        iconWrapper.innerHTML = `
              <svg
                class="cozy-dropdown-icon"
                width="${blockOptions.icon.size}"
                height="${blockOptions.icon.size}"
                ${
                  blockOptions.icon.layout === "fill"
                    ? "stroke='none' fill='" + blockOptions.icon.color + "'"
                    : ""
                }
                ${
                  blockOptions.icon.layout === "outline"
                    ? "fill='none' stroke='" + blockOptions.icon.color + "'"
                    : ""
                }
                viewBox="${blockOptions.icon.viewBox.vx} ${
          blockOptions.icon.viewBox.vy
        } ${blockOptions.icon.viewBox.vw} ${blockOptions.icon.viewBox.vh}"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path d="${blockOptions.icon.path}"/>
              </svg>
            `;

        //Check if '.cozy-dropdown-icon-wrapper' exists.
        const iconWrapperExists = submenu.querySelector(
          ".cozy-dropdown-icon-wrapper"
        );

        if (!iconWrapperExists) {
          itemContent.parentNode.insertBefore(
            iconWrapper,
            itemContent.nextSibling
          );
        }
      }
    }

    navSubmenu.forEach((submenu) => {
      renderDropdownIcon(submenu);

      if (blockOptions.displayEvent === "click") {
        addSubmenuClickEvent(submenu);
      }
    });

    //Render mega menu template content in dropdown div.
    const dropdownItem = cozyMegaMenu.querySelectorAll(
      ".wp-block-navigation-item.cozy-mega-menu__item"
    );
    dropdownItem.forEach((item) => {
      const template = blockOptions.megaMenuTemplates.filter((template) =>
        item.classList.contains("template-id-" + template.ID)
      );

      renderDropdownIcon(item);

      const dropdownContent = document.createElement("div");
      dropdownContent.className = "cozy-block-mega-menu__dropdown";

      dropdownContent.innerHTML = template[0].render;

      item.appendChild(dropdownContent);
    });

    // Adding click event for display event "click".
    if (
      blockOptions.displayEvent === "click" ||
      cozyNavMenu.classList.contains("full-screen")
    ) {
      cozyNavItem.forEach((navItem) => {
        addMegaMenuClickEvent(navItem, cozyNavItem);
      });
    }

    // Add a click event listener to the document
    document.addEventListener("click", function (event) {
      const cozyMenuWrapper = $(megaMenuClass + " .cozy-menu-wrapper");

      // Check if the clicked element is inside the .cozy-menu-wrapper
      if ($(cozyMenuWrapper).find(event.target).length <= 0) {
        hideAllSubmenus();

        // Hide the dropdown.
        $(cozyMenuWrapper)
          .find(".cozy-block-mega-menu__dropdown")
          .removeClass("show-cozy-dropdown-content");
      }
    });
  };
})(jQuery);
