function _t(n, t) {
  for (var i = 0; i < t.length; i++) {
    var r = t[i];
    (r.enumerable = r.enumerable || !1),
      (r.configurable = !0),
      "value" in r && (r.writable = !0),
      Object.defineProperty(n, r.key, r);
  }
}
/*!
 * Splide.js
 * Version  : 3.0.9
 * License  : MIT
 * Copyright: 2021 Naotoshi Fujita
 */
var n, t;
(n = this),
  (t = function () {
    "use strict";
    var m = "splide",
      a = "data-" + m,
      n = { CREATED: 1, MOUNTED: 2, IDLE: 3, MOVING: 4, DESTROYED: 5 },
      E = 10;
    function _(n) {
      n.length = 0;
    }
    function x(n) {
      return !u(n) && "object" == typeof n;
    }
    function r(n) {
      return Array.isArray(n);
    }
    function z(n) {
      return "string" == typeof n;
    }
    function R(n) {
      return void 0 === n;
    }
    function u(n) {
      return null === n;
    }
    function y(n) {
      return n instanceof HTMLElement;
    }
    function w(n) {
      return r(n) ? n : [n];
    }
    function b(n, t) {
      w(n).forEach(t);
    }
    function k(n, t) {
      return -1 < n.indexOf(t);
    }
    function A(n, t) {
      return n.push.apply(n, w(t)), n;
    }
    var o = Array.prototype;
    function e(n, t, i) {
      return o.slice.call(n, t, i);
    }
    function s(n, t) {
      return e(n).filter(t)[0];
    }
    function L(t, n, i) {
      t &&
        b(n, function (n) {
          n && t.classList[i ? "add" : "remove"](n);
        });
    }
    function S(n, t) {
      L(n, z(t) ? t.split(" ") : t, !0);
    }
    function P(n, t) {
      b(t, n.appendChild.bind(n));
    }
    function M(n, i) {
      b(n, function (n) {
        var t = i.parentNode;
        t && t.insertBefore(n, i);
      });
    }
    function O(n, t) {
      return (n.msMatchesSelector || n.matches).call(n, t);
    }
    function T(n, t) {
      return n
        ? e(n.children).filter(function (n) {
            return O(n, t);
          })
        : [];
    }
    function D(n, t) {
      return t ? T(n, t)[0] : n.firstElementChild;
    }
    function c(n, t) {
      if (n)
        for (var i = Object.keys(n), r = 0; r < i.length; r++) {
          var u = i[r];
          if ("__proto__" !== u && !1 === t(n[u], u)) break;
        }
      return n;
    }
    function F(r) {
      return (
        e(arguments, 1).forEach(function (i) {
          c(i, function (n, t) {
            r[t] = i[t];
          });
        }),
        r
      );
    }
    function l(i, n) {
      return (
        c(n, function (n, t) {
          r(n)
            ? (i[t] = n.slice())
            : x(n)
            ? (i[t] = l(x(i[t]) ? i[t] : {}, n))
            : (i[t] = n);
        }),
        i
      );
    }
    function I(t, n) {
      t &&
        b(n, function (n) {
          t.removeAttribute(n);
        });
    }
    function j(i, n, t) {
      x(n)
        ? c(n, function (n, t) {
            j(i, t, n);
          })
        : u(t)
        ? I(i, n)
        : i.setAttribute(n, String(t));
    }
    function C(n, t, i) {
      n = document.createElement(n);
      return t && (z(t) ? S : j)(n, t), i && P(i, n), n;
    }
    function W(i, n) {
      if (z(n)) return getComputedStyle(i)[n];
      c(n, function (n, t) {
        u(n) || (i.style[t] = "" + n);
      });
    }
    function B(n, t) {
      W(n, { display: t });
    }
    function p(n, t) {
      return n.getAttribute(t);
    }
    function N(n, t) {
      return n && n.classList.contains(t);
    }
    function X(n) {
      return n.getBoundingClientRect();
    }
    function G(n) {
      b(n, function (n) {
        n && n.parentNode && n.parentNode.removeChild(n);
      });
    }
    function H(n) {
      return D(new DOMParser().parseFromString(n, "text/html").body);
    }
    function Y(n, t) {
      n.preventDefault(),
        t && (n.stopPropagation(), n.stopImmediatePropagation());
    }
    function U(n, t) {
      return n && n.querySelector(t);
    }
    function q(n, t) {
      return e(n.querySelectorAll(t));
    }
    function J(n, t) {
      L(n, t, !1);
    }
    function K(n) {
      return z(n) ? n : n ? n + "px" : "";
    }
    function V(n, t) {
      if ((void 0 === t && (t = ""), !n)) throw new Error("[" + m + "] " + t);
    }
    function f(n) {
      setTimeout(n);
    }
    function Q() {}
    function v(n) {
      return requestAnimationFrame(n);
    }
    var Z = Math.min,
      $ = Math.max,
      nn = Math.floor,
      tn = Math.ceil,
      rn = Math.abs;
    function un(n, t, i, r) {
      var u = Z(t, i),
        i = $(t, i);
      return r ? u < n && n < i : u <= n && n <= i;
    }
    function on(n, t, i) {
      var r = Z(t, i),
        i = $(t, i);
      return Z($(r, n), i);
    }
    function en(n) {
      return (0 < n) - (n < 0);
    }
    function cn(t, n) {
      return (
        b(n, function (n) {
          t = t.replace("%s", "" + n);
        }),
        t
      );
    }
    function fn(n) {
      return n < 10 ? "0" + n : "" + n;
    }
    var an = {};
    function d() {
      var o = {};
      function r(n, r) {
        t(n, function (n, t) {
          var i = o[n];
          o[n] =
            i &&
            i.filter(function (n) {
              return n.n ? n.n !== r : r || n.t !== t;
            });
        });
      }
      function t(n, t) {
        w(n)
          .join(" ")
          .split(" ")
          .forEach(function (n) {
            n = n.split(".");
            t(n[0], n[1]);
          });
      }
      return {
        on: function (n, i, r, u) {
          void 0 === u && (u = E),
            t(n, function (n, t) {
              (o[n] = o[n] || []),
                A(o[n], { i: n, r: i, t: t, u: u, n: r }).sort(function (n, t) {
                  return n.u - t.u;
                });
            });
        },
        off: r,
        offBy: function (i) {
          c(o, function (n, t) {
            r(t, i);
          });
        },
        emit: function (n) {
          var t = arguments;
          (o[n] || []).forEach(function (n) {
            n.r.apply(n, e(t, 1));
          });
        },
        destroy: function () {
          o = {};
        },
      };
    }
    var sn = "mounted",
      ln = "move",
      dn = "moved",
      vn = "click",
      hn = "active",
      pn = "inactive",
      gn = "visible",
      mn = "hidden",
      yn = "slide:keydown",
      wn = "refresh",
      _n = "updated",
      bn = "resize",
      xn = "resized",
      kn = "repositioned",
      An = "scrolled",
      h = "destroy",
      g = "lazyload:loaded";
    function Ln(n) {
      var r = n.event,
        u = {},
        o = [];
      function t(n, t, r) {
        e(n, t, function (t, i) {
          o = o.filter(function (n) {
            return (
              !!(n[0] !== t || n[1] !== i || (r && n[2] !== r)) ||
              (t.removeEventListener(i, n[2], n[3]), !1)
            );
          });
        });
      }
      function e(n, t, i) {
        b(n, function (n) {
          n && t.split(" ").forEach(i.bind(null, n));
        });
      }
      function i() {
        (o = o.filter(function (n) {
          return t(n[0], n[1]);
        })),
          r.offBy(u);
      }
      return (
        r.on(h, i, u),
        {
          on: function (n, t, i) {
            r.on(n, t, u, i);
          },
          off: function (n) {
            r.off(n, u);
          },
          emit: r.emit,
          bind: function (n, t, i, r) {
            e(n, t, function (n, t) {
              o.push([n, t, i, r]), n.addEventListener(t, i, r);
            });
          },
          unbind: t,
          destroy: i,
        }
      );
    }
    function Sn(t, i, r, u) {
      var o,
        n,
        e = Date.now,
        c = 0,
        f = !0,
        a = 0;
      function s() {
        if (!f) {
          var n = e() - o;
          if (
            (t <= n ? ((c = 1), (o = e())) : (c = n / t),
            r && r(c),
            1 === c && (i(), u && ++a >= u))
          )
            return l();
          v(s);
        }
      }
      function l() {
        f = !0;
      }
      function d() {
        cancelAnimationFrame(n), (f = !(n = c = 0));
      }
      return {
        start: function (n) {
          n || d(), (o = e() - (n ? c * t : 0)), (f = !1), v(s);
        },
        rewind: function () {
          (o = e()), (c = 0), r && r(c);
        },
        pause: l,
        cancel: d,
        isPaused: function () {
          return f;
        },
      };
    }
    function En(n) {
      var t = n;
      return {
        set: function (n) {
          t = n;
        },
        is: function (n) {
          return k(w(n), t);
        },
      };
    }
    function zn(i, r) {
      var u;
      return function () {
        var n = arguments,
          t = this;
        u ||
          (u = Sn(
            r || 0,
            function () {
              i.apply(t, n), (u = null);
            },
            null,
            1
          )).start();
      };
    }
    var Rn = {
      marginRight: ["marginBottom", "marginLeft"],
      autoWidth: ["autoHeight"],
      fixedWidth: ["fixedHeight"],
      paddingLeft: ["paddingTop", "paddingRight"],
      paddingRight: ["paddingBottom", "paddingLeft"],
      width: ["height"],
      left: ["top", "right"],
      right: ["bottom", "left"],
      x: ["y"],
      X: ["Y"],
      Y: ["X"],
      ArrowLeft: ["ArrowUp", "ArrowRight"],
      ArrowRight: ["ArrowDown", "ArrowLeft"],
    };
    var Pn = m,
      Mn = m + "__slider",
      On = m + "__track",
      Tn = m + "__list",
      Dn = m + "__slide",
      Fn = Dn + "--clone",
      In = Dn + "__container",
      jn = m + "__arrows",
      t = m + "__arrow",
      Cn = t + "--prev",
      Wn = t + "--next",
      i = m + "__pagination",
      Bn = m + "__progress",
      Nn = Bn + "__bar",
      Xn = m + "__autoplay",
      Gn = m + "__play",
      Hn = m + "__pause",
      Yn = "is-active",
      Un = "is-prev",
      qn = "is-next",
      Jn = "is-visible",
      Kn = "is-loading",
      Vn = [Yn, Jn, Un, qn, Kn];
    var Qn = "role",
      Zn = "aria-controls",
      $n = "aria-current",
      nt = "aria-label",
      tt = "aria-hidden",
      it = "tabindex",
      rt = "aria-orientation",
      ut = [Qn, Zn, $n, nt, tt, rt, it, "disabled"],
      ot = "slide",
      et = "loop",
      ct = "fade";
    function ft(u, r, i, o) {
      var e,
        n = Ln(u),
        c = n.on,
        f = n.emit,
        a = n.bind,
        t = n.destroy,
        s = u.Components,
        l = u.root,
        d = u.options,
        v = d.isNavigation,
        h = d.updateOnMove,
        p = s.Direction.resolve,
        g = -1 < i,
        m = D(o, "." + In),
        y = d.focusableNodes && q(o, d.focusableNodes);
      function w() {
        var n;
        e ||
          ((n = u.index),
          _.call(this, b()),
          function (n) {
            var t = !n && !b();
            j(o, tt, t || null),
              j(o, it, !t && d.slideFocus ? 0 : null),
              y &&
                y.forEach(function (n) {
                  j(n, it, t ? -1 : null);
                });
            n !== N(o, Jn) && (L(o, Jn, n), f(n ? gn : mn, this));
          }.call(
            this,
            (function () {
              if (u.is(ct)) return b();
              var n = X(s.Elements.track),
                t = X(o),
                i = p("left"),
                r = p("right");
              return nn(n[i]) <= tn(t[i]) && nn(t[r]) <= tn(n[r]);
            })()
          ),
          L(o, Un, r === n - 1),
          L(o, qn, r === n + 1));
      }
      function _(n) {
        n !== N(o, Yn) &&
          (L(o, Yn, n), v && j(o, $n, n || null), f(n ? hn : pn, this));
      }
      function b() {
        return u.index === r;
      }
      return {
        index: r,
        slideIndex: i,
        slide: o,
        container: m,
        isClone: g,
        mount: function () {
          var t = this;
          !(function () {
            g || (o.id = l.id + "-slide" + fn(r + 1));
            {
              var n, t;
              v &&
                ((t = g ? i : r),
                (n = cn(d.i18n.slideX, t + 1)),
                (t = u.splides
                  .map(function (n) {
                    return n.root.id;
                  })
                  .join(" ")),
                j(o, nt, n),
                j(o, Zn, t),
                j(o, Qn, "menuitem"));
            }
          })(),
            a(o, "click keydown", function (n) {
              f("click" === n.type ? vn : yn, t, n);
            }),
            c([wn, kn, dn, An], w.bind(this)),
            h &&
              c(
                ln,
                function (n, t, i) {
                  e || (w.call(this), i === r && _.call(this, !0));
                }.bind(this)
              );
        },
        destroy: function () {
          (e = !0), t(), J(o, Vn), I(o, ut);
        },
        rule: function (n, t, i) {
          (i = "#" + o.id + (m && i ? " > ." + In : "")), s.Style.rule(i, n, t);
        },
        isWithin: function (n, t) {
          return (
            (n = rn(n - r)), (n = !u.is(ot) && !g ? Z(n, u.length - n) : n) <= t
          );
        },
      };
    }
    var at = "touchmove mousemove",
      st = "touchend touchcancel mouseup";
    var lt = ["Left", "Right", "Up", "Down"];
    var dt = a + "-lazy",
      vt = dt + "-srcset",
      ht = "[" + dt + "], [" + vt + "]";
    var pt = [" ", "Enter", "Spacebar"];
    var gt = Object.freeze({
        __proto__: null,
        Options: function (t, n, r) {
          var u,
            o,
            i,
            e = zn(f);
          function c(n) {
            n && removeEventListener("resize", e);
          }
          function f() {
            var n =
              s(o, function (n) {
                return n[1].matches;
              }) || [];
            n[0] !== i &&
              (function (n) {
                n = r.breakpoints[n] || u;
                n.destroy
                  ? ((t.options = u), t.destroy("completely" === n.destroy))
                  : (t.state.is(5) && (c(!0), t.mount()), (t.options = n));
              })((i = n[0]));
          }
          return {
            setup: function () {
              try {
                l(r, JSON.parse(p(t.root, a)));
              } catch (n) {
                V(!1, n.message);
              }
              u = l({}, r);
              var i,
                n = r.breakpoints;
              n &&
                ((i = "min" === r.mediaQuery),
                (o = Object.keys(n)
                  .sort(function (n, t) {
                    return i ? +t - +n : +n - +t;
                  })
                  .map(function (n) {
                    return [
                      n,
                      matchMedia(
                        "(" + (i ? "min" : "max") + "-width:" + n + "px)"
                      ),
                    ];
                  })),
                f());
            },
            mount: function () {
              o && addEventListener("resize", e);
            },
            destroy: c,
          };
        },
        Direction: function (n, t, r) {
          return {
            resolve: function (n, t) {
              var i = r.direction;
              return Rn[n]["rtl" !== i || t ? ("ttb" === i ? 0 : -1) : 1] || n;
            },
            orient: function (n) {
              return n * ("rtl" === r.direction ? 1 : -1);
            },
          };
        },
        Elements: function (n, t, i) {
          var r,
            u,
            o,
            e,
            c = Ln(n).on,
            f = n.root,
            a = {},
            s = [];
          function l() {
            var n;
            !(function () {
              (u = D(f, "." + Mn)),
                (o = U(f, "." + On)),
                (e = D(o, "." + Tn)),
                V(o && e, "A track/list element is missing."),
                A(s, T(e, "." + Dn + ":not(." + Fn + ")"));
              var n = p("." + Xn),
                t = p("." + jn);
              F(a, {
                root: f,
                slider: u,
                track: o,
                list: e,
                slides: s,
                arrows: t,
                autoplay: n,
                prev: U(t, "." + Cn),
                next: U(t, "." + Wn),
                bar: U(p("." + Bn), "." + Nn),
                play: U(n, "." + Gn),
                pause: U(n, "." + Hn),
              });
            })(),
              (n =
                f.id ||
                (function (n) {
                  return "" + n + fn((an[n] = (an[n] || 0) + 1));
                })(m)),
              (f.id = n),
              (o.id = o.id || n + "-track"),
              (e.id = e.id || n + "-list"),
              S(f, (r = g()));
          }
          function d() {
            _(s), J(f, r);
          }
          function v() {
            d(), l();
          }
          function h() {
            J(f, r), S(f, (r = g()));
          }
          function p(n) {
            return D(f, n) || D(u, n);
          }
          function g() {
            return [
              Pn + "--" + i.type,
              Pn + "--" + i.direction,
              i.drag && Pn + "--draggable",
              i.isNavigation && Pn + "--nav",
              Yn,
            ];
          }
          return F(a, {
            setup: l,
            mount: function () {
              c(wn, v, E - 2), c(_n, h);
            },
            destroy: d,
          });
        },
        Style: function () {
          var n, u;
          function r(t, n, i) {
            var r = u.cssRules,
              r =
                s(r, function (n) {
                  return o(n) && n.selectorText === t;
                }) || r[u.insertRule(t + "{}", 0)];
            !o(r) || ((r = r.style)[n] !== (i = "" + i) && (r[n] = i));
          }
          function o(n) {
            return n instanceof CSSStyleRule;
          }
          return {
            mount: function () {
              (n = C("style", {}, document.head)), (u = n.sheet);
            },
            destroy: function () {
              G(n), (u = null);
            },
            rule: r,
            ruleBy: function (n, t, i) {
              r("#" + (y(n) ? n.id : n), t, i);
            },
          };
        },
        Slides: function (r, u, o) {
          var n = Ln(r),
            t = n.on,
            e = n.emit,
            c = n.bind,
            f = (n = u.Elements).slides,
            a = n.list,
            s = [];
          function i() {
            f.forEach(function (n, t) {
              v(n, t, -1);
            });
          }
          function l() {
            p(function (n) {
              n.destroy();
            }),
              _(s);
          }
          function d() {
            l(), i();
          }
          function v(n, t, i) {
            n = ft(r, t, i, n);
            n.mount(), s.push(n);
          }
          function h(n) {
            return n
              ? g(function (n) {
                  return !n.isClone;
                })
              : s;
          }
          function p(n, t) {
            h(t).forEach(n);
          }
          function g(t) {
            return s.filter(
              "function" == typeof t
                ? t
                : function (n) {
                    return z(t) ? O(n.slide, t) : k(w(t), n.index);
                  }
            );
          }
          return {
            mount: function () {
              i(), t(wn, d);
            },
            destroy: l,
            register: v,
            get: h,
            getIn: function (n) {
              var t = u.Controller,
                i = t.toIndex(n),
                r = t.hasFocus() ? 1 : o.perPage;
              return g(function (n) {
                return un(n.index, i, i + r - 1);
              });
            },
            getAt: function (n) {
              return g(n)[0];
            },
            add: function (n, u) {
              b(n, function (n) {
                var t, i, r;
                y((n = z(n) ? H(n) : n)) &&
                  ((t = f[u]) ? M(n, t) : P(a, n),
                  S(n, o.classes.slide),
                  (n = n),
                  (i = e.bind(null, bn)),
                  (n = q(n, "img")),
                  (r = n.length)
                    ? n.forEach(function (n) {
                        c(n, "load error", function () {
                          --r || i();
                        });
                      })
                    : i());
              }),
                e(wn);
            },
            remove: function (n) {
              G(
                g(n).map(function (n) {
                  return n.slide;
                })
              ),
                e(wn);
            },
            forEach: p,
            filter: g,
            rule: function (t, i, r) {
              p(function (n) {
                n.rule(t, i, r);
              });
            },
            getLength: function (n) {
              return (n ? f : s).length;
            },
            isEnough: function () {
              return s.length > o.perPage;
            },
          };
        },
        Clones: function (c, n, f) {
          var t,
            i = Ln(c),
            r = i.on,
            u = i.emit,
            a = n.Elements,
            s = n.Slides,
            o = n.Direction.resolve,
            l = [];
          function e() {
            (t = p()) &&
              (function (u) {
                var o = s.get().slice(),
                  e = o.length;
                if (e) {
                  for (; o.length < u; ) A(o, o);
                  A(o.slice(-u), o.slice(0, u)).forEach(function (n, t) {
                    var i = t < u,
                      r = (function (n, t) {
                        n = n.cloneNode(!0);
                        return (
                          S(n, f.classes.clone),
                          (n.id = c.root.id + "-clone" + fn(t + 1)),
                          n
                        );
                      })(n.slide, t);
                    i ? M(r, o[0].slide) : P(a.list, r),
                      A(l, r),
                      s.register(r, t - u + (i ? 0 : e), n.index);
                  });
                }
              })(t);
          }
          function d() {
            G(l), _(l);
          }
          function v() {
            d(), e();
          }
          function h() {
            t !== p() && u(wn);
          }
          function p() {
            var n,
              t,
              i = f.clones;
            return (
              c.is(et)
                ? i ||
                  ((n = a.list),
                  z((t = f[o("fixedWidth")])) &&
                    ((t = X(
                      (n = C(
                        "div",
                        { style: "width: " + t + "; position: absolute;" },
                        n
                      ))
                    ).width),
                    G(n)),
                  (i =
                    (((t = t) && tn(X(a.track)[o("width")] / t)) ||
                      (f[o("autoWidth")] && c.length) ||
                      f.perPage) * (f.drag ? (f.flickMaxPages || 1) + 1 : 2)))
                : (i = 0),
              i
            );
          }
          return {
            mount: function () {
              e(), r(wn, v), r([_n, bn], h);
            },
            destroy: d,
          };
        },
        Layout: function (n, t, i) {
          var r,
            u = Ln(n),
            o = u.on,
            e = u.bind,
            c = u.emit,
            f = t.Slides,
            a = t.Style.ruleBy,
            s = t.Direction.resolve,
            l = (t = t.Elements).track,
            d = t.list,
            v = f.getAt;
          function h() {
            (r = "ttb" === i.direction),
              a(n.root, "maxWidth", K(i.width)),
              a(l, s("paddingLeft"), m(!1)),
              a(l, s("paddingRight"), m(!0)),
              f.rule(s("marginRight"), K(i.gap)),
              f.rule(
                "width",
                i.autoWidth ? "" : K(i.fixedWidth) || (r ? "" : w())
              ),
              g(),
              p();
          }
          function p() {
            a(
              l,
              "height",
              (function () {
                var n = "";
                r &&
                  (V((n = y()), "height or heightRatio is missing."),
                  (n = "calc(" + n + " - " + m(!1) + " - " + m(!0) + ")"));
                return n;
              })()
            ),
              i.heightRatio && g(),
              c(xn);
          }
          function g() {
            f.rule(
              "height",
              K(i.fixedHeight) || (r ? (i.autoHeight ? "" : w()) : y()),
              !0
            );
          }
          function m(n) {
            var t = i.padding,
              n = s(n ? "right" : "left", !0);
            return (t && K(t[n] || (x(t) ? 0 : t))) || "0px";
          }
          function y() {
            return K(i.height || X(d).width * i.heightRatio);
          }
          function w() {
            var n = K(i.gap);
            return (
              "calc((100%" +
              (n && " + " + n) +
              ")/" +
              (i.perPage || 1) +
              (n && " - " + n) +
              ")"
            );
          }
          function _(n, t) {
            var i = v(n);
            if (i) {
              (n = X(i.slide)[s("right")]), (i = X(d)[s("left")]);
              return rn(n - i) + (t ? 0 : b());
            }
            return 0;
          }
          function b() {
            var n = v(0);
            return (n && parseFloat(W(n.slide, s("marginRight")))) || 0;
          }
          return {
            mount: function () {
              h(),
                e(window, "resize load", zn(c.bind(this, bn))),
                o([_n, wn], h),
                o(bn, p);
            },
            listSize: function () {
              return X(d)[s("width")];
            },
            slideSize: function (n, t) {
              return (n = v(n || 0))
                ? X(n.slide)[s("width")] + (t ? 0 : b())
                : 0;
            },
            sliderSize: function () {
              return _(n.length - 1, !0) - _(-1, !0);
            },
            totalSize: _,
            getPadding: function (n) {
              return (
                parseFloat(W(l, s("padding" + (n ? "Right" : "Left"), !0))) || 0
              );
            },
          };
        },
        Move: function (c, f, a) {
          var s,
            n = Ln(c),
            t = n.on,
            l = n.emit,
            r = (n = f.Layout).slideSize,
            i = n.getPadding,
            u = n.totalSize,
            o = n.listSize,
            e = n.sliderSize,
            d = (n = f.Direction).resolve,
            v = n.orient,
            h = (n = f.Elements).list,
            p = n.track;
          function g() {
            f.Scroll.cancel(), m(c.index), l(kn);
          }
          function m(n) {
            y(w(n, !0));
          }
          function y(n, t) {
            c.is(ct) ||
              (h.style.transform =
                "translate" +
                d("X") +
                "(" +
                (t
                  ? n
                  : (function (n) {
                      {
                        var t, i;
                        !s &&
                          c.is(et) &&
                          ((i = v(n - _())),
                          (t = k(!1, n) && i < 0),
                          (i = k(!0, n) && 0 < i),
                          (t || i) &&
                            ((t = n - b(i)),
                            (i = e()),
                            (n -= en(t) * i * tn(rn(t) / i))));
                      }
                      return n;
                    })(n)) +
                "px)");
          }
          function w(n, t) {
            var i,
              i = v(
                u(n - 1) -
                  ((i = n),
                  "center" === (n = a.focus)
                    ? (o() - r(i, !0)) / 2
                    : +n * r(i) || 0)
              );
            return t
              ? (function (n) {
                  a.trimSpace && c.is(ot) && (n = on(n, 0, v(e() - o())));
                  return n;
                })(i)
              : i;
          }
          function _() {
            var n = d("left");
            return X(h)[n] - X(p)[n] + v(i(!1));
          }
          function b(n) {
            return w(n ? f.Controller.getEnd() : 0, !!a.trimSpace);
          }
          function x() {
            return !!s;
          }
          function k(n, t) {
            t = R(t) ? _() : t;
            var i = !0 !== n && v(t) < v(b(!1)),
              t = !1 !== n && v(t) > v(b(!0));
            return i || t;
          }
          return {
            mount: function () {
              t([sn, xn, _n, wn], g);
            },
            destroy: function () {
              I(h, "style");
            },
            move: function (n, t, i, r) {
              var u, o, e;
              s ||
                ((u = c.state.set),
                (o = _()),
                (s = (e = n !== t) || a.waitForTransition),
                u(4),
                l(ln, t, i, n),
                f.Transition.start(n, function () {
                  e && m(t),
                    (s = !1),
                    u(3),
                    l(dn, t, i, n),
                    "move" === a.trimSpace && n !== i && o === _()
                      ? f.Controller.go(i < n ? ">" : "<", !1, r)
                      : r && r();
                }));
            },
            jump: m,
            translate: y,
            cancel: function () {
              (s = !1), y(_()), f.Transition.cancel();
            },
            toIndex: function (n) {
              for (
                var t = f.Slides.get(), i = 0, r = 1 / 0, u = 0;
                u < t.length;
                u++
              ) {
                var o = t[u].index,
                  e = rn(w(o, !0) - n);
                if (!(e <= r)) break;
                (r = e), (i = o);
              }
              return i;
            },
            toPosition: w,
            getPosition: _,
            getLimit: b,
            isBusy: x,
            exceededLimit: k,
          };
        },
        Controller: function (e, n, u) {
          var o,
            c,
            f,
            t = Ln(e).on,
            a = n.Move,
            s = a.getPosition,
            l = a.getLimit,
            d = (n = n.Slides).isEnough,
            i = n.getLength,
            v = e.is(et),
            h = u.start || 0,
            p = h;
          function r() {
            (o = i(!0)),
              (c = u.perMove),
              (f = u.perPage),
              (h = on(h, 0, o - 1));
          }
          function g() {
            L(a.toIndex(s()));
          }
          function m(n) {
            return w(!1, n);
          }
          function y(n) {
            return w(!0, n);
          }
          function w(n, t) {
            var i,
              r,
              u = c || S() ? 1 : f,
              o = _(h + u * (n ? -1 : 1), h);
            return -1 !== o ||
              !e.is(ot) ||
              ((i = s()), (r = l(!n)), (u = 1), rn(i - r) < u)
              ? t
                ? o
                : x(o)
              : n
              ? 0
              : b();
          }
          function _(n, t, i) {
            var r;
            return (
              d()
                ? ((r = b()),
                  n < 0 || r < n
                    ? (n =
                        un(0, n, t, !0) || un(r, t, n, !0)
                          ? k(A(n))
                          : v
                          ? c
                            ? n
                            : n < 0
                            ? -(o % f || f)
                            : o
                          : u.rewind
                          ? n < 0
                            ? r
                            : 0
                          : -1)
                    : v ||
                      i ||
                      n === t ||
                      (n = c ? n : k(A(t) + (n < t ? -1 : 1))))
                : (n = -1),
              n
            );
          }
          function b() {
            var n = o - f;
            return (S() || (v && c)) && (n = o - 1), $(n, 0);
          }
          function x(n) {
            return v ? (d() ? (n % o) + (n < 0 ? o : 0) : -1) : n;
          }
          function k(n) {
            return on(S() ? n : f * n, 0, b());
          }
          function A(n) {
            return (
              S() || ((n = un(n, o - f, o - 1) ? o - 1 : n), (n = nn(n / f))), n
            );
          }
          function L(n) {
            n !== h && ((p = h), (h = n));
          }
          function S() {
            return !R(u.focus) || u.isNavigation;
          }
          return {
            mount: function () {
              r(), t([_n, wn], r, E - 1), t(An, g, 0);
            },
            go: function (n, t, i) {
              var r = (function (n) {
                var t = h;
                {
                  var i, r;
                  z(n)
                    ? ((r = n.match(/([+\-<>])(\d+)?/) || []),
                      (i = r[1]),
                      (r = r[2]),
                      "+" === i || "-" === i
                        ? (t = _(h + +("" + i + (+r || 1)), h, !0))
                        : ">" === i
                        ? (t = r ? k(+r) : m(!0))
                        : "<" === i && (t = y(!0)))
                    : (t = v ? on(n, -f, o + f - 1) : on(n, 0, b()));
                }
                return t;
              })(n);
              -1 < (n = x(r)) &&
                !a.isBusy() &&
                (t || n !== h) &&
                (L(n), a.move(r, n, p, i));
            },
            getNext: m,
            getPrev: y,
            getEnd: b,
            setIndex: L,
            getIndex: function (n) {
              return n ? p : h;
            },
            toIndex: k,
            toPage: A,
            hasFocus: S,
          };
        },
        Arrows: function (u, n, i) {
          var r,
            t = Ln(u),
            o = t.on,
            e = t.bind,
            c = t.emit,
            f = i.classes,
            a = i.i18n,
            s = n.Elements,
            l = n.Controller,
            d = s.arrows,
            v = s.prev,
            h = s.next,
            p = {};
          function g() {
            var n, t;
            i.arrows &&
              ((v && h) ||
                ((d = C("div", f.arrows)),
                (v = m(!0)),
                (h = m(!1)),
                (r = !0),
                P(d, [v, h]),
                M(d, D(("slider" === i.arrows && s.slider) || u.root)))),
              v &&
                h &&
                (p.prev
                  ? B(d, !1 === i.arrows ? "none" : "")
                  : ((n = s.track.id),
                    j(v, Zn, n),
                    j(h, Zn, n),
                    (p.prev = v),
                    (p.next = h),
                    (t = l.go),
                    o([sn, dn, _n, wn, An], y),
                    e(h, "click", function () {
                      t(">", !0);
                    }),
                    e(v, "click", function () {
                      t("<", !0);
                    }),
                    c("arrows:mounted", v, h)));
          }
          function m(n) {
            return H(
              '<button class="' +
                f.arrow +
                " " +
                (n ? f.prev : f.next) +
                '" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="' +
                (i.arrowPath ||
                  "m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z") +
                '" />'
            );
          }
          function y() {
            var n = u.index,
              t = l.getPrev(),
              i = l.getNext(),
              r = -1 < t && n < t ? a.last : a.prev,
              n = -1 < i && i < n ? a.first : a.next;
            (v.disabled = t < 0),
              (h.disabled = i < 0),
              j(v, nt, r),
              j(h, nt, n),
              c("arrows:updated", v, h, t, i);
          }
          return {
            arrows: p,
            mount: function () {
              g(), o(_n, g);
            },
            destroy: function () {
              r ? G(d) : (I(v, ut), I(h, ut));
            },
          };
        },
        Autoplay: function (n, t, r) {
          var i,
            u,
            o,
            e = Ln(n),
            c = e.on,
            f = e.bind,
            a = e.emit,
            s = t.Elements,
            l = Sn(r.interval, n.go.bind(n, ">"), function (n) {
              var t = s.bar;
              t && W(t, { width: 100 * n + "%" });
              a("autoplay:playing", n);
            }),
            d = l.isPaused;
          function v(n) {
            var t = n ? "pause" : "play",
              i = s[t];
            i &&
              (j(i, Zn, s.track.id),
              j(i, nt, r.i18n[t]),
              f(i, "click", n ? p : h));
          }
          function h() {
            d() &&
              t.Slides.isEnough() &&
              (l.start(!r.resetProgress), (u = i = o = !1), a("autoplay:play"));
          }
          function p(n) {
            void 0 === n && (n = !0),
              d() || (l.pause(), a("autoplay:pause")),
              (o = n);
          }
          function g() {
            o || (i || u ? p(!1) : h());
          }
          return {
            mount: function () {
              var n = r.autoplay;
              n &&
                (v(!0),
                v(!1),
                (function () {
                  var n = s.root;
                  r.pauseOnHover &&
                    f(n, "mouseenter mouseleave", function (n) {
                      (i = "mouseenter" === n.type), g();
                    });
                  r.pauseOnFocus &&
                    f(n, "focusin focusout", function (n) {
                      (u = "focusin" === n.type), g();
                    });
                  c([ln, "scroll", wn], l.rewind);
                })(),
                "pause" !== n && h());
            },
            destroy: l.cancel,
            play: h,
            pause: p,
            isPaused: d,
          };
        },
        Cover: function (n, t, i) {
          var r = Ln(n).on;
          function u(i) {
            t.Slides.forEach(function (n) {
              var t = D(n.container || n.slide, "img");
              t && t.src && o(i, t, n);
            });
          }
          function o(n, t, i) {
            i.rule(
              "background",
              n ? 'center/cover no-repeat url("' + t.src + '")' : "",
              !0
            ),
              B(t, n ? "none" : "");
          }
          return {
            mount: function () {
              i.cover &&
                (r(g, function (n, t) {
                  o(!0, n, t);
                }),
                r([sn, _n, wn], u.bind(null, !0)));
            },
            destroy: function () {
              u(!1);
            },
          };
        },
        Scroll: function (c, n, f) {
          var i,
            t = Ln(c),
            r = t.on,
            a = t.emit,
            s = n.Move,
            l = s.getPosition,
            d = s.getLimit,
            v = s.exceededLimit;
          function h(r, n, u) {
            var t,
              o = l(),
              e = 1;
            (n = n || ((t = rn(r - o)), $(t / 1.5, 800))),
              g(),
              (i = Sn(
                n,
                p,
                function (n) {
                  var t = l(),
                    i =
                      (o +
                        (r - o) *
                          ((i = n),
                          (n = f.easingFunc) ? n(i) : 1 - Math.pow(1 - i, 4)) -
                        l()) *
                      e;
                  s.translate(t + i),
                    c.is(ot) &&
                      !u &&
                      v() &&
                      ((e *= 0.6),
                      rn(i) < 10 && ((i = v(!1)), h(d(!i), 600, !0)));
                },
                1
              )),
              a("scroll"),
              i.start();
          }
          function p() {
            a(An);
          }
          function g() {
            i && i.cancel();
          }
          function u() {
            i && !i.isPaused() && (g(), p());
          }
          return {
            mount: function () {
              r(ln, g), r([_n, wn], u);
            },
            destroy: g,
            scroll: h,
            cancel: u,
          };
        },
        Drag: function (r, u, o) {
          var e,
            c,
            f,
            a,
            s,
            l,
            d,
            i,
            v,
            n = Ln(r),
            t = n.on,
            h = n.emit,
            p = n.bind,
            g = n.unbind,
            m = u.Move,
            y = u.Scroll,
            w = u.Controller,
            _ = u.Elements.track,
            b = (n = u.Direction).resolve,
            x = n.orient,
            k = m.getPosition,
            A = m.exceededLimit,
            L = { passive: !1, capture: !0 },
            S = r.is(ot),
            E = !1;
          function z() {
            var n = o.drag;
            C(!n), (s = "free" === n);
          }
          function R(n) {
            var t;
            i ||
              (!(t = I(n)) && n.button) ||
              (m.isBusy()
                ? Y(n, !0)
                : ((v = t ? _ : window),
                  (a = f = null),
                  (d = !1),
                  p(v, at, P, L),
                  p(v, st, M, L),
                  m.cancel(),
                  y.cancel(),
                  O(n)));
          }
          function P(n) {
            var t, i;
            a || ((d = !0), h("drag")),
              (a = n).cancelable &&
                (l
                  ? ((t = 200 < j(n) - j(c)),
                    (i = E !== (E = A())),
                    (t || i) && O(n),
                    m.translate(e + (F(n) - F(c)) / (E && S ? 5 : 1)),
                    h("dragging"),
                    Y(n))
                  : ((i = o.dragMinThreshold || 10),
                    (l = !I(n) || rn(F(n) - F(c)) > i),
                    D() && Y(n)));
          }
          function M(n) {
            var t, i;
            g(v, at, P),
              g(v, st, M),
              a &&
                ((l || (n.cancelable && D())) &&
                  ((t = (function (n) {
                    if (r.is(et) || !E) {
                      var t = (c === a && f) || c,
                        i = F(a) - F(t),
                        t = j(n) - j(t),
                        n = j(n) - j(a) < 200;
                      if (t && n) return i / t;
                    }
                    return 0;
                  })(n)),
                  (i = t),
                  (i =
                    k() +
                    en(i) *
                      Z(
                        rn(i) * (o.flickPower || 600),
                        s ? 1 / 0 : u.Layout.listSize() * (o.flickMaxPages || 1)
                      )),
                  s
                    ? y.scroll(i)
                    : r.is(ct)
                    ? w.go(r.index + x(en(t)))
                    : w.go(
                        (function (n) {
                          n = m.toIndex(n);
                          return S ? on(n, 0, w.getEnd()) : n;
                        })(i),
                        !0
                      ),
                  Y(n)),
                h("dragged")),
              (l = !1);
          }
          function O(n) {
            (f = c), (c = n), (e = k());
          }
          function T(n) {
            !i && d && Y(n, !0);
          }
          function D() {
            var n = rn(F(a) - F(c));
            return rn(F(a, !0) - F(c, !0)) < n;
          }
          function F(n, t) {
            return (I(n) ? n.touches[0] : n)["page" + b(t ? "Y" : "X")];
          }
          function I(n) {
            return "undefined" != typeof TouchEvent && n instanceof TouchEvent;
          }
          function j(n) {
            return n.timeStamp;
          }
          function C(n) {
            i = n;
          }
          return {
            mount: function () {
              p(_, at, Q, L),
                p(_, st, Q, L),
                p(_, "touchstart mousedown", R, L),
                p(_, "click", T, { capture: !0 }),
                t([sn, _n], z);
            },
            disable: C,
          };
        },
        Keyboard: function (t, n, i) {
          var r,
            u = Ln(t),
            o = u.on,
            e = u.bind,
            c = u.unbind,
            f = n.Elements.root,
            a = n.Direction.resolve;
          function s() {
            var n = i.keyboard,
              n = void 0 === n ? "global" : n;
            n &&
              ("focused" === n ? j((r = f), it, 0) : (r = window),
              e(r, "keydown", d));
          }
          function l() {
            c(r, "keydown"), y(r) && I(r, it);
          }
          function d(n) {
            (n = n.key), (n = k(lt, n) ? "Arrow" + n : n);
            n === a("ArrowLeft")
              ? t.go("<")
              : n === a("ArrowRight") && t.go(">");
          }
          return {
            mount: function () {
              s(),
                o(_n, function () {
                  l(), s();
                });
            },
            destroy: l,
          };
        },
        LazyLoad: function (t, n, o) {
          var i = Ln(t),
            r = i.on,
            u = i.off,
            e = i.bind,
            c = i.emit,
            f = "sequential" === o.lazyLoad,
            a = [],
            s = 0;
          function l() {
            (s = 0), (a = []);
          }
          function d() {
            (a = a.filter(function (n) {
              return (
                !n.o.isWithin(
                  t.index,
                  o.perPage * ((o.preloadPages || 1) + 1)
                ) || v(n)
              );
            })).length || u(dn);
          }
          function v(t) {
            var i = t.e;
            S(t.o.slide, Kn),
              e(i, "load error", function (n) {
                !(function (n, t) {
                  var i = n.o;
                  J(i.slide, Kn),
                    t || (G(n.c), B(n.e, ""), c(g, n.e, i), c(bn));
                  f && h();
                })(t, "error" === n.type);
              }),
              ["src", "srcset"].forEach(function (n) {
                t[n] && (j(i, n, t[n]), I(i, "src" === n ? dt : vt));
              });
          }
          function h() {
            s < a.length && v(a[s++]);
          }
          return {
            mount: function () {
              o.lazyLoad &&
                (r([sn, wn], function () {
                  l(),
                    n.Slides.forEach(function (u) {
                      q(u.slide, ht).forEach(function (n) {
                        var t,
                          i = p(n, dt),
                          r = p(n, vt);
                        (i === n.src && r === n.srcset) ||
                          (j(
                            (t = C("span", o.classes.spinner, n.parentElement)),
                            Qn,
                            "presentation"
                          ),
                          a.push({ e: n, o: u, src: i, srcset: r, c: t }),
                          B(n, "none"));
                      });
                    }),
                    f && h();
                }),
                f || r([sn, wn, dn], d));
            },
            destroy: l,
          };
        },
        Pagination: function (l, n, d) {
          var v,
            t = Ln(l),
            i = t.on,
            r = t.emit,
            h = t.bind,
            u = t.unbind,
            p = n.Slides,
            g = n.Elements,
            o = n.Controller,
            m = o.hasFocus,
            e = o.getIndex,
            y = [];
          function c() {
            f(),
              d.pagination &&
                p.isEnough() &&
                ((function () {
                  var n = l.length,
                    t = d.classes,
                    i = d.i18n,
                    r = d.perPage,
                    u = ("slider" === d.pagination && g.slider) || g.root,
                    o = m() ? n : tn(n / r);
                  v = C("ul", t.pagination, u);
                  for (var e = 0; e < o; e++) {
                    var c = C("li", null, v),
                      f = C("button", { class: t.page, type: "button" }, c),
                      a = p.getIn(e).map(function (n) {
                        return n.slide.id;
                      }),
                      s = !m() && 1 < r ? i.pageX : i.slideX;
                    h(f, "click", w.bind(null, e)),
                      j(f, Zn, a.join(" ")),
                      j(f, nt, cn(s, e + 1)),
                      y.push({ li: c, button: f, page: e });
                  }
                })(),
                r("pagination:mounted", { list: v, items: y }, a(l.index)),
                s());
          }
          function f() {
            v &&
              (G(v),
              y.forEach(function (n) {
                u(n.button, "click");
              }),
              _(y),
              (v = null));
          }
          function w(t) {
            o.go(">" + t, !0, function () {
              var n = p.getAt(o.toIndex(t));
              n && n.slide.focus();
            });
          }
          function a(n) {
            return y[o.toPage(n)];
          }
          function s() {
            var n = a(e(!0)),
              t = a(e());
            n && (J(n.button, Yn), I(n.button, $n)),
              t && (S(t.button, Yn), j(t.button, $n, !0)),
              r("pagination:updated", { list: v, items: y }, n, t);
          }
          return {
            items: y,
            mount: function () {
              c(), i([_n, wn], c), i([ln, An], s);
            },
            destroy: f,
            getAt: a,
          };
        },
        Sync: function (i, n, r) {
          var u = i.splides,
            e = n.Elements.list;
          function c() {
            j(e, rt, "ttb" !== r.direction ? "horizontal" : null);
          }
          function f(n) {
            i.go(n.index);
          }
          function a(n, t) {
            k(pt, t.key) && (f(n), Y(t));
          }
          return {
            mount: function () {
              var o, n, t;
              r.isNavigation
                ? ((n = Ln(i)),
                  (t = n.on),
                  (n = n.emit),
                  t(vn, f),
                  t(yn, a),
                  t([sn, _n], c),
                  j(e, Qn, "menu"),
                  n("navigation:mounted", i.splides))
                : ((o = []),
                  u.concat(i).forEach(function (r, n, u) {
                    Ln(r).on(ln, function (t, n, i) {
                      u.forEach(function (n) {
                        n === r ||
                          k(o, r) ||
                          (o.push(n), n.go(n.is(et) ? i : t));
                      }),
                        _(o);
                    });
                  }));
            },
            destroy: function () {
              I(e, ut);
            },
          };
        },
        Wheel: function (i, n, t) {
          var r = Ln(i).bind;
          function u(n) {
            var t = n.deltaY;
            t && (i.go(t < 0 ? "<" : ">"), Y(n));
          }
          return {
            mount: function () {
              t.wheel &&
                r(n.Elements.track, "wheel", u, { passive: !1, capture: !0 });
            },
          };
        },
      }),
      mt = {
        type: "slide",
        speed: 400,
        waitForTransition: !0,
        perPage: 1,
        arrows: !0,
        pagination: !0,
        interval: 5e3,
        pauseOnHover: !0,
        pauseOnFocus: !0,
        resetProgress: !0,
        easing: "cubic-bezier(.42,.65,.27,.99)",
        drag: !0,
        direction: "ltr",
        slideFocus: !0,
        trimSpace: !0,
        focusableNodes: "a, button, textarea, input, select, iframe",
        classes: {
          slide: Dn,
          clone: Fn,
          arrows: jn,
          arrow: t,
          prev: Cn,
          next: Wn,
          pagination: i,
          page: i + "__page",
          spinner: m + "__spinner",
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
        },
      };
    function yt(n, r, t) {
      var i = Ln(n).on,
        u = r.Style.ruleBy;
      return {
        mount: function () {
          i([sn, wn], function () {
            f(function () {
              r.Slides.forEach(function (n) {
                u(
                  n.slide,
                  "transition",
                  "opacity " + t.speed + "ms " + t.easing
                );
              });
            });
          });
        },
        start: function (n, t) {
          var i = r.Elements.track;
          u(i, "height", K(X(i).height)),
            f(function () {
              t(), u(i, "height", "");
            });
        },
        cancel: Q,
      };
    }
    function wt(o, t, e) {
      var c,
        n = Ln(o).bind,
        f = t.Move,
        a = t.Controller,
        i = t.Elements.list;
      function r() {
        s("");
      }
      function s(n) {
        t.Style.ruleBy(i, "transition", n);
      }
      return {
        mount: function () {
          n(i, "transitionend", function (n) {
            n.target === i && c && (r(), c());
          });
        },
        start: function (n, t) {
          var i = f.toPosition(n, !0),
            r = f.getPosition(),
            u = (function (n) {
              var t = e.rewindSpeed;
              if (o.is(ot) && t) {
                var i = a.getIndex(!0),
                  r = a.getEnd();
                if ((0 === i && r <= n) || (r <= i && 0 === n)) return t;
              }
              return e.speed;
            })(n);
          1 <= rn(i - r) && 1 <= u
            ? (s("transform " + u + "ms " + e.easing),
              f.translate(i, !0),
              (c = t))
            : (f.jump(n), t());
        },
        cancel: r,
      };
    }
    i = (function () {
      function i(n, t) {
        (this.event = d()),
          (this.Components = {}),
          (this.state = En(1)),
          (this.splides = []),
          (this.f = {}),
          (this.a = {});
        n = z(n) ? U(document, n) : n;
        V(n, n + " is invalid."),
          (this.root = n),
          l(mt, i.defaults),
          l(l(this.f, mt), t || {});
      }
      var n,
        t,
        r = i.prototype;
      return (
        (r.mount = function (n, t) {
          var i = this,
            r = this.state,
            u = this.Components;
          return (
            V(r.is([1, 5]), "Already mounted!"),
            r.set(1),
            (this.s = u),
            (this.l = t || this.l || (this.is(ct) ? yt : wt)),
            (this.a = n || this.a),
            c(F({}, gt, this.a, { Transition: this.l }), function (n, t) {
              n = n(i, u, i.f);
              (u[t] = n).setup && n.setup();
            }),
            c(u, function (n) {
              n.mount && n.mount();
            }),
            this.emit(sn),
            S(this.root, "is-initialized"),
            r.set(3),
            this.emit("ready"),
            this
          );
        }),
        (r.sync = function (n) {
          return this.splides.push(n), n.splides.push(this), this;
        }),
        (r.go = function (n) {
          return this.s.Controller.go(n), this;
        }),
        (r.on = function (n, t) {
          return this.event.on(n, t, null, 20), this;
        }),
        (r.off = function (n) {
          return this.event.off(n), this;
        }),
        (r.emit = function (n) {
          var t;
          return (
            (t = this.event).emit.apply(t, [n].concat(e(arguments, 1))), this
          );
        }),
        (r.add = function (n, t) {
          return this.s.Slides.add(n, t), this;
        }),
        (r.remove = function (n) {
          return this.s.Slides.remove(n), this;
        }),
        (r.is = function (n) {
          return this.f.type === n;
        }),
        (r.refresh = function () {
          return this.emit(wn), this;
        }),
        (r.destroy = function (t) {
          void 0 === t && (t = !0);
          var n = this.event,
            i = this.state;
          return (
            i.is(1)
              ? n.on("ready", this.destroy.bind(this, t), this)
              : (c(this.s, function (n) {
                  n.destroy && n.destroy(t);
                }),
                n.emit(h),
                n.destroy(),
                _(this.splides),
                i.set(5)),
            this
          );
        }),
        (n = i),
        (r = [
          {
            key: "options",
            get: function () {
              return this.f;
            },
            set: function (n) {
              var t = this.f;
              l(t, n), this.state.is(1) || this.emit(_n, t);
            },
          },
          {
            key: "length",
            get: function () {
              return this.s.Slides.getLength(!0);
            },
          },
          {
            key: "index",
            get: function () {
              return this.s.Controller.getIndex();
            },
          },
        ]) && _t(n.prototype, r),
        t && _t(n, t),
        i
      );
    })();
    return (i.defaults = {}), (i.STATES = n), i;
  }),
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = t())
    : "function" == typeof define && define.amd
    ? define(t)
    : ((n = "undefined" != typeof globalThis ? globalThis : n || self).Splide =
        t());
