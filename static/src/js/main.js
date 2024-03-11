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
    rewind: false,
    pagination: false,
    paginationPosition: "bottom",
    role: false,

    grid: {
      cols: 1,
    },
    breakpoints: {
      800: {
        grid: {
          cols: 1,
        },
      },
      600: {
        grid: {
          cols: 1,
        },
      },
    },
    // Other Splide options as needed (e.g., arrows, pagination)
  }).mount();
});
