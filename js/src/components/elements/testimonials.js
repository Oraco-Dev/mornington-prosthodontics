let currentIndex = 0;
const testimonials = document.querySelectorAll(".testimonial");
const prevButton = document.getElementById("prevTestimonialButton");
const nextButton = document.getElementById("nextTestimonialButton");

if (prevButton && nextButton) {
  nextButton.addEventListener("click", function () {
    nextTestimonial();
  });

  prevButton.addEventListener("click", function () {
    prevTestimonial();
  });

  showTestimonial(currentIndex);
  updateButtonsVisibility();
}

function showTestimonial(index) {
  testimonials.forEach((testimonial) => (testimonial.style.display = "none"));
  testimonials[index].style.display = "block";
}

function nextTestimonial() {
  currentIndex = (currentIndex + 1) % testimonials.length;
  showTestimonial(currentIndex);
  updateButtonsVisibility();
}

function prevTestimonial() {
  currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
  showTestimonial(currentIndex);
  updateButtonsVisibility();
}

function updateButtonsVisibility() {
  prevButton.style.display = currentIndex === 0 ? "none" : "block";
  nextButton.style.display =
    currentIndex === testimonials.length - 1 ? "none" : "block";
}

// Show the initial testimonial
