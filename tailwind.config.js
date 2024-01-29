import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            gray: {
                dark: "#05010D",
            },
            orange: {
                li1: "#FB8920",
            },
        },
        backgroundImage: {
            "hero-main": "url('/public/images/hero.png')",
            "plan-main": "url('/public/images/figureplans.png')",
        },
    },

    plugins: [forms, typography, require("flowbite/plugin")],
};
