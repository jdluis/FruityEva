module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: { //se pondria la etiqueta que usa tailwind-default
        primary:'#FF6363', //aqui la nueva declaracion que queremos incorporarle
        secondary: {
          100:'#E2E2D5', 
          200: '#888883',
        }
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
