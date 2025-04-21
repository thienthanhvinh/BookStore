/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.php", // file php trong view
    "./public/js/**/*.js", // Các file JS
    "./public/css/**/*.css", // Các file CSS
  ],
  safelist: ["bg-red-400", "bg-blue-500", "bg-green-500"],

  theme: {
    extend: {
      animation: {
        "fade-in": "fadeIn 0.5s ease-out forwards",
        "spin-slow": "spin 1.3s linear infinite",
        "spin-slower": "spin 1.5s linear infinite",
      },
      keyframes: {
        fadeIn: {
          "0%": { opacity: "0" },
          "100%": { opacity: "1" },
        },
      },
      colors: {
        formBackground: "#F3F3F7",
        mainColor: "#FA9A41",
        productName: "#353b48",
        productRating: "#ffc107",
        productAuthor: "#7f8c8d",
        mainProduct: "#F3F3F7",
      },
      fontFamily: {
        sans: ["Lato", "sans-serif"],
      },
      boxShadow: {
        mainShadow: "2px 2px 3px #cbced1, 5px 5px 8px 5px #F3F3F7",
      },
    },
  },
  plugins: [
    require('tailwind-scrollbar')({ nocompatible: true }),
  ],
};
