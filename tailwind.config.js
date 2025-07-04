import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
           'accent': '#660066',
        },
        extend: {
            fontFamily: {
                extrabold: ['Montserrat', 'extrabold'],
                light: ['Montserrat', 'light'],
                medium: ['Montserrat', 'medium'],
                regular: ['Montserrat', 'regular']
            },
        },
    },
    plugins: [],
};
