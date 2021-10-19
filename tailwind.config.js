const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    mode: "jit",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            sans: ["Barlow Semi Condensed", ...defaultTheme.fontFamily.sans],
        },
        colors:{
            "light-gray":"hsl(0, 0%, 81%)",
            "violet":"hsl(263, 55%, 52%)",
            "grayish-blue":"hsl(210, 46%, 95%)",
            "dark-grayish-blue":"hsl(217, 19%, 35%)",
            "dark-blackish-blue":"hsl(219, 29%, 14%)"
        },
        fontSize:{
            'title': '1.23rem',
            '11px':'11px',
            '13px':'13px',
        },
        screens:{
            'desktop':'1440px'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
