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
            backgroundImage: {
                'gradient-to-r': 'linear-gradient(to right, #f0f8ff, #f2f3f4)',
                // You can add more gradient background patterns here
            },
            // You may also want to add colors if you're using custom colors in your gradient
            colors: {
                'custom-blue': '#f0f8ff',
                'custom-indigo': '#f2f3f4',
            },
        },
    },

    plugins: [forms],
};
