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
            'color1' : '#FFFFFF',
            'color2' : '#457b9d',
            'color3' : '#375F97',
            'color4' : '#1d3557',
            'color5' : '#000000',
            'color6' : '#e63946',
            'color7' : '#ba181b',
        }
    },
  },
  plugins: [],
}

