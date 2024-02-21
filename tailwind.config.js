/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors:{
        primary:"#207100",
        secondary:"#207100"
      }
    },
  },
  plugins: [
    require("tailwindcss-animated")
  ],
}

