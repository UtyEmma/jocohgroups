import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/Group/**/*.vue',
        './resources/js/Shared/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
				primary: {
					'50': '#f2f8fc',
					'100': '#e2eef7',
					'200': '#cbe2f2',
					'300': '#a7d0e9',
					'400': '#7db7dd',
					'500': '#5697d0',
					'600': '#4b84c5',
					'700': '#4171b4',
					'800': '#3a5d93',
					'900': '#334e75',
					DEFAULT: '#5697d0',
				},
				secondary: '#303030',
				muted: '#5B5B5B'
			},
        },
    },

    plugins: [forms, require('@tailwindcss/typography')],
};
