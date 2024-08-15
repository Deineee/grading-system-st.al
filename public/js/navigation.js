function closeOtherDropdowns(openDropdown) {
    document.querySelectorAll("details.dropdown").forEach((dropdown) => {
      if (dropdown !== openDropdown && dropdown.hasAttribute("open")) {
        dropdown.removeAttribute("open");
      }
    });
  }

  document.querySelectorAll(".dropdown summary").forEach((summary) => {
    summary.addEventListener("click", function() {
      const dropdown = this.parentElement;
      closeOtherDropdowns(dropdown);
    });
  });

  function closeOpenDropdowns(e) {
    if (!e.target.closest('details.dropdown')) {
      document.querySelectorAll("details.dropdown[open]").forEach((dropdown) => {
        dropdown.removeAttribute("open");
      });
    }
  }

  document.addEventListener("click", closeOpenDropdowns);