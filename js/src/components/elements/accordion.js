// FAQ ACCORDIONS
const accordionItems = document.querySelectorAll(".accordion-item");
// Add click event listener to each item's title
accordionItems.forEach((item) => {
  const title = item.querySelector(".accordion-item__head");
  const icon = item.querySelector(".accordion-item__head-img");
  const content = item.querySelector(".accordion-item__content");

  title.addEventListener("click", () => {
    // Toggle the 'expanded' class on the content section
    content.classList.toggle("open");
    icon.classList.toggle("open");
  });
});

// MENU ACCORDIONS
const menuAccordionItems = document.querySelectorAll(".menu-accordion-item");
// Add click event listener to each item's title
menuAccordionItems.forEach((item) => {
  const title = item.querySelector(".menu-accordion-item__head");
  const icon = item.querySelector(".menu-accordion-item__head-img");
  const content = item.querySelector(".menu-accordion-item__content");

  title.addEventListener("click", () => {
    // Toggle the 'expanded' class on the content section
    content.classList.toggle("open");
    icon.classList.toggle("open");
  });
});
