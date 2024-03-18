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
        500: {
          perPage: 1,
        },
        750: {
          perPage: 2,
        },
        1000: {
          perPage: 3,
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
    if(scene){
        var parallaxInstance = new Parallax(scene, {
            relativeInput: true,
        });
    }
});

/* -------------- */
/* Scroll */
/* -------------- */
document.addEventListener("DOMContentLoaded", function () {
  let isScrolled = false;
  let isScrollUp = false;
  let scrollPos = 0;

  const controllerNav = document.querySelector(".controller-nav");
  const controllerAside = document.querySelector("aside");

  function handleScroll() {
    isScrolled = window.scrollY > 100;
    isScrollUp = window.scrollY < scrollPos;
    scrollPos = window.scrollY;
    if (isScrolled && !isScrollUp) {
      controllerNav.classList.add("scroll-on");
      controllerNav.classList.remove("scroll-up");
      if(controllerAside){
        controllerAside.classList.add("top-[20px]");
        controllerAside.classList.remove("top-[100px]");
      }
    } else {
      controllerNav.classList.remove("scroll-on");
      controllerNav.classList.add("scroll-up");
      if(controllerAside){
        controllerAside.classList.add("top-[100px]");
        controllerAside.classList.remove("top-[20px]");
      }
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

/* -------------- */
/* Archive tags de pesquisa */
/* -------------- */
const filteredTaxonomies = document.getElementById('filtered-taxonomies');
const aplicarFiltrosArchive = document.getElementById('aplicar-filtros-archive');
if(filteredTaxonomies && aplicarFiltrosArchive){
    const searchText = document.getElementById('search-input');
    const categories = document.querySelectorAll('input[name=category]');
    const tecnologias = document.querySelectorAll('input[name=tecnologia]');
    const instituicoes = document.querySelectorAll('input[name=instituicao]');
    let selectedTerms = {
        cat: new Set(),
        tecnologia: new Set(),
        instituicao: new Set()
    };
    [...categories,...tecnologias,...instituicoes].forEach(dom=>{
        createOrRemoveFilterLabel(dom);
        prepareFiltrosUrl();
        dom.addEventListener('change', _ => {
            createOrRemoveFilterLabel(_.target);
            prepareFiltrosUrl();
        });
    });

    function createOrRemoveFilterLabel(target){
        if( !target.checked ){
            let lb = document.getElementById(`filtered-label-${target.value}`);
            if(lb) lb.remove();
            selectedTerms[target.dataset.tax].delete(target.value);
        }
        else{
            let label = new DOMParser().parseFromString(`<label id="filtered-label-${target.value}" for="filter_${target.value}" class="tag">${target.dataset.name} <svg width="5" height="5" class="fill-inovahc-blue-800 ml-2 "><use xlink:href="#icon-fechar-menu"></use></svg></label>`, 'text/html').querySelector('label');
            filteredTaxonomies.append( label );
            selectedTerms[target.dataset.tax].add(target.value);
        }
    }

    function prepareFiltrosUrl(){
        let url = aplicarFiltrosArchive.dataset.baseurl+'?s='+searchText.value;

        if(selectedTerms.cat.size){
            selectedTerms.cat.forEach((cat, idx) => url+=('&cat[]='+cat));
        }
        if(selectedTerms.tecnologia.size){
            selectedTerms.tecnologia.forEach((cat, idx) => url+=('&tecnologia[]='+cat));
        }
        if(selectedTerms.instituicao.size){
            selectedTerms.instituicao.forEach((cat, idx) => url+=('&instituicao[]='+cat));
        }

        aplicarFiltrosArchive.setAttribute('href', url);
    }

    searchText.addEventListener('input', _ => {
        prepareFiltrosUrl();
    });
    searchText.addEventListener('keypress', e => {
        if(e.key === "Enter"){
            filterSubmit()
        }
    });

    function filterSubmit(){
        aplicarFiltrosArchive.click();
    }
}