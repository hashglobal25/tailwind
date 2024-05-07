<?php  get_header('shop'); ?>

<?php
if ( is_singular( 'product' ) ) {
    ?>

    <div class="bg-gradient-to-b from-blue-900 via-blue-700 mb-72 to-blue-500 px-6 sm:py-20 py-10 font-[sans-serif]">
      <div class="max-w-screen-xl mx-auto text-center text-white">
        <h1 class="text-5xl max-sm:text-3xl font-extrabold leading-tight mb-4"><?php echo get_the_title(); ?></h1>
        <p class="text-lg mb-8">Experience excellence like never before with our exclusive products and services.</p>
      </div>
    </div>
    <?php 
    // Single product page
    echo '<div class = "container mx-auto text-white single-product-css">';
      woocommerce_content();
    echo '</div>';
} else {
    // Other WooCommerce pages (e.g., shop, cart, checkout)
    ?>
<div id="primary" class="content-area">
            <div class="bg-gradient-to-b from-blue-900 mb-72 via-blue-700 to-blue-500 px-6 sm:py-20 py-10 font-[sans-serif]">
      <div class="max-w-screen-xl mx-auto text-center text-white">
        <h1 class="text-5xl max-sm:text-3xl font-extrabold leading-tight mb-4">Shop</h1>
        <p class="text-lg mb-8">Experience excellence like never before with our exclusive products and services.</p>
      </div>
    </div>

        <main id="main" class="container mx-auto shop-page cart-page" role="main">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8"> <!-- Container with left and right margin -->
                <?php woocommerce_content(); ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php
}

get_footer('shop'); ?>