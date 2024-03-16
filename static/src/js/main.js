/* -------------- */
/* Slides*/
/* -------------- */
document.addEventListener("DOMContentLoaded", function () {
  var heroSlide = document.getElementById("hero-slide");
  if (heroSlide) {
    new Splide(heroSlide, {
      width: "100vw",
      type: "loop",
      autoplay: true,
      interval: 3500,
      pagination: false,
      // Other Splide options as needed
    }).mount();
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var noticiasSlide = document.getElementById("noticias-slide");
  if (noticiasSlide) {
    new Splide(noticiasSlide, {
      gap: "20px",
      pagination: false,
      paginationPosition: "bottom",
      perPage: 4,
      breakpoints: {
        640: {
          perPage: 1,
        },
      },
    }).mount();
  }
});
/* -------------- */
/* Modal */
/* -------------- */
function ativarmodalnew() {
  var modal = document.getElementById("modalnews");
  var overlay = document.getElementById("overlay");
  modal.style.display = "block";
  overlay.style.display = "block";
}
function fecharmodalnew() {
  var modal = document.getElementById("modalnews");
  var overlay = document.getElementById("overlay");
  modal.style.display = "none";
  overlay.style.display = "none";
}
/* -------------- */
/* Select Custom + Dropbox */
/* -------------- */
// Seleciona todos os botões que abrem dropdowns
const dropdownButtons = document.querySelectorAll(".select-inovahc-button");
// Função para alternar a visibilidade do dropdown ao clicar em um botão
function toggleDropdown(event) {
  // Obtém o botão que foi clicado
  const button = event.currentTarget;
  // Obtém o ID associado ao botão clicado
  const dropdownId = button.getAttribute("data-id");
  // Seleciona o dropdown correspondente usando o ID
  const dropdownMenu = document.querySelector(
    `.select-inovahc-dropdown[data-id="${dropdownId}"]`
  );
  // Obtém a seta dentro do botão para girar conforme necessário
  const chevron = button.querySelector(".chevron");
  // Verifica se o dropdown está atualmente aberto
  const isActive = dropdownMenu.classList.contains("active");

  // Fecha todos os dropdowns antes de abrir o atual
  closeAllDropdowns();

  // Se o dropdown não estiver aberto, abre e gira a seta
  if (!isActive) {
    dropdownMenu.classList.add("active");
    chevron.style.transform = "rotate(180deg)";
  }
  // Evita que o clique no botão propague para o documento
  event.stopPropagation();
}

// Função para fechar todos os dropdowns abertos
function closeAllDropdowns() {
  dropdownButtons.forEach((button) => {
    const dropdownId = button.getAttribute("data-id");
    const dropdownMenu = document.querySelector(
      `.select-inovahc-dropdown[data-id="${dropdownId}"]`
    );
    const chevron = button.querySelector(".chevron");

    // Se o dropdown estiver aberto, fecha e restaura a posição da seta
    if (dropdownMenu && dropdownMenu.classList.contains("active")) {
      dropdownMenu.classList.remove("active");
      chevron.style.transform = "rotate(0deg)";
    }
  });
}

// Função para fechar dropdowns ao clicar fora dos botões
function closeDropdownsOnOutsideClick(event) {
  // Verifica se o clique ocorreu dentro de um dropdown
  const isDropdownClick = event.target.closest(".select-inovahc-dropdown");

  // Se o clique não ocorreu dentro de um dropdown, fecha todos os dropdowns
  if (!isDropdownClick) {
    closeAllDropdowns();
  }
}
// Adiciona um ouvinte de eventos ao documento para fechar dropdowns ao clicar fora dos botões
document.addEventListener("click", closeDropdownsOnOutsideClick);
// Adiciona um ouvinte de eventos de clique a cada botão para alternar os dropdowns
dropdownButtons.forEach((button) =>
  button.addEventListener("click", toggleDropdown)
);
/* -------------- */
/* Parallax */
/* -------------- */
document.addEventListener("DOMContentLoaded", function () {
  var scene = document.getElementById("scene");
  var parallaxInstance = new Parallax(scene, {
    relativeInput: true,
  });
});

/* -------------- */
/* Scroll */
/* -------------- */
document.addEventListener("DOMContentLoaded", function () {
  let isScrolled = false;
  let isScrollUp = false;
  let scrollPos = 0;

  const controllerNav = document.querySelector(".controller-nav");

  function handleScroll() {
    isScrolled = window.scrollY > 100;
    isScrollUp = window.scrollY < scrollPos;
    scrollPos = window.scrollY;
    if (isScrolled && !isScrollUp) {
      controllerNav.classList.add("scroll-on");
      controllerNav.classList.remove("scroll-up");
    } else {
      controllerNav.classList.remove("scroll-on");
      controllerNav.classList.add("scroll-up");
    }
  }
  function mountScrollHandler() {
    scrollPos = window.scrollY;
    window.addEventListener("scroll", handleScroll);
  }

  function unmountScrollHandler() {
    window.removeEventListener("scroll", handleScroll);
  }

  mountScrollHandler();
  window.addEventListener("beforeunload", unmountScrollHandler);
});

/* -------------- */
/* Bloquei scroll com menu aberto no mobile */
/* -------------- */
document.addEventListener("DOMContentLoaded", function () {
  var toggleMenuMobile = document.getElementById("toggle-menuMobile");
  toggleMenuMobile.addEventListener("change", function () {
    if (this.checked) {
      document.body.classList.add("menu-open");
    } else {
      document.body.classList.remove("menu-open");
    }
  });
});
