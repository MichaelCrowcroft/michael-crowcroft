const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        colors: {
            gray: colors.neutral,
            teal: colors.teal,
        },
        extend: {
            fontFamily: {
                serif: [
                    'Playfair Display'
                ],
                sans: [
                    'Lato'
                ],
                mono: [
                    'monospace',
                ],
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.gray.800'),
                        a: {
                            color: theme('colors.teal.800'),
                            textDecoration: 'underline',
                        },
                        h1: {
                            fontFamily: theme('fontFamily.serif'),
                        },
                        h2: {
                            fontFamily: theme('fontFamily.serif'),
                        },
                        h3: {
                            fontFamily: theme('fontFamily.serif'),
                        },
                        h4: {
                            fontFamily: theme('fontFamily.serif'),
                        },
                    },
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        function({ addUtilities }) {
            const newUtilities = {
                '.transition-fast': {
                    transition: 'all .2s ease-out',
                },
                '.transition': {
                    transition: 'all .5s ease-out',
                },
            }
            addUtilities(newUtilities)
        }
    ],
    variants: {
        typography: [],
        borderRadius: ['responsive', 'focus'],
        borderWidth: ['responsive', 'active', 'focus'],
        width: ['responsive', 'focus']
    },
};
