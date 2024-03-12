module.exports = {
  config: {
    tailwindjs: "./tailwind.config.js",
    port: 9050,
  },
  paths: {
    root: "./static/",
    base: "./static/",
    src: {
      css: "./static/src/css",
      js: "./static/src/js",
    },
    build: {
      css: "./static/build/css",
      js: "./static/build/js",
    },
    wordpress: {
      css: "./wordpress/wp-content/themes/inovahc/build/css",
      js: "./wordpress/wp-content/themes/inovahc/build/js",
    },
  },
  content: ["./*.php", "./**/*.php"],
  extend: {
    colors: {
      inovahc: {
        red: {
          300: "#F38B75",
          500: "#F64943",
          900: "#5E213E",
        },
        gray: {
          400: "#4B5563" /* Usado */,
        },
        green: {
          50: "#EFFCFB" /* Usado */,
          100: "#BEEFD9",
          300: "#83EEA7" /* Usado */,
          500: "#41CC96" /* Usado */,
          600: "#049F84",
          800: "#047474" /* Usado */,
          900: "#035656",
          1000: "#1B3E3E",
        },
        blue: {
          50: "#F0F5F8",
          100: "#D3E2EB" /* Usado */,
          300: "#82A5D1" /* Usado */,
          500: "#5289D7",
          600: "#2966BE",
          800: "#23549A" /* Usado */,
          900: "#1A3F74",
        },
        purple: {
          50: "#F2EEFB",
          100: "#CCBDF1" /* Usado */,
          300: "#AD92E7",
          500: "#896BC8",
          600: "#7254B1",
          800: "#604B8C" /* Usado */,
          900: "#48386A",
        },
      },
    },
    typography: ({ theme }) => ({
      inovahc: {
        css: {
          "--tw-prose-headings": theme("colors.inovahc.green[800]"),
          "--tw-prose-body": theme("colors.inovahc.gray[400]"),
          "--tw-prose-pre-code": theme("colors.white"),
          "--tw-prose-pre-bg": theme("colors.inovahc.green[800]"),
          "--tw-prose-links": theme("colors.inovahc.green[800]"),
          "--tw-prose-code": theme("colors.inovahc.green[500]"),
          "--tw-prose-bold": theme("colors.inovahc.green[800]"),
          "--tw-prose-counters": theme("colors.inovahc.green[500]"),
          "--tw-prose-bullets": theme("colors.inovahc.green[500]"),
          "--tw-prose-captions": theme("colors.inovahc.green[500]"),
          "--tw-prose-lead": theme("colors.inovahc.green[500]"),
          "--tw-prose-hr": theme("colors.inovahc.green[500]"),
          "--tw-prose-quotes": theme("colors.inovahc.green[800]"),
          "--tw-prose-quote-borders": theme("colors.inovahc.green[500]"),
        },
      },
    }),
    fontFamily: {
      mulish: ["Mulish, sans-serif"],
      poppins: ["Poppins, sans-serif"],
    },
    fontSize: {
      xsmall: [".631rem"],
    },

    boxShadow: {
      /*      inovahc: "0px 2px 4px rgba(0, 0, 0, 0.2)", */

      inovahc: "0 2px 8px 0px rgba(145, 140, 153, 0.25)",
    },
    screens: {
      /*     sm: "768px",
      md: "992px",
      lg: "1024px",
      xl: "1400px", */
    },
  },
};
