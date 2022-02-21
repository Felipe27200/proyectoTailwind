module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  // Aquí se añaden las clases que se quieren modificar
  theme: {
    // Para definir fuentes importadas se debe crear este objeto
    // De esta forma se podrán usar en el programa
    fontFamily:{
      // La propiedad es como se identifica la fuente, es decir, su alias
      // dentro del array son las fuentes a las que hace referencia
      'roboto': [ 'Roboto']
    },
    container:{
      center: true,
    },
    extend: {},
  },
  plugins: [],
}
  