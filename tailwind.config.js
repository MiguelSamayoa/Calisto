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
                primary: '#3490dc', // Azul
                secondary: '#ffed4a', // Amarillo
                danger: '#e3342f', // Rojo
                success: '#38c172', // Verde
                warning: '#f6993f', // Naranja
                info: '#6cb2eb', // Celeste
                light: '#f8fafc', // Gris claro
                dark: '#2e4343', // Gris oscuro
            },
        },
    },

    plugins: [forms],
};
