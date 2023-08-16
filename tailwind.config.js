/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'color1' : '#132a13',
            'color2' : '#90a955',
            'color3' : '#ecf39e',
            'color4' : '#31572c',
        }
    },
  },
  plugins: [],
}

