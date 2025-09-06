/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        ogray:'#c5c5c5',
        fobg:'#28282894',
        obg:'#2828282e',
        mobg:'#2828286b'
      },
      fontFamily: {
        secret:['Secret Code'],
        disco:['DISCO'],
        Amster:['Amster Style'],
        starf:['Starfighter'],
        sifonn:['Sifonn'],
        graphik:['Graphik Trial']
      },
      spacing: {
        '180':'56rem',
        '170':'50rem',
        '150': '44rem',
        '145':'676px',
        '140':'40rem',
        '130': '36rem',
        '128': '32rem',
        '120': '390px',
        '124': '450px',
        '122': '415px',
        '22': '85px',
        'l99':'99%',
        'l97': '98%',
        'h95':'97%',
        'h90':'93%',
        'tools':'91%',
        'b90':'90%',
        'b89':'87%'
      },
      boxShadow: {
        '5xl': '0px 9px 28px 0px #b9b9b9',
        '3xl':'0px 10px 23px 0px #c7c7c7'
      },
    },
  },
  plugins: [],
}

