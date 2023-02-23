const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },

        container: {
            center: true,
            padding: '0rem',
            screens: {
                sm: '600px',
                md: '728px',
                lg: '920px',
                xl: '1140px',
                // '2xl': '1920px'

            },
        } ,

        listStyleType: {
            none: 'none',
            disc: 'disc',
            decimal: 'decimal',
            square: 'square',
            roman: 'upper-roman',
          }

    },

    plugins: [require('@tailwindcss/forms')],
};
