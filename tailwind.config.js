
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
   corePlugins: {
    // Disable the base styles to prevent the reset from being applied
    preflight: false,
  },
  theme: {
    extend: {},
  },
  plugins: [],
}
