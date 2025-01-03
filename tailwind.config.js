/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.php",   // file php trong view
    "./public/js/**/*.js",    // Các file JS
    "./public/css/**/*.css",  // Các file CSS
  ],
  safelist: [
    'bg-red-400',
    'bg-blue-500',
    'bg-green-500',
  ],
  
  theme: {
    extend: {
      colors: {
        formBackground: '#F3F3F7',
        mainColor: '#FA9A41',
      },
      fontFamily: {
        sans: ['Lato', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

