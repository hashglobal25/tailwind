
<!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title('|',TRUE,'right'); bloginfo('name'); ?></title>
<!--    <link rel="shortcut icon" href="/wp-content/uploads/2016/08/cropped-favicon-32x32.png" />-->
</head>
    <?php wp_head(); ?>
    <body <?php body_class(); ?>>
    <header id = "header_bg_color">
          <div class = "header-wrapper ">
      <div class="container mx-auto">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href = "http://tailwind.local/"><img class="w-16 md:w-32 lg:w-48" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="Logo"></a>
        </div>
        
        <!-- Navigation -->
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
              
            <?php
            if (has_nav_menu('header_menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'menu_id' => 'header-menu',
                    'container' => false, // Don't wrap the menu in a container
                    'menu_class' => 'font-medium flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0', // Add class to <ul>
                    'menu_item_class' => 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"', // Add class to <li> and <a>
                ));
            } 
            ?>
      

    </div>

    </div>
</div>
    
          </div>
    </header>
    