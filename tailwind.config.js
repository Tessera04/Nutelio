/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'green-nutelio': "#6B8E23",
        'beige-nutelio': "#F5F5DC",
        'sky-blue-nutelio': "#81C3D9",
        'brown-nutelio': "#904714",
        'beige-dark-nutelio': "#D8D3C0",
      },
      textColor: {
        'green-nutelio': "#6B8E23",
        'beige-nutelio': "#F5F5DC",
        'sky-blue-nutelio': "#81C3D9",
        'brown-nutelio': "#904714",
        'beige-dark-nutelio': "#D8D3C0",
      },
      brightness: {
        25: '.25',
        75: '.75',
      }
    },
  },
  plugins: [
    function ({ addUtilities }) {
      const newUtilities = {
          ".no-scrollbar::-webkit-scrollbar": {
              display: "none",
          },
          ".no-scrollbar": {
              "-ms-overflow-style": "none",
              "scrollbar-width": "none",
          },
      };
      addUtilities(newUtilities);
    },
  ],
}

