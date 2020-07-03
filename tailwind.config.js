module.exports = {
  variants: {},
  theme: {
    pagination: theme => ({
      // Customize the color only. (optional)
      color: theme('colors.blue.600'),
    })
  },
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
