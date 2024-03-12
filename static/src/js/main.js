document.addEventListener("DOMContentLoaded", function () {
  new Splide("#hero-slide", {
    width: "100vw",
    type: "loop", // Enable looping for continuous playback
    autoplay: true, // Enable autoplay
    interval: 3000, // Set autoplay interval in milliseconds (3 seconds)
    pagination: false,
    // Other Splide options as needed (e.g., arrows, pagination)
  }).mount();
});

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#noticias-slide", {
    gap: "20px",
    pagination: true,
    paginationPosition: "bottom",
    perPage: 4,
    breakpoints: {
      640: {
        perPage: 1,
      },
    },
  }).mount();
});
