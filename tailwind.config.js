/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily:{
        roboto: "Roboto",
        montserrat : "Montserrat",
      },
      backgroundImage:{
        'login' : "url('/public/img/bg-image.png')",
        'edit-light' : "url('/public/img/gradient-image-light.png')",
        'edit-dark' : "url('/public/img/gradient-image-dark.png')",
      }
    },
  },
  plugins: [],
}


