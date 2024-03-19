// Importar opções do config.js
const options = require("./config");

/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: [
    "./static/*.{html,js,php}",
    "./static/**/*.{html,js,php}",
    "./wordpress/wp-content/themes/inovahc/*.{html,js,php}",
    "./wordpress/wp-content/themes/inovahc/**/*.{html,js,php}",
  ],
  theme: {
    extend: options.extend,
  },
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
};
