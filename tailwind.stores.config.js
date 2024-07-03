import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/Stores/**/*.vue',
        './resources/js/Shared/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
				primary: {
                    '50': '#fff1f1',
                    '100': '#ffe4e5',
                    '200': '#fecdd1',
                    '300': '#fea3ab',
                    '400': '#fc707e',
                    '500': '#f53e55',
                    '600': '#e21c3e',
                    '700': '#b51031',
                    '800': '#a01133',
                    '900': '#891232',
                    '950': '#4c0516',
					DEFAULT: '#b51031',
				},
				secondary: {
					'50': '#ebf7ff',
                    '100': '#d3ebff',
                    '200': '#b0ddff',
                    '300': '#7acbff',
                    '400': '#3cacff',
                    '500': '#0f84ff',
                    '600': '#005fff',
                    '700': '#0047ff',
                    '800': '#003ad1',
                    '900': '#0437a4',
                    '950': '#08205c',
					DEFAULT: '#08205c',
				},
				muted: '#5B5B5B'
			},
        },
    },

    plugins: [forms],
};
