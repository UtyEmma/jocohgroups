import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import plugin from 'tailwindcss';

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

    plugins: [
        forms, 
        require('@tailwindcss/typography'),
        plugin(function ({ addVariant, e, postcss }) {
            const generateVariant = (variantName, elements) => {
              addVariant(variantName, ({ container, separator }) => {
                elements.forEach(element => {
                  container.walkRules(rule => {
                    const className = rule.selector.slice(1); // remove leading dot
                    rule.selector = `.${e(`${variantName}${separator}${className}`)} > ${element}`;
                  });
                });
              });
            };
      
            generateVariant('highlight', ['em', 'strong', 'a', 'span', 'code', 'blockquote', 'ul', 'ol', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'pre']);
        }),
    ],
};
