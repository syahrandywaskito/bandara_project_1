/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        roboto: "Roboto",
        montserrat : "Montserrat",
      },
      backgroundImage:{
        'login' : "url('/public/img/bg-image.png')",
      }
    },
  },
  plugins: [],
}


