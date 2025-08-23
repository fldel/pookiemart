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
                sans: ['SF Pro Display', 'ui-sans-serif', 'system-ui'],
            },
            colors: {
                brand: {
                    default: '#D6002D',
                    light: '#FF6081',
                    dark: '#9A0222',
                },
            },
        },
    },

    plugins: [forms],
};
