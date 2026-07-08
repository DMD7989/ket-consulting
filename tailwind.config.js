export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#7b0d0d',
          dark: '#5f0909',
        },
        taupe: '#8d7272',
        surface: '#f7f3f1',
        'surface-soft': '#e7dcdc',
      },
    },
  },
  plugins: [],
};
