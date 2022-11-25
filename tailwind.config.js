const theme = require('./theme.json');
const greenfield = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: greenfield.colorMapper(greenfield.theme('settings.color.palette', theme)),
            fontSize: greenfield.fontSizeMapper(greenfield.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': greenfield.theme('settings.layout.contentSize', theme),
            'xl': greenfield.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        greenfield.tailwind
    ]
};
