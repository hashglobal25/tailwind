<?php get_header(); ?>

<div class="bg-gradient-to-b from-blue-900 mb-72 via-blue-700 to-blue-500 px-6 sm:py-20 py-10 font-[sans-serif]">
      <div class="max-w-screen-xl mx-auto text-center text-white">
        <h1 class="text-5xl max-sm:text-3xl font-extrabold leading-tight mb-4"><?php echo get_the_title(); ?></h1>
        <p class="text-lg mb-8">Experience excellence like never before with our exclusive products and services.</p>
      </div>
    </div>


    <div class="container mx-auto container-chechkout">
<?php
// Start the loop

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-md rounded-lg p-4 mb-4'); ?>>
            <header class="entry-header">
                <h1 class="entry-title text-2xl font-bold mb-4"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
        <?php
    endwhile;
else :
    ?>
    <p class="text-lg"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php
endif;
?>
</div>
<?php get_footer(); ?>