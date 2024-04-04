/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            // 'primary': '#1DA1F2'
            'primary': '#0a2444'
        }
      },
    },
    plugins: [],
  }
