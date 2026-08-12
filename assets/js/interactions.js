(function () {
  "use strict";

  var industryButtons = document.querySelectorAll("[data-industry]");
  var industryTitle = document.querySelector("[data-industry-title]");
  var industryDetail = document.querySelector("[data-industry-detail]");
  var industryKicker = document.querySelector(".detail-kicker");

  industryButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var index = Number(button.dataset.industry);
      var title = button.dataset.title;
      var detail = button.dataset.detail;
      if (!title || !detail) return;

      industryButtons.forEach(function (item) {
        var selected = item === button;
        item.classList.toggle("active", selected);
        item.setAttribute("aria-selected", String(selected));
      });

      industryTitle.textContent = title;
      industryDetail.textContent = detail;
      industryKicker.textContent = "Sector focus / 0" + (index + 1);
    });
  });

  var sections = document.querySelectorAll("main section[id]");
  var navLinks = document.querySelectorAll("[data-nav-link]");

  if ("IntersectionObserver" in window && sections.length && navLinks.length) {
    var activeObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        navLinks.forEach(function (link) {
          link.classList.toggle("active", link.getAttribute("href") === "#" + entry.target.id);
        });
      });
    }, { rootMargin: "-35% 0px -55% 0px", threshold: 0 });
    sections.forEach(function (section) { activeObserver.observe(section); });
  }

  // NOTE: Form logic stripped - handled by existing contact.js
})();