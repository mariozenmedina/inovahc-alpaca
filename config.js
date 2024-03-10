module.exports = {
  config: {
    tailwindjs: "./tailwind.config.js",
    port: 9050,
  },
  plugins: {
    typography: false,
    forms: false,
    lineClamp: false,
    containerQueries: false,
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
  extend: {
    colors: {
      inovahc: {
        red: {
          300: "#F38B75",
          500: "#F64943",
          900: "#5E213E",
        },
        green: {
          50: "#f0fdf4",
          100: "#BEEFD9",
          300: "#83EEA7",
          500: "#41CC96",
          600: "#049F84",
          800: "#047474",
          900: "#035656",
          1000: "#1B3E3E",
        },
        blue: {
          50: "#F0F5F8",
          100: "#D3E2EB",
          300: "#83A5D2",
          500: "#5289D7",
          600: "#2966BE",
          800: "#23549A",
          900: "#1A3F74",
        },
        purple: {
          50: "#F2EEFB",
          100: "#CCBCF1",
          300: "#AD92E7",
          500: "#896BC8",
          600: "#7254B1",
          800: "#604B8C",
          900: "#48386A",
        },
      },
    },
    fontFamily: {
      mulish: ["Mulish, sans-serif"],
      poppins: ["Poppins, sans-serif"],
    },
    fontSize: {
      xlarge: ["1.5rem", "2.rem"],
      large: ["1.125rem", "1.75rem"],
      h1: ["3rem", "3.3rem"],
      h2: ["2.25rem", "2.5rem"],
      h3: ["1.75rem", "1.875rem"],
      h4: ["1.5rem", "1.65rem"],
    },
    dropShadow: {
      glowbranco: "0 0 4px rgba(255, 255, 255, 1)",
    },
    screens: {
      sm: "768px",
      md: "992px",
      lg: "1024px",
      xl: "1400px",
    },
    keyframes: {
      fadeIn: {
        "0%": { opacity: 0 },
        "100%": { opacity: 1 },
      },
    },
    animation: {
      fadeIn: "fadeIn .7s ease-out both",
    },
  },
};
