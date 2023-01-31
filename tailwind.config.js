/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
    colors: {
      primary: {
        10: "rgb(222, 245, 229)",
        20: "rgb(158, 213, 197)",
        30: "rgb(142, 195, 176)",
      },
      secondary: {
        10: "rgb(230, 229, 163)",
        20: "rgb(169, 175, 126)",
        30: "rgb(125, 143, 105)",
        40: "rgb(85, 113, 83)",
      },
    },
  },
  plugins: [],
};
