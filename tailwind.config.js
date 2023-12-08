import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
            extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                '10xl': '10rem',
                '11xl': '11rem',
                '12xl': '12rem',
                '13xl': '13rem',
                '14xl': '14rem',
              },

              backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                'none': 'none',
                '50%': '50%',
                '40%': '40%',
                '35%': '35%',
                '30%': '30%',
              },
              screens: {
                '3xl': '1600px',
                '4xl': '1700px',
                },    
                
        },
    },

    plugins: [forms, typography],
};
