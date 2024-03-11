document.addEventListener("DOMContentLoaded", function () {
  new Splide("#hero-slide", {
    width: "100vw",
    type: "loop", // Enable looping for continuous playback
    autoplay: true, // Enable autoplay
    interval: 3000, // Set autoplay interval in milliseconds (3 seconds)
    pagination: false,
  }).mount();
});

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#noticias-slide", {
    rewind: false,
    pagination: true,
    paginationPosition: "bottom",
    role: false,
  }).mount();
});
