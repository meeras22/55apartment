/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            backgroundImage: {
                one: "url('/img/bg-one.png')",
                two: "url('/img/bg-two.png')",
            },
            fontFamily: {
                monserat: ["Montserrat"],
                libre: ["Libre Baskerville"],
            },
            colors: {
                primary: {
                    DEFAULT: "#bba260",
                    DARK: "#120f08",
                    light: "#f7f5ed",
                    50: "#f0eadb",
                    100: "#e8e0c9",
                    200: "#e0d6b8",
                    300: "#d1c194",
                    400: "#c2ac70",
                    500: "#a18845",
                    600: "#7d6a36",
                    700: "#594c26",
                    800: "#362d17",
                    900: "#241e0f",
                },
                secondary: {
                    DEFAULT: "#87CEEB",
                    DARK: "#332500",
                    light: "#fff8e6",
                    50: "#fff1cc",
                    100: "#ffebb3",
                    200: "#ffe499",
                    300: "#ffd666",
                    400: "#ffc933",
                    500: "#ffc21a",
                    600: "#e6a800",
                    700: "#cc9600",
                    800: "#997000",
                    900: "#664b00",
                },
                tertiary: "#0099CC",
                background: {
                    50: "#fafafd",
                    100: "#f0f0f5",
                    dark: "#010101",
                },
                available: "#ddd", // white
                pending: "#ffcc00", // yellow
                unpaid: "#ffcc00", // yellow
                booked: "#008000", // green
                paid: "#008000", // green
                occupied: "#FF0000", // red
                late: "#FFA500", // orange
                dirty: "#A52A2A", // brown
                repair: "#000000",
                Available: "#ddd", // white
                Pending: "#ffcc00", // yellow
                Unpaid: "#ffcc00", // yellow
                Paid: "#008000", // green
                Occupied: "#FF0000", // red
                Late: "#aa3300", // orange
                Dirty: "#A52A2A", // brown
                Repair: "#000000",
                income: "#05cc0a",
                expenditure: "#ee0016",
                Booked: "#008000", // green
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
