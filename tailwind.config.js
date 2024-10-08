/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: ['./resources/**/*.blade.php', './resources/**/*.js' , './storage/framework/views/*.php'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
