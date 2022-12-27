/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            transitionProperty: {
                'parallax': 'top, left, right, bottom, opacity ',
            }
        },
    },
    plugins: [],
}
