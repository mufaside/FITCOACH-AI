/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'dark': {
          'primary': '#0A0E0D',
          'secondary': '#141B19',
          'card': '#1A1F1D',
          'border': '#1F2937',
        },
        'accent': {
          'purple': '#6C5CE7',
          'purple-light': '#7C6FF7',
          'green': '#10B981',
          'blue': '#3B82F6',
        }
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
      borderRadius: {
        'card': '16px',
        'btn': '12px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
