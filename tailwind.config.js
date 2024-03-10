// Importar opções do config.js
const options = require("./config");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./static/**/*.{html,js,php}",
    "./wordpress/wp-content/themes/inovahc/*.php",
    "./wordpress/wp-content/themes/inovahc/**/*.php",
  ],
  theme: {
    extend: options.extend,
  },
};
