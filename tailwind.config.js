/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./template-parts*.{php,html,js}", "./woocommerce*.{php,html,js}", "./woocommerce/cart/*.{php,html,js}", "./woocommerce/single-product/*.{php,html,js}"],
  theme: {
    extend: {
    	 spacing: {
        '72': '50px', // Add a custom value
      }
    },
  },
  plugins: [],
}

