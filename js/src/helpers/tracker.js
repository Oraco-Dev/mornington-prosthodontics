// Select the elements you want to track
// const heroElement = document.querySelector(".f-hero");

// MULTIPLE ELEMENTS
const fadeContents = document.querySelectorAll(".fade-content");

// Options for the Intersection Observer
const options = {
  root: null, // Use the viewport as the root
  rootMargin: "0px", // No margin
  // threshold: 0.1, // Trigger when 50% of the element is visible
};

// Callback function when an observed element is intersecting
const handleIntersection = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const element = entry.target;
      element.classList.add("in-view");
    } else {
      // Element is not in view
      // Perform your action here, e.g., remove a class, reset an animation, etc.
      return;
    }
  });
};

// Create an Intersection Observer instance
const observer = new IntersectionObserver(handleIntersection, options);

// Start observing the elements
// observer.observe(headerElement);
// observer.observe(heroElement);

// MULTIPLE ELEMENTS
fadeContents.forEach((element) => observer.observe(element));
