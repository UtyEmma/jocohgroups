import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/Farms/**/*.vue',
        './resources/js/Shared/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                playfair: ["Playfair Display", 'serif'],
                inter: ["Inter", 'sans'],
            },
            colors: {
                primary: {
                    '50': '#f3f9ec',
                    '100': '#e5f2d5',
                    '200': '#cbe7af',
                    '300': '#a9d680',
                    '400': '#83bf4d',
                    '500': '#6ca83a',
                    '600': '#53852b',
                    '700': '#406625',
                    '800': '#365222',
                    '900': '#2f4720',
                    '950': '#16260d',
                    DEFAULT: '#83bf4d',
                },
                secondary: {
                    '50': '#f0f9f4',
                    '100': '#daf1e3',
                    '200': '#b8e2cc',
                    '300': '#89ccac',
                    '400': '#58af89',
                    '500': '#36936d',
                    '600': '#267557',
                    '700': '#1c5742',
                    '800': '#1a4b39',
                    '900': '#163e30',
                    '950': '#0b231b',
                    DEFAULT: '#1c5742',
                },
                muted: '#5B5B5B',
                accent: {
                    '50': '#fffee7',
                    '100': '#fffec1',
                    '200': '#fff886',
                    '300': '#ffed41',
                    '400': '#ffdc0d',
                    '500': '#f2c200',
                    '600': '#d19500',
                    '700': '#a66a02',
                    '800': '#89530a',
                    '900': '#74440f',
                    '950': '#442304',
                    DEFAULT: '#f2c200'
                },
            },
        },
    },

    plugins: [forms, require('tailwind-scrollbar')],
};
