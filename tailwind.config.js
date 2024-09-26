/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'inknut': ["Inknut Antiqua", 'serif'],
        'spartan': ["League Spartan", 'sans-serif'],
      },
      backgroundImage: {
        'bg1': "url('/img/bg1.png')",
        'bg2': "url('/img/bg2.png')",
        'bgPutih': "url('/img/bgPutih.png')",
        'breakfast1': "url('/img/breakfast.png')",
        'kopiTransparan': "url('/img/kopiTransparan.png')",
      },
      TextStrokeWidth: {
        '1' : '1px',
        '2' : '2px'
      },
      TextStrokeColor: {
          coklat : '#956448'
      },
      borderRadius: {
        '110': '110px', // Nilai custom rounded 110px
      },
    },
  },
  plugins: [],
}

