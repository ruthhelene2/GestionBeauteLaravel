/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        primary:'rgb(245 158 11)',
        secondary:{
          100:'#9333ea',
          200:'#2563eb'

        }
      },
      fontSize:{
        pro:'10rem'
      },
      fontFamily:{
        primary:'Nunito',
        secondary:'mapolice',
        third:'paragraphe'
      }
    },
  },
  plugins: [],
}
