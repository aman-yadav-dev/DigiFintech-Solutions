(function () {
  "use strict";

  var toggle = document.querySelector("[data-menu-toggle]");
  var close = document.querySelector("[data-menu-close]");
  var drawer = document.querySelector("[data-mobile-drawer]");
  var drawerLinks = document.querySelectorAll("[data-drawer-link]");
  var scrollLinks = document.querySelectorAll("[data-scroll-link]");
  var body = document.body;

  if (!toggle || !drawer) return;

  function setMenu(open) {
    toggle.setAttribute("aria-expanded", String(open));
    toggle.setAttribute("aria-label", open ? "Close navigation menu" : "Open navigation menu");
    drawer.classList.toggle("open", open);
    drawer.setAttribute("aria-hidden", String(!open));
    body.style.overflow = open ? "hidden" : "";

    var focusable = drawer.querySelectorAll("a, button");
    focusable.forEach(function (element) {
      element.tabIndex = open ? 0 : -1;
    });

    if (open) {
      var firstLink = drawer.querySelector("a");
      if (firstLink) firstLink.focus();
    } else {
      toggle.focus();
    }
  }

  function scrollToTarget(event) {
    var href = event.currentTarget.getAttribute("href");
    if (!href || href.charAt(0) !== "#") return;
    var target = document.querySelector(href);
    if (!target) return;
    event.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
    if (drawer.classList.contains("open")) setMenu(false);
  }

  toggle.addEventListener("click", function () {
    setMenu(toggle.getAttribute("aria-expanded") !== "true");
  });

  if (close) close.addEventListener("click", function () { setMenu(false); });
  drawerLinks.forEach(function (link) { link.addEventListener("click", scrollToTarget); });
  scrollLinks.forEach(function (link) { link.addEventListener("click", scrollToTarget); });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && drawer.classList.contains("open")) setMenu(false);
  });

  document.addEventListener("click", function (event) {
    if (!drawer.classList.contains("open")) return;
    if (event.target === drawer || toggle.contains(event.target) || drawer.contains(event.target)) return;
    setMenu(false);
  });
})();