module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
    },
    theme: {
        extend: {
            colors: {
                primary: '',
                gray: {
                    '50': '#fafafa',
                    '100': '#f5f5f5',
                    '200': '#eeeeee',
                    '300': '#e0e0e0',
                    '350': '#d6d6d6',
                    '400': '#bdbdbd',
                    '500': '#9e9e9e',
                    '600': '#757575',
                    '700': '#616161',
                    '800': '#424242',
                    '850': '#303030',
                    '900': '#212121',
                },
                bluegray: {
                    '50': '#ECEFF1',
                    '100': '#CFD8DC',
                    '200': '#B0BEC5',
                    '300': '#90A4AE',
                    '400': '#78909C',
                    '500': '#607D8B',
                    '600': '#546E7A',
                    '700': '#455A64',
                    '800': '#37474F',
                    '900': '#263238',
                },
                brown: {
                    '50': '#EFEBE9',
                    '100': '#D7CCC8',
                    '200': '#BCAAA4',
                    '300': '#A1887F',
                    '400': '#8D6E63',
                    '500': '#795548',
                    '600': '#6D4C41',
                    '700': '#5D4037',
                    '800': '#4E342E',
                    '900': '#3E2723',
                },
            }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
    ],
};

