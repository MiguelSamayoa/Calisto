import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                danger: '#ff1948', // Rojo
                success: '#6ce9a6', // Verde
                light: '#fff', // Gris claro
                dark: '#2e4343', // Gris oscuro
                matgreen: '#688181',
                lightgreen: '#d4e1e3',
                lightgray: '#ebf3f5',
                transparent: 'transparent',
            },
        },
    },

    plugins: [forms],
};
