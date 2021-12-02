module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: { //se pondria la etiqueta que usa tailwind-default
        primary: '#FF6363',
        secondary: {
          100:'#E2E2D5',
          200:'#888883',
        },
        palette: {
          one:'#830A1E',
          two:'#DE2647',
          three:'#F3593B',
          four:'#F19B3E',
          five:'#F3BD62',
        },
      },
      fontFamily: {
        textPrimary: ['Ubuntu'],
        textPrimary: ['Lobster']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
