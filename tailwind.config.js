/** @type {import('tailwindcss').Config} **/
module.exports = {
  content: [
    "./public/index.php",
    "./site/**/*.{js,php,html}",
    "./src/**/*.{js,php,html}",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
    extend: {
      fontFamily: {
        sans: ["Open_Sans", "sans-serif"],
        serif: ["Merriweather", "serif"],
      },
      fontSize: {
        /* Step -2: 10.24px → 12.80px */
        xs: "clamp(0.64rem, calc(0.58rem + 0.28vw), 0.80rem)",
        /* Step -1: 12.80px → 16.00px */
        sm: "clamp(0.80rem, calc(0.73rem + 0.35vw), 1.00rem)",
        /* Step 0: 16.00px → 20.00px */
        base: "clamp(1.00rem, calc(0.91rem + 0.43vw), 1.25rem)",
        /* Step 1: 20.00px → 25.00px */
        lg: "clamp(1.25rem, calc(1.14rem + 0.54vw), 1.56rem)",
        /* Step 2: 25.00px → 31.25px */
        xl: "clamp(1.56rem, calc(1.43rem + 0.68vw), 1.95rem)",
        /* Step 3: 31.25px → 39.06px */
        "2xl": "clamp(1.95rem, calc(1.78rem + 0.85vw), 2.44rem)",
        /* Step 4: 39.06px → 48.83px */
        "3xl": "clamp(2.44rem, calc(2.23rem + 1.06vw), 3.05rem)",
        /* Step 5: 48.83px → 61.04px */
        "4xl": "clamp(3.05rem, calc(2.79rem + 1.33vw), 3.82rem)",
      },
      colors: {
        bgColor: 'rgb(3, 4, 23)',
        heroColor: 'rgb(53, 243, 166)',
        textColor: 'rgb(245, 245, 245)',
        btnColor: 'rgb(87, 118, 255)',
      },
    },
  },
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
}

