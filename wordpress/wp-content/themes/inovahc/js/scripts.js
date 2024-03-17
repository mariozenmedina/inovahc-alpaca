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

!(function (t) {
  if ("object" == typeof exports && "undefined" != typeof module)
    module.exports = t();
  else if ("function" == typeof define && define.amd) define([], t);
  else {
    ("undefined" != typeof window
      ? window
      : "undefined" != typeof global
      ? global
      : "undefined" != typeof self
      ? self
      : this
    ).Parallax = t();
  }
})(function () {
  return (function t(e, i, n) {
    function o(r, a) {
      if (!i[r]) {
        if (!e[r]) {
          var l = "function" == typeof require && require;
          if (!a && l) return l(r, !0);
          if (s) return s(r, !0);
          var h = new Error("Cannot find module '" + r + "'");
          throw ((h.code = "MODULE_NOT_FOUND"), h);
        }
        var u = (i[r] = { exports: {} });
        e[r][0].call(
          u.exports,
          function (t) {
            var i = e[r][1][t];
            return o(i || t);
          },
          u,
          u.exports,
          t,
          e,
          i,
          n
        );
      }
      return i[r].exports;
    }
    for (
      var s = "function" == typeof require && require, r = 0;
      r < n.length;
      r++
    )
      o(n[r]);
    return o;
  })(
    {
      1: [
        function (t, e, i) {
          "use strict";
          function n(t) {
            if (null === t || void 0 === t)
              throw new TypeError(
                "Object.assign cannot be called with null or undefined"
              );
            return Object(t);
          }
          var o = Object.getOwnPropertySymbols,
            s = Object.prototype.hasOwnProperty,
            r = Object.prototype.propertyIsEnumerable;
          e.exports = (function () {
            try {
              if (!Object.assign) return !1;
              var t = new String("abc");
              if (((t[5] = "de"), "5" === Object.getOwnPropertyNames(t)[0]))
                return !1;
              for (var e = {}, i = 0; i < 10; i++)
                e["_" + String.fromCharCode(i)] = i;
              if (
                "0123456789" !==
                Object.getOwnPropertyNames(e)
                  .map(function (t) {
                    return e[t];
                  })
                  .join("")
              )
                return !1;
              var n = {};
              return (
                "abcdefghijklmnopqrst".split("").forEach(function (t) {
                  n[t] = t;
                }),
                "abcdefghijklmnopqrst" ===
                  Object.keys(Object.assign({}, n)).join("")
              );
            } catch (t) {
              return !1;
            }
          })()
            ? Object.assign
            : function (t, e) {
                for (var i, a, l = n(t), h = 1; h < arguments.length; h++) {
                  i = Object(arguments[h]);
                  for (var u in i) s.call(i, u) && (l[u] = i[u]);
                  if (o) {
                    a = o(i);
                    for (var c = 0; c < a.length; c++)
                      r.call(i, a[c]) && (l[a[c]] = i[a[c]]);
                  }
                }
                return l;
              };
        },
        {},
      ],
      2: [
        function (t, e, i) {
          (function (t) {
            (function () {
              var i, n, o, s, r, a;
              "undefined" != typeof performance &&
              null !== performance &&
              performance.now
                ? (e.exports = function () {
                    return performance.now();
                  })
                : void 0 !== t && null !== t && t.hrtime
                ? ((e.exports = function () {
                    return (i() - r) / 1e6;
                  }),
                  (n = t.hrtime),
                  (s = (i = function () {
                    var t;
                    return 1e9 * (t = n())[0] + t[1];
                  })()),
                  (a = 1e9 * t.uptime()),
                  (r = s - a))
                : Date.now
                ? ((e.exports = function () {
                    return Date.now() - o;
                  }),
                  (o = Date.now()))
                : ((e.exports = function () {
                    return new Date().getTime() - o;
                  }),
                  (o = new Date().getTime()));
            }).call(this);
          }).call(this, t("_process"));
        },
        { _process: 3 },
      ],
      3: [
        function (t, e, i) {
          function n() {
            throw new Error("setTimeout has not been defined");
          }
          function o() {
            throw new Error("clearTimeout has not been defined");
          }
          function s(t) {
            if (c === setTimeout) return setTimeout(t, 0);
            if ((c === n || !c) && setTimeout)
              return (c = setTimeout), setTimeout(t, 0);
            try {
              return c(t, 0);
            } catch (e) {
              try {
                return c.call(null, t, 0);
              } catch (e) {
                return c.call(this, t, 0);
              }
            }
          }
          function r(t) {
            if (d === clearTimeout) return clearTimeout(t);
            if ((d === o || !d) && clearTimeout)
              return (d = clearTimeout), clearTimeout(t);
            try {
              return d(t);
            } catch (e) {
              try {
                return d.call(null, t);
              } catch (e) {
                return d.call(this, t);
              }
            }
          }
          function a() {
            v &&
              p &&
              ((v = !1),
              p.length ? (f = p.concat(f)) : (y = -1),
              f.length && l());
          }
          function l() {
            if (!v) {
              var t = s(a);
              v = !0;
              for (var e = f.length; e; ) {
                for (p = f, f = []; ++y < e; ) p && p[y].run();
                (y = -1), (e = f.length);
              }
              (p = null), (v = !1), r(t);
            }
          }
          function h(t, e) {
            (this.fun = t), (this.array = e);
          }
          function u() {}
          var c,
            d,
            m = (e.exports = {});
          !(function () {
            try {
              c = "function" == typeof setTimeout ? setTimeout : n;
            } catch (t) {
              c = n;
            }
            try {
              d = "function" == typeof clearTimeout ? clearTimeout : o;
            } catch (t) {
              d = o;
            }
          })();
          var p,
            f = [],
            v = !1,
            y = -1;
          (m.nextTick = function (t) {
            var e = new Array(arguments.length - 1);
            if (arguments.length > 1)
              for (var i = 1; i < arguments.length; i++)
                e[i - 1] = arguments[i];
            f.push(new h(t, e)), 1 !== f.length || v || s(l);
          }),
            (h.prototype.run = function () {
              this.fun.apply(null, this.array);
            }),
            (m.title = "browser"),
            (m.browser = !0),
            (m.env = {}),
            (m.argv = []),
            (m.version = ""),
            (m.versions = {}),
            (m.on = u),
            (m.addListener = u),
            (m.once = u),
            (m.off = u),
            (m.removeListener = u),
            (m.removeAllListeners = u),
            (m.emit = u),
            (m.prependListener = u),
            (m.prependOnceListener = u),
            (m.listeners = function (t) {
              return [];
            }),
            (m.binding = function (t) {
              throw new Error("process.binding is not supported");
            }),
            (m.cwd = function () {
              return "/";
            }),
            (m.chdir = function (t) {
              throw new Error("process.chdir is not supported");
            }),
            (m.umask = function () {
              return 0;
            });
        },
        {},
      ],
      4: [
        function (t, e, i) {
          (function (i) {
            for (
              var n = t("performance-now"),
                o = "undefined" == typeof window ? i : window,
                s = ["moz", "webkit"],
                r = "AnimationFrame",
                a = o["request" + r],
                l = o["cancel" + r] || o["cancelRequest" + r],
                h = 0;
              !a && h < s.length;
              h++
            )
              (a = o[s[h] + "Request" + r]),
                (l = o[s[h] + "Cancel" + r] || o[s[h] + "CancelRequest" + r]);
            if (!a || !l) {
              var u = 0,
                c = 0,
                d = [];
              (a = function (t) {
                if (0 === d.length) {
                  var e = n(),
                    i = Math.max(0, 1e3 / 60 - (e - u));
                  (u = i + e),
                    setTimeout(function () {
                      var t = d.slice(0);
                      d.length = 0;
                      for (var e = 0; e < t.length; e++)
                        if (!t[e].cancelled)
                          try {
                            t[e].callback(u);
                          } catch (t) {
                            setTimeout(function () {
                              throw t;
                            }, 0);
                          }
                    }, Math.round(i));
                }
                return d.push({ handle: ++c, callback: t, cancelled: !1 }), c;
              }),
                (l = function (t) {
                  for (var e = 0; e < d.length; e++)
                    d[e].handle === t && (d[e].cancelled = !0);
                });
            }
            (e.exports = function (t) {
              return a.call(o, t);
            }),
              (e.exports.cancel = function () {
                l.apply(o, arguments);
              }),
              (e.exports.polyfill = function () {
                (o.requestAnimationFrame = a), (o.cancelAnimationFrame = l);
              });
          }).call(
            this,
            "undefined" != typeof global
              ? global
              : "undefined" != typeof self
              ? self
              : "undefined" != typeof window
              ? window
              : {}
          );
        },
        { "performance-now": 2 },
      ],
      5: [
        function (t, e, i) {
          "use strict";
          function n(t, e) {
            if (!(t instanceof e))
              throw new TypeError("Cannot call a class as a function");
          }
          var o = (function () {
              function t(t, e) {
                for (var i = 0; i < e.length; i++) {
                  var n = e[i];
                  (n.enumerable = n.enumerable || !1),
                    (n.configurable = !0),
                    "value" in n && (n.writable = !0),
                    Object.defineProperty(t, n.key, n);
                }
              }
              return function (e, i, n) {
                return i && t(e.prototype, i), n && t(e, n), e;
              };
            })(),
            s = t("raf"),
            r = t("object-assign"),
            a = {
              propertyCache: {},
              vendors: [
                null,
                ["-webkit-", "webkit"],
                ["-moz-", "Moz"],
                ["-o-", "O"],
                ["-ms-", "ms"],
              ],
              clamp: function (t, e, i) {
                return e < i
                  ? t < e
                    ? e
                    : t > i
                    ? i
                    : t
                  : t < i
                  ? i
                  : t > e
                  ? e
                  : t;
              },
              data: function (t, e) {
                return a.deserialize(t.getAttribute("data-" + e));
              },
              deserialize: function (t) {
                return (
                  "true" === t ||
                  ("false" !== t &&
                    ("null" === t
                      ? null
                      : !isNaN(parseFloat(t)) && isFinite(t)
                      ? parseFloat(t)
                      : t))
                );
              },
              camelCase: function (t) {
                return t.replace(/-+(.)?/g, function (t, e) {
                  return e ? e.toUpperCase() : "";
                });
              },
              accelerate: function (t) {
                a.css(t, "transform", "translate3d(0,0,0) rotate(0.0001deg)"),
                  a.css(t, "transform-style", "preserve-3d"),
                  a.css(t, "backface-visibility", "hidden");
              },
              transformSupport: function (t) {
                for (
                  var e = document.createElement("div"),
                    i = !1,
                    n = null,
                    o = !1,
                    s = null,
                    r = null,
                    l = 0,
                    h = a.vendors.length;
                  l < h;
                  l++
                )
                  if (
                    (null !== a.vendors[l]
                      ? ((s = a.vendors[l][0] + "transform"),
                        (r = a.vendors[l][1] + "Transform"))
                      : ((s = "transform"), (r = "transform")),
                    void 0 !== e.style[r])
                  ) {
                    i = !0;
                    break;
                  }
                switch (t) {
                  case "2D":
                    o = i;
                    break;
                  case "3D":
                    if (i) {
                      var u = document.body || document.createElement("body"),
                        c = document.documentElement,
                        d = c.style.overflow,
                        m = !1;
                      document.body ||
                        ((m = !0),
                        (c.style.overflow = "hidden"),
                        c.appendChild(u),
                        (u.style.overflow = "hidden"),
                        (u.style.background = "")),
                        u.appendChild(e),
                        (e.style[r] = "translate3d(1px,1px,1px)"),
                        (o =
                          void 0 !==
                            (n = window
                              .getComputedStyle(e)
                              .getPropertyValue(s)) &&
                          n.length > 0 &&
                          "none" !== n),
                        (c.style.overflow = d),
                        u.removeChild(e),
                        m &&
                          (u.removeAttribute("style"),
                          u.parentNode.removeChild(u));
                    }
                }
                return o;
              },
              css: function (t, e, i) {
                var n = a.propertyCache[e];
                if (!n)
                  for (var o = 0, s = a.vendors.length; o < s; o++)
                    if (
                      ((n =
                        null !== a.vendors[o]
                          ? a.camelCase(a.vendors[o][1] + "-" + e)
                          : e),
                      void 0 !== t.style[n])
                    ) {
                      a.propertyCache[e] = n;
                      break;
                    }
                t.style[n] = i;
              },
            },
            l = {
              relativeInput: !1,
              clipRelativeInput: !1,
              inputElement: null,
              hoverOnly: !1,
              calibrationThreshold: 100,
              calibrationDelay: 500,
              supportDelay: 500,
              calibrateX: !1,
              calibrateY: !0,
              invertX: !0,
              invertY: !0,
              limitX: !1,
              limitY: !1,
              scalarX: 10,
              scalarY: 10,
              frictionX: 0.1,
              frictionY: 0.1,
              originX: 0.5,
              originY: 0.5,
              pointerEvents: !1,
              precision: 1,
              onReady: null,
              selector: null,
            },
            h = (function () {
              function t(e, i) {
                n(this, t), (this.element = e);
                var o = {
                  calibrateX: a.data(this.element, "calibrate-x"),
                  calibrateY: a.data(this.element, "calibrate-y"),
                  invertX: a.data(this.element, "invert-x"),
                  invertY: a.data(this.element, "invert-y"),
                  limitX: a.data(this.element, "limit-x"),
                  limitY: a.data(this.element, "limit-y"),
                  scalarX: a.data(this.element, "scalar-x"),
                  scalarY: a.data(this.element, "scalar-y"),
                  frictionX: a.data(this.element, "friction-x"),
                  frictionY: a.data(this.element, "friction-y"),
                  originX: a.data(this.element, "origin-x"),
                  originY: a.data(this.element, "origin-y"),
                  pointerEvents: a.data(this.element, "pointer-events"),
                  precision: a.data(this.element, "precision"),
                  relativeInput: a.data(this.element, "relative-input"),
                  clipRelativeInput: a.data(
                    this.element,
                    "clip-relative-input"
                  ),
                  hoverOnly: a.data(this.element, "hover-only"),
                  inputElement: document.querySelector(
                    a.data(this.element, "input-element")
                  ),
                  selector: a.data(this.element, "selector"),
                };
                for (var s in o) null === o[s] && delete o[s];
                r(this, l, o, i),
                  this.inputElement || (this.inputElement = this.element),
                  (this.calibrationTimer = null),
                  (this.calibrationFlag = !0),
                  (this.enabled = !1),
                  (this.depthsX = []),
                  (this.depthsY = []),
                  (this.raf = null),
                  (this.bounds = null),
                  (this.elementPositionX = 0),
                  (this.elementPositionY = 0),
                  (this.elementWidth = 0),
                  (this.elementHeight = 0),
                  (this.elementCenterX = 0),
                  (this.elementCenterY = 0),
                  (this.elementRangeX = 0),
                  (this.elementRangeY = 0),
                  (this.calibrationX = 0),
                  (this.calibrationY = 0),
                  (this.inputX = 0),
                  (this.inputY = 0),
                  (this.motionX = 0),
                  (this.motionY = 0),
                  (this.velocityX = 0),
                  (this.velocityY = 0),
                  (this.onMouseMove = this.onMouseMove.bind(this)),
                  (this.onDeviceOrientation =
                    this.onDeviceOrientation.bind(this)),
                  (this.onDeviceMotion = this.onDeviceMotion.bind(this)),
                  (this.onOrientationTimer =
                    this.onOrientationTimer.bind(this)),
                  (this.onMotionTimer = this.onMotionTimer.bind(this)),
                  (this.onCalibrationTimer =
                    this.onCalibrationTimer.bind(this)),
                  (this.onAnimationFrame = this.onAnimationFrame.bind(this)),
                  (this.onWindowResize = this.onWindowResize.bind(this)),
                  (this.windowWidth = null),
                  (this.windowHeight = null),
                  (this.windowCenterX = null),
                  (this.windowCenterY = null),
                  (this.windowRadiusX = null),
                  (this.windowRadiusY = null),
                  (this.portrait = !1),
                  (this.desktop = !navigator.userAgent.match(
                    /(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i
                  )),
                  (this.motionSupport =
                    !!window.DeviceMotionEvent && !this.desktop),
                  (this.orientationSupport =
                    !!window.DeviceOrientationEvent && !this.desktop),
                  (this.orientationStatus = 0),
                  (this.motionStatus = 0),
                  this.initialise();
              }
              return (
                o(t, [
                  {
                    key: "initialise",
                    value: function () {
                      void 0 === this.transform2DSupport &&
                        ((this.transform2DSupport = a.transformSupport("2D")),
                        (this.transform3DSupport = a.transformSupport("3D"))),
                        this.transform3DSupport && a.accelerate(this.element),
                        "static" ===
                          window
                            .getComputedStyle(this.element)
                            .getPropertyValue("position") &&
                          (this.element.style.position = "relative"),
                        this.pointerEvents ||
                          (this.element.style.pointerEvents = "none"),
                        this.updateLayers(),
                        this.updateDimensions(),
                        this.enable(),
                        this.queueCalibration(this.calibrationDelay);
                    },
                  },
                  {
                    key: "doReadyCallback",
                    value: function () {
                      this.onReady && this.onReady();
                    },
                  },
                  {
                    key: "updateLayers",
                    value: function () {
                      this.selector
                        ? (this.layers = this.element.querySelectorAll(
                            this.selector
                          ))
                        : (this.layers = this.element.children),
                        this.layers.length ||
                          console.warn(
                            "ParallaxJS: Your scene does not have any layers."
                          ),
                        (this.depthsX = []),
                        (this.depthsY = []);
                      for (var t = 0; t < this.layers.length; t++) {
                        var e = this.layers[t];
                        this.transform3DSupport && a.accelerate(e),
                          (e.style.position = t ? "absolute" : "relative"),
                          (e.style.display = "block"),
                          (e.style.left = 0),
                          (e.style.top = 0);
                        var i = a.data(e, "depth") || 0;
                        this.depthsX.push(a.data(e, "depth-x") || i),
                          this.depthsY.push(a.data(e, "depth-y") || i);
                      }
                    },
                  },
                  {
                    key: "updateDimensions",
                    value: function () {
                      (this.windowWidth = window.innerWidth),
                        (this.windowHeight = window.innerHeight),
                        (this.windowCenterX = this.windowWidth * this.originX),
                        (this.windowCenterY = this.windowHeight * this.originY),
                        (this.windowRadiusX = Math.max(
                          this.windowCenterX,
                          this.windowWidth - this.windowCenterX
                        )),
                        (this.windowRadiusY = Math.max(
                          this.windowCenterY,
                          this.windowHeight - this.windowCenterY
                        ));
                    },
                  },
                  {
                    key: "updateBounds",
                    value: function () {
                      (this.bounds = this.inputElement.getBoundingClientRect()),
                        (this.elementPositionX = this.bounds.left),
                        (this.elementPositionY = this.bounds.top),
                        (this.elementWidth = this.bounds.width),
                        (this.elementHeight = this.bounds.height),
                        (this.elementCenterX =
                          this.elementWidth * this.originX),
                        (this.elementCenterY =
                          this.elementHeight * this.originY),
                        (this.elementRangeX = Math.max(
                          this.elementCenterX,
                          this.elementWidth - this.elementCenterX
                        )),
                        (this.elementRangeY = Math.max(
                          this.elementCenterY,
                          this.elementHeight - this.elementCenterY
                        ));
                    },
                  },
                  {
                    key: "queueCalibration",
                    value: function (t) {
                      clearTimeout(this.calibrationTimer),
                        (this.calibrationTimer = setTimeout(
                          this.onCalibrationTimer,
                          t
                        ));
                    },
                  },
                  {
                    key: "enable",
                    value: function () {
                      this.enabled ||
                        ((this.enabled = !0),
                        this.orientationSupport
                          ? ((this.portrait = !1),
                            window.addEventListener(
                              "deviceorientation",
                              this.onDeviceOrientation
                            ),
                            (this.detectionTimer = setTimeout(
                              this.onOrientationTimer,
                              this.supportDelay
                            )))
                          : this.motionSupport
                          ? ((this.portrait = !1),
                            window.addEventListener(
                              "devicemotion",
                              this.onDeviceMotion
                            ),
                            (this.detectionTimer = setTimeout(
                              this.onMotionTimer,
                              this.supportDelay
                            )))
                          : ((this.calibrationX = 0),
                            (this.calibrationY = 0),
                            (this.portrait = !1),
                            window.addEventListener(
                              "mousemove",
                              this.onMouseMove
                            ),
                            this.doReadyCallback()),
                        window.addEventListener("resize", this.onWindowResize),
                        (this.raf = s(this.onAnimationFrame)));
                    },
                  },
                  {
                    key: "disable",
                    value: function () {
                      this.enabled &&
                        ((this.enabled = !1),
                        this.orientationSupport
                          ? window.removeEventListener(
                              "deviceorientation",
                              this.onDeviceOrientation
                            )
                          : this.motionSupport
                          ? window.removeEventListener(
                              "devicemotion",
                              this.onDeviceMotion
                            )
                          : window.removeEventListener(
                              "mousemove",
                              this.onMouseMove
                            ),
                        window.removeEventListener(
                          "resize",
                          this.onWindowResize
                        ),
                        s.cancel(this.raf));
                    },
                  },
                  {
                    key: "calibrate",
                    value: function (t, e) {
                      (this.calibrateX = void 0 === t ? this.calibrateX : t),
                        (this.calibrateY = void 0 === e ? this.calibrateY : e);
                    },
                  },
                  {
                    key: "invert",
                    value: function (t, e) {
                      (this.invertX = void 0 === t ? this.invertX : t),
                        (this.invertY = void 0 === e ? this.invertY : e);
                    },
                  },
                  {
                    key: "friction",
                    value: function (t, e) {
                      (this.frictionX = void 0 === t ? this.frictionX : t),
                        (this.frictionY = void 0 === e ? this.frictionY : e);
                    },
                  },
                  {
                    key: "scalar",
                    value: function (t, e) {
                      (this.scalarX = void 0 === t ? this.scalarX : t),
                        (this.scalarY = void 0 === e ? this.scalarY : e);
                    },
                  },
                  {
                    key: "limit",
                    value: function (t, e) {
                      (this.limitX = void 0 === t ? this.limitX : t),
                        (this.limitY = void 0 === e ? this.limitY : e);
                    },
                  },
                  {
                    key: "origin",
                    value: function (t, e) {
                      (this.originX = void 0 === t ? this.originX : t),
                        (this.originY = void 0 === e ? this.originY : e);
                    },
                  },
                  {
                    key: "setInputElement",
                    value: function (t) {
                      (this.inputElement = t), this.updateDimensions();
                    },
                  },
                  {
                    key: "setPosition",
                    value: function (t, e, i) {
                      (e = e.toFixed(this.precision) + "px"),
                        (i = i.toFixed(this.precision) + "px"),
                        this.transform3DSupport
                          ? a.css(
                              t,
                              "transform",
                              "translate3d(" + e + "," + i + ",0)"
                            )
                          : this.transform2DSupport
                          ? a.css(
                              t,
                              "transform",
                              "translate(" + e + "," + i + ")"
                            )
                          : ((t.style.left = e), (t.style.top = i));
                    },
                  },
                  {
                    key: "onOrientationTimer",
                    value: function () {
                      this.orientationSupport && 0 === this.orientationStatus
                        ? (this.disable(),
                          (this.orientationSupport = !1),
                          this.enable())
                        : this.doReadyCallback();
                    },
                  },
                  {
                    key: "onMotionTimer",
                    value: function () {
                      this.motionSupport && 0 === this.motionStatus
                        ? (this.disable(),
                          (this.motionSupport = !1),
                          this.enable())
                        : this.doReadyCallback();
                    },
                  },
                  {
                    key: "onCalibrationTimer",
                    value: function () {
                      this.calibrationFlag = !0;
                    },
                  },
                  {
                    key: "onWindowResize",
                    value: function () {
                      this.updateDimensions();
                    },
                  },
                  {
                    key: "onAnimationFrame",
                    value: function () {
                      this.updateBounds();
                      var t = this.inputX - this.calibrationX,
                        e = this.inputY - this.calibrationY;
                      (Math.abs(t) > this.calibrationThreshold ||
                        Math.abs(e) > this.calibrationThreshold) &&
                        this.queueCalibration(0),
                        this.portrait
                          ? ((this.motionX = this.calibrateX ? e : this.inputY),
                            (this.motionY = this.calibrateY ? t : this.inputX))
                          : ((this.motionX = this.calibrateX ? t : this.inputX),
                            (this.motionY = this.calibrateY ? e : this.inputY)),
                        (this.motionX *=
                          this.elementWidth * (this.scalarX / 100)),
                        (this.motionY *=
                          this.elementHeight * (this.scalarY / 100)),
                        isNaN(parseFloat(this.limitX)) ||
                          (this.motionX = a.clamp(
                            this.motionX,
                            -this.limitX,
                            this.limitX
                          )),
                        isNaN(parseFloat(this.limitY)) ||
                          (this.motionY = a.clamp(
                            this.motionY,
                            -this.limitY,
                            this.limitY
                          )),
                        (this.velocityX +=
                          (this.motionX - this.velocityX) * this.frictionX),
                        (this.velocityY +=
                          (this.motionY - this.velocityY) * this.frictionY);
                      for (var i = 0; i < this.layers.length; i++) {
                        var n = this.layers[i],
                          o = this.depthsX[i],
                          r = this.depthsY[i],
                          l = this.velocityX * (o * (this.invertX ? -1 : 1)),
                          h = this.velocityY * (r * (this.invertY ? -1 : 1));
                        this.setPosition(n, l, h);
                      }
                      this.raf = s(this.onAnimationFrame);
                    },
                  },
                  {
                    key: "rotate",
                    value: function (t, e) {
                      var i = (t || 0) / 30,
                        n = (e || 0) / 30,
                        o = this.windowHeight > this.windowWidth;
                      this.portrait !== o &&
                        ((this.portrait = o), (this.calibrationFlag = !0)),
                        this.calibrationFlag &&
                          ((this.calibrationFlag = !1),
                          (this.calibrationX = i),
                          (this.calibrationY = n)),
                        (this.inputX = i),
                        (this.inputY = n);
                    },
                  },
                  {
                    key: "onDeviceOrientation",
                    value: function (t) {
                      var e = t.beta,
                        i = t.gamma;
                      null !== e &&
                        null !== i &&
                        ((this.orientationStatus = 1), this.rotate(e, i));
                    },
                  },
                  {
                    key: "onDeviceMotion",
                    value: function (t) {
                      var e = t.rotationRate.beta,
                        i = t.rotationRate.gamma;
                      null !== e &&
                        null !== i &&
                        ((this.motionStatus = 1), this.rotate(e, i));
                    },
                  },
                  {
                    key: "onMouseMove",
                    value: function (t) {
                      var e = t.clientX,
                        i = t.clientY;
                      if (
                        this.hoverOnly &&
                        (e < this.elementPositionX ||
                          e > this.elementPositionX + this.elementWidth ||
                          i < this.elementPositionY ||
                          i > this.elementPositionY + this.elementHeight)
                      )
                        return (this.inputX = 0), void (this.inputY = 0);
                      this.relativeInput
                        ? (this.clipRelativeInput &&
                            ((e = Math.max(e, this.elementPositionX)),
                            (e = Math.min(
                              e,
                              this.elementPositionX + this.elementWidth
                            )),
                            (i = Math.max(i, this.elementPositionY)),
                            (i = Math.min(
                              i,
                              this.elementPositionY + this.elementHeight
                            ))),
                          this.elementRangeX &&
                            this.elementRangeY &&
                            ((this.inputX =
                              (e -
                                this.elementPositionX -
                                this.elementCenterX) /
                              this.elementRangeX),
                            (this.inputY =
                              (i -
                                this.elementPositionY -
                                this.elementCenterY) /
                              this.elementRangeY)))
                        : this.windowRadiusX &&
                          this.windowRadiusY &&
                          ((this.inputX =
                            (e - this.windowCenterX) / this.windowRadiusX),
                          (this.inputY =
                            (i - this.windowCenterY) / this.windowRadiusY));
                    },
                  },
                  {
                    key: "destroy",
                    value: function () {
                      this.disable(),
                        clearTimeout(this.calibrationTimer),
                        clearTimeout(this.detectionTimer),
                        this.element.removeAttribute("style");
                      for (var t = 0; t < this.layers.length; t++)
                        this.layers[t].removeAttribute("style");
                      delete this.element, delete this.layers;
                    },
                  },
                  {
                    key: "version",
                    value: function () {
                      return "3.1.0";
                    },
                  },
                ]),
                t
              );
            })();
          e.exports = h;
        },
        { "object-assign": 1, raf: 4 },
      ],
    },
    {},
    [5]
  )(5);
});
//# sourceMappingURL=parallax.min.js.map

function r(n, t) {
  for (var i = 0; i < t.length; i++) {
    var r = t[i];
    (r.enumerable = r.enumerable || !1),
      (r.configurable = !0),
      "value" in r && (r.writable = !0),
      Object.defineProperty(n, r.key, r);
  }
}
function Jt(n, t, i) {
  t && r(n.prototype, t),
    i && r(n, i),
    Object.defineProperty(n, "prototype", { writable: !1 });
}
/*!
 * Splide.js
 * Version  : 4.1.2
 * License  : MIT
 * Copyright: 2022 Naotoshi Fujita
 */
var n, t;
(n = this),
  (t = function () {
    "use strict";
    var v = "(prefers-reduced-motion: reduce)",
      G = 4,
      rn = 5,
      r = {
        CREATED: 1,
        MOUNTED: 2,
        IDLE: 3,
        MOVING: G,
        SCROLLING: rn,
        DRAGGING: 6,
        DESTROYED: 7,
      };
    function D(n) {
      n.length = 0;
    }
    function o(n, t, i) {
      return Array.prototype.slice.call(n, t, i);
    }
    function R(n) {
      return n.bind.apply(n, [null].concat(o(arguments, 1)));
    }
    function on() {}
    var p = setTimeout;
    function h(n) {
      return requestAnimationFrame(n);
    }
    function u(n, t) {
      return typeof t === n;
    }
    function un(n) {
      return !c(n) && u("object", n);
    }
    var e = Array.isArray,
      x = R(u, "function"),
      C = R(u, "string"),
      en = R(u, "undefined");
    function c(n) {
      return null === n;
    }
    function m(n) {
      try {
        return n instanceof (n.ownerDocument.defaultView || window).HTMLElement;
      } catch (n) {
        return !1;
      }
    }
    function y(n) {
      return e(n) ? n : [n];
    }
    function g(n, t) {
      y(n).forEach(t);
    }
    function b(n, t) {
      return -1 < n.indexOf(t);
    }
    function k(n, t) {
      return n.push.apply(n, y(t)), n;
    }
    function A(t, n, i) {
      t &&
        g(n, function (n) {
          n && t.classList[i ? "add" : "remove"](n);
        });
    }
    function M(n, t) {
      A(n, C(t) ? t.split(" ") : t, !0);
    }
    function L(n, t) {
      g(t, n.appendChild.bind(n));
    }
    function O(n, i) {
      g(n, function (n) {
        var t = (i || n).parentNode;
        t && t.insertBefore(n, i);
      });
    }
    function cn(n, t) {
      return m(n) && (n.msMatchesSelector || n.matches).call(n, t);
    }
    function S(n, t) {
      n = n ? o(n.children) : [];
      return t
        ? n.filter(function (n) {
            return cn(n, t);
          })
        : n;
    }
    function fn(n, t) {
      return t ? S(n, t)[0] : n.firstElementChild;
    }
    var E = Object.keys;
    function w(t, i, n) {
      t &&
        (n ? E(t).reverse() : E(t)).forEach(function (n) {
          "__proto__" !== n && i(t[n], n);
        });
    }
    function an(r) {
      return (
        o(arguments, 1).forEach(function (i) {
          w(i, function (n, t) {
            r[t] = i[t];
          });
        }),
        r
      );
    }
    function d(i) {
      return (
        o(arguments, 1).forEach(function (n) {
          w(n, function (n, t) {
            e(n)
              ? (i[t] = n.slice())
              : un(n)
              ? (i[t] = d({}, un(i[t]) ? i[t] : {}, n))
              : (i[t] = n);
          });
        }),
        i
      );
    }
    function sn(t, n) {
      g(n || E(t), function (n) {
        delete t[n];
      });
    }
    function P(n, i) {
      g(n, function (t) {
        g(i, function (n) {
          t && t.removeAttribute(n);
        });
      });
    }
    function I(i, t, r) {
      un(t)
        ? w(t, function (n, t) {
            I(i, t, n);
          })
        : g(i, function (n) {
            c(r) || "" === r ? P(n, t) : n.setAttribute(t, String(r));
          });
    }
    function j(n, t, i) {
      n = document.createElement(n);
      return t && (C(t) ? M : I)(n, t), i && L(i, n), n;
    }
    function _(n, t, i) {
      if (en(i)) return getComputedStyle(n)[t];
      c(i) || (n.style[t] = "" + i);
    }
    function ln(n, t) {
      _(n, "display", t);
    }
    function dn(n) {
      (n.setActive && n.setActive()) || n.focus({ preventScroll: !0 });
    }
    function z(n, t) {
      return n.getAttribute(t);
    }
    function vn(n, t) {
      return n && n.classList.contains(t);
    }
    function N(n) {
      return n.getBoundingClientRect();
    }
    function T(n) {
      g(n, function (n) {
        n && n.parentNode && n.parentNode.removeChild(n);
      });
    }
    function hn(n) {
      return fn(new DOMParser().parseFromString(n, "text/html").body);
    }
    function F(n, t) {
      n.preventDefault(),
        t && (n.stopPropagation(), n.stopImmediatePropagation());
    }
    function pn(n, t) {
      return n && n.querySelector(t);
    }
    function gn(n, t) {
      return t ? o(n.querySelectorAll(t)) : [];
    }
    function X(n, t) {
      A(n, t, !1);
    }
    function mn(n) {
      return n.timeStamp;
    }
    function W(n) {
      return C(n) ? n : n ? n + "px" : "";
    }
    var yn = "splide",
      f = "data-" + yn;
    function bn(n, t) {
      if (!n) throw new Error("[" + yn + "] " + (t || ""));
    }
    var Y = Math.min,
      wn = Math.max,
      xn = Math.floor,
      kn = Math.ceil,
      U = Math.abs;
    function Sn(n, t, i) {
      return U(n - t) < i;
    }
    function En(n, t, i, r) {
      var o = Y(t, i),
        t = wn(t, i);
      return r ? o < n && n < t : o <= n && n <= t;
    }
    function q(n, t, i) {
      var r = Y(t, i),
        t = wn(t, i);
      return Y(wn(r, n), t);
    }
    function Ln(n) {
      return (0 < n) - (n < 0);
    }
    function On(t, n) {
      return (
        g(n, function (n) {
          t = t.replace("%s", "" + n);
        }),
        t
      );
    }
    function An(n) {
      return n < 10 ? "0" + n : "" + n;
    }
    var _n = {};
    function zn() {
      var c = [];
      function i(n, i, r) {
        g(n, function (t) {
          t &&
            g(i, function (n) {
              n.split(" ").forEach(function (n) {
                n = n.split(".");
                r(t, n[0], n[1]);
              });
            });
        });
      }
      return {
        bind: function (n, t, u, e) {
          i(n, t, function (n, t, i) {
            var r = "addEventListener" in n,
              o = r
                ? n.removeEventListener.bind(n, t, u, e)
                : n.removeListener.bind(n, u);
            r ? n.addEventListener(t, u, e) : n.addListener(u),
              c.push([n, t, i, u, o]);
          });
        },
        unbind: function (n, t, o) {
          i(n, t, function (t, i, r) {
            c = c.filter(function (n) {
              return (
                !!(
                  n[0] !== t ||
                  n[1] !== i ||
                  n[2] !== r ||
                  (o && n[3] !== o)
                ) || (n[4](), !1)
              );
            });
          });
        },
        dispatch: function (n, t, i) {
          var r;
          return (
            "function" == typeof CustomEvent
              ? (r = new CustomEvent(t, { bubbles: !0, detail: i }))
              : (r = document.createEvent("CustomEvent")).initCustomEvent(
                  t,
                  !0,
                  !1,
                  i
                ),
            n.dispatchEvent(r),
            r
          );
        },
        destroy: function () {
          c.forEach(function (n) {
            n[4]();
          }),
            D(c);
        },
      };
    }
    var B = "mounted",
      H = "move",
      Dn = "moved",
      Mn = "click",
      Pn = "active",
      In = "inactive",
      Rn = "visible",
      Cn = "hidden",
      J = "refresh",
      K = "updated",
      jn = "resize",
      Nn = "resized",
      Tn = "scroll",
      V = "scrolled",
      a = "destroy",
      Gn = "navigation:mounted",
      Fn = "autoplay:play",
      Xn = "autoplay:pause",
      Wn = "lazyload:loaded",
      Yn = "sk",
      Un = "sh";
    function Q(n) {
      var i = n ? n.event.bus : document.createDocumentFragment(),
        r = zn();
      return (
        n && n.event.on(a, r.destroy),
        an(r, {
          bus: i,
          on: function (n, t) {
            r.bind(i, y(n).join(" "), function (n) {
              t.apply(t, e(n.detail) ? n.detail : []);
            });
          },
          off: R(r.unbind, i),
          emit: function (n) {
            r.dispatch(i, n, o(arguments, 1));
          },
        })
      );
    }
    function qn(t, n, i, r) {
      var o,
        u,
        e = Date.now,
        c = 0,
        f = !0,
        a = 0;
      function s() {
        if (!f) {
          if (
            ((c = t ? Y((e() - o) / t, 1) : 1),
            i && i(c),
            1 <= c && (n(), (o = e()), r && ++a >= r))
          )
            return l();
          u = h(s);
        }
      }
      function l() {
        f = !0;
      }
      function d() {
        u && cancelAnimationFrame(u), (f = !(u = c = 0));
      }
      return {
        start: function (n) {
          n || d(), (o = e() - (n ? c * t : 0)), (f = !1), (u = h(s));
        },
        rewind: function () {
          (o = e()), (c = 0), i && i(c);
        },
        pause: l,
        cancel: d,
        set: function (n) {
          t = n;
        },
        isPaused: function () {
          return f;
        },
      };
    }
    function s(n) {
      var t = n;
      return {
        set: function (n) {
          t = n;
        },
        is: function (n) {
          return b(y(n), t);
        },
      };
    }
    var n = "Arrow",
      Bn = n + "Left",
      Hn = n + "Right",
      t = n + "Up",
      n = n + "Down",
      Jn = "ttb",
      l = {
        width: ["height"],
        left: ["top", "right"],
        right: ["bottom", "left"],
        x: ["y"],
        X: ["Y"],
        Y: ["X"],
        ArrowLeft: [t, Hn],
        ArrowRight: [n, Bn],
      };
    var Z = "role",
      $ = "tabindex",
      i = "aria-",
      Kn = i + "controls",
      Vn = i + "current",
      Qn = i + "selected",
      nn = i + "label",
      Zn = i + "labelledby",
      $n = i + "hidden",
      nt = i + "orientation",
      tt = i + "roledescription",
      it = i + "live",
      rt = i + "busy",
      ot = i + "atomic",
      ut = [Z, $, "disabled", Kn, Vn, nn, Zn, $n, nt, tt],
      i = yn + "__",
      et = yn,
      ct = i + "track",
      ft = i + "list",
      at = i + "slide",
      st = at + "--clone",
      lt = at + "__container",
      dt = i + "arrows",
      vt = i + "arrow",
      ht = vt + "--prev",
      pt = vt + "--next",
      gt = i + "pagination",
      mt = gt + "__page",
      yt = i + "progress" + "__bar",
      bt = i + "toggle",
      wt = i + "sr",
      tn = "is-active",
      xt = "is-prev",
      kt = "is-next",
      St = "is-visible",
      Et = "is-loading",
      Lt = "is-focus-in",
      Ot = "is-overflow",
      At = [tn, St, xt, kt, Et, Lt, Ot];
    var _t = "touchstart mousedown",
      zt = "touchmove mousemove",
      Dt = "touchend touchcancel mouseup click";
    var Mt = "slide",
      Pt = "loop",
      It = "fade";
    function Rt(o, r, t, u) {
      var e,
        n = Q(o),
        i = n.on,
        c = n.emit,
        f = n.bind,
        a = o.Components,
        s = o.root,
        l = o.options,
        d = l.isNavigation,
        v = l.updateOnMove,
        h = l.i18n,
        p = l.pagination,
        g = l.slideFocus,
        m = a.Direction.resolve,
        y = z(u, "style"),
        b = z(u, nn),
        w = -1 < t,
        x = fn(u, "." + lt);
      function k() {
        var n = o.splides
          .map(function (n) {
            n = n.splide.Components.Slides.getAt(r);
            return n ? n.slide.id : "";
          })
          .join(" ");
        I(u, nn, On(h.slideX, (w ? t : r) + 1)),
          I(u, Kn, n),
          I(u, Z, g ? "button" : ""),
          g && P(u, tt);
      }
      function S() {
        e || E();
      }
      function E() {
        var n, t, i;
        e ||
          ((n = o.index),
          (i = L()) !== vn(u, tn) &&
            (A(u, tn, i), I(u, Vn, (d && i) || ""), c(i ? Pn : In, O)),
          (i = (function () {
            if (o.is(It)) return L();
            var n = N(a.Elements.track),
              t = N(u),
              i = m("left", !0),
              r = m("right", !0);
            return xn(n[i]) <= kn(t[i]) && xn(t[r]) <= kn(n[r]);
          })()),
          (t = !i && (!L() || w)),
          o.state.is([G, rn]) || I(u, $n, t || ""),
          I(gn(u, l.focusableNodes || ""), $, t ? -1 : ""),
          g && I(u, $, t ? -1 : 0),
          i !== vn(u, St) && (A(u, St, i), c(i ? Rn : Cn, O)),
          i ||
            document.activeElement !== u ||
            ((t = a.Slides.getAt(o.index)) && dn(t.slide)),
          A(u, xt, r === n - 1),
          A(u, kt, r === n + 1));
      }
      function L() {
        var n = o.index;
        return n === r || (l.cloneStatus && n === t);
      }
      var O = {
        index: r,
        slideIndex: t,
        slide: u,
        container: x,
        isClone: w,
        mount: function () {
          w ||
            ((u.id = s.id + "-slide" + An(r + 1)),
            I(u, Z, p ? "tabpanel" : "group"),
            I(u, tt, h.slide),
            I(u, nn, b || On(h.slideLabel, [r + 1, o.length]))),
            f(u, "click", R(c, Mn, O)),
            f(u, "keydown", R(c, Yn, O)),
            i([Dn, Un, V], E),
            i(Gn, k),
            v && i(H, S);
        },
        destroy: function () {
          (e = !0),
            n.destroy(),
            X(u, At),
            P(u, ut),
            I(u, "style", y),
            I(u, nn, b || "");
        },
        update: E,
        style: function (n, t, i) {
          _((i && x) || u, n, t);
        },
        isWithin: function (n, t) {
          return (
            (n = U(n - r)),
            (n = w || (!l.rewind && !o.is(Pt)) ? n : Y(n, o.length - n)) <= t
          );
        },
      };
      return O;
    }
    var Ct = f + "-interval";
    var jt = { passive: !1, capture: !0 };
    var Nt = { Spacebar: " ", Right: Hn, Left: Bn, Up: t, Down: n };
    function Tt(n) {
      return (n = C(n) ? n : n.key), Nt[n] || n;
    }
    var Gt = "keydown";
    var Ft = f + "-lazy",
      Xt = Ft + "-srcset",
      Wt = "[" + Ft + "], [" + Xt + "]";
    var Yt = [" ", "Enter"];
    var Ut = Object.freeze({
        __proto__: null,
        Media: function (r, n, o) {
          var u = r.state,
            t = o.breakpoints || {},
            e = o.reducedMotion || {},
            i = zn(),
            c = [];
          function f(n) {
            n && i.destroy();
          }
          function a(n, t) {
            t = matchMedia(t);
            i.bind(t, "change", s), c.push([n, t]);
          }
          function s() {
            var n = u.is(7),
              t = o.direction,
              i = c.reduce(function (n, t) {
                return d(n, t[1].matches ? t[0] : {});
              }, {});
            sn(o),
              l(i),
              o.destroy
                ? r.destroy("completely" === o.destroy)
                : n
                ? (f(!0), r.mount())
                : t !== o.direction && r.refresh();
          }
          function l(n, t, i) {
            d(o, n),
              t && d(Object.getPrototypeOf(o), n),
              (!i && u.is(1)) || r.emit(K, o);
          }
          return {
            setup: function () {
              var i = "min" === o.mediaQuery;
              E(t)
                .sort(function (n, t) {
                  return i ? +n - +t : +t - +n;
                })
                .forEach(function (n) {
                  a(t[n], "(" + (i ? "min" : "max") + "-width:" + n + "px)");
                }),
                a(e, v),
                s();
            },
            destroy: f,
            reduce: function (n) {
              matchMedia(v).matches && (n ? d(o, e) : sn(o, E(e)));
            },
            set: l,
          };
        },
        Direction: function (n, t, o) {
          return {
            resolve: function (n, t, i) {
              var r =
                "rtl" !== (i = i || o.direction) || t ? (i === Jn ? 0 : -1) : 1;
              return (
                (l[n] && l[n][r]) ||
                n.replace(/width|left|right/i, function (n, t) {
                  n = l[n.toLowerCase()][r] || n;
                  return 0 < t ? n.charAt(0).toUpperCase() + n.slice(1) : n;
                })
              );
            },
            orient: function (n) {
              return n * ("rtl" === o.direction ? 1 : -1);
            },
          };
        },
        Elements: function (n, t, i) {
          var r,
            o,
            u,
            e = Q(n),
            c = e.on,
            f = e.bind,
            a = n.root,
            s = i.i18n,
            l = {},
            d = [],
            v = [],
            h = [];
          function p() {
            (r = y("." + ct)),
              (o = fn(r, "." + ft)),
              bn(r && o, "A track/list element is missing."),
              k(d, S(o, "." + at + ":not(." + st + ")")),
              w(
                {
                  arrows: dt,
                  pagination: gt,
                  prev: ht,
                  next: pt,
                  bar: yt,
                  toggle: bt,
                },
                function (n, t) {
                  l[t] = y("." + n);
                }
              ),
              an(l, { root: a, track: r, list: o, slides: d });
            var n =
                a.id ||
                (function (n) {
                  return "" + n + An((_n[n] = (_n[n] || 0) + 1));
                })(yn),
              t = i.role;
            (a.id = n),
              (r.id = r.id || n + "-track"),
              (o.id = o.id || n + "-list"),
              !z(a, Z) && "SECTION" !== a.tagName && t && I(a, Z, t),
              I(a, tt, s.carousel),
              I(o, Z, "presentation"),
              m();
          }
          function g(n) {
            var t = ut.concat("style");
            D(d), X(a, v), X(r, h), P([r, o], t), P(a, n ? t : ["style", tt]);
          }
          function m() {
            X(a, v),
              X(r, h),
              (v = b(et)),
              (h = b(ct)),
              M(a, v),
              M(r, h),
              I(a, nn, i.label),
              I(a, Zn, i.labelledby);
          }
          function y(n) {
            n = pn(a, n);
            return n &&
              (function (n, t) {
                if (x(n.closest)) return n.closest(t);
                for (var i = n; i && 1 === i.nodeType && !cn(i, t); )
                  i = i.parentElement;
                return i;
              })(n, "." + et) === a
              ? n
              : void 0;
          }
          function b(n) {
            return [
              n + "--" + i.type,
              n + "--" + i.direction,
              i.drag && n + "--draggable",
              i.isNavigation && n + "--nav",
              n === et && tn,
            ];
          }
          return an(l, {
            setup: p,
            mount: function () {
              c(J, g),
                c(J, p),
                c(K, m),
                f(
                  document,
                  _t + " keydown",
                  function (n) {
                    u = "keydown" === n.type;
                  },
                  { capture: !0 }
                ),
                f(a, "focusin", function () {
                  A(a, Lt, !!u);
                });
            },
            destroy: g,
          });
        },
        Slides: function (r, o, u) {
          var n = Q(r),
            t = n.on,
            e = n.emit,
            c = n.bind,
            f = (n = o.Elements).slides,
            a = n.list,
            s = [];
          function i() {
            f.forEach(function (n, t) {
              d(n, t, -1);
            });
          }
          function l() {
            h(function (n) {
              n.destroy();
            }),
              D(s);
          }
          function d(n, t, i) {
            t = Rt(r, t, i, n);
            t.mount(),
              s.push(t),
              s.sort(function (n, t) {
                return n.index - t.index;
              });
          }
          function v(n) {
            return n
              ? p(function (n) {
                  return !n.isClone;
                })
              : s;
          }
          function h(n, t) {
            v(t).forEach(n);
          }
          function p(t) {
            return s.filter(
              x(t)
                ? t
                : function (n) {
                    return C(t) ? cn(n.slide, t) : b(y(t), n.index);
                  }
            );
          }
          return {
            mount: function () {
              i(), t(J, l), t(J, i);
            },
            destroy: l,
            update: function () {
              h(function (n) {
                n.update();
              });
            },
            register: d,
            get: v,
            getIn: function (n) {
              var t = o.Controller,
                i = t.toIndex(n),
                r = t.hasFocus() ? 1 : u.perPage;
              return p(function (n) {
                return En(n.index, i, i + r - 1);
              });
            },
            getAt: function (n) {
              return p(n)[0];
            },
            add: function (n, o) {
              g(n, function (n) {
                var t, i, r;
                m((n = C(n) ? hn(n) : n)) &&
                  ((t = f[o]) ? O(n, t) : L(a, n),
                  M(n, u.classes.slide),
                  (t = n),
                  (i = R(e, jn)),
                  (t = gn(t, "img")),
                  (r = t.length)
                    ? t.forEach(function (n) {
                        c(n, "load error", function () {
                          --r || i();
                        });
                      })
                    : i());
              }),
                e(J);
            },
            remove: function (n) {
              T(
                p(n).map(function (n) {
                  return n.slide;
                })
              ),
                e(J);
            },
            forEach: h,
            filter: p,
            style: function (t, i, r) {
              h(function (n) {
                n.style(t, i, r);
              });
            },
            getLength: function (n) {
              return (n ? f : s).length;
            },
            isEnough: function () {
              return s.length > u.perPage;
            },
          };
        },
        Layout: function (t, n, i) {
          var r,
            o,
            u,
            e = (a = Q(t)).on,
            c = a.bind,
            f = a.emit,
            a = n.Slides,
            s = n.Direction.resolve,
            l = (n = n.Elements).root,
            d = n.track,
            v = n.list,
            h = a.getAt,
            p = a.style;
          function g() {
            (r = i.direction === Jn),
              _(l, "maxWidth", W(i.width)),
              _(d, s("paddingLeft"), y(!1)),
              _(d, s("paddingRight"), y(!0)),
              m(!0);
          }
          function m(n) {
            var t = N(l);
            (!n && o.width === t.width && o.height === t.height) ||
              (_(
                d,
                "height",
                (function () {
                  var n = "";
                  r &&
                    (bn((n = b()), "height or heightRatio is missing."),
                    (n = "calc(" + n + " - " + y(!1) + " - " + y(!0) + ")"));
                  return n;
                })()
              ),
              p(s("marginRight"), W(i.gap)),
              p(
                "width",
                i.autoWidth ? null : W(i.fixedWidth) || (r ? "" : w())
              ),
              p(
                "height",
                W(i.fixedHeight) || (r ? (i.autoHeight ? null : w()) : b()),
                !0
              ),
              (o = t),
              f(Nn),
              u !== (u = O()) && (A(l, Ot, u), f("overflow", u)));
          }
          function y(n) {
            var t = i.padding,
              n = s(n ? "right" : "left");
            return (t && W(t[n] || (un(t) ? 0 : t))) || "0px";
          }
          function b() {
            return W(i.height || N(v).width * i.heightRatio);
          }
          function w() {
            var n = W(i.gap);
            return (
              "calc((100%" +
              (n && " + " + n) +
              ")/" +
              (i.perPage || 1) +
              (n && " - " + n) +
              ")"
            );
          }
          function x() {
            return N(v)[s("width")];
          }
          function k(n, t) {
            n = h(n || 0);
            return n ? N(n.slide)[s("width")] + (t ? 0 : L()) : 0;
          }
          function S(n, t) {
            var i,
              n = h(n);
            return n
              ? ((n = N(n.slide)[s("right")]),
                (i = N(v)[s("left")]),
                U(n - i) + (t ? 0 : L()))
              : 0;
          }
          function E(n) {
            return S(t.length - 1) - S(0) + k(0, n);
          }
          function L() {
            var n = h(0);
            return (n && parseFloat(_(n.slide, s("marginRight")))) || 0;
          }
          function O() {
            return t.is(It) || E(!0) > x();
          }
          return {
            mount: function () {
              var n, t, i;
              g(),
                c(
                  window,
                  "resize load",
                  ((n = R(f, jn)),
                  (i = qn(t || 0, n, null, 1)),
                  function () {
                    i.isPaused() && i.start();
                  })
                ),
                e([K, J], g),
                e(jn, m);
            },
            resize: m,
            listSize: x,
            slideSize: k,
            sliderSize: E,
            totalSize: S,
            getPadding: function (n) {
              return (
                parseFloat(_(d, s("padding" + (n ? "Right" : "Left")))) || 0
              );
            },
            isOverflow: O,
          };
        },
        Clones: function (c, i, f) {
          var t,
            r = Q(c),
            n = r.on,
            a = i.Elements,
            s = i.Slides,
            o = i.Direction.resolve,
            l = [];
          function u() {
            if ((n(J, d), n([K, jn], v), (t = h()))) {
              var o = t,
                u = s.get().slice(),
                e = u.length;
              if (e) {
                for (; u.length < o; ) k(u, u);
                k(u.slice(-o), u.slice(0, o)).forEach(function (n, t) {
                  var i = t < o,
                    r = (function (n, t) {
                      n = n.cloneNode(!0);
                      return (
                        M(n, f.classes.clone),
                        (n.id = c.root.id + "-clone" + An(t + 1)),
                        n
                      );
                    })(n.slide, t);
                  i ? O(r, u[0].slide) : L(a.list, r),
                    k(l, r),
                    s.register(r, t - o + (i ? 0 : e), n.index);
                });
              }
              i.Layout.resize(!0);
            }
          }
          function d() {
            e(), u();
          }
          function e() {
            T(l), D(l), r.destroy();
          }
          function v() {
            var n = h();
            t !== n && (t < n || !n) && r.emit(J);
          }
          function h() {
            var n,
              t = f.clones;
            return (
              c.is(Pt)
                ? en(t) &&
                  (t =
                    ((n = f[o("fixedWidth")] && i.Layout.slideSize(0)) &&
                      kn(N(a.track)[o("width")] / n)) ||
                    (f[o("autoWidth")] && c.length) ||
                    2 * f.perPage)
                : (t = 0),
              t
            );
          }
          return { mount: u, destroy: e };
        },
        Move: function (r, c, o) {
          var e,
            n = Q(r),
            t = n.on,
            f = n.emit,
            a = r.state.set,
            u = (n = c.Layout).slideSize,
            i = n.getPadding,
            s = n.totalSize,
            l = n.listSize,
            d = n.sliderSize,
            v = (n = c.Direction).resolve,
            h = n.orient,
            p = (n = c.Elements).list,
            g = n.track;
          function m() {
            c.Controller.isBusy() ||
              (c.Scroll.cancel(), y(r.index), c.Slides.update());
          }
          function y(n) {
            b(S(n, !0));
          }
          function b(n, t) {
            r.is(It) ||
              ((t = t
                ? n
                : (function (n) {
                    {
                      var t, i;
                      r.is(Pt) &&
                        ((t = k(n)),
                        (i = t > c.Controller.getEnd()),
                        (t < 0 || i) && (n = w(n, i)));
                    }
                    return n;
                  })(n)),
              _(p, "transform", "translate" + v("X") + "(" + t + "px)"),
              n !== t && f(Un));
          }
          function w(n, t) {
            var i = n - L(t),
              r = d();
            return (n -= h(r * (kn(U(i) / r) || 1)) * (t ? 1 : -1));
          }
          function x() {
            b(E(), !0), e.cancel();
          }
          function k(n) {
            for (
              var t = c.Slides.get(), i = 0, r = 1 / 0, o = 0;
              o < t.length;
              o++
            ) {
              var u = t[o].index,
                e = U(S(u, !0) - n);
              if (!(e <= r)) break;
              (r = e), (i = u);
            }
            return i;
          }
          function S(n, t) {
            var i = h(
              s(n - 1) -
                ((n = n),
                "center" === (i = o.focus)
                  ? (l() - u(n, !0)) / 2
                  : +i * u(n) || 0)
            );
            return t
              ? ((n = i),
                (n = o.trimSpace && r.is(Mt) ? q(n, 0, h(d(!0) - l())) : n))
              : i;
          }
          function E() {
            var n = v("left");
            return N(p)[n] - N(g)[n] + h(i(!1));
          }
          function L(n) {
            return S(n ? c.Controller.getEnd() : 0, !!o.trimSpace);
          }
          return {
            mount: function () {
              (e = c.Transition), t([B, Nn, K, J], m);
            },
            move: function (n, t, i, r) {
              var o, u;
              n !== t &&
                ((o = i < n),
                (u = h(w(E(), o))),
                o ? 0 <= u : u <= p[v("scrollWidth")] - N(g)[v("width")]) &&
                (x(), b(w(E(), i < n), !0)),
                a(G),
                f(H, t, i, n),
                e.start(t, function () {
                  a(3), f(Dn, t, i, n), r && r();
                });
            },
            jump: y,
            translate: b,
            shift: w,
            cancel: x,
            toIndex: k,
            toPosition: S,
            getPosition: E,
            getLimit: L,
            exceededLimit: function (n, t) {
              t = en(t) ? E() : t;
              var i = !0 !== n && h(t) < h(L(!1)),
                n = !1 !== n && h(t) > h(L(!0));
              return i || n;
            },
            reposition: m,
          };
        },
        Controller: function (o, u, e) {
          var c,
            f,
            a,
            s,
            n = Q(o),
            t = n.on,
            i = n.emit,
            l = u.Move,
            d = l.getPosition,
            r = l.getLimit,
            v = l.toPosition,
            h = (n = u.Slides).isEnough,
            p = n.getLength,
            g = e.omitEnd,
            m = o.is(Pt),
            y = o.is(Mt),
            b = R(L, !1),
            w = R(L, !0),
            x = e.start || 0,
            k = x;
          function S() {
            (f = p(!0)), (a = e.perMove), (s = e.perPage), (c = _());
            var n = q(x, 0, g ? c : f - 1);
            n !== x && ((x = n), l.reposition());
          }
          function E() {
            c !== _() && i("ei");
          }
          function L(n, t) {
            var i = a || (P() ? 1 : s),
              i = O(x + i * (n ? -1 : 1), x, !(a || P()));
            return -1 === i && y && !Sn(d(), r(!n), 1)
              ? n
                ? 0
                : c
              : t
              ? i
              : A(i);
          }
          function O(n, t, i) {
            var r;
            return (
              h() || P()
                ? ((r = (function (n) {
                    if (y && "move" === e.trimSpace && n !== x)
                      for (
                        var t = d();
                        t === v(n, !0) && En(n, 0, o.length - 1, !e.rewind);

                      )
                        n < x ? --n : ++n;
                    return n;
                  })(n)) !== n && ((t = n), (n = r), (i = !1)),
                  n < 0 || c < n
                    ? (n =
                        a || (!En(0, n, t, !0) && !En(c, t, n, !0))
                          ? m
                            ? i
                              ? n < 0
                                ? -(f % s || s)
                                : f
                              : n
                            : e.rewind
                            ? n < 0
                              ? c
                              : 0
                            : -1
                          : z(D(n)))
                    : i && n !== t && (n = z(D(t) + (n < t ? -1 : 1))))
                : (n = -1),
              n
            );
          }
          function A(n) {
            return m ? (n + f) % f || 0 : n;
          }
          function _() {
            for (var n = f - (P() || (m && a) ? 1 : s); g && 0 < n--; )
              if (v(f - 1, !0) !== v(n, !0)) {
                n++;
                break;
              }
            return q(n, 0, f - 1);
          }
          function z(n) {
            return q(P() ? n : s * n, 0, c);
          }
          function D(n) {
            return P() ? Y(n, c) : xn((c <= n ? f - 1 : n) / s);
          }
          function M(n) {
            n !== x && ((k = x), (x = n));
          }
          function P() {
            return !en(e.focus) || e.isNavigation;
          }
          function I() {
            return o.state.is([G, rn]) && !!e.waitForTransition;
          }
          return {
            mount: function () {
              S(), t([K, J, "ei"], S), t(Nn, E);
            },
            go: function (n, t, i) {
              var r;
              I() ||
                (-1 <
                  (r = A(
                    (n = (function (n) {
                      var t = x;
                      {
                        var i, r;
                        C(n)
                          ? ((r = n.match(/([+\-<>])(\d+)?/) || []),
                            (i = r[1]),
                            (r = r[2]),
                            "+" === i || "-" === i
                              ? (t = O(x + +("" + i + (+r || 1)), x))
                              : ">" === i
                              ? (t = r ? z(+r) : b(!0))
                              : "<" === i && (t = w(!0)))
                          : (t = m ? n : q(n, 0, c));
                      }
                      return t;
                    })(n))
                  )) &&
                  (t || r !== x) &&
                  (M(r), l.move(n, r, k, i)));
            },
            scroll: function (n, t, i, r) {
              u.Scroll.scroll(n, t, i, function () {
                var n = A(l.toIndex(d()));
                M(g ? Y(n, c) : n), r && r();
              });
            },
            getNext: b,
            getPrev: w,
            getAdjacent: L,
            getEnd: _,
            setIndex: M,
            getIndex: function (n) {
              return n ? k : x;
            },
            toIndex: z,
            toPage: D,
            toDest: function (n) {
              return (n = l.toIndex(n)), y ? q(n, 0, c) : n;
            },
            hasFocus: P,
            isBusy: I,
          };
        },
        Arrows: function (o, n, t) {
          var i,
            r,
            u = Q(o),
            e = u.on,
            c = u.bind,
            f = u.emit,
            a = t.classes,
            s = t.i18n,
            l = n.Elements,
            d = n.Controller,
            v = l.arrows,
            h = l.track,
            p = v,
            g = l.prev,
            m = l.next,
            y = {};
          function b() {
            var n = t.arrows;
            !n ||
              (g && m) ||
              ((p = v || j("div", a.arrows)),
              (g = S(!0)),
              (m = S(!1)),
              (i = !0),
              L(p, [g, m]),
              v || O(p, h)),
              g &&
                m &&
                (an(y, { prev: g, next: m }),
                ln(p, n ? "" : "none"),
                M(p, (r = dt + "--" + t.direction)),
                n &&
                  (e([B, Dn, J, V, "ei"], E),
                  c(m, "click", R(k, ">")),
                  c(g, "click", R(k, "<")),
                  E(),
                  I([g, m], Kn, h.id),
                  f("arrows:mounted", g, m))),
              e(K, w);
          }
          function w() {
            x(), b();
          }
          function x() {
            u.destroy(),
              X(p, r),
              i ? (T(v ? [g, m] : p), (g = m = null)) : P([g, m], ut);
          }
          function k(n) {
            d.go(n, !0);
          }
          function S(n) {
            return hn(
              '<button class="' +
                a.arrow +
                " " +
                (n ? a.prev : a.next) +
                '" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="' +
                (t.arrowPath ||
                  "m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z") +
                '" />'
            );
          }
          function E() {
            var n, t, i, r;
            g &&
              m &&
              ((r = o.index),
              (n = d.getPrev()),
              (t = d.getNext()),
              (i = -1 < n && r < n ? s.last : s.prev),
              (r = -1 < t && t < r ? s.first : s.next),
              (g.disabled = n < 0),
              (m.disabled = t < 0),
              I(g, nn, i),
              I(m, nn, r),
              f("arrows:updated", g, m, n, t));
          }
          return { arrows: y, mount: b, destroy: x, update: E };
        },
        Autoplay: function (n, t, i) {
          var r,
            o,
            u = Q(n),
            e = u.on,
            c = u.bind,
            f = u.emit,
            a = qn(i.interval, n.go.bind(n, ">"), function (n) {
              var t = l.bar;
              t && _(t, "width", 100 * n + "%"), f("autoplay:playing", n);
            }),
            s = a.isPaused,
            l = t.Elements,
            d = (u = t.Elements).root,
            v = u.toggle,
            h = i.autoplay,
            p = "pause" === h;
          function g() {
            s() &&
              t.Slides.isEnough() &&
              (a.start(!i.resetProgress), (o = r = p = !1), b(), f(Fn));
          }
          function m(n) {
            (p = !!(n = void 0 === n ? !0 : n)), b(), s() || (a.pause(), f(Xn));
          }
          function y() {
            p || (r || o ? m(!1) : g());
          }
          function b() {
            v && (A(v, tn, !p), I(v, nn, i.i18n[p ? "play" : "pause"]));
          }
          function w(n) {
            n = t.Slides.getAt(n);
            a.set((n && +z(n.slide, Ct)) || i.interval);
          }
          return {
            mount: function () {
              h &&
                (i.pauseOnHover &&
                  c(d, "mouseenter mouseleave", function (n) {
                    (r = "mouseenter" === n.type), y();
                  }),
                i.pauseOnFocus &&
                  c(d, "focusin focusout", function (n) {
                    (o = "focusin" === n.type), y();
                  }),
                v &&
                  c(v, "click", function () {
                    p ? g() : m(!0);
                  }),
                e([H, Tn, J], a.rewind),
                e(H, w),
                v && I(v, Kn, l.track.id),
                p || g(),
                b());
            },
            destroy: a.cancel,
            play: g,
            pause: m,
            isPaused: s,
          };
        },
        Cover: function (n, t, i) {
          var r = Q(n).on;
          function o(i) {
            t.Slides.forEach(function (n) {
              var t = fn(n.container || n.slide, "img");
              t && t.src && u(i, t, n);
            });
          }
          function u(n, t, i) {
            i.style(
              "background",
              n ? 'center/cover no-repeat url("' + t.src + '")' : "",
              !0
            ),
              ln(t, n ? "none" : "");
          }
          return {
            mount: function () {
              i.cover && (r(Wn, R(u, !0)), r([B, K, J], R(o, !0)));
            },
            destroy: R(o, !1),
          };
        },
        Scroll: function (n, c, u) {
          var f,
            a,
            t = Q(n),
            i = t.on,
            s = t.emit,
            l = n.state.set,
            d = c.Move,
            v = d.getPosition,
            e = d.getLimit,
            h = d.exceededLimit,
            p = d.translate,
            g = n.is(Mt),
            m = 1;
          function y(n, t, i, r, o) {
            var u,
              e = v(),
              i =
                (x(),
                !i ||
                  (g && h()) ||
                  ((i = c.Layout.sliderSize()),
                  (u = Ln(n) * i * xn(U(n) / i) || 0),
                  (n = d.toPosition(c.Controller.toDest(n % i)) + u)),
                Sn(e, n, 1));
            (m = 1),
              (t = i ? 0 : t || wn(U(n - e) / 1.5, 800)),
              (a = r),
              (f = qn(t, b, R(w, e, n, o), 1)),
              l(rn),
              s(Tn),
              f.start();
          }
          function b() {
            l(3), a && a(), s(V);
          }
          function w(n, t, i, r) {
            var o = v(),
              r =
                (n +
                  (t - n) *
                    ((t = r),
                    (n = u.easingFunc) ? n(t) : 1 - Math.pow(1 - t, 4)) -
                  o) *
                m;
            p(o + r),
              g &&
                !i &&
                h() &&
                ((m *= 0.6), U(r) < 10 && y(e(h(!0)), 600, !1, a, !0));
          }
          function x() {
            f && f.cancel();
          }
          function r() {
            f && !f.isPaused() && (x(), b());
          }
          return {
            mount: function () {
              i(H, x), i([K, J], r);
            },
            destroy: x,
            scroll: y,
            cancel: r,
          };
        },
        Drag: function (e, o, c) {
          var f,
            t,
            u,
            a,
            s,
            l,
            d,
            v,
            n = Q(e),
            i = n.on,
            h = n.emit,
            p = n.bind,
            g = n.unbind,
            m = e.state,
            y = o.Move,
            b = o.Scroll,
            w = o.Controller,
            x = o.Elements.track,
            k = o.Media.reduce,
            r = (n = o.Direction).resolve,
            S = n.orient,
            E = y.getPosition,
            L = y.exceededLimit,
            O = !1;
          function j() {
            var n = c.drag;
            C(!n), (a = "free" === n);
          }
          function N(n) {
            var t, i, r;
            (l = !1),
              d ||
                ((t = R(n)),
                (i = n.target),
                (r = c.noDrag),
                cn(i, "." + mt + ", ." + vt) ||
                  (r && cn(i, r)) ||
                  (!t && n.button) ||
                  (w.isBusy()
                    ? F(n, !0)
                    : ((v = t ? x : window),
                      (s = m.is([G, rn])),
                      (u = null),
                      p(v, zt, A, jt),
                      p(v, Dt, _, jt),
                      y.cancel(),
                      b.cancel(),
                      z(n))));
          }
          function A(n) {
            var t, i, r, o, u;
            m.is(6) || (m.set(6), h("drag")),
              n.cancelable &&
                (s
                  ? (y.translate(f + D(n) / (O && e.is(Mt) ? 5 : 1)),
                    (u = 200 < M(n)),
                    (t = O !== (O = L())),
                    (u || t) && z(n),
                    (l = !0),
                    h("dragging"),
                    F(n))
                  : U(D((u = n))) > U(D(u, !0)) &&
                    ((t = n),
                    (i = c.dragMinThreshold),
                    (r = un(i)),
                    (o = (r && i.mouse) || 0),
                    (r = (r ? i.touch : +i) || 10),
                    (s = U(D(t)) > (R(t) ? r : o)),
                    F(n)));
          }
          function _(n) {
            var t, i, r;
            m.is(6) && (m.set(3), h("dragged")),
              s &&
                ((i = (function (n) {
                  return (
                    E() +
                    Ln(n) *
                      Y(
                        U(n) * (c.flickPower || 600),
                        a ? 1 / 0 : o.Layout.listSize() * (c.flickMaxPages || 1)
                      )
                  );
                })(
                  (t = (function (n) {
                    if (e.is(Pt) || !O) {
                      var t = M(n);
                      if (t && t < 200) return D(n) / t;
                    }
                    return 0;
                  })((t = n)))
                )),
                (r = c.rewind && c.rewindByDrag),
                k(!1),
                a
                  ? w.scroll(i, 0, c.snap)
                  : e.is(It)
                  ? w.go(S(Ln(t)) < 0 ? (r ? "<" : "-") : r ? ">" : "+")
                  : e.is(Mt) && O && r
                  ? w.go(L(!0) ? ">" : "<")
                  : w.go(w.toDest(i), !0),
                k(!0),
                F(n)),
              g(v, zt, A),
              g(v, Dt, _),
              (s = !1);
          }
          function T(n) {
            !d && l && F(n, !0);
          }
          function z(n) {
            (u = t), (t = n), (f = E());
          }
          function D(n, t) {
            return I(n, t) - I(P(n), t);
          }
          function M(n) {
            return mn(n) - mn(P(n));
          }
          function P(n) {
            return (t === n && u) || t;
          }
          function I(n, t) {
            return (R(n) ? n.changedTouches[0] : n)["page" + r(t ? "Y" : "X")];
          }
          function R(n) {
            return "undefined" != typeof TouchEvent && n instanceof TouchEvent;
          }
          function C(n) {
            d = n;
          }
          return {
            mount: function () {
              p(x, zt, on, jt),
                p(x, Dt, on, jt),
                p(x, _t, N, jt),
                p(x, "click", T, { capture: !0 }),
                p(x, "dragstart", F),
                i([B, K], j);
            },
            disable: C,
            isDragging: function () {
              return s;
            },
          };
        },
        Keyboard: function (t, n, i) {
          var r,
            o,
            u = Q(t),
            e = u.on,
            c = u.bind,
            f = u.unbind,
            a = t.root,
            s = n.Direction.resolve;
          function l() {
            var n = i.keyboard;
            n && ((r = "global" === n ? window : a), c(r, Gt, h));
          }
          function d() {
            f(r, Gt);
          }
          function v() {
            var n = o;
            (o = !0),
              p(function () {
                o = n;
              });
          }
          function h(n) {
            o || ((n = Tt(n)) === s(Bn) ? t.go("<") : n === s(Hn) && t.go(">"));
          }
          return {
            mount: function () {
              l(), e(K, d), e(K, l), e(H, v);
            },
            destroy: d,
            disable: function (n) {
              o = n;
            },
          };
        },
        LazyLoad: function (i, n, o) {
          var t = Q(i),
            r = t.on,
            u = t.off,
            e = t.bind,
            c = t.emit,
            f = "sequential" === o.lazyLoad,
            a = [Dn, V],
            s = [];
          function l() {
            D(s),
              n.Slides.forEach(function (r) {
                gn(r.slide, Wt).forEach(function (n) {
                  var t = z(n, Ft),
                    i = z(n, Xt);
                  (t === n.src && i === n.srcset) ||
                    ((t = o.classes.spinner),
                    (t = fn((i = n.parentElement), "." + t) || j("span", t, i)),
                    s.push([n, r, t]),
                    n.src || ln(n, "none"));
                });
              }),
              (f ? p : (u(a), r(a, d), d))();
          }
          function d() {
            (s = s.filter(function (n) {
              var t = o.perPage * ((o.preloadPages || 1) + 1) - 1;
              return !n[1].isWithin(i.index, t) || v(n);
            })).length || u(a);
          }
          function v(n) {
            var t = n[0];
            M(n[1].slide, Et),
              e(t, "load error", R(h, n)),
              I(t, "src", z(t, Ft)),
              I(t, "srcset", z(t, Xt)),
              P(t, Ft),
              P(t, Xt);
          }
          function h(n, t) {
            var i = n[0],
              r = n[1];
            X(r.slide, Et),
              "error" !== t.type && (T(n[2]), ln(i, ""), c(Wn, i, r), c(jn)),
              f && p();
          }
          function p() {
            s.length && v(s.shift());
          }
          return {
            mount: function () {
              o.lazyLoad && (l(), r(J, l));
            },
            destroy: R(D, s),
            check: d,
          };
        },
        Pagination: function (l, n, d) {
          var v,
            h,
            t = Q(l),
            p = t.on,
            g = t.emit,
            m = t.bind,
            y = n.Slides,
            b = n.Elements,
            w = n.Controller,
            x = w.hasFocus,
            r = w.getIndex,
            e = w.go,
            c = n.Direction.resolve,
            k = b.pagination,
            S = [];
          function E() {
            v && (T(k ? o(v.children) : v), X(v, h), D(S), (v = null)),
              t.destroy();
          }
          function L(n) {
            e(">" + n, !0);
          }
          function O(n, t) {
            var i = S.length,
              r = Tt(t),
              o = A(),
              u = -1,
              o =
                (r === c(Hn, !1, o)
                  ? (u = ++n % i)
                  : r === c(Bn, !1, o)
                  ? (u = (--n + i) % i)
                  : "Home" === r
                  ? (u = 0)
                  : "End" === r && (u = i - 1),
                S[u]);
            o && (dn(o.button), e(">" + u), F(t, !0));
          }
          function A() {
            return d.paginationDirection || d.direction;
          }
          function _(n) {
            return S[w.toPage(n)];
          }
          function z() {
            var n,
              t = _(r(!0)),
              i = _(r());
            t && (X((n = t.button), tn), P(n, Qn), I(n, $, -1)),
              i && (M((n = i.button), tn), I(n, Qn, !0), I(n, $, "")),
              g("pagination:updated", { list: v, items: S }, t, i);
          }
          return {
            items: S,
            mount: function n() {
              E(), p([K, J, "ei"], n);
              var t = d.pagination;
              if ((k && ln(k, t ? "" : "none"), t)) {
                p([H, Tn, V], z);
                var t = l.length,
                  i = d.classes,
                  r = d.i18n,
                  o = d.perPage,
                  u = x() ? w.getEnd() + 1 : kn(t / o);
                M(
                  (v = k || j("ul", i.pagination, b.track.parentElement)),
                  (h = gt + "--" + A())
                ),
                  I(v, Z, "tablist"),
                  I(v, nn, r.select),
                  I(v, nt, A() === Jn ? "vertical" : "");
                for (var e = 0; e < u; e++) {
                  var c = j("li", null, v),
                    f = j("button", { class: i.page, type: "button" }, c),
                    a = y.getIn(e).map(function (n) {
                      return n.slide.id;
                    }),
                    s = !x() && 1 < o ? r.pageX : r.slideX;
                  m(f, "click", R(L, e)),
                    d.paginationKeyboard && m(f, "keydown", R(O, e)),
                    I(c, Z, "presentation"),
                    I(f, Z, "tab"),
                    I(f, Kn, a.join(" ")),
                    I(f, nn, On(s, e + 1)),
                    I(f, $, -1),
                    S.push({ li: c, button: f, page: e });
                }
                z(), g("pagination:mounted", { list: v, items: S }, _(l.index));
              }
            },
            destroy: E,
            getAt: _,
            update: z,
          };
        },
        Sync: function (i, n, t) {
          var r = t.isNavigation,
            o = t.slideFocus,
            u = [];
          function e() {
            var n, t;
            i.splides.forEach(function (n) {
              n.isParent || (f(i, n.splide), f(n.splide, i));
            }),
              r &&
                ((n = Q(i)),
                (t = n.on)(Mn, s),
                t(Yn, l),
                t([B, K], a),
                u.push(n),
                n.emit(Gn, i.splides));
          }
          function c() {
            u.forEach(function (n) {
              n.destroy();
            }),
              D(u);
          }
          function f(n, r) {
            n = Q(n);
            n.on(H, function (n, t, i) {
              r.go(r.is(Pt) ? i : n);
            }),
              u.push(n);
          }
          function a() {
            I(n.Elements.list, nt, t.direction === Jn ? "vertical" : "");
          }
          function s(n) {
            i.go(n.index);
          }
          function l(n, t) {
            b(Yt, Tt(t)) && (s(n), F(t));
          }
          return {
            setup: R(n.Media.set, { slideFocus: en(o) ? r : o }, !0),
            mount: e,
            destroy: c,
            remount: function () {
              c(), e();
            },
          };
        },
        Wheel: function (e, c, f) {
          var n = Q(e).bind,
            a = 0;
          function t(n) {
            var t, i, r, o, u;
            n.cancelable &&
              ((t = (u = n.deltaY) < 0),
              (i = mn(n)),
              (r = f.wheelMinThreshold || 0),
              (o = f.wheelSleep || 0),
              U(u) > r && o < i - a && (e.go(t ? "<" : ">"), (a = i)),
              (u = t),
              (f.releaseWheel &&
                !e.state.is(G) &&
                -1 === c.Controller.getAdjacent(u)) ||
                F(n));
          }
          return {
            mount: function () {
              f.wheel && n(c.Elements.track, "wheel", t, jt);
            },
          };
        },
        Live: function (n, t, i) {
          var r = Q(n).on,
            o = t.Elements.track,
            u = i.live && !i.isNavigation,
            e = j("span", wt),
            c = qn(90, R(f, !1));
          function f(n) {
            I(o, rt, n), n ? (L(o, e), c.start()) : (T(e), c.cancel());
          }
          function a(n) {
            u && I(o, it, n ? "off" : "polite");
          }
          return {
            mount: function () {
              u &&
                (a(!t.Autoplay.isPaused()),
                I(o, ot, !0),
                (e.textContent = "…"),
                r(Fn, R(a, !0)),
                r(Xn, R(a, !1)),
                r([Dn, V], R(f, !0)));
            },
            disable: a,
            destroy: function () {
              P(o, [it, ot, rt]), T(e);
            },
          };
        },
      }),
      qt = {
        type: "slide",
        role: "region",
        speed: 400,
        perPage: 1,
        cloneStatus: !0,
        arrows: !0,
        pagination: !0,
        paginationKeyboard: !0,
        interval: 5e3,
        pauseOnHover: !0,
        pauseOnFocus: !0,
        resetProgress: !0,
        easing: "cubic-bezier(0.25, 1, 0.5, 1)",
        drag: !0,
        direction: "ltr",
        trimSpace: !0,
        focusableNodes: "a, button, textarea, input, select, iframe",
        live: !0,
        classes: {
          slide: at,
          clone: st,
          arrows: dt,
          arrow: vt,
          prev: ht,
          next: pt,
          pagination: gt,
          page: mt,
          spinner: i + "spinner",
        },
        i18n: {
          prev: "Previous slide",
          next: "Next slide",
          first: "Go to first slide",
          last: "Go to last slide",
          slideX: "Go to slide %s",
          pageX: "Go to page %s",
          play: "Start autoplay",
          pause: "Pause autoplay",
          carousel: "carousel",
          slide: "slide",
          select: "Select a slide to show",
          slideLabel: "%s of %s",
        },
        reducedMotion: { speed: 0, rewindSpeed: 0, autoplay: "pause" },
      };
    function Bt(n, t, i) {
      var r = t.Slides;
      function o() {
        r.forEach(function (n) {
          n.style("transform", "translateX(-" + 100 * n.index + "%)");
        });
      }
      return {
        mount: function () {
          Q(n).on([B, J], o);
        },
        start: function (n, t) {
          r.style("transition", "opacity " + i.speed + "ms " + i.easing), p(t);
        },
        cancel: on,
      };
    }
    function Ht(u, n, e) {
      var c,
        f = n.Move,
        a = n.Controller,
        s = n.Scroll,
        t = n.Elements.list,
        l = R(_, t, "transition");
      function i() {
        l(""), s.cancel();
      }
      return {
        mount: function () {
          Q(u).bind(t, "transitionend", function (n) {
            n.target === t && c && (i(), c());
          });
        },
        start: function (n, t) {
          var i = f.toPosition(n, !0),
            r = f.getPosition(),
            o = (function (n) {
              var t = e.rewindSpeed;
              if (u.is(Mt) && t) {
                var i = a.getIndex(!0),
                  r = a.getEnd();
                if ((0 === i && r <= n) || (r <= i && 0 === n)) return t;
              }
              return e.speed;
            })(n);
          1 <= U(i - r) && 1 <= o
            ? e.useScroll
              ? s.scroll(i, o, !1, t)
              : (l("transform " + o + "ms " + e.easing),
                f.translate(i, !0),
                (c = t))
            : (f.jump(n), t());
        },
        cancel: i,
      };
    }
    t = (function () {
      function i(n, t) {
        (this.event = Q()),
          (this.Components = {}),
          (this.state = s(1)),
          (this.splides = []),
          (this.n = {}),
          (this.t = {});
        n = C(n) ? pn(document, n) : n;
        bn(n, n + " is invalid."),
          (t = d(
            { label: z((this.root = n), nn) || "", labelledby: z(n, Zn) || "" },
            qt,
            i.defaults,
            t || {}
          ));
        try {
          d(t, JSON.parse(z(n, f)));
        } catch (n) {
          bn(!1, "Invalid JSON");
        }
        this.n = Object.create(d({}, t));
      }
      var n = i.prototype;
      return (
        (n.mount = function (n, t) {
          var i = this,
            r = this.state,
            o = this.Components;
          return (
            bn(r.is([1, 7]), "Already mounted!"),
            r.set(1),
            (this.i = o),
            (this.r = t || this.r || (this.is(It) ? Bt : Ht)),
            (this.t = n || this.t),
            w(an({}, Ut, this.t, { Transition: this.r }), function (n, t) {
              n = n(i, o, i.n);
              (o[t] = n).setup && n.setup();
            }),
            w(o, function (n) {
              n.mount && n.mount();
            }),
            this.emit(B),
            M(this.root, "is-initialized"),
            r.set(3),
            this.emit("ready"),
            this
          );
        }),
        (n.sync = function (n) {
          return (
            this.splides.push({ splide: n }),
            n.splides.push({ splide: this, isParent: !0 }),
            this.state.is(3) &&
              (this.i.Sync.remount(), n.Components.Sync.remount()),
            this
          );
        }),
        (n.go = function (n) {
          return this.i.Controller.go(n), this;
        }),
        (n.on = function (n, t) {
          return this.event.on(n, t), this;
        }),
        (n.off = function (n) {
          return this.event.off(n), this;
        }),
        (n.emit = function (n) {
          var t;
          return (
            (t = this.event).emit.apply(t, [n].concat(o(arguments, 1))), this
          );
        }),
        (n.add = function (n, t) {
          return this.i.Slides.add(n, t), this;
        }),
        (n.remove = function (n) {
          return this.i.Slides.remove(n), this;
        }),
        (n.is = function (n) {
          return this.n.type === n;
        }),
        (n.refresh = function () {
          return this.emit(J), this;
        }),
        (n.destroy = function (t) {
          void 0 === t && (t = !0);
          var n = this.event,
            i = this.state;
          return (
            i.is(1)
              ? Q(this).on("ready", this.destroy.bind(this, t))
              : (w(
                  this.i,
                  function (n) {
                    n.destroy && n.destroy(t);
                  },
                  !0
                ),
                n.emit(a),
                n.destroy(),
                t && D(this.splides),
                i.set(7)),
            this
          );
        }),
        Jt(i, [
          {
            key: "options",
            get: function () {
              return this.n;
            },
            set: function (n) {
              this.i.Media.set(n, !0, !0);
            },
          },
          {
            key: "length",
            get: function () {
              return this.i.Slides.getLength(!0);
            },
          },
          {
            key: "index",
            get: function () {
              return this.i.Controller.getIndex();
            },
          },
        ]),
        i
      );
    })();
    return (t.defaults = {}), (t.STATES = r), t;
  }),
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = t())
    : "function" == typeof define && define.amd
    ? define(t)
    : ((n = "undefined" != typeof globalThis ? globalThis : n || self).Splide =
        t());
//# sourceMappingURL=splide.min.js.map
