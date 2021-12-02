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
        textPrimary: ['Sahitya'],
        textSecondary: ['Ubuntu']
      },
      fontSize: {
        h1: ['14rem']
      },
      backgroundImage: {
        'hero-home': "url('https://i.giphy.com/media/XEb90OzfzTduM/giphy.webp')",
        'orange': "url(https://i.giphy.com/media/k7K48NJ7qlko8/giphy.webp)",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
