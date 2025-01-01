const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'wheelfit': {
                    300: '#E84A4F',
                    400: '#C0363A',
                    500: '#FDE9EA',
                    600: '#ff6666',
                    700: '#ff7777',
                },
                'secondary': {
                    400: '#2E2E2E',
                    500: '#434343',
                }
            },
            fontFamily: {
                'exo': ['Exo', ...defaultTheme.fontFamily.sans],
                'open-sans': ['OpenSans', ...defaultTheme.fontFamily.sans],
                'montserrat': ['Montserrat', ...defaultTheme.fontFamily.sans],
                'rubik': ['Rubik', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                '20': 'repeat(20, minmax(0, 1fr))',
            }
        },
    },
    plugins: [],
}
