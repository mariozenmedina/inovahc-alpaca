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
        gray: {
          400: "#4B5563",
        },
        green: {
          50: "#EFFCFB",
          300: "#83EEA7",
          500: "#41CC96",
          600: "#049F84",
          800: "#047474",
        },
        blue: {
          100: "#D3E2EB",
          300: "#82A5D1",
          800: "#23549A",
        },
        purple: {
          100: "#CCBDF1",
          300: "#AD92E7",
          800: "#604B8C",
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
      inovahc: "0 2px 8px 0px rgba(145, 140, 153, 0.25)",
    },
    backgroundPosition: {
      search: "right bottom",
    },
  },
};
