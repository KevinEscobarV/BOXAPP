// const { colors } = require('laravel-mix/src/Log');
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'mustard': {
                    '100': '#FFF8DC',
                    '200': '#FFEEA9',
                    '300': '#FFE782',
                    '400': '#FFDB43',
                    '500': '#FFCE00',
                    '600': '#E0B500',
                    '700': '#856B00',
                    '800': '#504100',
                    '900': '#231C00',
                },
                primary: colors.yellow,
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
