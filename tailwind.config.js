import forms from '@tailwindcss/forms';

// Flowbite
const flowbitePlugin = require('flowbite/plugin')
const scrollbarPlugin =  require('tailwind-scrollbar')

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/flowbite/**/*.js',
    ],
    
    plugins: [forms, flowbitePlugin, scrollbarPlugin],
};
