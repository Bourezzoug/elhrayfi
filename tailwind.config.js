/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        '3xl': '0 0 20px -12px #7f7f7fba',
        // box-shadow:  ;
    }
    },
  },
  plugins: [],
}