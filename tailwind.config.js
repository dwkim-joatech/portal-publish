/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./*.php",
    "./src/**/*.{blade.php,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'Noto Sans KR', 'sans-serif'],
        roboto: ['Roboto', 'sans-serif'],
      },
      colors: {
        primary: '#2074e2',
        success: '#39bd28',
        // UI Colors - 자주 사용되는 커스텀 색상
        'gray-dark': '#555',
        'gray-md': '#666',
        'gray-text': '#999',
        'gray-border': '#ddd',
        'gray-light': '#eee',
        'gray-bg': '#f5f5f5',
        'blue-light': '#e3f2fd',
        'blue-text': '#2074e2',
        'blue-dark': '#1a2e5a',
        'red-required': '#e53e3e',
        'black-overlay': 'rgba(0, 0, 0, 0.6)',
        'white-overlay': 'rgba(255, 255, 255, 0.8)',
      },
    },
  },
  plugins: [],
}
