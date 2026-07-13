import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: '#061B4F',
                'primary-dark': '#031238',
                'primary-light': '#0B2D73',

                bordeaux: '#5B0005',

                red: '#D90000',
                'red-dark': '#B60000',

                ink: '#111111',
                surface: '#F7F8FA',
            },
        },
    },

    plugins: [],
}
