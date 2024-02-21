/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors:{
        primary:"#cd1f29",
        secondary:"#207100"
      }
    },
  },
  plugins: [
    require("tailwindcss-animated")
  ],
}

